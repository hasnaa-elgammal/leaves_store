@extends('layouts.app')
@section('title')
Plants
@endsection

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/specificCategory.css')}}" />
@endsection

@section('content')
<div style="height: 70px"></div>
<div class="statment">
    <p class="imp">
        <span style="color: #1B5E20">All</span> <span style="color: #66bb6a">Plants</span>
    </p>
</div>

<div class="products">
    @forelse($products as $plant)
    <div class="plant-card">
        <div class="plant-image">
            <img src="images/plants/{{$plant->image}}"  width="160">
        </div>
        <div class="card-info">
            <p class="plant-title">{{$plant->name}}</p>

            <div class="icons">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p class="price">L.E {{$plant->price}}</p>
            <div class="btns">
                <button class="add-btn">Add To Cart&nbsp;<i class="fa-solid fa-cart-circle-plus"></i></button>
                <button class="like-btn"><i class='bx bx-heart bx-flip-horizontal'></i></button>
            </div>
        </div>
    </div>

    @empty
    <div class="alert alert-danger">No Plants Found</div>
    @endforelse
</div>
@endsection
