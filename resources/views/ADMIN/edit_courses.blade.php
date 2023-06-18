
<!DOCTYPE html>
<html lang="en">

<head>
@include("ADMIN.css")
</head>

<body>



       @include("ADMIN.navbar")

       <div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">EDIT COURSES</h1>


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



      <form class="form-horizontal" action="{{url('update_courses', $data->id)}}" method="post" enctype="multipart/form-data">

          @csrf

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Faculty:</label>
      <div class="col-sm-10">
      <select style="" name="faculty_id" id="countries" class="form-control">
                                <option value="">Select Faculty</option>
                                @foreach(App\Models\Faculty::orderBy('faculty_name')->get() as $key => $value)
                                    <option value="{{ $value->id }}" required="required">{{ $value->faculty_name }}</option>
                                @endforeach
        </select>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Department:</label>
      <div class="col-sm-10">
      <select style="width:" name="department_id" id="states" class="form-control">
                 <option value="" required="required">Select Department</option>

         </select>
      </div>
    </div>







    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Semester:</label>
      <div class="col-sm-10">
      <select style="width:" name="semester" id="states" class="form-control">
      @foreach($data_sem as $data_sem)
                 <option value="{{$data_sem->id}}" required="required">{{$data_sem->semester_name}}</option>



    @endforeach

         </select>
      </div>
    </div>




    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Course Status:</label>
      <div class="col-sm-10">
      <select style="width:" name="course_status" id="states" class="form-control">
      @foreach($data_stat as $data_stat)
                 <option value="{{$data_stat->id}}" required="required">{{$data_stat->status}}</option>



    @endforeach

         </select>
      </div>
    </div>





    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Course Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" value="{{$data->course_title}}" name="course_title">
      </div>
    </div>




    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Course Code:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" value="{{$data->course_code}}" name="course_code">
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Course Unit:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" value="{{$data->course_unit}}" name="course_unit">
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Course Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" value="{{$data->course_description}}"name="course_description">
      </div>
    </div>




    <div class="form-group">
         <label style="font-size:20px"  for="img">Old Image:</label>
         <img height="300" width="300" src="/diplomaCourseImages/{{$data->image}}" alt="">
       </div>

       <div class="form-group">
         <label style="font-size:20px"  for="imgg"><span style="font-size:22px">Change Image</span></label> <br> <br>
         <input type="file" name="image">
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
<script type="text/javascript">
        $('#countries').on('change', function() {
                get_state_by_country();
            });
                function get_state_by_country(){
                    var faculty_id = $('#countries').val();
                    $.post('{{route('getDepartments')}}',{_token:'{{ csrf_token() }}', faculty_id:faculty_id}, function(data){
                        $('#states').html(null);
                        $('#states').append($('<option value="{{ $value->id }}">Select Department</option>', {

                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#states').append($('<option>', {
                                value: data[i].id,
                                text: data[i].department_name
                            }));

                        }
                });
            }
     </script>

</html>
