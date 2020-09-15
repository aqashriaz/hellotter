 @extends('layouts.header')
 <link rel="stylesheet" href="public/css/register.css" >
</head> 
<body class="bg-light">
  <div class="mt-4 p-5">
    <center>
      <div class="card p-5" style="width: 25rem;">
        <a href="{{url('login')}}" class="instr1" style="margin-left: -250px;"><i class="fa fa-arrow-left"></i> Back</a>
        <form action="{{url('login')}}">
          
                <div class="card-body">
          <h4 class="text-center"><b>Success!</b></h4>
          <img style="font-size: 50px; color:#33ffff;" class="mt-3" src="public/images/lock.png" alt="">
          <p class="instr1 mt-4">Please login with your new password.</p>
          
          <div class="row mt-4">
            <input type="submit" class="regbtn" value="LOGIN">
          </div>
        </div>
      </form>
      </div>
    </div>  
  </center>
</div>
</body>

</html>