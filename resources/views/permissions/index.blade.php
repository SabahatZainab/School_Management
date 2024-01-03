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
                        <a class="link-fx" href="javascript:void(0)">Permission Management</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Permissions
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
                <h3 class="block-title">Permissions</h3>
                </div>
                <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Permission</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 30%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $key => $permission)
                    <tr>
                        <td class="text-center fs-sm">{{ ++$i }}</td>
                        <td class="fw-semibold fs-sm">{{ $permission->name }}</td>
                        <td class="d-none d-sm-table-cell">
                            @if(isset($permission->status) && ($permission->status == 'active'))
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Active</span>
                            @elseif(isset($permission->status) && ($permission->status == 'inactive'))
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Inactive</span>
                            @endif
                        </td>
                        <td class="">
                            <a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}">Show</a>
                            {{-- @can('permission-edit') --}}
                            <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                            {{-- @endcan --}}
                            {{-- @can('permission-delete') --}}
                                {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
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
