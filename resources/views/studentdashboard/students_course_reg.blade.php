<!DOCTYPE html>
<html lang="en">

<head>
    @include('studentdashboard.css')
</head>

<body>



    @include('studentdashboard.navbar')

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


        <br><br>

        {{-- <div style=""> --}}
        <h3 style="float:left;"><button style="float:left; font-size:20px"
                class="btn btn-success mt-0 mb-0">DEPARTMENT<span style="font-size:27px">:</span>
                {{ $getStudentDepartment->department_name }} </button></h3> <br><br><br>


        <hr style="">
        {{-- </div> --}}

        <div class="container mt-2" style="border: 2px solid grey; width:50rem">
            <h2 class="text-center pt-4">List of registrable courses for currentSession currentLevel</h2>
            <span class="text-uppercase">Note:</span>
            <table class="table">
                <tr>
                    <td colspan="2">Harmattan Semester</td>
                </tr>
                <tr>
                    <td>Minimum Credit Required:</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>Maximum Credit Required:</td>
                    <td>00</td>
                </tr>
            </table>
        </div>

        <div style="margin-left: 0%; margin-right:0%" class="mt-5">

            <form style="width:" class="form" action="{{ url('students_to_course_reg') }}" method="post"
                enctype="multipart/form-data">

                @csrf

                <div class="table-responsive">

                    <table style="width:100%; padding-left:; padding-right:"
                        class="table table-bordered table-responsive table-hover">
                        <tr style="text-align:center; color:white; background-color:rgb(18, 18, 63)">
                            <td style="">S/N</td>
                            {{-- <td style=""></td> --}}
                            <td style="">Course Code</td>
                            <td style="">Course Title</td>
                            <td style="">Course Unit</td>
                            <td style="">Course Status</td>
                            <td style="">Semester</td>
                        </tr>

                        {{-- <tr style="text-align: center">
                            <td>S/N</td>
                            <td style="text-align: center">Course Code</td>
                            <td>Course Title</td>
                            <td>Course Unit</td>
                            <td>Semester</td>
                            <td>Set Course Status</td>
                        </tr> --}}
                        {{-- <tr>
                           <span style="text-align:center; background-color:lightblue; padding:15px; font-size:25px">COMPULSORY COURSE(S)</span>
                        </tr> --}}

                        <tr style="text-align:center">

                            <td style="background:green; color:white; font-size:22px" colspan="7">COMPULSORY
                                COURSE(S)</td>

                        </tr>



                        @foreach ($getStudentsData1 as $studentsData1)
                            <tr style="text-align: center">
                                <td>{{ $loop->iteration }}</td>
                                <td> <input style="text-align:center; border-radius:3px" type="checkbox"
                                        name="students_courses_to_register[]" value="{{ $studentsData1->id }}"
                                        id=""> &nbsp; {{ $studentsData1->course_code }}</td>
                                {{-- <td></td> --}}
                                <td>{{ $studentsData1->course_title }}</td>
                                <td>{{ $studentsData1->course_unit }}</td>
                                <td>{{ $studentsData1->status }}</td>
                                <td>{{ $studentsData1->semester_name }}</td>
                                {{-- <td></td> --}}
                            <tr>
                        @endforeach

                        <tr style="text-align:center">

                            <td style="background:rgb(14, 88, 112); color:white; font-size:22px" colspan="7">
                                ELECTIVE(S)</td>

                        </tr>




                        @foreach ($getStudentsData2 as $studentsData2)
                            <tr style="text-align: center">
                                <td>{{ $loop->iteration }}</td>
                                <td> <input style="text-align:center; border-radius:3px" type="checkbox"
                                        name="students_courses_to_register[]" value="{{ $studentsData2->id }}"
                                        id=""> &nbsp; {{ $studentsData2->course_code }}</td>
                                {{-- <td></td> --}}
                                <td>{{ $studentsData2->course_title }}</td>
                                <td>{{ $studentsData2->course_unit }}</td>
                                <td>{{ $studentsData2->status }}</td>
                                <td>{{ $studentsData2->semester_name }}</td>
                                {{-- <td></td> --}}
                            <tr>
                        @endforeach




                    </table>


                </div><br>

                <!--<input style="background-color:green; width:; padding-left:30px; padding-right:30px; text-align:center"-->
                <!--    type="submit" value="Save" class=" btn btn-success align-items-center">-->

            </form>




        </div>



        <!-- Core -->
        @include('studentdashboard.script')
</body>

</html>
