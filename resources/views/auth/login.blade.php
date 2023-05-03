@extends('layouts.auth')
@section('title')
Login
@endsection
@section('content')
<div class="col-lg-6 col-md-6 d-none d-md-block image-container1">
</div>

<div class="col-lg-6 col-md-6 form-container">
    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">

        <div class="heading mb-4">
            <h2>Login</h2>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-input">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-input">
                <input id="password" type="password" class="@error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col-6 d-flex">

                </div>
                <div class="col-6 text-right">
                    <a href="{{ route('password.request') }}" class="forget-link">Forget Password?</a>
                </div>
            </div>

            <div class="text-center mb-3">
                <button type="submit" class="btn">Login</button>
            </div>

            <div style="color: green">Don't have an account?
                <a href="{{ route('register') }}" class="register-link">Create an account</a>
            </div>
        </form>
    </div>
@endsection
