@extends('layouts.dashboardhead')
@section('content')

<div class="row" style="margin-top:-30px;">
  <h4 class="a1 ml-4"><b>Contacts</b></h4>
</div>
<div class="row" style="margin-top:-20px;">
  <span class="lctn1 ml-4"><u>Home</u> / <u>Contacts</u> / Favorites</span>
</div>
<div class="card-header" style="background-color: #f4f4f4; margin-bottom: -5px;">
  <div class="nav-tabs-navigation">
    <div class="nav-tabs-wrapper">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
          <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link active text-primary center5" href="#profile" data-toggle="tab">
                <span>Favorites</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link center5" href="#messages" data-toggle="tab">
                <span>Recents</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link center5" href="#settings" data-toggle="tab">
                <span>Contacts</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
          <div class="iptx3">
            <input type="search" placeholder="Search for name" name="search" class="iptx4">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
          <ul class="nav" data-tabs="tabs">
            <li class="nav-item alphabet2">
              <a class="alphabet1"  href="#all" data-toggle="tab">
                <b style="color: black;"> All </b>
              </a>
              &nbsp;
              <a class="alphabet1" href="#a" data-toggle="tab">
                A
              </a>
              <a class="alphabet1" href="#b" data-toggle="tab">
                B
              </a>
              <a class="alphabet1" href="#c" data-toggle="tab">
                C
              </a>
              <a class="alphabet1" href="#d" data-toggle="tab">
                D
              </a>
              <a class="alphabet1" href="#e" data-toggle="tab">
                E
              </a>
              <a class="alphabet1" href="#f" data-toggle="tab">
                F
              </a>
              <a class="alphabet1" href="#g" data-toggle="tab">
                G
              </a>
              <a class="alphabet1" href="#h" data-toggle="tab">
                H
              </a>
              <a class="alphabet1" href="#i" data-toggle="tab">
                I
              </a>
              <a class="alphabet1" href="#b" data-toggle="tab">
                J
              </a>
              <a class="alphabet1" href="#c" data-toggle="tab">
                K
              </a>
              <a class="alphabet1" href="#d" data-toggle="tab">
                L
              </a>
              <a class="alphabet1" href="#e" data-toggle="tab">
                M
              </a>
              <a class="alphabet1" href="#f" data-toggle="tab">
                N
              </a>
              <a class="alphabet1" href="#g" data-toggle="tab">
                O
              </a>
              <a class="alphabet1" href="#h" data-toggle="tab">
                P
              </a>
              <a class="alphabet1" href="#i" data-toggle="tab">
                Q
              </a>
              <a class="alphabet1" href="#b" data-toggle="tab">
                R
              </a>
              <a class="alphabet1" href="#c" data-toggle="tab">
                S
              </a>
              <a class="alphabet1" href="#d" data-toggle="tab">
                T
              </a>
              <a class="alphabet1" href="#e" data-toggle="tab">
                U
              </a>
              <a class="alphabet1" href="#f" data-toggle="tab">
                V
              </a>
              <a class="alphabet1" href="#g" data-toggle="tab">
                W
              </a>
              <a class="alphabet1" href="#h" data-toggle="tab">
                X
              </a>
              <a class="alphabet1" href="#i" data-toggle="tab">
                Y
              </a>
              <a class="alphabet1" href="#i" data-toggle="tab">
                Z
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="acard1 container-fluid">
  <div class="card-body card2 bg-white">
    <div class="tab-content">
      <div class="tab-pane active" id="profile">

        <table>

          <tr class="">
            <td class="name1" ><span class="" ><b>Name</b></span></td>
            <td class="phone1" ><span class="ph1" ><b>Phone</b></span></td>
            <td class="Email1" ><span class="" ><b>Email</b></span></td>
            <td class="lastcall1" ><span class="" ><b>Last Call</b></span></td>
            <td class="dot2" ><span class="" ><b></b></span></td>
          </tr>
          <tr>
            <td colspan="5"><hr style="margin-top: 1px; margin-bottom: 0px;"></td>
          </tr>
          <tr class="">
            <td class="name1"><span class=""><img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg"><b>Sufyan</b></span></td>
            <td class="phone1"><span class="ph1" >030165461110</span></td>
            <td class="Email1"><span class="" >abcdef@gmail.com</span></td>
            <td class="lastcall1"><span class="" style="color: gray;">today</span></td>
            <td class="dot2"><span class="" >...</span></td>
          </tr>
   <tr class="">
            <td class="name1"><span class=""><img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg"><b>Sufyan</b></span></td>
            <td class="phone1"><span class="ph1" >030165461110</span></td>
            <td class="Email1"><span class="" >abcdef@gmail.com</span></td>
            <td class="lastcall1"><span class="" style="color: gray;">today</span></td>
            <td class="dot2"><span class="" >...</span></td>
          </tr>
   <tr class="">
            <td class="name1"><span class=""><img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg"><b>Sufyan</b></span></td>
            <td class="phone1"><span class="ph1" >030165461110</span></td>
            <td class="Email1"><span class="" >abcdef@gmail.com</span></td>
            <td class="lastcall1"><span class="" style="color: gray;">today</span></td>
            <td class="dot2"><span class="" >...</span></td>
          </tr>
   <tr class="">
            <td class="name1"><span class=""><img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg"><b>Sufyan</b></span></td>
            <td class="phone1"><span class="ph1" >030165461110</span></td>
            <td class="Email1"><span class="" >abcdef@gmail.com</span></td>
            <td class="lastcall1"><span class="" style="color: gray;">today</span></td>
            <td class="dot2"><span class="" >...</span></td>
          </tr>
   <tr class="">
            <td class="name1"><span class=""><img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg"><b>Sufyan</b></span></td>
            <td class="phone1"><span class="ph1" >030165461110</span></td>
            <td class="Email1"><span class="" >abcdef@gmail.com</span></td>
            <td class="lastcall1"><span class="" style="color: gray;">today</span></td>
            <td class="dot2"><span class="" >...</span></td>
          </tr>
   <tr class="">
            <td class="name1"><span class=""><img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg"><b>Sufyan</b></span></td>
            <td class="phone1"><span class="ph1" >030165461110</span></td>
            <td class="Email1"><span class="" >abcdef@gmail.com</span></td>
            <td class="lastcall1"><span class="" style="color: gray;">today</span></td>
            <td class="dot2"><span class="" >...</span></td>
          </tr>
   <tr class="">
            <td class="name1"><span class=""><img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg"><b>Sufyan</b></span></td>
            <td class="phone1"><span class="ph1" >030165461110</span></td>
            <td class="Email1"><span class="" >abcdef@gmail.com</span></td>
            <td class="lastcall1"><span class="" style="color: gray;">today</span></td>
            <td class="dot2"><span class="" >...</span></td>
          </tr>
   <tr class="">
            <td class="name1"><span class=""><img src="public/assets/img/Hellotter-logo-cyan-header.png" alt="ML" class="img-circle cimg"><b>Sufyan</b></span></td>
            <td class="phone1"><span class="ph1" >030165461110</span></td>
            <td class="Email1"><span class="" >abcdef@gmail.com</span></td>
            <td class="lastcall1"><span class="" style="color: gray;">today</span></td>
            <td class="dot2"><span class="" >...</span></td>
          </tr>



        </table>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <p class="ftnmbr"><a href="#" class="ftnmbr1">PREV</a> &nbsp;<a href="#"  class="ftnmbr1">1</a>, <a  href="#"  class="ftnmbr1">2</a>, <a href="#"  class="ftnmbr1">3</a>, <a href="#"  class="ftnmbr1">4</a> ....<a href="#"  class="ftnmbr1">8</a>, <a href="#"  class="ftnmbr1">9</a> &nbsp;<a href="#"  class="ftnmbr1">NEXT</a></p>
  </div>
</div>
</div>
</div>
</div>        
</div>

</div>
</div>
@endsection
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
