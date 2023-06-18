
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



        {{-- <div style=""> --}}
        <h3 style="float:left;"><button style="float:left; font-size:20px" class="btn btn-success mt-0 mb-0">DEPARTMENT: {{$getDepartment->department_name}}</button></h3>
        <h3 style="float:right;"><button style="float:left; font-size:20px" class="btn btn-success mt-0 mb-0"> {{$getLevel->level_name}}</button></h3> <br><br>
        <hr style="">
       {{-- </div> --}}

       <div style="margin-left: 10%; margin-right:10%" class="mt-5">

        <form style="width:" class="form" action="{{ url('upload_courses_to_departments') }}" method="post" enctype="multipart/form-data">

            @csrf

      <div class="table-responsive">

        <table style="padding-left:30%; padding-right:90px" class="table table-responsive table-hover">
            {{-- <tr>
                <td>S/N</td>
                <td>Course Code</td>
                <td>Course Title</td>
                <td>Course Unit</td>
                <td>Course Status</td>
                <td>Semester</td>
            </tr> --}}

            <tr style="text-align: center">
                <td>S/N</td>
                <td style="text-align: center">Course Code</td>
                <td>Course Title</td>
                <td>Course Unit</td>
                <td>Semester</td>
                <td>Set Course Status</td>
            </tr>

            @foreach($data as $data)
            <tr style="text-align: center">
                <td>{{$loop->iteration}}</td>
                <td> <input style="text-align:center" type="checkbox" name="courses_to_register[]" value="{{ $data->id }}" id=""> &nbsp; {{ $data->course_code }}</td>
                <td>{{ $data->course_title }}</td>
                <td>{{ $data->course_unit }}</td>
                <td>{{ $data->semester_name }}</td>

                <td>
                    <select name="set_course_status{{ $data->id }}" id="cities" class="form-control">

                        <option value="">Set Course Status</option>

                        <option required="required" value="1">Core</option>
                        <option required="required" value="2">Elective</option>

                    </select>
                </td>

            </tr>
            @endforeach

        </table>
    </div><br>

        {{-- HIDDEN FORMS TO BRING THOSE VARIABLES FROM THE COURSE REG PAGE TO THE UPLOAD PAGE
           HIDDEN FORMS TO BRING THOSE VARIABLES FROM THE COURSE REG PAGE TO THE UPLOAD PAGE
              HIDDEN FORMS TO BRING THOSE VARIABLES FROM THE COURSE REG PAGE TO THE UPLOAD PAGE --}}
        <div style="display:none" id="hidden_forms">
            {{-- <h3>Hidden Forms</h3> --}}
           <label for="">Programme Type: </label> <input type="text" name="prog_type" value="{{ $prog_type }}" id="" placeholder="Programme Type"><br><br>
                <label for="">Department: </label>  <input type="text" name="department" value="{{ $department }}" id="" placeholder="Department"><br><br>
                  <label for="">Level: </label>      <input type="text" name="level" value="{{ $level }}" id="" placeholder="Level"><br><br>
                          <label for="">Semester: </label>    <input type="text" name="semester" value="{{ $semester }}" id="" placeholder="Semester">
        </div><br>


        <input style="background-color:green; text-align:center" type="submit" value="Upload" class=" btn btn-success align-items-center">


    </form>



       </div>



       </div>


    <!-- Core -->
@include("ADMIN.script")
</body>

</html>
