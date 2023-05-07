@extends('layouts.app')
@section('title')
Categories
@endsection
@section('css')
<link href="{{URL::asset('css/categories.css')}}" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section('content')


  <div class="title">
    <div class="title-box">
        <img src="img/spread3-removebg-preview.png" alt="" class="title-img">
        <div class="detail-box1">
            <div class="cat-title">Plants Category</div>
            </div>
        </div>
    </div>
</div>


<div class="box">
@foreach($categories as $category)
     <div class="imgs">
      <img src="images/categories/{{ $category->image}}" id="img1">
      
     </div>
     <div class="style"><a href="/categories/{{$category->id}}">{{$category->name}}</a></div>
     @endforeach
 
   
 


</div>
@endsection