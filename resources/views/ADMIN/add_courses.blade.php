<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')
    <link rel="icon" href="assets/newImages/Y-07.png" type="image/vnd.microsoft.icon" />
</head>

<body>



    @include('ADMIN.navbar')


    @if (session()->has('success_message'))
        <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{ session()->get('success_message') }}
        </div>
    @endif


    @if (session()->has('error_message'))
        <div class="alert alert-danger alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{ session()->get('error_message') }}
        </div>
    @endif


    <div class="container">

        <h1 class="pt-5"
            style="text-align:center; color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; border-radius:70px 10px 70px 10px; background-color:white;">
            ADD COURSES</h1>

        <form class="form-horizontal" action="{{ url('upload_courses') }}" method="post" enctype="multipart/form-data">

            @csrf




            <div class="form-group">
                <label class="control-label" for="email">Programme Type:</label>
                <select name="programme_type" id="myselection" class="myselection form-control" required="required">
                    <option value="">Select Programme Type</option>
                    <option class="form-control" value="7">Bachelor's Degree</option>
                    <option class="form-control" value="1">Diploma(ND)</option>
                    <option class="form-control" value="2">Certificate and Training</option>
                </select>
            </div>

            <div style="display:none" id="show1" class="diploma-display myDiv show1 myDiv1">

                <div class="form-group">
                    <label class="control-label" for="email">Faculty:</label>

                    <select style="" name="di_faculty" id="faculty1" class="faculty form-control">
                        <option value="">Select Faculty</option>
                        @foreach (App\Models\Faculty::orderBy('faculty_name')->get() as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->faculty_name }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label class="control-label" for="pwd">Department:</label>

                    <select style="width:" name="di_department" id="department" class="form-control department">
                        <option value="">Select Department</option>

                    </select>

                </div>

                <div class="form-group">
                    <label for="" class="input__label">Level:</label>
                    <select style="width:" name="di_level" id="states" class="form-control">
                        <option value="">Select Level</option>
                        @foreach (App\Models\Level::where('programme_type', '=', 1)->orderBy('level_name')->get() as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->level_name }}</option>
                        @endforeach

                    </select>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Semester:</label>
                    {{-- <div class="col-sm-10"> --}}
                    <select style="width:" name="semester" id="states" class="form-control">
                        @foreach ($data_sem as $data_sem)
                            <option value="{{ $data_sem->id }}">{{ $data_sem->semester_name }}</option>
                        @endforeach

                    </select>
                    {{-- </div> --}}
                </div>



                {{-- 
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Status:</label>
                   
                    <select style="width:" name="course_status" id="states" class="form-control">
                        @foreach ($data_stat as $data_stat)
                            <option value="{{ $data_stat->id }}">{{ $data_stat->status }}</option>
                        @endforeach

                    </select>
                 
                </div> --}}





                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Code:</label>
                    {{-- <div class="col-sm-10"> --}}
                    <input style="border:2px solid grey;" type="text" class="form-control" id="pwd"
                        placeholder="Enter course code" name="course_code">
                    {{-- </div> --}}
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Title:</label>
                    {{-- <div class="col-sm-10"> --}}
                    <input type="text" class="form-control" id="pwd" placeholder="Enter course title"
                        name="course_title">
                    {{-- </div> --}}
                </div>



                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Unit:</label>
                    {{-- <div class="col-sm-10"> --}}
                    <input type="number" class="form-control" id="pwd" placeholder="Enter course unit"
                        name="course_unit">
                    {{-- </div> --}}
                </div>



                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Description:</label>
                    {{-- <div class="col-sm-10"> --}}
                    <input type="text" class="form-control" id="pwd"
                        placeholder="Write a short note about the Course" name="course_description">
                    {{-- </div> --}}
                </div>






                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Image:</label>
                    {{-- <div class="col-sm-10"> --}}
                    <input style="border:2px solid grey" type="file" class="form-control" id="pwd"
                        placeholder="Enter Image" name="course_image">
                    {{-- </div> --}}
                </div>
            </div>

            <div style="display:none" id="show7" class="degree-display myDiv show7 myDiv7">
                <div class="form-group">
                    <label class="control-label" for="email">Faculty:</label>
                    <select style="" name="de_faculty" id="faculty7" class="faculty form-control">
                        <option value="">Select Faculty...</option>
                        @foreach (App\Models\Faculty::orderBy('faculty_name')->get() as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->faculty_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">Department:</label>
                    <select style="width:" name="de_department" id="department" class="form-control department">
                        <option value="">Select Department</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="input__label">Level:</label>
                    <select style="width:" name="de_level" id="states" class="form-control">
                        <option value="">Select Level</option>
                        @foreach (App\Models\Level::where('programme_type', '=', 7)->orderBy('level_name')->get() as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->level_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="email">Semester:</label>
                    <select style="" name="semester" id="states" class="form-control">
                        <option value="">Select Semester</option>
                        @foreach (App\Models\Semesters::orderBy('semester_name')->get() as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->semester_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="email">Course Status:</label>

                    <select style="" name="course_status" id="states" class="form-control">
                        <option value="">Select Status</option>
                        @foreach (App\Models\CoursesStatuses::orderBy('status')->get() as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Code:</label>
                    <input style="border:2px solid grey;" type="text" class="form-control" id="pwd"
                        placeholder="Enter course code" name="course_code">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Title:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter course title"
                        name="course_title">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Unit:</label>
                    <input type="number" class="form-control" id="pwd" placeholder="Enter course unit"
                        name="course_unit">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Description:</label>
                    <input type="text" class="form-control" id="pwd"
                        placeholder="Write a short note about the Course" name="course_description">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Course Image:</label>
                    <input style="border:2px solid grey" type="file" class="form-control" id="pwd"
                        placeholder="Enter Image" name="course_image">
                </div>
            </div>            

            <div id="show2" class="myDiv show2" style="display:none">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Name of Certificate Course:</label>
                    {{-- <div class="col-sm-10"> --}}
                    <input type="text" class="form-control" id="pwd" placeholder="Write course name"
                        name="certificate_course">
                    {{-- </div> --}}
                </div>
            </div>





            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success mt-4"
                        style="background:green; text-align:center">Submit</button>
                </div>
            </div>
        </form>

    </div>





    <!-- Core -->
    @include('ADMIN.script')
</body>


<script type="text/javascript">
    $(document).ready(function() {

        $('.myselection').on('change', function() {
            // alert("Progtype has been selected");
            if ($(this).val() != "") {

                get_dept_by_fac_and_prog_type($(this).val());
            }
        });

        $('.faculty').on('change', function() {
            // get selection value
            let selected = $("#myselection").val();

            if (selected != "") {

                get_dept_by_fac_and_prog_type(selected);
            }
        });




    });

    function get_dept_by_fac_and_prog_type(index) {

        var programme_type = $('.myselection').val();
        var faculty_id = $('#faculty' + index).val();
        console.log(faculty_id);

        $.post('{{ route('getDepartments') }}', {
            _token: '{{ csrf_token() }}',
            programme_type: programme_type,
            faculty_id: faculty_id
        }, function(data) {
            $('.department').html(null);
            $('.department').append($(
                '<option value="{{ $value->id }}">Select Department</option>', {

                }));
            // console.log("divdata", $('#department'))

            for (var i = 0; i < data.length; i++) {
                $('.department').append($('<option>', {
                    value: data[i].id,
                    text: data[i].department_name
                }));

            }
        });
    }
</script>


<script>
    $(document).ready(function() {
        $('.myselection').on('change', function() {
            var demovalue = $(this).val();
            // $("div.myDiv").hide();
            $(".show1").hide();
            $(".show2").hide();
            $(".show7").hide();
            $(".show" + demovalue).show();

        });
    });
</script>



<script type="text/javascript">
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.visibility = 'visible';
        } else document.getElementById('ifYes').style.visibility = 'hidden';


    }
</script>


<script type="text/javascript">
    function whyCheck() {

        if (document.getElementById('degCheck').checked) {
            document.getElementById('ifYes').style.visibility = 'visible';
        } else document.getElementById('ifYes').style.visibility = 'hidden';
    }
</script>




<script type="text/javascript">
    $('#countries').on('change', function() {
        get_state_by_country();
    });

    function get_state_by_country() {
        var faculty_id = $('#countries').val();
        $.post('{{ route('getDepartments') }}', {
            _token: '{{ csrf_token() }}',
            faculty_id: faculty_id
        }, function(data) {
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



    //     function get_dept_by_fac_and_prog_type(index) {

    //     var programme_type = $('.myselection').val();
    //     var faculty_id = $('#faculty' + index).val();
    //     console.log(faculty_id);

    //     $.post('{{ route('getDepartments') }}', {
    //         _token: '{{ csrf_token() }}',
    //         programme_type: programme_type,
    //         faculty_id: faculty_id
    //     }, function(data) {
    //         $('.department').html(null);
    //         $('.department').append($(
    //             '<option value="{{ $value->id }}">Select Department</option>', {

    //             }));
    //         // console.log("divdata", $('#department'))

    //         for (var i = 0; i < data.length; i++) {
    //             $('.department').append($('<option>', {
    //                 value: data[i].id,
    //                 text: data[i].department_name
    //             }));

    //         }
    //     });
    // }
</script>










</html>
