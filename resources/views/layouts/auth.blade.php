<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/login&register.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
      <div class="header">
        <a href="{{route('home')}}">
            <img src="{{URL::asset('img/leaves logo.png')}}" width="150px" height="70px" alt="logo">
        </a>
		<div class="row">
            @yield('content')
        </div>
    </div>
  </div>
</body>
</html>
