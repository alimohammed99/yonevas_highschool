
<!DOCTYPE html>
<html lang="en">

<head>
@include("ADMIN.css")
</head>

<body>



       @include("ADMIN.navbar")


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


      <div class="container">


      <h3 style="float:left;"><button style="float:left; font-size:42px" class="btn btn-success mt-5 mb-3">{{$getDepartment->department_name}} Courses</button></h3>




       <div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
  <thead class="thead-dark">
    <tr style="text-align:center">
        <th style="text-align:center" scope="col">FACULTY</th>
        <th style="text-align:center" scope="col">DEPARTMENT</th>
        <th style="text-align:center" scope="col">LEVEL</th>
        <th style="text-align:center" scope="col">COURSE CODE</th>
        <th style="text-align:center" scope="col">COURSE TITLE</th>
        <th style="text-align:center" scope="col">COURSE DESCRIPTION</th>
        <th style="text-align:center" scope="col">COURSE STATUSES</th>
        <th style="text-align:center" scope="col">COURSE UNIT</th>
        <th style="text-align:center" scope="col">IMAGE</th>
        <th style="text-align:center" scope="col">SEMESTER</th>
        <th style="text-align:center" scope="col">EDIT</th>
        <th style="text-align:center" scope="col">DELETE</th>

    </tr>
  </thead>
  <tbody>


@foreach($data as $data)

<tr style="color:black; text-align:center" class="table-">

      <td>{{$data->faculty_name}}</td>
      <td>{{$data->department_name}}</td>
      <td>{{$data->level_name}}</td>
      <td>{{$data->course_code}}</td>
      <td>{{$data->course_title}}</td>
      <td>{{$data->course_description}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->course_unit}}</td>
      <td><img style="height:" height="300" width="300" src="diplomaCourseImages/{{$data->image}}" alt=""></td>
      <td>{{$data->semester_name}}</td>
      <td class=""> <a class="btn btn-info" href="{{url('edit_courses', $data->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></td>
      <td class=""><a onclick="return confirm('Are you sure?')"  class="btn btn-danger" href="{{url('delete_courses', $data->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></a> </td>


</tr>
@endforeach





  </tbody>

</table>
</div>
    <!-- Core -->
@include("ADMIN.script")
</body>

</html>
