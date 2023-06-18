
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


      <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:20px">SITE SETTINGS</h1>


      <!-- <span style="color:red; font-size:22px">Fill all details carefully. Do not leave any field blank.</span>
      <div class="card card_border mt-2 py-2 mb-4"> -->

                <div class="card-body" back>

                <form class="form-horizontal" action="{{url('upload_students')}}" method="post" enctype="multipart/form-data">

   @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Site Name:</label>
                                <input type="text" name="site_name" class="form-control input-style" id=""
                                    placeholder="Enter Site Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Site Phone:</label>
                                <input type="number" name="site_phone" class="form-control input-style" id=""
                                    placeholder="Enter Site Phone">
                            </div>
                        </div>


                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="" class="input__label">Site Address<:/label>
                                <input type="text" name="site_address" class="form-control input-style" id=""
                                    placeholder="Enter Site Address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">About Site:</label>
                                <input type="text" name="site_about" class="form-control input-style" id=""
                                    placeholder="Enter some contents">
                            </div>
                        </div>

                        <div class="form-row">
                           <div class="form-group col-md-6">
                                <label for="" class="input__label">Facebook Page:</label>
                                <input type="text" name="site_facebook" class="form-control input-style" id=""
                                    placeholder="Enter Facebook link">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Twitter Page:</label>
                                <input type="text" name="site_about" class="form-control input-style" id=""
                                    placeholder="Enter Twitter link">
                            </div>
                        </div>



                        <div class="form-row">
                           <div class="form-group col-md-6">
                                <label for="" class="input__label">Instagram Page:</label>
                                <input type="text" name="site_instagram" class="form-control input-style" id=""
                                    placeholder="Enter Instagram link">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Youtube Page:</label>
                                <input type="text" name="site_youtube" class="form-control input-style" id=""
                                    placeholder="Enter Youtube link">
                            </div>
                        </div>



                        <div class="form-group">
                           <div class="form-group col-md-12">
                                <label for="" class="input__label">Quick Notice/Recent News:</label>
                                <input type="text" name="site_quicknotice" class="form-control input-style" id=""
                                    placeholder="Enter some contents">
                            </div>
                        </div>










                        <button style="background:green; font-size:20px" type="submit" class="btn btn-success btn-style mt-4">Submit</button>
                    </form>
                </div>
            </div>








    <!-- Core -->
@include("ADMIN.script")
</body>



</html>
