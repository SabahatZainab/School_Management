@extends('layouts.app')
@section('content')

<div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Create New User</h3>
    </div>
    <div class="block-content block-content-full">
      <div class="row">
        <div class="col-lg-12 space-y-5">
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
          {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
            @csrf
            <div class = "row g-4">
              <div class="col-4">
                <label for="input42" class="col-sm-4 col-form-label">Name</label>
                {!! Form::text('name', null, array('placeholder' => 'Enter Your Name','class' => 'form-control')) !!}
              </div>
              <div class="col-4">
                <label for="input43" class="col-sm-4 col-form-label">Email</label>
                {!! Form::text('email', null, array('placeholder' => 'Email Address','class' => 'form-control')) !!}
              </div>
              <div class="col-4">
                <label for="input45" class="col-sm-4 col-form-label">Password</label>
                {!! Form::password('password', array('placeholder' => 'Choose Password','class' => 'form-control')) !!}
              </div>
              <div class="col-4">
                <label for="input45" class="col-sm-4 col-form-label">Confirm</label>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
              </div>
              <div class="col-4">
                <label for="input45" class="col-sm-4 col-form-label">Role</label>
                {!! Form::select('roles[]', $roles, [], ['class' => 'form-control select2']) !!}
              </div>
              <div class="col-12 d-flex justify-content-end">
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary px-4">Create</button>
                  <a class="btn btn-alt-danger px-4 ml-2" href="{{ route('users.index') }}">Back</a>
                </div>
              </div>

            </div>
            {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>

@endsection