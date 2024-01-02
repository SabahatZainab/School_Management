@extends('layouts.app_auth')
@section('content')

<!--wrapper-->

<div class="d-flex align-items-center justify-content-center my-5">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <div class="col mx-auto">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="p-4">
                            <div class="mb-3 text-center">
                                <img src="assets/images/logo-icon.png" width="60" alt="" />
                            </div>
                            <div class="text-center mb-4">
                                <h5 class="">School Management</h5>
                                <p class="mb-0">Please fill the below details to create your account</p>
                            </div>
                            <div class="form-body">
                                <form method="POST" action="{{ route('register') }}" class="row g-3">
                                    @csrf

                                    <div class="col-12">
                                        <label for="name" class="form-label text-md-end">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Jhon">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror  
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label text-md-end">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@user.com">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>
                                        <div class="input-group" id="show_hide_password">                           
                                            <input id="password" type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="12345678" placeholder="Enter Password"><a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="password-confirm" class="form-label text-md-end">{{ __('Confirm Password') }}</label>
                                        <div class="input-group" id="show_hide_password"> 
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
                                        </div>
									</div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center ">
                                            <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign in here</a></p>
                                        </div>
									</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection