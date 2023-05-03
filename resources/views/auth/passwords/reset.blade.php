@extends('layouts.auth')
@section('title')
Reset Password
@endsection
@section('content')
<div class="col-lg-6 col-md-6 d-none d-md-block image-container1"></div>

<div class="col-lg-6 col-md-6 form-container">
    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">

        <div class="heading mb-4">
            <h2>Reset Password</h2>
        </div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-input">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-input">
                <input id="password" type="password" class="@error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-input">
                <input id="password-confirm" type="password"  placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="text-center mb-3">
                <button type="submit" class="btn">Reset Password</button>
            </div>
        </form>
    </div>
@endsection
