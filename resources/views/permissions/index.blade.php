@extends('layouts.app')
@section('content')

<div id="page-container" class="">
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Permission Management</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Permissions
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
                    <h3 class="block-title">Manage Permissions</h3>
                    <div class="block-options">
                        <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-success" data-bs-toggle="tooltip" title="Create New Permission">
                            <i class="fa fa-fw fa-plus"></i> Create Permission
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Permission</th>
                        <th>Access</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $key => $permission)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>
                            @if(isset($permission->status) && ($permission->status == 'active'))
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Active</span>
                            @elseif(isset($permission->status) && ($permission->status == 'inactive'))
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="">
                            {{-- <a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}">Show</a> --}}
                            {{-- @can('permission-edit') --}}
                            <a class="btn btn-sm btn-alt-secondary" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-fw fa-pencil-alt"></i></a>
                            {{-- @endcan --}}
                            {{-- @can('permission-delete') --}}
                                {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id]]) !!}
                                    {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                                    <button type="submit" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                {!! Form::close() !!}
                            {{-- @endcan --}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $permissions->render() !!}
                </div>
            </div>
            <!-- END Dynamic Table Full -->
        </div>
    </main>
</div>

@endsection
