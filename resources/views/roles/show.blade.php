@extends('layouts.app')
@section('content')

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
                        <li class="breadcrumb-item active" aria-current="page">Role Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">{{ $role->name }}</h4>
                  <hr>
                  <dl class="row">
                    <dt class="col-sm-3">Role Name</dt>
                    <dd class="col-sm-9">{{ $role->name }}</dd>
                  </dl>
                  <dl>
                    <dt class="col-sm-3">Permissions</dt>
                    <br>
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $v)
                            <dd class="col-sm-9">{{ $v->name }},</dd>
                        @endforeach
                    @endif
                    <br>
                    <dd><a class="btn btn-danger px-4" href="{{ route('roles.index') }}">Back</a></dd>
                  </dl>
                  <hr>
                </div>
              </div>
            </div>
            <hr/>
        </div>
    </div>
</div>
@endsection
