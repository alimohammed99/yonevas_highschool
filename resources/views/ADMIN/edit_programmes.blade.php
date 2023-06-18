
<!DOCTYPE html>
<html lang="en">

<head>
@include("ADMIN.css")
</head>

<body>



       @include("ADMIN.navbar")

       <div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">EDIT PROGRAMME</h1>


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



      <form style="width:100%" class="form" action="{{url('update_programmes', $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf





        <div class="form-group">
        <label style="font-size:22px" for="price">Programme</label> <br>
          <input style="color:tomato; border-radius:30px; padding:30px;  width:40%" class="form-control" type="text" name="programme_name" value="{{$data->programme}}" required="required">
        </div>




     <div class="form-group">
          <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white" type="submit" class="btn btn-success" value="Update">
        </div>


        <div class="form-group">
      <a class="btn btn-info" href="{{url('view_programmes')}}">View all Programmes</a>
        </div>



        </form>













    <!-- Core -->
@include("ADMIN.script")
</body>

</html>
