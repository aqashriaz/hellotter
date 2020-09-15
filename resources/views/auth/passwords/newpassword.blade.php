 @extends('layouts.header')

 <link rel="stylesheet" href="public/css/register.css" >
</head>

<body class="bg-light">
  <div class="mt-5 p-5">
    <center>
      <div class="card p-5" style="width: 25rem;">
        <a href="{{url('login')}}" class="instr1" style="margin-left: -250px;"><i class="fa fa-arrow-left"></i> Back</a>
        <div class="card-body">
          <h4 class="text-center"><b>Reset Password</b></h4>
          <p class="instr1">Create your new password below.</p>
           @if(session('message'))
            <p class="alert alert-white bg-danger text-white  " style="height: 20px; line-height: 0px; font-size: 11px;">
            {{session('message')}}</p>
            @endif
          <form action="{{ route('updatepassword') }}" method="post">
             @csrf
             <input  type="hidden" name="user_id" value="{{$user_id}}" required>
          <div class="row">
            <label for="password" class="control-label"><b>New Password</b></label>
          </div>
          <div class="row">
           <input id="password" type="password" class="inrst" placeholder="atleast 6 characters" name="password" value="" required>
         </div>
          @error('password')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
          @enderror
         <div class="row mt-3">
            <label for="password" class="control-label"><b>Confirm Password</b></label>
          </div>
          <div class="row">
           <input id="confirmpassword" type="password" class="inrst" placeholder="atleast 6 characters" name="confirmpassword" value="" required>
         </div>
         <div class="row mt-4">
          <input type="submit" class="resetbtn" value="UPDATE PASSWORD">
        </div>
      </form>
      </div>
    </div>
  </div>  
</center>
</div>
</body>

</html>