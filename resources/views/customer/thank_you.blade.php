{{-- Add css --}}
@extends('layouts.app')
@section('title')
Thank You
@endsection
@section('css')
<link href="{{URL::asset('css/thank-you.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row align-items-start">
        <div class="col-4">
            <div class="right">
                <img src="img/pilea.png" id="right">
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <p class="firstp">Thank<span> You</span></p>
            </div>

            <div class="row">
                <p class="secondp">Dear <span id="ss"> {{ auth()->user()->first_name }} </span>your order is accepted!
                    We've sent you an Email with your order details.</p>


            </div>
            <div class="row">
                <button type="button" class="btn btn-outline-success rounded-pill" style="width: 250px;">Continue
                    Shopping</button>

            </div>

        </div>

    </div>

</div>
@endsection
