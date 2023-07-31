<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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


    <h1
        style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:20px">
        COMPLETE STUDENT PROFILE</h1>


    <span style="color:red; font-size:22px">Fill all details carefully. Do not leave any field blank.</span>
    <div class="card card_border mt-2 py-2 mb-4">
        Religion
        <div class="card-body" back>

            <form class="form-horizontal" action="{{ url('upload_students_profile') }}" method="post"
                enctype="multipart/form-data">

                @csrf
                <span style="font-size:22px" class="font-weight-bold pb-3">1. Personal Information</span><br><br>


                <div class="form-group">


                    <label for="inputPassword4" class="input__label">Marital Status</label>
                    <select style="width:" name="marital_status" id="marital_status" class="form-control"
                        required="required">
                        <option value="">Select</option>
                        <option value="married">Married</option>
                        <option value="single">Single</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>

                </div>



                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control input-style" id=""
                            required="required" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Zip Code</label>
                        <input type="number" name="zip_code" class="form-control input-style" id=""
                            placeholder="Enter Zip code" required="required">
                    </div>
                </div>




                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="" class="input__label">Religion</label>
                        <select style="width:" name="religion" id="religion" class="form-control" required="required">
                            <option value="">Select</option>
                            <option value="Christian">Christian</option>
                            <option value="Islam">Islam</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                </div>





                <div class="form-row">
                    <div class="form-group col-md-6" style="border:1px solid grey">
                        <label for="" class="input__label">Gender</label> <br>
                        <label for="">Male</label>
                        <input class="" type="radio" id="male" name="gender" value="Male"
                            required="required"> &nbsp; &nbsp;
                        <label for="">Female</label>
                        <input class="" type="radio" id="female" name="gender" value="Female"
                            required="required">
                    </div>

                    <div class="form-group col-md-6" style="border:1px solid grey">
                        <label for="inputAddress2" class="input__label">Student Image</label>
                        <input type="file" name="student_image" class="form-control input-style" id="">
                    </div>

                </div>




                <div class="form-group">
                    <label class="form-label">Country</label>
                    <select name="countries" id="countries" class="form-control" required="required">
                        <option value="">Select Country</option>
                        @foreach (App\Models\Countries::orderBy('name_country')->get() as $key => $value)
                            <option value="{{ $value->id }}" required="required">{{ $value->name_country }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label class="form-label"></label>
                    <select name="states" id="states" class="form-control" required="required">
                        <option value="" required="required">Select State</option>

                    </select>
                </div>




                <div class="form-group">
                    <label class="form-label"></label>
                    <select name="cities" id="cities" class="form-control" required="required">
                        <option value="" required="required">Select City</option>

                    </select>
                </div>



                <div class="form-group">
                    <label for="inputAddress2" class="input__label">Address</label>
                    <input type="text" name="address" class="form-control input-style" id="inputAddress2"
                        placeholder="Enter address">
                </div><br><br>



                <span style="font-size:22px" class="font-weight-bold pt-5 m-3 pb-3">2. Academic
                    Interest</span><br><br>

                <div class="form-group" style="border:1px solid grey; padding:10px">
                    <label for="" class="input__label">Are you currently studying at any institution of higher
                        learning?</label> <br>
                    <label for="">Yes</label>
                    <input onclick="javascript:yesnoCheck();" class="" type="radio" id="yesCheck"
                        name="currently_studying" value="Yes"> &nbsp; &nbsp;
                    <label for="">No</label>
                    <input onclick="javascript:yesnoCheck();" class="" type="radio" id="noCheck"
                        name="currently_studying" value="No">
                </div>

                <div id="ifYes" style="visibility:hidden">

                    <div class="form-group">
                        <label for="inputAddress2" class="input__label">If so, what is the name of the
                            institution?</label>
                        <input type="text" name="name_of_current_institution" class="form-control input-style"
                            id="" placeholder="Enter name of Current Institution">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="input__label">What is your major?</label>
                            <input type="text" name="major" class="form-control input-style" id="inputEmail4"
                                placeholder="Enter your Course of study">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="input__label">Years of study</label>
                            <input type="number" name="years_of_study" class="form-control input-style"
                                id="" placeholder="Enter number of Years">
                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6" style="border:1px solid grey">
                        <label for="" class="input__label">Have you taken online classes in the past?</label>
                        <br>
                        <label for="">Yes</label>
                        <input onclick="javascript:yes_or_noCheck2();" class="" type="radio" id="yes_Check2"
                            name="online_classes" value="Yes"> &nbsp; &nbsp;
                        <label for="">No</label>
                        <input onclick="javascript:yes_or_noCheck2();" class="" type="radio" id="no_Check2"
                            name="online_classes" value="No">
                    </div>
                    <div class="form-group col-md-6">
                        <div id="if_Yes2" style="visibility:hidden">
                            <label for="inputPassword4" class="input__label">For how long?</label>
                            <input type="text" class="form-control input-style" id=""
                                name="how_long_for_online_classes">

                        </div>
                    </div>
                </div>



                <div class="form-row">
                    <div class="form-group col-md-6" style="border:1px solid grey">
                        <label for="" class="input__label">What type of enrollment?</label> <br>
                        <label for="">Degree programme</label>
                        <input class="" type="radio" id="male" name="type_of_enrollment"
                            value="Degree programme"> &nbsp; &nbsp;
                        <label for="">Non-Degree programme</label>
                        <input class="" type="radio" id="female" name="type_of_enrollment"
                            value="Non-Degree programme">
                    </div>

                    <div class="form-group col-md-6" style="border:1px solid grey">
                        <label for="" class="input__label">Enrollment period</label> <br>
                        <label for="">February intake</label>
                        <input class="" type="radio" id="male" name="enrollment_period"
                            value="February intake"> &nbsp; &nbsp;
                        <label for="">September intake</label>
                        <input class="" type="radio" id="female" name="enrollment_period"
                            value="September intake">
                    </div>

                </div><br><br>

                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">3. Hobby</span><br><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">What do you do in your free time?</label>
                        <input type="text" class="form-control input-style" id=""
                            placeholder="Enter answer" name="free_time">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">How often do you travel outside of your residential
                            home?</label>
                        <!--<input type="text" class="form-control input-style" id=""-->
                        <!--    name="residential_home">-->
                        <select style="width:" name="residential_home" id="" class="form-control">
                            <option value="">select</option>
                            <option value="Not at all">Not at all</option>
                            <option value="Not so often">Not so often</option>
                            <option value="Often">Often</option>
                            <option value="Very often">Very often</option>
                        </select>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6" style="border:1px solid grey">
                        <label for="" class="input__label">Do you belong to any group of individuals or
                            organizations?</label> <br>
                        <label for="">Yes</label>
                        <input onclick="javascript:yes_or_noCheck();" class="" type="radio" id="yes_Check"
                            name="group_of_individual_or_organization" value="Yes"> &nbsp;
                        &nbsp;
                        <label for="">No</label>
                        <input onclick="javascript:yes_or_noCheck();" class="" type="radio" id="no_Check"
                            name="group_of_individual_or_organization" value="No">
                    </div>
                    <div class="form-group col-md-6">
                        <div id="if_Yes" style="visibility:hidden">
                            <label for="inputPassword4" class="input__label">If so, name them:</label>
                            <input type="text" class="form-control input-style" id="" name="name_them">

                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">How many languages can you speak?</label>
                        <input type="number" class="form-control input-style" id="" name="languages">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Are you a member of Nigerian military
                            force?</label>
                        <select style="width:" name="military_force" id="" class="form-control">
                            <option value="">select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Are you a government official or do you hold any
                            position in the federal government office?</label>
                        <select style="width:" name="government_official" id="" class="form-control">
                            <option value="">select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Do you have any medical conditions that we
                            need to know of?</label>
                        <select style="width:" name="medical_conditions" id="" class="form-control">
                            <option value="">select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            <option value="no">Rather Not Say</option>
                        </select>
                    </div>
                </div><br><br>


                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">4. Social Media Pages<span
                        style="color:red">(Not Compulsory)</span><br><br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="input__label">Facebook Page</label>
                            <input type="text" class="form-control input-style" id=""
                                placeholder="(Optional)" name="facebook_page">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="input__label">Instagram Handle</label>
                            <input placeholder="(Optional)" type="text" class="form-control input-style"
                                id="" name="instagram_page">
                        </div>

                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="" class="input__label">Twitter Page</label>
                            <input type="text" class="form-control input-style" id=""
                                placeholder="(Optional)" name="twitter_page">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="input__label">LinkedIn Page</label>
                            <input placeholder="(Optional)" type="text" class="form-control input-style"
                                id="" name="linkedin_page">
                        </div>
                    </div><br><br>






                    <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">5. Next of Kin's details<br><br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Full Name</label>
                                <input type="text" class="form-control input-style" id=""
                                    placeholder="Enter name of next of Kin" name="next_of_kin_name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Email</label>
                                <input type="email" placeholder="Enter email of next of Kin" type="text"
                                    class="form-control input-style" id="" name="next_of_kin_email">
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Phone</label>
                                <input type="number" class="form-control input-style" id=""
                                    placeholder="Enter phone number of next of Kin" name="next_of_kin_phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Address</label>
                                <input type="text" placeholder="Enter address of next of Kin" type="text"
                                    class="form-control input-style" id="" name="next_of_kin_address">
                            </div>
                        </div><br><br>


                        <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">6. Select
                            Course</span><br><br>




                        <div class="form-group">
                            <label for="" class="input__label">Choose Academic Session</label>
                            <select required="required" style="width:" name="academic_session" id="states"
                                class="form-control">
                                @foreach ($acad as $acad)
                                    <option value="{{ $acad->id }}">
                                        {{ $acad->academic_session }}</option>
                                @endforeach

                            </select>
                        </div>

  <label style="color:red; font-size:20px" class="control-label" for="">Registration is fully completed for Bachelors Programmes. <br> <span style="color:indigo">Other Programme types are undergoing maintenance.</span></label>
                        <div class="form-group">
                            <label class="control-label" for="email">Programme Type:</label>
                            <select required="required" name="programme_type" id="myselection"
                                class="myselection form-control">
                                <option value="">Select Programme Type</option>
                                <option class="form-control" value="1">BACHELORS DEGREE</option>
                                <!--<option class="form-control" value="2">PROFESSIONAL CERTIFICATE/NON-DEGREE-->
                                <!--</option>-->
                                <!--<option class="form-control" value="3">CONTINOUS LEARNING EDUCATION</option>-->
                            </select>
                        </div>

                        {{-- <div style="display:none" id="show1" class="diploma-display myDiv show1 myDiv1">

                            <div class="form-group">
                                <label class="control-label" for="email">Faculty:</label>

                                <select style="" name="di_faculty" id="faculty1"
                                    class="faculty form-control">
                                    <option value="">Select Faculty</option>
                                    @foreach (App\Models\Faculty::orderBy('faculty_name')->get() as $key => $value)
                                        <option value="{{ $value->faculty_name }}">{{ $value->faculty_name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label class="control-label" for="pwd">Department:</label>

                                <select style="width:" name="di_department" id="department"
                                    class="form-control department">
                                    <option value="">Select Department</option>

                                </select>

                            </div>

                            <div class="form-group">
                                <label for="" class="input__label">Level:</label>
                                <select style="width:" name="di_level" id="states" class="form-control">
                                    <option value="">Select Level</option>
                                    @foreach (App\Models\Level::where('programme_type', '=', 1)->orderBy('level_name')->limit(1)->get() as $key => $value)
                                        <option value="{{ $value->level_name }}">{{ $value->level_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div> --}}

                        <div style="display:none" id="show1" class="degree-display myDiv show1 myDiv7">


                            <div class="form-group">
                                <label class="control-label" for="email">Faculty:</label>

                                <select style="" name="de_faculty" id="faculty7"
                                    class="faculty form-control">
                                    <option value="">Select Faculty...</option>
                                    @foreach (App\Models\Faculty::orderBy('faculty_name')->get() as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->faculty_name }}</option>
                                    @endforeach
                                </select>

                            </div>


                            <div class="form-group">
                                <label class="control-label" for="pwd">Department:</label>

                                <select style="width:" name="de_department" id="department7"
                                    class="form-control department">
                                    <option value="">Select Department</option>

                                </select>

                            </div>

                            <div class="form-group">
                                <label for="" class="input__label">Level:</label>
                                <select style="width:" name="de_level" id="states" class="form-control">
                                    <option value="">Select Level</option>
                                    @foreach (App\Models\Level::where('programme_type', '=', 1)->orderBy('level_name')->limit(1)->get() as $key => $value)
                                        <option value="{{ $value->level_name }}">{{ $value->level_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>





                        <div id="show2" class="myDiv show2" style="display:none">

                            <div class="form-group">
                                <label class="control-label" for="pwd">Name of Certificate
                                    Course:</label>

                                <select style="width:" name="name_of_certificate_course" id=""
                                    class="form-control">
                                    <option value="Web Development">Web Development</option>
                                    <option value="Creative Leadership">Creative Leadership</option>
                                    <option value="Creative Writing">Creative Writing</option>
                                    <option value="Case Report">Case Report</option>
                                    <option value="Social Media Strategist">Social Media Strategist</option>
                                    <option value="Private Investigator">Private Investigator</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Networking">Networking</option>
                                    <option value="Cyber Security">Cyber Security</option>
                                    <option value="Visual Presentation">Visual Presentation</option>
                                    <option value="3D Motion Graphics">3D Motion Graphics</option>
                                    <option value="Social Awareness">Social Awareness</option>
                                    <option value="Digital Learning">Digital Learning</option>
                                    <option value="Public Speaking">Public Speaking</option>
                                    <option value="Graphics Design">Graphics Design</option>
                                    <option value="Animations and 3D Motion">Animations and 3D Motion</option>
                                    <option value="Criminal Justice">Criminal Justice</option>
                                    <option value="Graphic Design | Media Arts">Graphic Design | Media Arts</option>
                                    <option value="Physical and Health Education">Physical and Health Education
                                    </option>
                                    <option value="Social Work">Social Work</option>
                                    <option value="Forensic Accounting & Fraud Investigation">Forensic Accounting &
                                        Fraud Investigation</option>
                                    <option value="Human Resource Management">Human Resource Management</option>
                                    <option value="Event and Meeting Management">Event and Meeting Management</option>
                                    <option value="Early Childhood Special Education">Early Childhood Special Education
                                    </option>
                                </select>

                            </div>
                        </div>



                        <div id="show2" class="myDiv show3" style="display:none">

                            <div class="form-group">
                                     <label class="control-label" for="pwd">Continous Learning programmes:</label>

                                <select style="width:" name="name_of_continous_learning_course" id=""
                                    class="form-control">
                                    <option value="Digital Marketing and Social Media Strategy">Digital Marketing and
                                        Social Media Strategy</option>
                                    <option value="Personal Finance and Investment Planning">Personal Finance and
                                        Investment Planning</option>
                                    <option value="Brand Development and Marketing in the Creative Industries">Brand
                                        Development and Marketing in the Creative Industries</option>
                                    <option
                                        value="Virtual Collaboration: Navigating Challenges and Maximizing Opportunities">
                                        Virtual Collaboration: Navigating Challenges and Maximizing Opportunities
                                    </option>
                                    <option value="Sustainable Business Practices and Environmental Responsibility">
                                        Sustainable Business Practices and Environmental Responsibility</option>
                                    <option value="Introduction to Artificial Intelligence and Machine Learning">
                                        Introduction to Artificial Intelligence and Machine Learning</option>
                                    <option value="The Importance of Play in Child Development and Behavior">The
                                        Importance of Play in Child Development and Behavior</option>
                                    <option
                                        value="Protecting Yourself from Internet Fraud: Safeguarding Your Online Presence">
                                        Protecting Yourself from Internet Fraud: Safeguarding Your Online Presence
                                    </option>
                                    <option value="Digital Storytelling and Content Creation">Digital Storytelling and
                                        Content Creation</option>
                                    <option value="Creative Leadership and Team Management">Creative Leadership and
                                        Team Management</option>
                                    <option value="Sustainable Transportation: Innovations and Challenges">Sustainable
                                        Transportation: Innovations and Challenges</option>
                                    <option value="Mastering Temperament: The Art of Emotional Control">Mastering
                                        Temperament: The Art of Emotional Control</option>
                                    <option value="Design Thinking for Innovation in the Creative Industries">Design
                                        Thinking for Innovation in the Creative Industries</option>
                                    <option
                                        value="Developmental Psychology: Nurturing Resilience and Academic Success from Childhood to Adulthood">
                                        Developmental Psychology: Nurturing Resilience and Academic Success from
                                        Childhood to Adulthood</option>
                                    <option value="Emotional Intelligence and Communication Skills">Emotional
                                        Intelligence and Communication Skills</option>
                                    <option value="The Impact of Nature and Nurture on Child Behavior">The Impact of
                                        Nature and Nurture on Child Behavior</option>


                                </select>

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

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}


<script type="text/javascript">
    $('#faculty7').on('change', function() {
        get_dept_by_fac_and_prog_type();
    });


    function get_dept_by_fac_and_prog_type() {
        var faculty_id = $('#faculty7').val();
        $.post('{{ route('getDepartments') }}', {
            _token: '{{ csrf_token() }}',
            faculty_id: faculty_id
        }, function(data) {
            $('#department7').html(null);
            $('#department7').append($('<option value="{{ $value->id }}">Select Department</option>', {

            }));
            // alert('here')
            for (var i = 0; i < data.length; i++) {
                $('#department7').append($('<option>', {
                    value: data[i].id,
                    text: data[i].department_name
                }));

            }
        });
    }
</script>

{{-- <script type="text/javascript">
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

    function get_dept_by_fac_and_prog_type() {

        // var programme_type = $('.myselection').val();
        var faculty_id = $('#faculty' + index).val();
        console.log(faculty_id);

        $.post('{{ route('getDepartments') }}', {
            _token: '{{ csrf_token() }}',
            // programme_type: programme_type,
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
</script> --}}


<script>
    $(document).ready(function() {
        $('.myselection').on('change', function() {
            var demovalue = $(this).val();
            // $("div.myDiv").hide();
            $(".show1").hide();
            $(".show2").hide();
            $(".show3").hide();
            $(".show" + demovalue).show();

        });
    });
</script>




{{-- <script>
    $(document).ready(function() {
        $('.myselection').on('change', function() {
            var demovalue = $(this).val();

            if (demovalue == '7') {

                $("div.myDiv1").hide();
                $(".shop7").show();

            } else if(demovalue == '1') {
                $("div.myDiv7").hide();
                $(".show1").show();
            }else{
                return;
            }


        });
    });
</script> --}}


<script type="text/javascript">
    function deg_or_dip_or_cert() {
        if (document.getElementById('dipcert1').checked || document.getElementById('dipcert7').checked) {
            document.getElementById('d_c').style.visibility = 'visible';
            document.getElementById('cert').style.visibility = 'hidden';
        } else {
            document.getElementById('d_c').style.visibility = 'hidden';
            document.getElementById('cert').style.visibility = 'visible';
        }


        // if (document.getElementById('dipcert7').checked) {
        //     document.getElementById('d_c').style.visibility = 'visible';
        //     document.getElementById('cert').style.visibility = 'hidden';
        // } else {
        //     document.getElementById('d_c').style.visibility = 'hidden';
        //     document.getElementById('cert').style.visibility = 'visible';
        // }



    }
</script>






<script type="text/javascript">
    function yes_or_noCheck() {
        if (document.getElementById('yes_Check').checked) {
            document.getElementById('if_Yes').style.visibility = 'visible';
        } else document.getElementById('if_Yes').style.visibility = 'hidden';

    }
</script>





<script type="text/javascript">
    function yes_or_noCheck2() {
        if (document.getElementById('yes_Check2').checked) {
            document.getElementById('if_Yes2').style.visibility = 'visible';
        } else document.getElementById('if_Yes2').style.visibility = 'hidden';

    }
</script>







<script type="text/javascript">
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.visibility = 'visible';
        } else document.getElementById('ifYes').style.visibility = 'hidden';

    }
</script>












<script type="text/javascript">
    $('#countries').on('change', function() {
        get_state_by_country();
    });

    function get_state_by_country() {
        var country_id = $('#countries').val();
        $.post('{{ route('getStates') }}', {
            _token: '{{ csrf_token() }}',
            country_id: country_id
        }, function(data) {
            $('#states').html(null);
            $('#states').append($('<option value="{{ $value->id }}">Select State</option>', {

            }));
            // alert('here')
            for (var i = 0; i < data.length; i++) {
                $('#states').append($('<option>', {
                    value: data[i].id,
                    text: data[i].name_state
                }));

            }
        });
    }
</script>
<script type="text/javascript">
    $('#states').on('change', function() {
        get_state_by_state();
    });

    function get_state_by_state() {
        var state_id = $('#states').val();
        $.post('{{ route('getCities') }}', {
            _token: '{{ csrf_token() }}',
            state_id: state_id
        }, function(data) {
            $('#cities').html(null);
            $('#cities').append($('<option value="{{ $value->id }}">Select City</option>', {

            }));
            for (var i = 0; i < data.length; i++) {
                $('#cities').append($('<option>', {
                    value: data[i].id,
                    text: data[i].name_city
                }));

            }
        });
    }
</script>












{{-- <script type="text/javascript">
    $('#faculty').on('change', function() {
        get_dept_by_fac();
    });

    function get_dept_by_fac() {
        var faculty_id = $('#faculty').val();
        $.post('{{ route('getDepartments') }}', {
_token: '{{ csrf_token() }}',
faculty_id: faculty_id
}, function(data) {
$('#department').html(null);
$('#department').append($('<option value="{{ $value->id }}">Select Department</option>', {

}));
for (var i = 0; i < data.length; i++) { $('#department').append($('<option>', {
    value: data[i].id,
    text: data[i].department_name
    }));

    }
    });
    }
    </script> --}}




</html>
