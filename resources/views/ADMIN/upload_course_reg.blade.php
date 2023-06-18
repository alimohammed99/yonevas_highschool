
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

        <h1 class="pt-5" style="text-align:center; color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; border-radius:70px 10px 70px 10px; background-color:white;">UPLOAD COURSE REGISTRATION</h1>
<br>
        <h1 class="text-danger pb-3" style="font-size:22px">You can filter by:</h1>

        <form style="justify-content: center" class="form-horizontal justify-content-center align-items-center" action="{{url('course_reg_according_to_departments')}}" method="get">

            {{-- <fieldset style="border: 2px solid grey; justify-content: center"> --}}

                {{-- <legend>Course Registration:</legend> --}}

            {{-- <div class="form-group">


                        <label class="control-label col-sm-2" for="email">Programme Type:</label>
                           <div class="col-sm-10">
                                <select required="required" name="prog_type" id="cities" class="form-control">
                                    <option value="" required="required">Select Programme Type</option>

                                    @foreach($prog_type as $prog_type)

                                    <option value="{{$prog_type->id}}" required="required">{{$prog_type->programme}}</option>

                                    @endforeach

                                </select>
                            </div>
           </div> --}}




               <div class="form-group">
    <label class="control-label col-sm-2" for="email">Programme Type:</label>
      <div class="col-sm-10">
      <select required="required" style="" name="prog_type" id="prog_type" class="form-control" >
                             <option value="" required="required">Select Programme Type</option>
                                @foreach(App\Models\ProgrammeType::orderBy('programme')->get() as $key => $value)
                                    <option value="{{ $value->id }}" >{{ $value->programme }}</option>
                                @endforeach
        </select>
      </div>
    </div>





        <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Department:</label>
      <div class="col-sm-10">
      <select required="required" style="width:" name="department" id="department" class="form-control" >
                 <option required="required" value="" >Select Department</option>

         </select>
      </div>
    </div>




            {{-- <div class="form-group">


                <label class="control-label col-sm-2" for="email">Department:</label>
                <div class="col-sm-10">
                        <select required="required" name="department_id" id="level" class="form-control">
                            <option value="" required="required">Select Department</option>

                            @foreach($departments as $departments)

                            <option value="{{$departments->id}}" required="required">{{$departments->department_name}}</option>

                            @endforeach

                        </select>
                </div>
            </div>
 --}}



     <div class="form-group">


        <label class="control-label col-sm-2" for="email">Level:</label>
           <div class="col-sm-10">
                <select required="required" name="level" id="level" class="form-control">
                    <option value="" required="required">Select Level</option>

                    @foreach($level as $level)

                    <option value="{{$level->id}}" required="required">{{$level->level_name}}</option>

                    @endforeach

                </select>
           </div>
     </div>



     <div class="form-group">


        <label class="control-label col-sm-2" for="email">Semester:</label>
           <div class="col-sm-10">
                <select required="required" name="semester" id="cities" class="form-control">
                    <option value="" required="required">Select Semester</option>

                    @foreach($semester as $semester)

                    <option value="{{$semester->id}}" required="required">{{$semester->semester_name}}</option>

                    @endforeach

                </select>
           </div>
     </div>





     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-success mt-4" style="background:green; text-align:center">Submit</button>
       </div>
     </div>

    {{-- </fieldset> --}}

        </form>

       </div>


    <!-- Core -->
@include("ADMIN.script")







</body>

<script type="text/javascript">
        $('#prog_type').on('change', function() {
                get_dept_by_prog();
            });
                function get_dept_by_prog(){
                    var programme_type = $('#prog_type').val();
                    $.post('{{route('getDepartmentsForProgType')}}',{_token:'{{ csrf_token() }}', programme_type:programme_type}, function(data){
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


</html>
