


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/Hellotter-logo-cyan-header.png">
  <link rel="icon" type="image/png" href="public/assets/img/Hellotter-logo-cyan-header.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Hellotter
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="public/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="public/assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="public/css/dashboard1.css" >
  <link rel="stylesheet" href="public/css/responsive_sidebar.css" >
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>


<body class="">
  <div class="wrapper ">
    <div class="sidebar side12" data-color="white" data-active-color="white">
      <div class="logo mt-5">
        <a href="{{url('home')}}" >
        <div class="row" style="margin-top: -50px;">
        <div style="width: 25%;margin-left: 20px;" class="imglgo">
           <img src="public/assets/img/Hellotter-logo-icon.png" >
          </div>
        <div class="" style="width: 40%; margin-top: 7px; margin-left: -2px;">
          <span style="font-size: 20px; color:#33ffff;"><b>hellotter</b></span>
      </div>
    </div>
        </a>
      </div>
      <div class="sidebar-wrapper hg1"  style="margin-top:-40px;">
        <ul class="nav nav12">
          <li class="sidebar2">
            <a href="{{url('home')}}" class="textfont"><b>Contacts</b></a>
          </li>
          <li class="sidebar2">
            <a href="{{url('/createmeeting')}}" class="textfont"><b>Create Meeting</b></a>
          </li>
          <li class="stlg sidebar2">
           <a href="{{url('profile')}}" class="textfont"><b>Settings</b></a>
          </li>
            <li class="sidebar2">
            <a class="textfont" href="#" data-toggle="modal" data-target="#myModal"><b>Logout</b></a>

          </li>

        </ul>
      </div>
</div>
<div id="mySidenav" class="sidenav">
    <a href="{{url('home')}}" >
        <div class="row" style="margin-top: -50px;">
        <div style="width: 30%;" class="imglgo">
           <img src="public/assets/img/Hellotter-logo-icon.png" class="img" >
          </div>
        <div class="mt-2" style="width: 40%;">
          <span class="mt-1">hellotter</span>
      </div>
    </div>
        </a>
  <div class="sidebar-wrapper">
            <a href="{{url('home')}}" class="textfont"><b>Contacts</b></a>
            <a href="{{url('createmeeting')}}" class="textfont"><b>Create Meeting</b></a>
           <a href="{{url('profile')}}" class="stlg textfont"><b>Settings</b></a>
            <a class="textfont" href="#" data-toggle="modal" data-target="#myModal"><b>Logout</b></a>
      </div>

</div>
  
     <div class="main-panel mainpanel1 ">

      <div class="content main1">
       
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <a href="{{url('home')}}" class="" style="color: black" ><i class="fa fa-arrow-left"></i> Back</a> 
          </div>
            <div class="col-lg-6 col-md-6 col-sm-6 dropdown" style="float:right;">
              <div class="float-right mgnm1">
      @if(Auth::user()->image)    
      <img src="{{url('public/images/'.Auth::user()->image)}}" alt="ML" class="img-circle cimg"> 
      @else
      <img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg">  
      @endif
      <button class="dropbtn" style="background-color: #f4f4f4; margin-left: -5px; font-size: 14px;font-family: "Open Sans"; "><b>{{ Auth::user()->name }} </b></button>
            <div class="dropdown-content">
            <a href="{{ url('profile') }}">Edit Profile</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Logout</a>
             </div>
           </div>
            </div>
        </div>
 <div class="sidebaropenbtn example" >
        <span class="example" onclick="openNav()">&#9776;</span> 
        </div>






  <div class="modal" id="myModal" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
     
        <!-- Modal body -->
        <center>
        <div class="modal-body p-5">
          <h5 class=""><b>Logout</b></h5>
          <div class="mt-3">
          <p class="instr1">Are you sure you <br> want to logout.</p>
        </div>
         <div class="mt-3">
            <a class="regbtn text-white pt-1" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>

          </div>   
         <div class="mt-3">
 <a href="{{url('home')}}">
          <input type="button" class="" style="background-color: #ffffff; border: none;" onclick="closeNav()" value="Cancel">
        </a>        </div>
     </div>
        
        </center>
      </div>
    </div>
  </div>
  @yield('content')

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main1").style.marginLeft = "200px";

}

function closeNav() {
  document.getElementById("main1").style.marginLeft= "0";
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
   <style>
    div.example {
        display: none !important;
}

 

@media screen and (max-width: 600px) {

    div.example {
        display: block !important;
}
}
   </style>

@yield('javascript')
