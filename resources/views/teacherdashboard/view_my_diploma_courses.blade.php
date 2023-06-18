
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


  
<h1 style="text-align:center; font-size:30px">My Diploma Courses</h1>

<div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
<thead class="thead-dark">
<tr style="text-align:center">
<th style="text-align:center" scope="col">S/N</th>
<th style="text-align:center" scope="col">LEVEL</th>
      <th style="text-align:center" scope="col">FACULTY</th>
      <th style="text-align:center" scope="col">DEPARTMENT</th>
      <th style="text-align:center" scope="col">COURSE TITLE</th>
      <th style="text-align:center" scope="col">VIEW COURSE PROFILE</th>


</tr>
</thead>
<tbody>





@foreach($data2 as $data2)

<tr style="text-align:center">
<td>{{$loop->iteration}}</td>
<td>{{$data2->level_name}}</td>
<td>{{$data2->faculty_name}}</td>
<td>{{$data2->department_name}}</td>
<td>{{$data2->course_title}}</td>
<td class=""> <a class="btn btn-success" href="{{url('teacher_view_course_profile', $data2->id)}}">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></td>





</tr>
@endforeach



</tbody>

</div>


       
    <!-- Core -->
@include("teacherdashboard.script")
</body>

</html>
