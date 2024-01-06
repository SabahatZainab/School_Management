@extends('layouts.app')
@section('content')

<!--wrapper-->
<div class="wrapper">
    <!--start page wrapper -->

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Users</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Update User</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <h2 class="mb-4"><b>Update User</b></h2>
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        
                                        </ul>
                                    </div>
                                @endif
                                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                                    <div class="row mb-3">
                                        {{-- <label for="input42" class="col-sm-3 col-form-label">Enter Your Name</label> --}}
                                        <div class="col-sm-4">
                                            <div class="position-relative input-icon">
                                                {!! Form::text('name', null, array('placeholder' => 'Enter Your Name','class' => 'form-control')) !!}
                                                <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-user'></i></span>
                                            </div>
                                        </div>
                                    {{-- </div> --}}
                                    {{-- <div class="row mb-3"> --}}
                                        {{-- <label for="input43" class="col-sm-3 col-form-label">Email Address</label> --}}
                                        <div class="col-sm-4">
                                            <div class="position-relative input-icon">
                                                {!! Form::text('email', null, array('placeholder' => 'Email Address','class' => 'form-control')) !!}
                                                <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-envelope'></i></span>
                                            </div>
                                        </div>
                                    {{-- </div> --}}
                                    {{-- <div class="row mb-3"> --}}
                                        {{-- <label for="input45" class="col-sm-3 col-form-label">Choose Password</label> --}}
                                        <div class="col-sm-4">
                                            <div class="position-relative input-icon">
                                                {!! Form::password('password', array('placeholder' => 'Choose Password','class' => 'form-control')) !!}
                                                <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-lock'></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        {{-- <label for="input45" class="col-sm-3 col-form-label">Confirm Password</label> --}}
                                        <div class="col-sm-4">
                                            <div class="position-relative input-icon">
                                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}                                            <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-lock'></i></span>
                                            </div>
                                        </div>
                                    {{-- </div> --}}
                                    {{-- <div class="row mb-3"> --}}
                                        {{-- <label for="input46" class="col-sm-3 col-form-label">Role</label> --}}
                                        <div class="col-sm-9">
                                            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control select2','multiple')) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                                <a class="btn btn-danger px-4" href="{{ route('users.index') }}">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>

        </div>
    </div>
    <!--end page wrapper -->
</div>

@endsection
@push('page-scripts')
    @include('layouts.partials.select2')
@endpush
