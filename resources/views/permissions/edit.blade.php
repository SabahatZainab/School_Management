@extends('layouts.app')
@section('content')

<div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Update Permission</h3>
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
          {!! Form::model($permission, ['method' => 'PATCH','route' => ['permissions.update', $permission->id]]) !!}
            @csrf
            <div class = "row g-4">
              <div class="col-4">
                <label for="input42" class="col-sm-4 col-form-label">Permission</label>
                {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'Update Permission')) !!}
              </div>
              <div class="col-12 d-flex justify-content-end">
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary px-4">Update</button>
                  <a class="btn btn-alt-danger px-4" href="{{ route('permissions.index') }}">Back</a>
                </div>
              </div>

            </div>
            {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>

@endsection