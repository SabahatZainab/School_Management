@extends('layouts.app')
@section('content')

<div id="page-container" class="">
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">User Management</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Users
                    </li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                <h3 class="block-title">Create New User</h3>
                </div>
                <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th style="width: 15%;">Roles</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 30%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                        {{-- @dd($user) --}}
                    <tr>
                        <td class="text-center fs-sm">{{ ++$i }}</td>
                        <td class="fw-semibold fs-sm">{{ $user->name }}</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            {{ $user->email }}
                        </td>
                        <td class="d-none d-sm-table-cell fs-sm">
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success" style="color:black;">{{ $v }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td class="d-none d-sm-table-cell">
                            @if(isset($user->status) && ($user->status == 'active'))
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Active</span>
                            @elseif(isset($user->status) && ($user->status == 'inactive'))
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="">
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            {{-- <span class="text-muted fs-sm">5 days ago</span> --}}
                        </td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <td class="text-center fs-sm">2</td>
                        <td class="fw-semibold fs-sm">Brian Cruz</td>
                        <td class="d-none d-sm-table-cell fs-sm">
                        client2<span class="text-muted">@example.com</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                        <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                        </td>
                        <td>
                        <span class="text-muted fs-sm">9 days ago</span>
                        </td>
                    </tr> --}}
                    </tbody>
                </table>
                {!! $data->render() !!}
                </div>
            </div>
            <!-- END Dynamic Table Full -->
        </div>
    </main>
</div>

@endsection
