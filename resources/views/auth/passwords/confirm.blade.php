@extends('layouts.auth')
@section('title')
Confirm Password
@endsection
@section('content')
<div class="col-lg-6 col-md-6 d-none d-md-block image-container1"></div>

<div class="col-lg-6 col-md-6 form-container">
    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">

        <div class="heading mb-4">
            <h2>Confirm Password</h2>
        </div>
        Please confirm your password before continuing.
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div class="form-input">
                <input id="password" type="password" class="@error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="text-center mb-3">
                <button type="submit" class="btn">Confirm Password</button>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forget-link">Forget Password?</a>
                @endif
            </div>
        </form>
    </div>
@endsection
