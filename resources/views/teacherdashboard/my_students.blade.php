
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


      <div class="container">




















       <h1 style="text-align:center; font-size:30px">All Students</h1>

       <div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
  <thead class="thead-dark">
    <tr style="text-align:center">
    <th style="text-align:center" scope="col">FIRST NAME</th>
      <th style="text-align:center" scope="col">LAST NAME</th>
      <th style="text-align:center" scope="col">EMAIL </th>
      <th style="text-align:center" scope="col">PHONE NUMBER</th>
      <th style="text-align:center" scope="col">PROGRAMME TYPE</th>
      <th style="text-align:center" scope="col">STUDENT MATRIC NO.</th>
      <!-- <th style="text-align:center" scope="col">EDIT MATRIC NO.</th> -->
      <th style="text-align:center" scope="col">VIEW PROFILE</th>
      <th style="text-align:center" scope="col">SEND EMAIL</th>
      <th style="text-align:center" scope="col">EDIT</th>
      <th style="text-align:center" scope="col">DELETE</th>

    </tr>
  </thead>
  <tbody>
<tr>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
    <td>AAAA</td>
</tr>



  </tbody>

</table>
</div>
    <!-- Core -->
@include("teacherdashboard.script")
</body>





</html>
