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
                    <div class="breadcrumb-title pe-3">User Management</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
							<a class="btn btn-primary" href="{{ route('users.create') }}"> Create New User</a>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Users</h6>
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
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $user)
									<tr>
										<td>{{ ++$i }}</td>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td>
										@if(!empty($user->getRoleNames()))
											@foreach($user->getRoleNames() as $v)
											<label class="badge badge-success" style="color:black;">{{ $v }}</label>
											@endforeach
										@endif
										</td>
										<td>
										<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
										<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
											{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
												{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
											{!! Form::close() !!}
										</td>
									</tr>
 									@endforeach
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
							{!! $data->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        @include('layouts.partials.footer')
    </div>
    <!--end wrapper-->

	<!-- search modal -->
	{{-- @include('layouts.partials.search_modal') --}}
    <!-- end search modal -->



	<!--start switcher-->
	{{-- @include('layouts.partials.switcher') --}}
	<!--end switcher-->


	<!--Scripts_Datatable-->
    @endsection
    @push('page-scripts')
	@include('layouts.partials.datatable')
    @endpush
