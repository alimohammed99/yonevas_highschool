
<!DOCTYPE html>
<html lang="en">

<head>
@include("ADMIN.css")
</head>

<body>



       @include("ADMIN.navbar")

       <div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">EDIT LEVEL</h1>


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



      <form style="width:100%" class="form" action="{{url('update_level', $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf



          <div class="form-group">


            <label class="control-label col-sm-2" for="email">Programme Type:</label>
               {{-- <div class="col-sm-10"> --}}
                    <select name="programme_type" id="cities" class="form-control">
                        <option value="" required="required">Select Programme Type</option>

                        @foreach($prog_type as $prog_type)

                        <option value="{{$prog_type->id}}" required="required">{{$prog_type->programme}}</option>

                        @endforeach

                    </select>
               {{-- </div> --}}
         </div>





        <div class="form-group">
        <label style="font-size:22px" for="price">Level Name</label> <br>
          <input style="color:tomato; border-radius:30px; padding:30px;" class="form-control" type="text" name="level_name" value="{{$data->level_name}}" required="required">
        </div>




     <div class="form-group">
          <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white" type="submit" class="btn btn-success" value="Update">
        </div>


        <div class="form-group">
      <a class="btn btn-info" href="{{url('level')}}">View all Levels</a>
        </div>



        </form>













    <!-- Core -->
@include("ADMIN.script")
</body>

</html>
