<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/info.css')}}" />

</head>

<body>
    <div>
        <div class="row">
            <div class="sidebar col-12 col-lg-3">
                <div class="logo">
                    <a href="{{route('dashboard')}}"><img src="{{ asset('assets/admin/img/leaves_logo.png')}}" alt="logo" width="150" /></a>
                    <button class="menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-sharp fa-solid fa-bars"></i>
                    </button>
                </div>
                <ul class="nav flex-column" id="collapseExample">
                    <li class="nav-item active">
                        <a class="nav-link " href="{{route('dashboard')}}"><i class="fa-sharp fa-solid fa-objects-column"></i>&nbsp;
                            Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}"><i class="fa-sharp fa-solid fa-tags"></i>&nbsp;
                            Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('plants.index')}}"><i class="fa-sharp fa-solid fa-list-tree"></i>&nbsp;
                            Plants List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}"><i class="fa-sharp fa-solid fa-users"></i>&nbsp; Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('orders.index')}}"><i class="fa-sharp fa-solid fa-bags-shopping"></i>&nbsp;
                            Orders</a>
                    </li>
                    <li class="nav-item">
                        <!-- route -->
                        <a class="nav-link" href="{{route('contacts.index')}}"><i
                                class="fa-sharp fa-solid fa-messages-question"></i>&nbsp;
                            Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.before.html"><i
                                class="fa-sharp fa-solid fa-right-from-bracket"></i>&nbsp;
                            Logout</a>
                    </li>
                </ul>
                <img src="{{ asset('assets/admin/img/grass.png')}}" class="grass-img" alt="grass" width="200px" />
            </div>
            <div class="col-lg-7 col-12 main-section ">
                <div class="heading">
                    <h2>
                        Welcome Back, Admin&nbsp;!
                    </h2>
                    <button type="button" class="notify-btn position-relative" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-title="Notifications">
                        <i class="fa-regular fa-bell"></i>
                        <span
                            class="position-absolute top-5 start-100 translate-middle p-1 border border-light rounded-circle">
                        </span>
                    </button>
                </div>
                <div class="current-date">
                    <i class="fa-sharp fa-solid fa-calendar-days"></i>
                    <span id="day">&nbsp;Monday, </span>
                    <span id="day-number">{{now()->format('Y-m-d ')}}</span>
                    <!-- <span id="month">Feb</span>
                    <span id="year">2023</span> -->
                </div>
                @yield('content')
                <div class="col-2 right-column">
                <div class="right-img">
                    <img src="{{ asset('assets/admin/img/bg.png')}}"/>
                </div>
                
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
            integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
            integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
            type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
        <script src="{{ asset('assets/admin/js/index.js')}}"></script>
</body>

</html>