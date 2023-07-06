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


    <span style="color:red; font-size:22px">Please do well to leave us a feedback!</span>
    <div class="card card_border mt-2 py-2 mb-4">

        <div class="card-body" back>

            <form class="form-horizontal" action="{{ url('submit_course_feedback') }}" method="post" enctype="multipart/form-data">

                @csrf



                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Email:</label>
                        <input type="email" name="email" class="form-control input-style" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Which City do you live
                            in?</label>
                        <input type="text" name="city" class="form-control input-style" placeholder="Your City">
                    </div>
                </div>


                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Are you a
                            Student?</label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="student_or_not" value="Yes"> &nbsp; &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="student_or_not" value="No">
                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Have you taken online
                            classes before?</label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="taken_online_classes_or_not" value="Yes"> &nbsp; &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="taken_online_classes_or_not" value="No">
                    </div>
                </div>


                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Do you think online
                            school have similar academic experience just as physical class?</label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="academic_experience" value="Yes">
                        &nbsp; &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="academic_experience" value="No">
                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Would you be interested
                            in taking online classes to save you stress? </label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="interested" value="Yes"> &nbsp;
                        &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="interested" value="No">
                    </div>
                </div>


                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Are you familiar with
                            Yonevas College?</label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="familiar_with_yonevas"
                            value="Yes"> &nbsp; &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="familiar_with_yonevas"
                            value="No">
                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Yonevas College
                            offers fully funded scholarship programs online, would you like to take the opportunity to
                            participate? </label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="opportunity_to_participate"
                            value="Yes">
                        &nbsp; &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="opportunity_to_participate"
                            value="No">
                    </div>
                </div>


                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">What is your age
                            range?</label><br>
                        <select style="width:" name="age_range" id="age" class="form-control">
                            <option value="18 - 25 years">18 - 25 years</option>
                            <option value="26 - 31 years">26 - 31 years</option>
                            <option value="32 years and above">32 years and above</option>
                        </select>

                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Do you have basic
                            Computer knowledge?</label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="computer_knowlwdge"
                            value="Yes">
                        &nbsp; &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="computer_knowlwdge"
                            value="No">
                    </div>
                </div>


                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Are you willing to
                            take one hour class per day, 3 days a week?</label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="class_schedule" value="Yes">
                        &nbsp; &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="class_schedule" value="No">
                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">Which of the
                            following areas of study are you most likely to study?</label><br>
                        <select style="width:" name="likely_area_of_study" id="age" class="form-control">
                            <option value="Web Design">Web Design</option>
                            <option value="Programming">Programming</option>
                            <option value="Networking">Networking</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Social Awareness">Social Awareness</option>
                            <option value="Digital Education">Digital Education</option>
                            <option value="Communication">Communication</option>
                            <option value="Public Speaking">Public Speaking</option>
                            <option value="Political Science">Political Science</option>
                            <option value="Health Science">Health Science</option>
                            <option value="Business Administration">Business Administration</option>
                            <option value="Case Report">Case Report</option>
                            <option value="Criminal Justices">Criminal Justices</option>
                            <option value="Psychology">Psychology</option>
                            <option value="Physical and Health Education">Physical and Health Education</option>
                        </select>
                    </div>
                </div>


                <div class="form-row">
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">As a follow up , do
                            you want us to contact you to let you know if you qualify for the scholarship?</label><br>
                        <label for="">Yes</label>
                        <input class="" type="radio" id="male" name="scholarship" value="Yes">
                        &nbsp; &nbsp;
                        <label for="">No</label>
                        <input class="" type="radio" id="female" name="scholarship" value="No">
                        &nbsp; &nbsp;
                        <label for="">Maybe</label>
                        <input class="" type="radio" id="female" name="scholarship" value="Maybe">
                    </div>
                    <div class="p-3 form-group col-md-6" style="border:1px solid grey">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">What is the highest
                            level of Education you have completed?</label><br>
                        <select style="width:" name="highest_level_of_education" id="age" class="form-control">
                            <option value="Primary Education">Primary Education</option>
                            <option value="Secondary Education">Secondary Education</option>
                            <option value="College of Education">College of Education</option>
                            <option value="2 years of Polytechnic / HND">2 years of Polytechnic / HND</option>
                            <option value="University Education">University Education</option>
                        </select>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label style="font-size:20px" for="inputPassword4" class="input__label">If you want us to
                            contact you via mobile call, what is your phone number?</label>
                        <input type="number" name="phone" class="form-control input-style"
                            placeholder="Phone Number">
                    </div>
                </div>




                <button style="background:green; font-size:20px"
                    type="submit" class="btn btn-success btn-style mt-4">Submit</button>
            </form>
        </div>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}

    <!-- Core -->
    @include('studentdashboard.script')
</body>




</html>
