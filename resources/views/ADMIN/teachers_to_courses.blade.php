
<!DOCTYPE html>
<html lang="en">

<head>
@include("ADMIN.css")
</head>

<body>



       @include("ADMIN.navbar")

       <div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">ASSIGN TEACHERS TO COURSES</h1>


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



      <form style="width:100%" class="form" action="{{url('assign_teachers_to_courses')}}" method="post" enctype="multipart/form-data">
          @csrf





          <div class="form-group">
                            <label class="form-label align-left" style="text-align:left">Teacher</label>
                            <select name="teacher_id" id="cities" class="form-control">
                                <option value="" required="required">Select Teacher</option>

                                @foreach($data as $data)

                                <option value="{{$data->id}}" required="required">{{$data->first_name}} {{$data->last_name}}</option>

                                @endforeach

                            </select>
        </div>



        <div class="form-group col-md-12"  style="border:1px solid grey; padding:15px">
                             <label style="color:red; font-size:22px" for="" class="input__label">Choose Programme type*</label> <br>
                                <label for="">Diploma</label>
                                <input onclick="javascript:dip_or_cert();" class="form-control input-style" type="radio" id="dipcert1" name="programme_type" value="1" required="required"> &nbsp; &nbsp;
                                <label for="">Certificate & Training</label>
                                <input onclick="javascript:dip_or_cert();" class="form-control input-style"  type="radio" id="dipcert2" name="programme_type" value="2" required="required">
                            </div>






                            <div id="cert" style="visibility:hidden">

<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name of Certificate Course:</label>

      <select style="width:" name="name_of_certificate_course" id="" class="form-control" >
      @foreach($cert_courses as $cert_courses)
      <option value="{{$cert_courses->id}}">{{$cert_courses->course_title}}</option>
                 @endforeach
         </select>

    </div>
</div>




     <div id="d_c" style="visibility:hidden">


                         <div class="form-group">
                            <label for="" class="input__label">Level:</label>
                            <select style="width:" name="level" id="states" class="form-control">
                            <option value="" required="required">Select Level</option>
                            @foreach($level as $level)
                                        <option value="{{$level->id}}" required="required">{{$level->level_name}}</option>
                            @endforeach

                            </select>
                         </div>




                                            <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Faculty:</label>

                        <select style="" name="faculty" id="faculty" class="form-control" >
                                                    <option value="">Select Faculty</option>
                                                    @foreach(App\Models\Faculty::orderBy('faculty_name')->get() as $key => $value)
                                                        <option value="{{ $value->id }}" >{{ $value->faculty_name }}</option>
                                                    @endforeach
                            </select>

                        </div>


                            <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Department:</label>

                            <select style="width:" name="department" id="department" class="form-control" >
                                        <option value="" >Select Department</option>

                                </select>

                            </div>





                            <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Course:</label>

                            <select style="width:" name="course" id="course" class="form-control" >
                                        <option value="" >Select Course</option>

                                </select>

                            </div>

</div>






     <div class="form-group">
          <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white" type="submit" class="btn btn-success" value="Submit">
        </div>



        </form>









    <!-- Core -->
@include("ADMIN.script")
</body>



<script type="text/javascript">
    function dip_or_cert() {
    if (document.getElementById('dipcert1').checked) {
        document.getElementById('d_c').style.visibility = 'visible';
        document.getElementById('cert').style.visibility = 'hidden';
    }
    else{
        document.getElementById('d_c').style.visibility = 'hidden';
        document.getElementById('cert').style.visibility = 'visible';
    }



}
</script>




<script type="text/javascript">
        $('#faculty').on('change', function() {
                get_dept_by_fac();
            });
                function get_dept_by_fac(){
                    var faculty_id = $('#faculty').val();
                    $.post('{{route('getDepartments')}}',{_token:'{{ csrf_token() }}', faculty_id:faculty_id}, function(data){
                        $('#department').html(null);
                        $('#department').append($('<option value="{{ $value->id }}">Select Department</option>', {

                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#department').append($('<option>', {
                                value: data[i].id,
                                text: data[i].department_name
                            }));

                        }
                });
            }
</script>









<script type="text/javascript">
        $('#department').on('change', function() {
                get_course_by_dept();
            });
                function get_course_by_dept(){
                    var department_id = $('#department').val();
                    $.post('{{route('getCourse')}}',{_token:'{{ csrf_token() }}', department_id:department_id}, function(data){
                        $('#course').html(null);
                        $('#course').append($('<option value="{{ $value->id }}">Select Course</option>', {

                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#course').append($('<option>', {
                                value: data[i].id,
                                text: data[i].course_title
                            }));

                        }
                });
            }
</script>


</html>
