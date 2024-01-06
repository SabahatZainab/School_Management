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
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <p class="mb-0">
                            {{ $message }}
                        </p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
				@endif

            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Manage Users</h3>
                    <div class="block-options">
                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-success" data-bs-toggle="tooltip" title="Create New User">
                            <i class="fa fa-fw fa-plus"></i> Create User
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;"><i class="far fa-user"></i></th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th style="width: 15%;">Roles</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 30%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                    <tr>
                        <td class="text-center fs-sm"><img class="img-avatar img-avatar48" src="{{asset('assets/media/avatars/avatar6.jpg')}}" alt=""></td>
                        <td class="fw-semibold fs-sm">
                            <a class="" href="{{ route('users.show',$user->id) }}">{{ $user->name }}</a>
                        </td>
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
                            {{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> --}}
                            <a class="btn btn-sm btn-alt-secondary" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-pencil-alt"></i></a>
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                                    <button type="submit" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
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
