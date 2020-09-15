 @extends('layouts.dashboardhead')
@section('content')
 
 <div class="row">
   <span class="lctn1 ml-3">/My Profile</span>
 </div>
 <div class="col-md-12">
   <div class="mt-5">
    <center>
      <div class="card stylecard" >
        <div class="card-header bg-white">
        <a href="{{url('profile')}}" class="instr1 editcard"><b class="editcard">Edit</b></a>
        @if($data->image!=null)
        <img src="{{url('/public/images/'.$data->image)}}" alt=""   class="imgside3 img-circle">
        @else
        <img src="{{url('/public/images/Hellotter-logo-icon.png')}}" alt="" class="imgside3">
        @endif
        <p class="ml-auto mr-auto   mt-2"><b>{{$data->name}}</b></p>
        <div class="row">
        <hr class="bg-success">
        </div>
        </div>
        <form action="{{ route('updateprofile') }}" method="post" enctype="multipart/form-data">
                        @csrf
        <input type="hidden" class="abcd1 form-control" name="id" value="{{$data->id}}" >
        <input type="hidden" class="abcd1 form-control" name="oldimage" value="{{$data->image}}" >

        <div class="card-body cardcolor text-left">
        
        <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
        <label for="Email" class="text-left ">Email</label>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
        <input type="text" class="abcd1 form-control" name="email" value="{{$data->email}}" >
        </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-3 col-sm-12 col-xs-12">
        <label for="Name" class="text-left control-label">First Name</label>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
        <input type="text" class="abcd1 form-control" name="name" value="{{$data->name}}" >
        </div>
        </div>


        <div class="row mt-2">
        <div class="col-md-3 col-sm-12 col-xs-12">
        <label for="Name" class="text-left control-label">Last Name</label>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
        <input type="text" class="abcd1 form-control" placeholder="Last Name" name="lastname" value="{{$data->lastname}}" >
        </div>    
        </div>

      <div class="row mt-2">
      <div class="col-md-3 col-sm-12 col-xs-12">
      <label for="Name" class="control-label">Birth</label>
      </div>
      <div class="col-md-8 col-sm-12 col-xs-12">
      <input type="date" class="abcd1 form-control" placeholder="03-08-1998"  name="dob" value="{{$data->dob}}" >
      </div>
      </div>

      <div class="row mt-2 ">
      <div class="col-md-3 col-sm-12 col-xs-12">
      <label for="Name" class="control-label">Gender</label>
      </div>
      <div class="col-md-8 col-sm-12 col-xs-12">
      <input type="text" class="abcd1 form-control" placeholder="Male"  name="gender" value="{{$data->gender}}" >
      </div>          
      </div>

    <div class="row mt-2">
    <div class="col-md-3 col-sm-12 col-xs-12">
    <label for="Name" class="control-label">Phone</label>
    </div>
    <div class="col-md-8 col-sm-12 col-xs-12">
    <input type="number" class="abcd1 form-control" placeholder="+1254811564"  name="phone" value="{{$data->phone}}" >

    </div>          
    </div>

    <div class="row mt-2">
    <div class="col-md-3 col-sm-12 col-xs-12">
    <label for="Name" class="control-label">Address</label>
    </div>
    <div class="col-md-8 col-sm-12 col-xs-12">
    <input type="text" class="abcd1 form-control" placeholder="2121 jhaj 464 465asa london"  name="address" value="{{$data->address}}" >

    </div>          
    </div>

    <div class="row mt-2 ">
    <div class="col-md-3 col-sm-12 col-xs-12">
    <label for="Name" class="control-label">Image</label>
    </div>
    <div class="col-md-8 col-sm-12 col-xs-12">
    <input type="file"  class="abcd1 form-control" name="image" >

    </div>          
    </div>
    <div class="card-footer">
    <div class="row mt-2">
    <hr class="" style="width: 100%; background-color: #33ffff;">
    </div>

    <div class="row mt-2">
    <div class="col-sm-12">
    <label class="control-label">Password</label>
    </div>
    <div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12">
    <input type="text" class="password ml-3 form-control"  name="password" >

    </div>
    <div class="col-sm-4">
    <input type="submit" style="margin-left:100; color:blue; background-color: #f8f8f8; border: none;" class="" value="Change">
    </div>
    </div>
    </div>
    </div>
</div>
</form>
</div>  
</center>
</div>

</div>
</div>
</div>
</div>
</div>
@endsection

</section>
<!--   Core JS Files   -->
<script src="public/assets/js/core/jquery.min.js"></script>
<script src="public/assets/js/core/popper.min.js"></script>
<script src="public/assets/js/core/bootsdivap.min.js"></script>
<script src="public/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="public/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="public/assets/js/plugins/bootsdivap-notify.js"></script>
<!-- Condivol Center for Now Ui Dashboard: parallax effects, scripts for dive example pages etc -->
<script src="public/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO medivods, don't include it in your project! -->
<script src="public/assets/demo/demo.js"></script>
<script>
  $(document).ready(function() {
// Javascript medivod's body can be found in assepublic/assets-for-demo/js/demo.js
demo.initChartsPages();
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>

</body>

</html>
