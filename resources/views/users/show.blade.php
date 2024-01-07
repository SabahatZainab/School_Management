@extends('layouts.app')
@section('content')

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Show User</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12 space-y-5"> 
                    <form id="users_form" enctype="multipart/form-data"> 
                        <input type="hidden" name='id' id='id' value="{{ $user->id }}">
                        <div class = "row g-4">
                            <div class="col-4">
                                <label for="input42" class="col-sm-4 col-form-label">Name</label>
                                <input type="text" disabled name="name" placeholder="Enter Your Name"
                                    class="form-control" value='{{ $user->name ?? '' }}'>
                            </div>
                            <div class="col-4">
                                <label for="input43" class="col-sm-4 col-form-label">Email</label>
                                <input type="email" disabled name="email" placeholder="Enter  Address"
                                    class="form-control" value='{{ $user->email ?? '' }}'>
                            </div>

                            <div class="col-4">
                                <label for="input45" class="col-sm-4 col-form-label">Role</label>
                                <select name="roles[]" disabled class="form-control select2" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role }}"
                                            {{ in_array($role, $userRole) ? 'selected' : '' }}>
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="mb-4">
                                <a class="btn btn-alt-danger px-4" href="{{ route('users.index') }}">Back</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
