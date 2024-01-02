@extends('layouts.app_auth')
@section('content')

<!--wrapper-->

    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
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
                                    <p class="mb-0">Please log in to your account</p>
                                </div>
                                <div class="form-body">
                                    {{-- <form class="row g-3">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center ">
                                                <p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form> --}}@csrf
                                    <form class="row g-3" method="POST" action="{{ route('login') }}">
                                        
                
                                        <div class="col-12">
                                            <label for="email" class="form-label text-md-end">{{ __('Email Address') }}</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                        </div>
                
                                        <div class="col-12">
                                            <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>
                                            <div class="input-group" id="show_hide_password">    
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                {{-- <div class="form-check"> --}}
                                                    <input class="form-check-input" type="checkbox" name="remember" id="flexSwitchCheckChecked" {{ old('remember') ? 'checked' : '' }}>
                
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                
                                        {{-- <div class="row mb-0"> --}}
                                            <div class="col-md-6 text-end">
                                                
                
                                                @if (Route::has('password.request'))
                                                    <a  href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        {{-- </div> --}}
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                                                {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center ">
                                                <p class="mb-0">Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
                                    <hr/>
                                </div>
                                <div class="list-inline contacts-social text-center">
                                    <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>

<!--end wrapper-->
@endsection
