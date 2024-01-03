@extends('layouts.app')
@include('layouts.partials.datatable_stylesheet')


@section('content')
    <!--wrapper-->
    <div class="wrapper">
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Permission Management</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Permissions</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
							<a class="btn btn-primary" href="{{ route('permissions.create') }}"> Create New Permission</a>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Permissions</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
							@if ($message = Session::get('success'))
								<div class="alert alert-success">
								<p>{{ $message }}</p>
								</div>
							@endif
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $key => $permission)
									<tr>
										<td>{{ ++$i }}</td>
										<td>{{ $permission->name }}</td>
										<td>
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
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
							{!! $permissions->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        @include('layouts.partials.footer')
    </div>
    <!--end wrapper-->
    @endsection
    @push('page-scripts')
	@include('layouts.partials.datatable')
    @endpush
