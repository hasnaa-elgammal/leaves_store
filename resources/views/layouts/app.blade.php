<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/6e6d40de45.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::asset('img/leaves logo.png') }}">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/plants') }}">Plants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>


                @guest
                    <form class="d-flex">
                        @if (Route::has('register'))
                            <a class="btn btn-success rounded-pill" href="{{ route('register') }}">Create Account</a>
                        @endif

                        @if (Route::has('login'))
                            <a class="btn btn-outline-success rounded-pill" href="{{ route('login') }}"
                                style="width: 150px; margin-left: 10px;">Login</a>
                        @endif
                    </form>
                @else
                    <form class="d-flex" style="margin-right: 50px;">
                        <a class="nav-link" href="#">
                            <i id="search" class="fa-solid fa-magnifying-glass fa-rotate-90"></i>
                        </a>
                        <a class="nav-link" href="#"><i id="wishlist" class="fa-regular fa-heart"></i></a>
                        <a class="nav-link" href="#"><i id="cart" class='fa-solid fa-cart-shopping'></i></a>

                        <div class="dropdown" style="float:right;">
                            <a class="nav-link dropbtn" href="#">
                                <i class="fa-regular fa-user"></i>
                            </a>
                            <div class="dropdown-content">
                                <a href="{{ route('edit_profile.edit') }}">
                                    <i class='fa-solid fa-cog me-3'></i>Edit Profile
                                </a>

                                <a href="{{ route('user.logout') }}">
                                    <i class='fa-solid fa-sign-out me-3'></i>Logout
                                </a>
                            </div>
                        </div>

                    </form>
                @endguest


            </div>
        </div>
    </nav>

    
    
    <!--cart-->
    @include('customer.cart')

    <!--wishlist-->
    @include('customer.wishlist')


    <div style="height: 100px;">
    
        @yield('content')
    </div>


    {{-- JS --}}
    <script src="{{ URL::asset('js/main.js') }}"></script>
    @yield('script')
</body>

</html>
