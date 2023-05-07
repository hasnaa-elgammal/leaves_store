@extends('layouts.app')
@section('title')
Categories
@endsection
@section('css')
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"type="text/css" />
<link href="{{URL::asset('css/specific_category.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="statment">
		<p class="imp"> <span style="color: #1B5E20">{{$category->name}}</span> <span style="color: #66bb6a">Plants</span>
			<span class="size" style="color:#C8C8C8">Catalogue > {{$category->name}} plant</span>
		</p>
	</div>


	<div class="products">
    @foreach($products as $product)

		<div class="plant-card">
			<div class="plant-image">
				<img src="images/plants/{{ $product->image}}"  width="160">
			</div>
			<div class="card-info">
				<p class="plant-title"><a style="text-decoration: none; color:#1B5E20" href="/categories/{{$category->id}}/plants/{{$product->id}}">{{$product->name}}</a></p>

				<div class="icons">
					<i class="fa-solid fa-star"></i>
					<i class="fa-solid fa-star"></i>
					<i class="fa-solid fa-star"></i>
					<i class="fa-solid fa-star"></i>
					<i class="fa-solid fa-star"></i>
				</div>
				<p class="price">L.E {{$product->price}}</p>
				<div class="btns"> 
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                       
                        <input type="hidden" value="1" name="quantity">
                        <button class="add-btn">Add To Cart &nbsp;<i class="fa-solid fa-cart-circle-plus"></i></button>

                </form>   
                <form action="{{ route('wishlist.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                        <a class="nav-link"  href="{{ route('wishlist.store') }}"><button class="addTo-wishlist rounded-pill"><i class=" fa fa-heart"></i></button></a>

                        <!-- <a class="nav-link" href="{{ route('wishlist.store') }}"><button class="like-btn"><i class='bx bx-heart bx-flip-horizontal'></i></button></a> -->
                    </form>
					<!-- <button class="like-btn"><i class='bx bx-heart bx-flip-horizontal'></i></button> -->
				</div>
			</div>
		</div>

	@endforeach

	</div>
</div>
@endsection
