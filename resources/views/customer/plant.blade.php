@extends('layouts.app')
@section('title')
Plants
@endsection
@section('css')
<link href="{{URL::asset('css/singlepagestyle.css')}}" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section('content')

<img src="{images/plants/{{ $product->image}}}" alt="{{$product->name}}" id="img1">
        <i class='bx bx-heart' id="heart"></i>
        <div class="texts">
        <div class="plant-title">{{$product->name}}</div>
        <div class="plant-price">20 L.E</div>
            <div class="url">Categories > Outdoor Plants > {{$product->name}}</div>
            <div class="ratings">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <div class="rev">5 reviews</div>
            </div>
            <div class="desc">{{$product->description}}</div>
            <div class="quan">Quantity
            <input type="number" min="0" value="1" class="quantity">
            </div>
            <div class="btn">
                <button id="btn1">Add to cart &nbsp;&nbsp;<i class='bx bx-basket' id="icon"></i></button>
            </div>
            <br>
                <div class="line"></div>


            <div class="accor">
                <div class="txt"> Care Requirments
                <svg width="20" height="30" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="#FFFAF7" stroke-width="7" stroke-linecap="round"/>

                </svg>
                </div>
            <div class="users">
                <p id="sentence"><span id="title1"><i class='bx bxs-droplet' id="drop">&nbsp;WATERING</i></span><br>{{$product->care_instructions}}</p>
             </div>
            




            </div>



            <div class="accor">
                <div class="txt"> Reviews
                <svg width="20" height="30" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="#FFFAF7" stroke-width="7" stroke-linecap="round"/>

                </svg>
                </div>
                <div class="users">
                    <div class="user-box">
                        <img src="img/Mask Group 10.png" alt="" class="user-img">
                        <div class="detail-box1">
                            <div class="username">UserName UserName</div>
                            <div class="rev1">pretty plant!</div>
                            </div>
                        </div>
                    </div>
                </div>
              
            




            </div>

          
       
        </div>











        <script src="js/main.js"></script>

@endsection