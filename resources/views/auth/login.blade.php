@extends('layouts.appLogin')

@section('content')
<style>
    @keyframes textReveal {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes loginReveal {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .reveal {
        animation: textReveal 1s ease-in-out;
    }

    .login-container {
        animation: loginReveal 1s ease-in-out;
        position: absolute;
        right: 150px;
        top: 150px;
        width: 90%;
        max-width: 350px;
        padding: 20px;
        background: rgba(255, 0, 102, 0.2); /* Semi-transparent background */
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        color: rgb(0, 0, 0);
    }

    .login-container img {
        display: block;
        margin: 0 auto 10px;
        width: 80px;
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-container input[type="email"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        color: #000; /* Ensure text is visible */
    }

    .login-container button,
    .login-container .google-btn {
        margin-top: 20px;
        width: 100%;
        padding: 5px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-container button {
        background: #7a1f7c;
        color: white;
    }

    .login-container .google-btn {
        background: #7a1f7c; /* Google button background color */
        color: white;
    }

    .login-container .google-btn img {
        margin-top: 7px;
        margin-right: 10px;
        width: 20px; /* Set width of the Google logo */
        height: 16px; /* Set height of the Google logo */
    }

    .login-container a {
        color: rgb(0, 0, 0);
        text-decoration: none;
        display: inline-block;
        margin-top: 2px;
    }

    .login-container .links {
        display: flex;
        justify-content: space-between;
    }

    @media (max-width: 768px) {
        .login-container {
            right: 50%;
            transform: translateX(50%);
            top: 100px;
        }
    }

    @media (max-width: 576px) {
        .login-container {
            width: 100%;
            padding: 10px;
            top: 50px;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="jumbotron" style="margin-top: 190px;">
                <h1 class="display-4 reveal">CvSU Tanza <br>Management Information <br>System</h1>
            </div>
        </div>
        <div class="col-md-4">
            <div class="login-container">
                <img src="{{ asset('imgs/tanza.png') }}" alt="Tanza Logo">
                <h2>Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="links">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a>
                        @endif

                    </div>

                    <button type="submit">{{ __('Login') }}</button>
                    <a href="{{ url('/auth/google') }}" class="google-btn">
                        <img src="{{ asset('imgs/google.png') }}" alt="Google Logo">
                        <span>Sign in with CvSU Google Account</span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
