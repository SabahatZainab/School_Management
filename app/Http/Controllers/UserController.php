<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Yajra\DataTables\DataTables;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    { 
        $this->middleware('permission:user-list|user-create|user-edit|user-delete|user-show', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
        $this->middleware('permission:user-show', ['only' => ['show']]);
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = User::select('*');
            $count = $query->count();

            // Apply ordering before offset and limit
            $query->orderBy('created_at', 'DESC');

            $data = $query->offset($request->start)
                ->limit($request->length)
                ->get();

            foreach ($data as $key => $row) {
                $data[$key]['DT_RowIndex'] = $key + 1 + (isset($request->start) ? $request->start : 0);
                $roles = $row->getRoleNames();
                $data[$key]['roleName'] = isset($roles[0]) ? $roles[0] : '-';
                if (isset($row->status) && ($row->status == 'active')) {
                    $data[$key]['status'] = '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Active</span>';
                } elseif (isset($row->status) && ($row->status == 'inactive')) {
                    $data[$key]['status'] = '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Inactive</span>';
                }
                $btn = '';
                if ($this->authorize('user-show')) {
                    $btn .= '<a href="' . url("users/show", $row->id) . '"><i class="fa fa-1x fa-eye text-success mx-1"></i></a>';
                }
                if ($this->authorize('user-edit')) {
                    $btn .= '<a href="' . url("users/edit", $row->id) . '"><i class="fa fa-1x fa-pen-to-square text-black"></i></a>';
                }
                if ($this->authorize('user-delete')) {

                    $btn .= '<a href="#" onclick="deleteByAxios(this,' . "'" . url('users/destroy', $row->id) . "'" . ')"><i class="fa fa-1x fa-trash text-danger mx-1"></i></a>';
                }
                $data[$key]['action'] = $btn;
            }

            $dresponse = [
                "draw" => isset($request->draw) ? $request->draw : 1,
                "input" => [
                    "draw" => isset($request->draw) ? $request->draw : 1,
                    'start' => isset($request->start) ? (int) $request->start : 0,
                    'length' => isset($request->length) ? (int) $request->length : 10,
                ],
                "recordsTotal" => $count,
                "recordsFiltered" => $count,
                "data" => $data
            ];

            return response()->json($dresponse);
        }


        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password',
                'roles' => 'required'
            ]);

            $input = $request->all();
            $input['password'] = Hash::make($input['password']);

            $user = User::create($input);
            $user->assignRole($request->input('roles'));

            return response()->json([
                'success' => true,
                'data' => [$user],
                'status' => 200,
                'message' => 'User created successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'status' => 500,
                'message' => 'Error creating user: ' . $e->getMessage()
            ], 500);
        }
    }
    public function saveData(Request $request, $id)
    {
        // Validate the request
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id, // Ensure unique email, excluding the current user
            'password' => 'nullable', // Allow nullable password
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update user data
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Update password only if a new password is provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Save changes
        $user->save();

        return redirect()->route('users.index')->with('success', 'Profile updated successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.show', compact('user', 'roles', 'userRole'));
    }
    public function profile($id)
    { 
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('profile.user', compact('user', 'roles', 'userRole'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        try {
            $id = $request->id;

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'same:confirm-password',
                'roles' => 'required'
            ]);

            $input = $request->all();

            if (!empty($input['password'])) {
                $input['password'] = Hash::make($input['password']);
            } else {
                $input = Arr::except($input, ['password']);
            }

            $user = User::findOrFail($id);
            $user->update($input);

            DB::table('model_has_roles')->where('model_id', $id)->delete();

            $user->assignRole($request->input('roles'));

            return response()->json([
                'success' => true,
                'data' => ['id' => $id],
                'status' => 200,
                'message' => 'User updated successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'status' => 500,
                'message' => 'Error updating user: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $user = User::findOrFail($id);
            $user->delete();
            // Additional logic after updating the status, if needed 

            return response()->json(['success' => true, 'message' => 'User Deleted Successfully'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {

            return response()->json(['error' => true, 'message' => 'User not found'], 202);
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'message' => 'Failed to update user status'], 422);
        }

    }
}
