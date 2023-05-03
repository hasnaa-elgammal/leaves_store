@extends('layouts.auth')
@section('title')
Register
@endsection
@section('content')
<div class="col-lg-6 col-md-6 d-none d-md-block image-container">
</div>

<div class="col-lg-6 col-md-6 form-container">
    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">

        <div class="heading mb-4">
            <h2>Create an account</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-input">
                <input id="first_name" type="text" class="@error('first_name') is-invalid @enderror" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-input">
                <input id="last_name" type="text" class="@error('last_name') is-invalid @enderror"placeholder="Last Name"  name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-input">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-input">
                <input id="mobile_number" type="text" class="@error('mobile_number') is-invalid @enderror" placeholder="Phone" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile_number">

                @error('mobile_number')
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
            <div class="text-center mb-3">
                <button type="submit" class="btn">Create Account</button>
            </div>

            <div style="color: green">Already have an account?
                <a href="{{ route('login') }}" class="login-link">  Login</a>
            </div>
        </form>
    </div>
</div>
@endsection
