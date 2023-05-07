@extends('layouts.app')
@section('title')
Home
@endsection
@section('css')
<link href="{{URL::asset('css/home.css')}}" rel="stylesheet">
@endsection
@section('content')

<div style="height: 100px;"></div>

 

    
<!-- first container start -->

<div class="container-fluid" id="fist-container" >


  <div class="container">
    <div class="row ">
      <div class="col-6" >
       <div >
        <p id="first-p">
          Your <span id="fs">Best Way</span>  To Buy Indoor <span id="ss">Plants</span>
        </p>
       </div>

       <div class="row">
        <p id="second-p">
          Find the perfect plants for your home & garden from the comfort of your home.
        </p>
       </div>

       <div class="row">
        <button type="button" class="btn btn-light rounded-pill " id="shop"onclick="location.href='categories'">Shop Now</button>
       </div>

      </div>

      <div class="col-6" id="right-side">
      <div class="row">
        <div id="first-box">
          
          <div id="second-box">
            
              <img id="plant" src="img/plants-removebg-preview.png">

          </div>

        </div>
       
      </div>
        
      
      </div>
    </div>
    


   </div>


  
</div>


<!-- Service container start -->

<div class="container" >
<div>
  <p class="firstp">Our<span>  Services</span></p>
</div>

<div class="row">
  <div class="col-4">
    <div class="service-box">
      <div class="service-innerbox"> 
        <div class="vl"></div>
      </div>
      <div class="service-title">
        <p >Secure<span> Payments</span></p>
        <div class="service-p">
          Confidence on all your devices

         </div>
      </div>
    </div>
    
  </div>
  <div class="col-4">
    <div class="service-box">
      <div class="service-innerbox"> 
        <div class="vl"></div>
      </div>
      <div class="service-title">
        <p >Free<span>  Deilvery</span></p>
        <div class="service-p">
          For all orders above 59 L.E

         </div>
      </div>

    </div>

  </div>
  <div class="col-4">
    <div class="service-box">
      <div class="service-innerbox"> 
        <div class="vl"></div>
      </div>
      <div class="service-title">
        <p >30 days<span>  Return</span></p>
        <div class="service-p">
          Free return services

         </div>
      </div>

    </div>

  </div>


</div>
</div>

<!-- Service container end -->
<!-- catalogue container start -->
<div class="container-fluid">
<div>
<p class="firstp">Categ<span>ories</span></p>
</div>

<div class="carousel-body">

<input type="radio" name="position"  />
<input type="radio" name="position"  />
<input type="radio" name="position" checked />
<input type="radio" name="position" />
<input type="radio" name="position" />

<main id="carousel">
@foreach($categories as $category)
  <div class="item">
  <a style="text-decoration: none; color:white" href="/categories/{{$category->id}}">
    <img src="images/categories/{{ $category->image}}" style="width: 100%;">
  </a>
    <div class="img-label rounded-pill">{{$category->name}}</div>
  </div>

  @endforeach
  <main>

</div>

<div style=" left: 47%; position: absolute;">
<button type="button" class="btn btn-outline-success rounded-pill" style="width: 160px; "onclick="location.href='categories'">Discover</button>

</div>

</div>

<!-- catalogue container end -->
<div style="height: 30px;"></div>

<!-- our plants container start -->

<div class="container">
<div>
  <p class="firstp">Our<span>  Plants</span></p>
</div>

<div class="row">
@foreach($plants as $plant)
  <div class="col-4 mt-5">
    <div class="plant-box ">
      <div class="row">
        <div class="col-4"> <img src="images/plants/{{ $plant->image}}" style="float: right;"  > </div>
        <div class="col-8">
          <p class="plant-p">{{$plant->name}}</p>
          <div class="star"><span class="fa fa-star checked "></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span></div>
            <p class="plant-p"> L.E {{$plant->price}}</p>
            <div class="addTo-wish" style="float: right; margin-top: -25px;   ">
              <!-- add to wish icon place -->
              <form action="{{ route('wishlist.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $plant->id }}" name="product_id">
                        @if (Auth::check())
                        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                        @endif
                        <a class="nav-link"  href="{{ route('wishlist.store') }}"><button class="addTo-wishlist rounded-pill"><i class=" fa fa-heart"></i></button></a>
                    </form>
            </div>
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" value="{{ $plant->id }}" name="product_id">
                        @if (Auth::check())
                        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                        @endif
                        <input type="hidden" value="1" name="quantity">
                        <div  class="  addTo-cart rounded-pill"> <button class="addTo-cart rounded-pill">Add To Cart</button> </div>

                </form>    
            <a hidden class="nav-link" href="">   
                         
              <div hidden class="  addTo-cart rounded-pill"> Add To Cart 
            </a>
         
              
            </div>
           

           
           



        </div>
      </div>
    </div>
</div>
@endforeach 


<div style=" left: 47%; position: absolute; margin-top: 450px; margin-bottom: 30px;">
  <button type="button" class="btn btn-outline-success rounded-pill" style="width: 160px; "onclick="location.href='categories'">Discover</button>
</div>


</div>

<!-- our plants container end -->

 <!-- keep your plants container start -->



<div class="container-fluid"> 

<div class="row align-items-start">
  <div class="col-4" >
      <div class="right">
          <img src="img/pilea.png" id="right" >
      </div>
     

  </div>
  <div class="col-8">
      <div class="row">
          <p class="pragraph">Keep Your Plants<span>  Alive</span></p>
      </div>

      <div class="row">
          <p class="secondpragraph">In publishing and graphic design,Lorem ipsum is a 
            placeholder text commonly used to demonstrate the 
          visual form pf a document or a typeface without relying
        on meaningful content. </p>


      </div>
      
  </div>

</div>

</div>

<!-- keep your plants container end -->
<!-- get in touch container start -->

<div class="container">
<div>
<p class="firstp">Get In <span>  Touch</span></p>
</div>

<div id="contact-box">

<img src="img/9.png" style="position: absolute; bottom:-100px; width: 300px; left: -40px;">

<div>
@if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

  <form style="text-align: center;" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <input type="email"  name="email" placeholder="Email" class="email rounded-pill">
    <input type="text"  name="subject" placeholder="Subject" class="email rounded-pill">

    <textarea  name="message" placeholder="Message" style="height:200px" class="message "></textarea>
    <input type="submit" value="Submit" class="rounded-pill">
   

  </form>
 
</div>
</div>

</div>

<!-- get in touch container end -->

<div style="height: 700px;"></div>

<!--footer container start -->

<footer style="background-color:  #FCEBDF; height: 150px; width: 100%; ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6" style="padding-left: 60px;">
        <img src="img/leaves logo.png" style="width: 200px">
        <p style="color: #4CAF50; font-size: 20px;">  &#169; 2023 Leaves , All Rights Reserved</p>
      </div>
      <div class="col-6 mt-2" style="padding-left: 170px;">
        <p style="color:#1B5E20; font-weight: bold;"><span> Email: </span> LeavesPlants@gmail.com</p>
        <p style="color:#1B5E20; font-weight: bold;"> <span>Contact: </span> 012-345-7789</p>
        <ul class="social-icons">
          <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
        </ul>
      </div>
    </div>
  </div>
</footer>

  <!--footer container end -->


@endsection
