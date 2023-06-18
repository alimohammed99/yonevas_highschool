
<!DOCTYPE html>
<html lang="en">

<head>
@include("ADMIN.css")
</head>

<body>



       @include("ADMIN.navbar")

       <div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">EDIT CERTIFICATE COURSES</h1>


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



      <form class="form-horizontal" action="{{url('update_certificate_courses', $data->id)}}" method="post" enctype="multipart/form-data">

          @csrf




    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Course Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" value="{{$data->course_title}}" name="course_title">
      </div>
    </div>









    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success mt-4" style="background:green; text-align:center">Submit</button>
      </div>
    </div>
  </form>












    <!-- Core -->
@include("ADMIN.script")
</body>

</html>
