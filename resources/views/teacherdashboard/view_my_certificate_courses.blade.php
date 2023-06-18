
<!DOCTYPE html>
<html lang="en">

<head> 
@include("teacherdashboard.css")
</head>

<body>



       @include("teacherdashboard.navbar")

       @if(session()->has('success_message'))
      <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('success_message')}}
      </div>
      @endif


      @if(session()->has('error_message'))
      <div class="alert alert-danger alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('error_message')}}
      </div>
      @endif


  
<h1 style="text-align:center; font-size:30px">My Certificate Courses</h1>

<div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
<thead class="thead-dark">
<tr style="text-align:center">

<th style="text-align:center" scope="col">S/N</th>
<th style="text-align:center" scope="col">COURSE TITLE</th>


</tr>
</thead>
<tbody>





@foreach($data2 as $data2)

<tr style="text-align:center">

<td>{{$loop->iteration}}</td>
<td>{{$data2->course_title}}</td>





</tr>
@endforeach



</tbody>

</div>


       
    <!-- Core -->
@include("teacherdashboard.script")
</body>

</html>
