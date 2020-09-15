<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="public/css/splash.css" >
	<link rel="stylesheet" href="public/css/bootstrap/css/bootstrap.css" >
    <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap-grid.css" >
    <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap-grid.min.css" >
    <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap-reboot.css" >
    <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap-reboot.min.css" >
     <script src="public/css/bootstrap/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="public/css/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="public/css/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="public/css/bootstrap/js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" async defer></script>
 
	<title>Hellotter</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
				<img src="public/images/Hellotter-logo-cyan.png" alt="" class="image1">
				</div>

		<div class="row mt-3">
			<div class="text-center col-sm-12">
				<h3 class="text-center text-white logo2"><b>hellotter</b></h3>
			</div>

		</div>
	<div class="row mt-4">
			@if(Auth::user())
               <div class="text-center col-sm-12">
			   	<h6 class="text-center text-white logo2 ">Thank you for using hellotter!</h6>
			   </div>
			   <div class="btn1 mt-2">
					<a href="{{url('login')}}" title=""><button type="submit" class="btn btn-default login"><b>Home</b></button></a>
				</div>
				@else
				<div class="btn1">
					<a href="{{url('register')}}" title=""><button type="submit" class="signup"><b>SIGN UP</b></button></a>&nbsp;&nbsp;&nbsp;
					<a href="{{url('login')}}" title=""><button type="submit" class="login"><b>LOG IN</b></button></a>
				</div>
				@endif

	    </div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</body>
</html>