@extends('layouts.auth')
@section('title')
Verify Your Email Address
@endsection
@section('content')
<div class="col-lg-6 col-md-6 d-none d-md-block image-container1"></div>

<div class="col-lg-6 col-md-6 form-container">
    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">

        <div class="heading mb-4">
            <h2>Verify Your Email Address</h2>
        </div>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        Before proceeding, please check your email for a verification link.
        If you did not receive the email
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn">click here to request another</button>
        </form>
    </div>
@endsection
