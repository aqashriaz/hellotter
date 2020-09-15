@extends('layouts.header')
 <link rel="stylesheet" href="public/css/register.css" >
</head>

<body>
    <div class="container-fluid ">
        <div class="row">
            <img src="public/images/Hellotter-logo-icon.png" alt="" class="logimage">
        </div>
         <form method="POST" action="{{ route('login') }}">
                  @csrf
            <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 center1">
                        <div  class="col-lg-6 col-md-11 col-sm-11 control-label center1 sm12">
   @if(session('message'))
            <p class="alert alert-white bg-danger text-white  " style="height: 20px; line-height: 0px; font-size: 11px;">
            {{session('message')}}</p>
            @endif  
 </div>
                        <div class="form-group">
                            <label for="email" class="col-lg-6 col-md-12 col-sm-12 control-label center1 sm12">{{ __('Email ') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12 center1">
                                <input id="email" type="email" class="iptx @error('email') is-invalid @enderror" placeholder="name@email.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 center1">


                        <div class="form-group">
                            <label for="password" class="col-lg-6 col-md-12 col-sm-12  center1 control-label sm12">{{ __('Password') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12  center1">
                                <input id="password" type="password" class="iptx  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6 col-md-12 col-sm-12 center1">
                    <div class="form-group">
                        <div class="col-lg-6 col-md-12 col-sm-12 center1">
                            <div class="row ml-2">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <input class="form-check-input chkbx2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                          <span class="form-check-label center1 term1 rmb5" for="remember">
                            {{ __('Remember Me') }}
                        </span>
                    </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link float-right fgbtn3" href="{{url('forgetpassword')}}">
                            <span class="term1 btn-link5"><u>Forgot password</u></span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
                </div>
            </div>
            </div>
            <div class="row mg2" style="margin-top:-20px;">
                <div class="col-lg-6 col-md-12 col-sm-12 center1">
                    <div class="form-group">
                        <div class="col-lg-6 col-md-11 col-sm-11  center1">

                            <input type="submit" class="regbtn" value="LOGIN">
                        </div>
                    </div>
                </div>
             </div>
             <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 center1">
                    <div class="form-group">
                        <div class="col-lg-6 col-md-11 col-sm-11  center1 text-center">
                            <span class="term2 text-center">Not registered. <a href="{{url('register')}}" title=""><u>Sign Up</u></a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
 
</body>
</html>