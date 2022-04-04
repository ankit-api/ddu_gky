@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->





  <div class="container-scroller" style="margin-top: -30px;">
      <div class="logo mx-auto">
        <div class="container text-center d-flex justify-content-between mt-3">
          <div class="col-5 col-md-3">
            <img src="{{asset('images/prakhar_logo.png')}}" class="img-fluid" style="max-height: 110px;" alt="logo">
          </div>
          <div class="col-5 col-md-3 mt-3">
            <img src="{{asset('images/naukriyan_logo.png')}}" class="img-fluid" style="max-height: 79px;" alt="logo">
          </div>
        </div>
      </div>
    <div class="container-fluid py-0">
      <center>
      <div class="col-10 col-sm-8 col-md-4 auth pt-1">
        {{-- <div class="row w-100 mx-0">
          <div class="col-lg-8 mx-auto"> --}}
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="w-100 mb-5">
                <h3 style="font-weight:bold;color:green">Prakhar Software Solutions Pvt. Ltd.</h3>
                 {{-- <img src="{{asset('images/ddu-header.jpg')}}" class="img-fluid" alt="logo">  --}}
              </div>
              <div class="row">  
                @if (session('alert_status'))
                    <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                @endif      
                @if ($errors->any())
                    <div class="alert alert-danger">{{$errors->first()}}</div>
                    @endif
            </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form method="POST" action="{{ route('login') }}" class="pt-3">
                  @csrf
                <div class="form-group">
                 <input id="user_code" type="text" class="form-control form-control-lg @error('user_code') is-invalid @enderror" name="user_code" value="{{ old('user_code') }}" required autocomplete="user_code" autofocus  placeholder="Username">

                  
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" > {{ __('Login') }}</button>
                </div>
                <div class="my-2 d-flex justify-content-center align-items-center">
                  {{-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> --}}

                  @if (Route::has('password.request'))
                                    <a class="btn btn-link"class="auth-link text-black"  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                 
                </div>
                
                {{-- <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> --}}
              </form>
            </div>
          {{-- </div>
        </div> --}}
      </div></center>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 

</html>

@endsection
