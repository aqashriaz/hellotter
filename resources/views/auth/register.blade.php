 @extends('layouts.header')
 <link rel="stylesheet" href="public/css/register.css" >
</head>
 
<body>
    <div class="container-fluid ">

        <form method="POST" action="{{ route('register') }}">
                        @csrf
        <div class="row">
            <img src="public/images/Hellotter-logo-icon.png" alt="" class="regimage">
        </div>

    
        <div class="row mt-4 ">
            <div class="col-lg-6 col-md-12 col-sm-12 center1">

                <div class="form-group">
 <div  class="col-lg-6 col-md-11 col-sm-11 control-label center1 sm12">
   @if(session('message'))
            <p class="alert alert-white bg-danger text-white  " style="height: 20px; line-height: 0px; font-size: 11px;">
            {{session('message')}}</p>
            @endif  
 </div>
       

                    <label for="name" class="col-lg-6 col-md-11 col-sm-11 control-label center1 sm12">Full Name</label>



                    <div class="col-lg-6 col-md-11 col-sm-11 center1">
                        <input id="name" type="text" class="iptx @error('name') is-invalid @enderror" placeholder="First name, Last name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                            @error('name')
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
                    <label for="email" class="col-lg-6 col-md-11 col-sm-11 control-label center1 sm12">Email</label>

                    <div class="col-lg-6 col-md-11 col-sm-11 center1">
                        <input id="email" type="email" class="iptx @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@email.com" name="email" value="" required>

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
                    <label for="password" class="col-lg-6 col-md-11 col-sm-11 center1 control-label sm12">Password</label>

                    <div class="col-lg-6 col-md-11 col-sm-11 center1">
                        <input id="password" type="password" class="iptx @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                         @error('password')
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
                    <label for="password-confirm" class="col-lg-6 col-md-11 col-sm-11 center1 control-label sm12">Confirm Password</label>

                    <div class="col-lg-6 col-md-11 col-sm-11 center1">
                        <input id="password-confirm" type="password" class="iptx"name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-1">

            <div class="col-lg-6 col-md-12 col-sm-12 center1">
            <div class="form-group">
                                    <div class="col-lg-6 col-md-11 col-sm-11 center1 text-center">
                    <span class="term1 text-center">By clicking signup you agreed to the <a href="#" title=""><U>terms</U></a>,<br><a href="#"><u>conditions</u></a> and <a href="#"><u>privacy policy</u></a> of hellotter</span>
                </div>
                </div>
            </div>
        </div>
        <div class="row mg2">

            <div class="col-lg-6 col-md-12 col-sm-12 center1">
            <div class="form-group">
                    <div class="col-lg-6 col-md-11 col-sm-11 center1">
                    <button type="submit" class="regbtn" value="Register">SIGN UP</button>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 center1">
            <div class="form-group">
                <div class="col-lg-6 col-md-11 col-sm-11 center1 text-center">
                    <span class="term2 text-center">Already a Member? <a href="{{url('login')}}"><u>Log In</u></a> </span>
                </div>
            </div>
        </div>
    </div>
</form>
</div>



</body>
</html>