
<!DOCTYPE html>
<html lang="en">

<head> 
@include("teacherdashboard.css")
</head>

<body>



       @include("teacherdashboard.navbar")
  
       

<div class=" container col-lg-12" style="overflow:scroll;" class="image-responsive">




<iframe style="overflow:scroll" src="/staffcv/{{$data->staff_cv}}" height="700" width="1000" frameborder="0"></iframe>


</div>

    <!-- Core -->
@include("teacherdashboard.script")
</body>

</html>
