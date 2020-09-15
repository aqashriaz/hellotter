 @extends('layouts.header')
 <link rel="stylesheet" href="public/css/register.css" >
</head>  
<body class="bg-light">
  <div class="mt-5 p-5">
    <center>
      <div class="card p-5" style="width: 25rem;">
        <a href="{{url('login')}}" class="instr1" style="margin-left: -250px;"><i class="fa fa-arrow-left"></i> Back</a>
        <form action="{{ route('fpsendemail') }}" method="POST">
           @csrf

        <div class="card-body p-4">
          <h4 class="text-center"><b>Reset Password</b></h4>
          <p class="instr1">Provide your email to send the <br> reset password instructions.</p>
             @if(session('message'))
            <p class="alert alert-white bg-danger text-white  " style="height: 20px; line-height: 0px; font-size: 10px;">
            {{session('message')}}</p>
            @endif
          <div class="row">
            <label for="email" class="control-label"><b>Email</b></label>
          </div>
          <div class="row">
           <input id="email" type="email" class="iptx" placeholder="name@email.com" name="email" required>
         </div>
         <div class="row mt-4">
          <input type="submit" class="resetbtn" value="SUBMIT">
        </div>
      </div>
      </form>
    </div>
  </div>  
</center>
</div>
</body>

</html>