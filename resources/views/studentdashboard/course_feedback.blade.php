<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    @include('studentdashboard.css')

    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .slidecontainer .slider {
            /* background-color: red; */
            width: 100% !important;
        }

        .slidecontainer {
            width: 100%;
            /* Width of the outside container */
        }

        /* The slider itself */
        .slider {
            -webkit-appearance: none;
            /* Override default CSS styles */
            appearance: none;
            width: 100%;
            /* Full-width */
            height: 25px;
            /* Specified height */
            background: #d3d3d3;
            /* Grey background */
            outline: none;
            /* Remove outline */
            opacity: 0.7;
            /* Set transparency (for mouse-over effects on hover) */
            -webkit-transition: .2s;
            /* 0.2 seconds transition on hover */
            transition: opacity .2s;
        }

        /* Mouse-over effects */
        .slider:hover {
            opacity: 1;
            /* Fully shown on mouse-over */
        }

        /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            /* Override default look */
            /*  appearance: none;*/
            width: 25px;
            /* Set a specific slider handle width */
            height: 25px;
            /* Slider handle height */
            background: #04AA6D;
            /* Green background */
            cursor: pointer;
            /* Cursor on hover */
        }

        .slider::-moz-range-thumb {
            width: 25px;
            /* Set a specific slider handle width */
            height: 25px;
            /* Slider handle height */
            background: #04AA6D;
            /* Green background */
            cursor: pointer;
            /* Cursor on hover */
        }
    </style>

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


    <h1
        style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:20px">
        COURSE FEEDBACK</h1>


    <span style="color:red; font-size:22px">Please take a few minutes to provide feedback on your experience with the
        course program. <br> Your input is valuable to help us improve and enhance our offerings.
    </span>
    <div class="card card_border mt-2 py-2 mb-4">

        <div class="card-body" back>

            <form class="form-horizontal" action="{{ url('submit_course_feedback') }}" method="post"
                enctype="multipart/form-data">

                @csrf


                <label style="color:cornflowerblue; font-weight:bolder; font-size:25px;" for="">COURSE
                    INFORMATION</label> <br>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Course Name:</label>
                        <input type="text" name="course_name" class="form-control input-style"
                            placeholder="Enter Course Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Instructor's
                            Name:</label>
                        <input type="text" name="instructor_name" class="form-control input-style"
                            placeholder="Enter Instructor's name">
                    </div>
                    <div class="form-group col-md-4">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Semester / Year:</label>
                        <input type="text" name="semester_year" class="form-control input-style"
                            placeholder="E.g. First Semester / 2050">
                    </div>
                </div> <br>









                {{-- <label style="color:cornflowerblue; font-weight:bolder; font-size:25px; text-transform:uppercase"
                    for="">1. Overall Satisfaction</label> <br> --}}
                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label
                            style="color:cornflowerblue; font-weight:bolder; font-size:25px; text-transform:uppercase"
                            for="">1. Overall Satisfaction:</label>
                        <p style="font-size:23px; color:indigo">On a scale of 1 to 5, please rate your
                            overall impression of our school website.
                        </p> <br>

                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo"></span></h4>
                            <input name="overall_satisfaction" type="range" width="100%" min="1"
                                max="5" value="1" class="slider" id="myRange">
                            <span id="demo"></span>
                        </div>
                        <script type="text/javascript">
                            var slider = document.getElementById("myRange");
                            var output = document.getElementById("demo");
                            output.innerHTML = slider.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider.oninput = function() {
                                output.innerHTML = this.value;
                            }
                        </script>
                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label
                            style="color:cornflowerblue; font-weight:bolder; font-size:25px; text-transform:uppercase"
                            for="">2. Course Content:</label>

                        <p style="font-size:23px; color:indigo">Please rate the following aspects of the course content:

                        </p> <br>

                        <label style="font-size:20px" for="inputPassword4" class="input__label">Clarity and organization
                            of the topics covered:
                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo2a"></span></h4>
                            <input name="clarity_of_topics" type="range" width="100%" min="1" max="5"
                                value="1" class="slider" id="myRange2a">
                            <span id="demo2a"></span>
                        </div> <br>
                        <script type="text/javascript">
                            var slider2a = document.getElementById("myRange2a");
                            var output2a = document.getElementById("demo2a");
                            output2a.innerHTML = slider2a.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider2a.oninput = function() {
                                output2a.innerHTML = this.value;
                            }
                        </script>
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Relevance to real-world
                            applications:

                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo2b"></span></h4>
                            <input name="real_world_relevance" type="range" width="100%" min="1"
                                max="5" value="1" class="slider" id="myRange2b">
                            <span id="demo2b"></span>
                        </div>
                        <script type="text/javascript">
                            var slider2b = document.getElementById("myRange2b");
                            var output2b = document.getElementById("demo2b");
                            output2b.innerHTML = slider2b.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider2b.oninput = function() {
                                output2b.innerHTML = this.value;
                            }
                        </script>
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Depth and breadth of
                            the material covered:

                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo2c"></span></h4>
                            <input name="depth_and_breadth" type="range" width="100%" min="1"
                                max="5" value="1" class="slider" id="myRange2c">
                            <span id="demo2c"></span>
                        </div>
                        <script type="text/javascript">
                            var slider2c = document.getElementById("myRange2c");
                            var output2c = document.getElementById("demo2c");
                            output2c.innerHTML = slider2c.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider2c.oninput = function() {
                                output2c.innerHTML = this.value;
                            }
                        </script>
                    </div>
                </div>




                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label
                            style="color:cornflowerblue; font-weight:bolder; font-size:25px; text-transform:uppercase"
                            for="">3. Teaching Methodology:
                        </label>
                        <p style="font-size:23px; color:indigo">Please rate the teaching methodology used in the
                            course:

                        </p> <br>

                        <label style="font-size:20px" for="inputPassword4" class="input__label">Effectiveness of
                            instructional methods (lectures, discussions, group work, etc.):

                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo3a"></span></h4>
                            <input name="instructional_methods_effectiveness" type="range" width="100%"
                                min="1" max="5" value="1" class="slider" id="myRange3a">
                            <span id="demo3a"></span>
                        </div> <br>
                        <script type="text/javascript">
                            var slider3a = document.getElementById("myRange3a");
                            var output3a = document.getElementById("demo3a");
                            output3a.innerHTML = slider3a.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider3a.oninput = function() {
                                output3a.innerHTML = this.value;
                            }
                        </script>
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Engagement and
                            interaction with students:


                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo3b"></span></h4>
                            <input name="students_engagements" type="range" width="100%" min="1"
                                max="5" value="1" class="slider" id="myRange3b">
                            <span id="demo3b"></span>
                        </div>
                        <script type="text/javascript">
                            var slider3b = document.getElementById("myRange3b");
                            var output3b = document.getElementById("demo3b");
                            output3b.innerHTML = slider3b.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider3b.oninput = function() {
                                output3b.innerHTML = this.value;
                            }
                        </script>
                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label
                            style="color:cornflowerblue; font-weight:bolder; font-size:25px; text-transform:uppercase"
                            for="">4. Course Materials:
                        </label>

                        <p style="font-size:23px; color:indigo">Please provide your feedback on the course materials:


                        </p> <br>

                        <label style="font-size:20px" for="inputPassword4" class="input__label">Clarity and
                            usefulness of textbooks, readings, or online resources:


                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo4a"></span></h4>
                            <input name="clarity_of_materials" type="range" width="100%" min="1"
                                max="5" value="1" class="slider" id="myRange4a">
                            <span id="demo4a"></span>
                        </div> <br>
                        <script type="text/javascript">
                            var slider4a = document.getElementById("myRange4a");
                            var output4a = document.getElementById("demo4a");
                            output4a.innerHTML = slider4a.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider4a.oninput = function() {
                                output4a.innerHTML = this.value;
                            }
                        </script>
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Availability and
                            accessibility of course materials:



                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo4b"></span></h4>
                            <input name="Course_materials_availability" type="range" width="100%" min="1"
                                max="5" value="1" class="slider" id="myRange4b">
                            <span id="demo4b"></span>
                        </div>
                        <script type="text/javascript">
                            var slider4b = document.getElementById("myRange4b");
                            var output4b = document.getElementById("demo4b");
                            output4b.innerHTML = slider4b.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider4b.oninput = function() {
                                output4b.innerHTML = this.value;
                            }
                        </script>
                    </div>
                </div>












                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label
                            style="color:cornflowerblue; font-weight:bolder; font-size:25px; text-transform:uppercase"
                            for="">5. Assessment and Feedback:

                        </label>
                        <p style="font-size:23px; color:indigo">Please rate the assessment and feedback components of
                            the course:


                        </p> <br>

                        <label style="font-size:20px" for="inputPassword4" class="input__label">Clarity and fairness
                            of grading criteria:


                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo5a"></span></h4>
                            <input name="grading_criteria_clarity" type="range" width="100%" min="1"
                                max="5" value="1" class="slider" id="myRange5a">
                            <span id="demo5a"></span>
                        </div> <br>
                        <script type="text/javascript">
                            var slider5a = document.getElementById("myRange5a");
                            var output5a = document.getElementById("demo5a");
                            output5a.innerHTML = slider5a.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider5a.oninput = function() {
                                output5a.innerHTML = this.value;
                            }
                        </script>
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Timeliness and
                            quality of feedback provided by the instructor:



                        </label><br>
                        <div style="width:100% !important"
                            class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                            <h4 style="color:red; font-size:20px">Scale: <span id="demo5b"></span></h4>
                            <input name="quality_of_instructor_feedback" type="range" width="100%"
                                min="1" max="5" value="1" class="slider" id="myRange5b">
                            <span id="demo5b"></span>
                        </div>
                        <script type="text/javascript">
                            var slider5b = document.getElementById("myRange5b");
                            var output5b = document.getElementById("demo5b");
                            output5b.innerHTML = slider5b.value; // Display the default slider value

                            // Update the current slider value (each time you drag the slider handle)
                            slider5b.oninput = function() {
                                output5b.innerHTML = this.value;
                            }
                        </script>
                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label
                            style="color:cornflowerblue; font-weight:bolder; font-size:25px; text-transform:uppercase"
                            for="">6. Additional Comments:

                        </label>

                        <p style="font-size:23px; color:indigo">Please provide any additional comments, suggestions, or
                            areas for improvement regarding the course program.



                        </p> <br>

                        <div class="form-group">
                            <label style="font-size:20px" for="inputPassword4" class="input__label">Comment:



                            </label>
                            <textarea name="additional_comments" class="form-control" rows="5" id="comment"
                                placeholder="Enter Comment here..."></textarea>
                        </div>
                    </div>
                </div>




                <button style="background:green; font-size:20px" type="submit"
                    class="btn btn-success btn-style mt-4">Submit</button>
            </form>
        </div>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}

    <!-- Core -->
    @include('studentdashboard.script')
</body>




</html>
