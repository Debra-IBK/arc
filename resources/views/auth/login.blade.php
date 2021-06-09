@extends('layouts.auth_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
</div>

<div class="card-body">
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="js-validate">
        @csrf
    {{-- <form class="js-validate"> --}}
      <div class="text-center">
        <div class="mb-5">
          <h1 class="display-4">Sign in</h1>
          <p>Don't have an account yet? <a href="authentication-signup-basic.html">Sign up here</a></p>
        </div>

        {{-- <a class="btn btn-lg btn-block btn-white mb-4" href="#">
          <span class="d-flex justify-content-center align-items-center">
            <img class="avatar avatar-xss mr-2" src="assets/svg/brands/google.svg" alt="Image Description">
            Sign in with Google
          </span>
        </a> --}}

        <span class="divider text-muted mb-4"></span>
      </div>

      <!-- Form Group -->
      <div class="js-form-message form-group">

        <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="Email" aria-label="email@address.com" required data-msg="Please enter a valid email address.">
        
        <input id="email" type="email" class="form-control form-control-lg"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
      <!-- End Form Group -->

      <!-- Form Group -->
      <div class="js-form-message form-group">
        <label class="input-label" for="signupSrPassword" tabindex="0">

        </label>

        <div class="input-group input-group-merge">
          <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="Password" aria-label="8+ characters required" required
                 data-msg="Your password is invalid. Please try again."
                 data-hs-toggle-password-options='{
                   "target": "#changePassTarget",
                   "defaultClass": "tio-hidden-outlined",
                   "showClass": "tio-visible-outlined",
                   "classChangeTarget": "#changePassIcon"
                 }'>
          <div id="changePassTarget" class="input-group-append">
            <a class="input-group-text" href="javascript:;">
              <i id="changePassIcon" class="tio-visible-outlined"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- End Form Group -->

      <!-- Checkbox -->
      <div class="form-group">
        <div class="custom-control custom-checkbox">

          <span class="d-flex justify-content-between align-items-center">
            <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
          <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
            <a class="input-label-secondary" href="authentication-reset-password-basic.html">Forgot Password?</a>
          </span>
        </div>
      </div>
      <!-- End Checkbox -->

      <button type="submit" class="btn btn-lg btn-block btn-primary">Sign in</button>
    </form>
    <!-- End Form -->
</div>
@endsection
