<!DOCTYPE html>
<html>

<head>
    <title>Setting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="{{ URL::asset('css/setting.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::asset('img/leaves logo.png') }}">
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row" style="margin-top: 110px;">

            <div class="col-6">
                <div>
                    <img src="{{ URL::asset('img/img 3.png') }}" class="profile">
                </div>

                {{-- <p
                    style="text-align: center; 
                        color: #4CAF50; 
                        font-weight: bold; 
                        font-size: 20px; 
                        padding-right: 150px;">
                    Change Photo
                </p> --}}

            </div>

            <div class="col-6">

                <p style="text-align: center; color:#1B5E20; font-weight: bold; font-size: 50px; padding-left:130px;">
                    Sett<span
                        style="text-align: center; color: #4CAF50; font-weight: bold; font-size: 50px; padding-right: 150px;">ing
                    </span>
                </p>

                <div>

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('edit_profile.update') }}" class="main">
                        @csrf
                        @method('PUT')

                        <div class="form-input">
                            <input type="text" placeholder="First Name" name="first_name"
                                value="{{ Auth::user()->first_name }}" required>
                        </div>
                        <div class="form-input">
                            <input type="text" placeholder="Last Name" name="last_name"
                                value="{{ Auth::user()->last_name }}" required>
                        </div>
                        <div class="form-input">
                            <input type="email" placeholder="Email@gmail.com" name="email"
                                value="{{ Auth::user()->email }}" required>
                        </div>
                        <div class="form-input">
                            <input type="text" placeholder="0123456789" name="mobile_number"
                                value="{{ Auth::user()->mobile_number }}" required>
                        </div>
                        <div class="form-input">
                            <input type="password" placeholder="******" name="password" required>
                        </div>

                        <br>

                        <button type="submit">Save Changes</button>
                        {{-- <button type="submit">Save Changes</button> --}}

                    </form>



                    <div style="height: 100px;"></div>

                </div>


            </div>


        </div>
    </div>

</body>

</html>
