
<!DOCTYPE html>
<html>
<head>
	<title>online private tutor</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/Frontend/css/style.css')}}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/Frontend/images/lo.png')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
	@yield('css')
</head>
<body>
	<section id="top-heder">
		<header class="d-none d-sm-block">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-6">
						<div class="header">
							<h4 class="header-h4">Looking for house tutor in dhaka ?</h4>
							<p>FIND THE RIGHT TUTOR NEAR YOUR LOCATION<br><span>Class(1-12), bangla, english medium(Cambridge/edexcel), version</span></p>
							<h5 class="header-h4">HELP LINE: +0922-559 851 (It's free!)</h5>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</header>
	</section>

  <nav class="navbar sticky-top navbar-dark navbar-bg navbar-expand-md">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarNav" class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link {{ request()->is('/')? 'active':''}}" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('find_tutor')? 'active':''}}" href="{{route('find_tutor')}}">Find A Tutor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('job_board')? 'active':''}}" href="{{route('job_board')}}">Job Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('hire_tutor')? 'active':''}}" href="{{route('hire_tutor')}}">Hire A Tutor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about')? 'active':''}}" href="{{route('about')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('faq')? 'active':''}}" href="{{route('faq')}}">FAQ</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto ">
          @guest
					<a  class="btn btn-info btn-sm mt-3" href="{{ route('login') }}">{{ __('Login') }}</a>
          <a  class="btn btn-info btn-sm mt-3 ml-3" href="{{ route('register') }}">Sign Up</a>
          @endguest
					@auth
					<a  class="btn btn-info btn-sm mt-3" href="{{ route('login') }}" target="_blank">Dashboard</a>

					<a  class="btn btn-info btn-sm mt-3 ml-3" href="{{ route('logout') }}"
						 onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">Logout</a>
						 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						 </form>
					@endauth
        </ul>
      </div>
    </div>
  </nav>
