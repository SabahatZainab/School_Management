@extends('layouts.app')

@section('content')
<!--wrapper-->
<div class="wrapper">
    <!--start page wrapper -->

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Roles</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Update Role</li>
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
                                <h2 class="mb-4"><b>Update Role</b></h2>
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
                                {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <label for="input42" class="col-sm-3 col-form-label"><strong>Role</strong></label>
                                            <div class="position-relative input-icon">
                                                {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'Update Role')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="input43" class="col-sm-3 col-form-label"><strong>Permission</strong></label>
                                        <div class="col-sm-9">
                                            <div class="position-relative input-icon">
                                                <br/>
                                                @foreach($permission as $value)
                                                    <label>{{ Form::checkbox('permission[]', $value->name, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    {{ $value->name }}</label>
                                                    <br/>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                                <a class="btn btn-danger px-4" href="{{ route('roles.index') }}">Back</a>
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
