
<!DOCTYPE html>
<html lang="en">

<head>
@include("ADMIN.css")

<style>
    /* .old{
        width:500px;
        height:500px;
    } */
</style>
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



      <h1 class="ml-4 mt-4">SITE LOGO</h1>

      @foreach($data as $data)

      <img style="height:" height="300" width="300" src="{{ asset('SiteLogo/' . $data->logo) }}" alt="Site Logo">

      <a href="{{url('edit_site_logo', $data->id)}}" class="btn btn-info mt-5 mb-1">Edit Logo</a> <br>

 @endforeach



       <!-- Button to Open the Modal -->
<button style="background-color:#5e72e4; text-align:center;   box-shadow: 5px 5px 5px  black;" type="button" class="btn btn-primary text-center mr-2" data-bs-toggle="modal" data-bs-target="#myModal">
  Add Logo
</button>

<!-- <button style="background-color:tomato; text-align:center;   box-shadow: 5px 5px 5px  black;" type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModal2">
  Edit Logo
</button> -->



<!-- Add Logo -->

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div style="border-radius:50px" class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 style="text-align:center; color:white" class="modal-title">Add Logo</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form style="width:30px" class="form" action="{{url('upload_site_logo')}}" method="post" enctype="multipart/form-data">
          @csrf




        <div class="form-group">
        <label style="font-weight:bolder" for="price">Logo</label> <br>
       <input type="file" name="file" id="" required="required">
        </div> <br>

        <div class="form-group">
          <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white" type="submit" class="btn btn-success" value="Submit">
        </div>



        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> <br><br>









<!-- Edit Logo -->

<!-- The Modal -->
<div class="modal fade" id="myModal2">
  <div class="modal-dialog">
    <div style="border-radius:50px" class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 style="text-align:center; color:white" class="modal-title">Edit Logo</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form style="width:30px" class="form" action="{{url('update_site_logo', $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf


          <div class="form-group">
         <label style="font-size:20px"  for="img">Old Image:</label><br>
         <img class="old" style="height:300; width:300" height="" width="" src="/SiteLogo/{{$data->logo}}" alt="">
       </div>

       <div class="form-group">
         <label style="font-size:20px"  for="imgg"><span style="font-size:22px">Change Image</span></label> <br> <br>
         <input type="file" name="logoimage">
       </div>



        <div class="form-group">
          <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white" type="submit" class="btn btn-success" value="Update">
        </div>



        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> <br><br>





    <!-- Core -->
@include("ADMIN.script")
</body>

</html>
