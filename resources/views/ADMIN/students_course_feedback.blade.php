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




















        <h1 style="text-align:center; font-size:30px">STUDENTS' COURSE FEEDBACK</h1> <br><br>

        <div class="table-responsive">

            <table style="" id="example" class="table table-lg table-bordered table-hover">
                <thead class="thead-dark">
                    <h1 style="font-size: 25px; color:indigo">Please note that this is Students' Course Feedback ratings, and the ratings are <span style="color:red">over 5.</span> </h1>  <br><br>
                    <tr style="text-align:center">
                        <th style="text-align:center" scope="col">COURSE NAME </th>
                        <th style="text-align:center" scope="col">INSTRUCTOR'S NAME </th>
                        <th style="text-align:center" scope="col">SEMESTER / YEAR </th>
                        <th style="text-align:center" scope="col">OVERALL SATISFACTION </th>
                        <th style="text-align:center" scope="col">CLARITY OF TOPICS </th>
                        <th style="text-align:center" scope="col">REAL WORLD RELEVANCE </th>
                        <th style="text-align:center" scope="col">DEPTH AND BREADTH OF MATERIALS COVERED </th>
                        <th style="text-align:center" scope="col">EFFECTIVENESS OF INSTRUCTIONAL METHODS </th>
                        <th style="text-align:center" scope="col">STUDENTS ENGAGEMENT </th>
                        <th style="text-align:center" scope="col">CLARITY OF MATERIALS </th>
                        <th style="text-align:center" scope="col">ACCESSIBILITY OF COURSE MATERIALS </th>
                        <th style="text-align:center" scope="col">CLARITY OF GRADING CRITERIA </th>
                        <th style="text-align:center" scope="col">QUALITY OF INSTRUCTORS' FEEDBACK </th>
                        <th style="text-align:center" scope="col">ADDITIONAL COMMENTS </th>

                    </tr>
                </thead>
                <tbody>





                    @foreach($data as $data)
                    <tr style="text-align:center">
                        <td>{{$data->course_name}}</td>
                        <td>{{$data->instructor_name}}</td>
                        <td>{{$data->semester_year}}</td>
                        <td>{{$data->overall_satisfaction}} / 5</td>
                        <td>{{$data->clarity_of_topics}} / 5</td>
                        <td>{{$data->real_world_relevance}} / 5</td>
                        <td>{{$data->depth_and_breadth}} / 5</td>
                        <td>{{$data->instructional_methods_effectiveness}} / 5</td>
                        <td>{{$data->students_engagements}} / 5</td>
                        <td>{{$data->clarity_of_materials}} / 5</td>
                        <td>{{$data->Course_materials_availability}} / 5</td>
                        <td>{{$data->grading_criteria_clarity}} / 5</td>
                        <td>{{$data->quality_of_instructor_feedback}} / 5</td>
                        <td>{{$data->additional_comments}}</td>





                    </tr>
                    @endforeach



                </tbody>

            </table>
        </div>
        <!-- Core -->
        @include("ADMIN.script")
</body>





</html>
