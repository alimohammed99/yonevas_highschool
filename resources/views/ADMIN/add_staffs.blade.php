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


    <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:20px">ADD STAFFS</h1>


    <span style="color:red; font-size:22px">Fill all details carefully. Do not leave any field blank.</span>
    <div class="card card_border mt-2 py-2 mb-4">

        <div class="card-body" back>

            <form class="form-horizontal" action="{{url('upload_staffs')}}" method="post" enctype="multipart/form-data">

                @csrf
                <span style="font-size:22px" class="font-weight-bold pb-3">1. Personal Information</span><br><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">First Name</label>
                        <input type="text" name="first_name" class="form-control input-style @error('first_name') is-invalid @enderror" id="" placeholder="Enter First name" required="required">
                        @error('first_name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Last Name</label>
                        <input type="text" name="surname" class="form-control input-style" id="" placeholder="Enter Last Name" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">

                        <label for="" class="input__label">Other Names</label>
                        <input type="text" name="other_names" class="form-control input-style" placeholder="(Not Compulsory)">

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Marital Status</label>
                        <select style="width:" name="marital_status" id="marital_status" class="form-control" required="required">
                            @foreach($data1 as $data1)
                            <option value="{{$data1->id}}" required="required">{{$data1->status}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Email</label>
                        <input type="email" name="email" class="form-control input-style" id="inputEmail4" placeholder="Enter Email" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Phone Number</label>
                        <input type="number" name="phone_number" class="form-control input-style" id="" placeholder="Enter Phone number" required="required">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control input-style" id="" placeholder="Email" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Zip Code</label>
                        <input type="number" name="zip_code" class="form-control input-style" id="" placeholder="Enter Zip code" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Religion</label>
                        <select style="width:" name="religion" id="religion" class="form-control" required="required">
                            @foreach($data2 as $data2)
                            <option value="{{$data2->id}}" required="required">{{$data2->religion_name}}</option>
                            @endforeach
                        </select>
                    </div>




                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Staff Password</label>
                        <input type="text" minlength="8" name="password" class="form-control input-style" id="" placeholder="Enter Staff Password" required="required">
                    </div>
                </div>





                <div class="form-row">
                    <div class="form-group col-md-6" style="border:1px solid grey">
                        <label for="" class="input__label">Gender</label> <br>
                        <label for="">Male</label>
                        <input class="form-control input-style" type="radio" id="male" name="gender" value="Male" required="required">
                        <label for="">Female</label>
                        <input class="form-control input-style" type="radio" id="female" name="gender" value="Female" required="required">
                    </div>

                    <div class="form-group col-md-6" style="border:1px solid grey">
                        <label for="inputAddress2" class="input__label">Staff Image</label>
                        <input type="file" name="staff_image" class="form-control input-style" id="" required="required">
                    </div>

                </div>



                <div class="form-group">
                    <label class="form-label"></label>
                    <select name="countries" id="countries" class="form-control" required="required">
                        <option value="" required="required">Select Country</option>
                        @foreach(App\Models\Countries::orderBy('name_country')->get() as $key => $value)
                        <option value="{{ $value->id }}" required="required">{{ $value->name_country }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label class="form-label"></label>
                    <select name="states" id="states" class="form-control">
                        <option value="" required="required">Select State</option>

                    </select>
                </div>




                <div class="form-group">
                    <label class="form-label"></label>
                    <select name="cities" id="cities" class="form-control">
                        <option value="" required="required">Select City</option>

                    </select>
                </div>



                <div class="form-group">
                    <label for="inputAddress2" class="input__label">Address</label>
                    <input type="text" name="address" class="form-control input-style" id="inputAddress2" placeholder="Enter address" required="required">
                </div><br><br>



                <span style="font-size:22px" class="font-weight-bold pt-5 m-3 pb-3">2. Education Background</span><br><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">What is the highest level of education you have completed?</label>
                        <select style="width:" name="highest_education" id="highest_education" class="form-control" required="required">
                            @foreach($data3 as $data3)
                            <option value="{{$data3->id}}" required="required">{{$data3->highest_education}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">What is the name of that Institution / School?</label>
                        <input type="" name="name_of_highest_education" class="form-control input-style" id="" placeholder="Enter name of an Institution" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Name of Elementary School</label>
                        <input type="text" name="elementary_school" class="form-control input-style" id="" placeholder="Enter name of elementary school" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Year Completed</label>
                        <input type="month" class="form-control input-style" id="year" name="elementary_school_year" placeholder="Year" required="required">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Name of Secondary School</label>
                        <input type="text" name="secondary_school" class="form-control input-style" id="" placeholder="Enter name of secondary school" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Year Completed</label>
                        <input type="month" class="form-control input-style" id="year" name="secondary_school_year" placeholder="Year" required="required">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Name of University / College / Polytechnic</label>
                        <input type="text" name="higher_institution" class="form-control input-style" id="" placeholder="Enter name of Institution" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Year Completed</label>
                        <input type="month" class="form-control input-style" id="year" name="higher_institution_year" placeholder="Year" required="required">
                    </div>
                </div>
                <br><br>

                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">3. Employment History</span><br><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Are you currently employed? </label>
                        <input type="text" name="currently_employed" class="form-control input-style" id="" placeholder="Enter your answer" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Looking for employment?</label>
                        <input type="text" name="looking_for_employment" class="form-control input-style" id="" placeholder="Yes or No" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Name of Previous Employer</label>
                        <input type="text" class="form-control input-style" id="" placeholder="Enter name of Previous Employer" name="name_of_previous_employer" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Job Start / End</label>
                        <input type="text" class="form-control input-style" id="" placeholder="e.g 2011/2022" name="job_start_end" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress2" class="input__label">Reason for leaving</label>
                    <input type="text" class="form-control input-style" id="" placeholder="Give a reason you left your past job" name="reasons_for_living" required="required">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Employer Contact</label>
                        <input type="number" name="employer_contact" class="form-control input-style" id="" placeholder="Enter Previous Employer's phone number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Should we contact them?</label>
                        <select style="width:" name="should_we_contact_them" id="" class="form-control" required="required">
                            @foreach($data4 as $data4)
                            <option value="{{$data4->id}}" required="required">{{$data4->should_we_contact_them}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Do you have Teaching Experience?</label>
                        <select style="width:" name="teaching_experience" id="" class="form-control" required="required">
                            @foreach($data5 as $data5)
                            <option value="{{$data5->id}}" required="required">{{$data5->teaching_experience}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Years of Experience</label>
                        <input type="number" class="form-control input-style" id="" name="years_of_teaching_experience" placeholder="Enter number of years" required="required">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Do you have Computer Operating Experience?</label>
                        <select style="width:" name="computer_operating_experience" id="" class="form-control" required="required">
                            @foreach($data6 as $data6)
                            <option value="{{$data6->id}}" required="required">{{$data6->computer_experience}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Years of Experience</label>
                        <input type="number" class="form-control input-style" id="" name="years_of_computer_experience" placeholder="Enter number of years" required="required">
                    </div>
                </div><br><br>



                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">4. Guarantor's Information</span><br><br>

                <div class="form-group">
                    <label for="" class="input__label">Fullname</label>
                    <input type="text" name="guarantor_name" class="form-control input-style" id="" placeholder="Enter Guarantor's full name" required="required">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Email</label>
                        <input type="email" class="form-control input-style" id="inputEmail4" placeholder="Enter Guarantor's email" name="guarantor_email" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Phone</label>
                        <input type="number" class="form-control input-style" id="" placeholder="Enter Guarantor's phone number" name="guarantor_phone" required="required">
                    </div>
                </div><br><br>

                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">5. List all computer packages that you are most familiar with</span> <br><br>
                <span class="pb-3" style="color:red; font-size:18px">Do not leave any field blank. Write null if you intend to leave a field blank</span>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Package 1</label>
                        <input type="text" class="form-control input-style" placeholder="Enter Package" name="package_one" id="inputEmail4" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="text" class="input__label">Package 2</label>
                        <input type="text" class="form-control input-style" name="package_two" placeholder="Enter Package" id="text" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="text" class="input__label">Package 3</label>
                        <input type="text" class="form-control input-style" name="package_three" placeholder="Enter Package" id="text" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="text" class="input__label">Package 4</label>
                        <input type="text" class="form-control input-style" name="package_four" placeholder="Enter Package" id="text" required="required">
                    </div>
                </div>

                <br><br>


                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">6. Hobby</span><br><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">What do you do in your free time?</label>
                        <input type="text" class="form-control input-style" id="" placeholder="Enter answer" name="free_time" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">How often do you travel outside of your residential home?</label>
                        <input type="text" class="form-control input-style" id="" name="residential_home" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Do you belong to any group of individuals or organizations?</label>
                        <input type="text" class="form-control input-style" id="" name="group_of_individual_or_organization" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">If so, name them:</label>
                        <input type="text" class="form-control input-style" id="" name="name_them" required="required">
                        <label style="color:red; font-size:18px" for="" class="input__label">Write null if you don't belong to any group or Organization</label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">How many languages can you speak?</label>
                        <input type="number" class="form-control input-style" id="" name="languages" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Are you a member of Nigerian military force?</label>
                        <select style="width:" name="military_force" id="" class="form-control" required="required">
                            @foreach($data7 as $data7)
                            <option value="{{$data7->id}}" required="required">{{$data7->military_force}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="input__label">Are you a government official or do you hold any position in the federal government office?</label>
                        <select style="width:" name="government_official" id="" class="form-control" required="required">
                            @foreach($data8 as $data8)
                            <option value="{{$data8->id}}" required="required">{{$data8->government_official}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="input__label">Do you have any medical conditions that we need to know of?</label>
                        <select style="width:" name="medical_conditions" id="" class="form-control" required="required">
                            @foreach($data9 as $data9)
                            <option value="{{$data9->id}}" required="required">{{$data9->medical_conditions}}</option>
                            @endforeach
                        </select>
                    </div>
                </div><br><br>



                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">7. Role in School</span><br><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Staff Role</label>
                        <select style="width:" name="staff_role" id="" class="form-control" required="required">
                            @foreach($data10 as $data10)
                            <option value="{{$data10->id}}" required="required">{{$data10->staff_roles}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Is this Teacher a Teaching Staff?</label>
                        <select style="width:" name="teaching_or_nonteaching" id="" class="form-control" required="required">
                            @foreach($data11 as $data11)
                            <option value="{{$data11->id}}" required="required">{{$data11->teaching_or_non_teaching}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="input__label">Academic Session</label>
                    <select style="width:" name="academic_session" id="states" class="form-control" required="required">
                        @foreach($acad as $acad)
                        <option value="{{$acad->id}}" required="required">{{$acad->academic_session}}</option>
                        @endforeach

                    </select>
                </div>


                <span style="color:red; font-size:22px">Upload .pdf document only</span>
                <div class="form-group col-md-12" style="border:1px solid grey">
                    <label for="inputAddress2" class="pt-2 input__label">Staff CV</label>
                    <input type="file" name="staff_cv" class=" dropify form-control input-style" id="">
                    <span style="font-size:22px" class="text-danger">(Not Compulsory)</span>
                </div>
                <br><br>


                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">8. Bank Account Details</span><br><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Account Holder Name</label>
                        <input type="text" class="form-control input-style" id="" placeholder="" name="account_holder_name" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Account Number</label>
                        <input type="number" class="form-control input-style" id="" name="account_number" required="required">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Bank Name</label>
                        <input type="text" class="form-control input-style" id="" placeholder="Enter Bank Name" name="bank_name" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="input__label">Branch</label>
                        <input type="text" class="form-control input-style" id="" placeholder="(Not Compulsory)" name="branch">
                    </div>
                </div><br><br>



                <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">9. Social Media Pages<span style="color:red">(Not Compulsory)</span><br><br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="" class="input__label">Facebook Page</label>
                            <input type="text" class="form-control input-style" id="" placeholder="(Optional)" name="facebook_page">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="input__label">Instagram Handle</label>
                            <input placeholder="(Optional)" type="text" class="form-control input-style" id="" name="instagram_page">
                        </div>

                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="" class="input__label">Twitter Page</label>
                            <input type="text" class="form-control input-style" id="" placeholder="(Optional)" name="twitter_page">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="input__label">LinkedIn Page</label>
                            <input placeholder="(Optional)" type="text" class="form-control input-style" id="" name="linkedin_page">
                        </div>
                    </div>





                    <button style="background:green; font-size:20px" type="submit" class="btn btn-success btn-style mt-4">Submit</button>
            </form>
        </div>
    </div>








    <!-- Core -->
    @include("ADMIN.script")
</body>
<script type="text/javascript">
    $('#countries').on('change', function() {
        get_state_by_country();
    });

    function get_state_by_country() {
        var country_id = $('#countries').val();
        $.post('{{route('
            getStates ')}}', {
                _token: '{{ csrf_token() }}'
                , country_id: country_id
            }
            , function(data) {
                $('#states').html(null);
                $('#states').append($('<option value="{{ $value->id }}">Select State</option>', {

                }));
                for (var i = 0; i < data.length; i++) {
                    $('#states').append($('<option>', {
                        value: data[i].id
                        , text: data[i].name_state
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
        $.post('{{route('
            getCities ')}}', {
                _token: '{{ csrf_token() }}'
                , state_id: state_id
            }
            , function(data) {
                $('#cities').html(null);
                $('#cities').append($('<option value="{{ $value->id }}">Select City</option>', {

                }));
                for (var i = 0; i < data.length; i++) {
                    $('#cities').append($('<option>', {
                        value: data[i].id
                        , text: data[i].name_city
                    }));

                }
            });
    }

</script>
</html>
