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
                <img src="public/images/Hellotter-logo-cyan.png" alt="" class="image5">
                </div>

        <div class="row mt-3">
            <div class="text-center col-sm-12">
                <h4 class="text-center text-white logo2">hellotter</h4>
            </div>




        </div>
        <div class="row mt-3">
        <div class="text-center col-sm-12">
        <div class="center1">
        <input id="meeting" type="meeting"  placeholder="Create Meeting" class="iptx1" name="meeting" required>

 
       </div>
        </div>
        </div>    
            <div class="row mt-4">
                <div class="btn1">
                   
                    <a href="{{url('meeting/'.$id)}}" title=""><button type="submit" class="btn btn-default login"><b>Create</b></button></a>
                </div>

            </div>
             <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>
