
<!DOCTYPE html>
<html lang="en">

<head>
@include("studentdashboard.css")
</head>

<body>



       @include("studentdashboard.navbar")


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


      <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:20px">EDIT PROFILE</h1>


      <span style="color:red; font-size:22px">Fill all details carefully. Please all required fields.</span>
      <div class="card card_border mt-2 py-2 mb-4">

                <div class="card-body" back>

                <form class="form-horizontal" action="{{url('update_student_profile', $data->id)}}" method="post" enctype="multipart/form-data">

   @csrf
                        <span style="font-size:22px" class="font-weight-bold pb-3">1. Personal Information</span><br><br>

                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputPassword4" class="input__label">Marital Status</label>
                    <select style="width:" name="marital_status" id="marital_status" class="form-control"
                        >
                                <option value="">Select</option>
                                <option value="married">Married</option>
                                <option value="single">Single</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                    </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">Email</label>
                                <input type="email" name="email" class="form-control input-style" id="inputEmail4"
                                    value="{{$data->email}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Phone Number</label>
                                <input type="number" name="phone_number" class="form-control input-style" id=""
                                    value="{{$data->phone}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control input-style" id=""
                                    value="{{$data->date_of_birth}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Zip Code</label>
                                <input type="number" name="zip_code" class="form-control input-style" id=""
                                    value="{{$data->zip_code}}" >
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="" class="input__label">Religion</label>
                        <select style="width:" name="religion" id="religion" class="form-control" >
                                <option value="">Select</option>
                                <option value="Christian">Christian</option>
                                <option value="Islam">Islam</option>
                                <option value="other">Other</option>
                        </select>
                            </div>




                            <!--<div class="form-group col-md-6">-->
                            <!--    <label for="" class="input__label">Student Password</label>-->
                            <!--    <input type="text" name="password" class="form-control input-style" id=""-->
                            <!--        value="{{$data->student_password}}" required="required">-->
                            <!--</div>-->
                        </div>





                        <div class="form-row">
                            <div class="form-group col-md-6"  style="border:1px solid grey">
                                <label for="" class="input__label">Gender</label> <br>
                                <label for="">Male</label>
                                <input class="form-control input-style" type="radio" id="male" name="gender" value="Male" >
                                <label for="">Female</label>
                                <input class="form-control input-style"  type="radio" id="female" name="gender" value="Female" >
                            </div>


                            <div class="form-group col-md-6"  style="border:1px solid grey">
                                <div class="form-group">
                                <label style="font-size:20px"  for="img">Old Image:</label>
                                <img height="300" width="300" src="/StudentImages/{{$data->student_image}}" alt="">
                                </div>

                                <div class="form-group">
                                <label style="font-size:20px"  for="imgg"><span style="font-size:22px">Change Image</span></label> <br> <br>
                                <input type="file" name="image">
                                </div>

                            </div>



                        </div>




                            <div class="form-group">
                            <label class="form-label"></label>
                            <select name="countries" id="countries" class="form-control">
                                <option value="">Select Country</option>
                                @foreach(App\Models\Countries::orderBy('name_country')->get() as $key => $value)
                                    <option value="{{ $value->id }}" required="required">{{ $value->name_country }}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <label class="form-label"></label>
                            <select name="states" id="states" class="form-control">
                                <option value="">Select State</option>

                            </select>
                        </div>




                        <div class="form-group">
                            <label class="form-label"></label>
                            <select name="cities" id="cities" class="form-control">
                                <option value="" >Select City</option>

                            </select>
                        </div>



                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">Address</label>
                            <input type="text" name="address" class="form-control input-style" id="inputAddress2"
                                placeholder="Enter address" >
                        </div><br><br>



                        <span style="font-size:22px" class="font-weight-bold pt-5 m-3 pb-3">2. Academic Interest</span><br><br>

                        <div class="form-group" style="border:1px solid grey; padding:10px">
                             <label for="" class="input__label">Are you currently studying at any institution of higher learning?</label> <br>
                                <label for="">Yes</label>
                                <input onclick="javascript:yesnoCheck();" class="form-control input-style" type="radio" id="yesCheck" name="currently_studying" value="Yes" >  &nbsp; &nbsp;
                                <label for="">No</label>
                                <input onclick="javascript:yesnoCheck();" class="form-control input-style"  type="radio" id="noCheck" name="currently_studying" value="No" >
                        </div>

            <div id="ifYes" style="visibility:hidden">

                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">If so, what is the name of the institution?</label>
                            <input type="text" name="name_of_current_institution" class="form-control input-style" id=""
                                value="{{$data->name_of_current_institution}}">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">What is your major?</label>
                                <input type="text" name="major" class="form-control input-style" id="inputEmail4"
                                    value="{{$data->major}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Years of study</label>
                                <input type="number" name="years_of_study" class="form-control input-style" id=""
                                value="{{$data->years_of_study}}">
                            </div>
                        </div>
            </div>


                        <div class="form-row">
                             <div class="form-group col-md-6"  style="border:1px solid grey">
                             <label for="" class="input__label">Have you taken online classes in the past?</label> <br>
                                <label for="">Yes</label>
                                <input onclick="javascript:yes_or_noCheck2();" class="form-control input-style" type="radio" id="yes_Check2" name="online_classes" value="Yes" > &nbsp; &nbsp;
                                <label for="">No</label>
                                <input onclick="javascript:yes_or_noCheck2();" class="form-control input-style"  type="radio" id="no_Check2" name="online_classes" value="No" >
                            </div>
                            <div class="form-group col-md-6">
                            <div id="if_Yes2" style="visibility:hidden">
                                <label for="inputPassword4" class="input__label">For how long?</label>
                                <input type="text" class="form-control input-style" id="" name="how_long_for_online_classes" value="{{$data->how_long_for_online_classes}}">

                            </div>
                            </div>
                        </div>




                        <div class="form-row">
                            <div class="form-group col-md-6"  style="border:1px solid grey">
                                <label for="" class="input__label">What type of enrollment?</label> <br>
                                <label for="">Degree programme</label>
                                <input class="form-control input-style" type="radio" id="male" name="type_of_enrollment" value="Degree programme" >  &nbsp; &nbsp;
                                <label for="">Non-Degree programme</label>
                                <input class="form-control input-style"  type="radio" id="female" name="type_of_enrollment" value="Non-Degree programme">
                            </div>

                            <div class="form-group col-md-6"  style="border:1px solid grey">
                                <label for="" class="input__label">Enrollment period</label> <br>
                                <label for="">February intake</label>
                                <input class="form-control input-style" type="radio" id="male" name="enrollment_period" value="February intake" >  &nbsp; &nbsp;
                                <label for="">September intake</label>
                                <input class="form-control input-style"  type="radio" id="female" name="enrollment_period" value="September intake" >
                            </div>

                        </div><br><br>

                        <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">3. Hobby</span><br><br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">What do you do in your free time?</label>
                                <input type="text" class="form-control input-style" id=""
                                    value="{{$data->free_time}}" name="free_time" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">How often do you travel outside of your residential home?</label>
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
                             <div class="form-group col-md-6"  style="border:1px solid grey">
                             <label for="" class="input__label">Do you belong to any group of individuals or organizations?</label> <br>
                                <label for="">Yes</label>
                                <input onclick="javascript:yes_or_noCheck();" class="form-control input-style" type="radio" id="yes_Check" name="group_of_individual_or_organization" value="Yes" > &nbsp; &nbsp;
                                <label for="">No</label>
                                <input onclick="javascript:yes_or_noCheck();" class="form-control input-style"  type="radio" id="no_Check" name="group_of_individual_or_organization" value="No" >
                            </div>
                            <div class="form-group col-md-6">
                            <div id="if_Yes" style="visibility:hidden">
                                <label for="inputPassword4" class="input__label">If so, name them:</label>
                                <input type="text" class="form-control input-style" id="" name="name_them" value="{{$data->name_them}}">

                            </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">How many languages can you speak?</label>
                                <input type="number" class="form-control input-style" id="" name="languages"
                                     value="{{$data->languages}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Are you a member of Nigerian military force?</label>
                        <select style="width:" name="military_force" id="" class="form-control">
                                <option value="">select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">Are you a government official or do you hold any position in the federal government office?</label>
                        <select style="width:" name="government_official" id="" class="form-control">
                                <option value="">select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                        </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Do you have any medical conditions that we need to know of?</label>
                        <select style="width:" name="medical_conditions" id="" class="form-control">
                                <option value="">select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="no">Rather Not Say</option>
                        </select>
                            </div>
                        </div>
                        <input type="hidden" style="display:none" value="edit_profile" name="edit_profile" />













                        <button style="background:green; font-size:20px" type="submit" class="btn btn-success btn-style mt-4">Submit</button>
                    </form>
                </div>
            </div>








    <!-- Core -->
@include("studentdashboard.script")
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
    function yes_or_noCheck() {
    if (document.getElementById('yes_Check').checked) {
        document.getElementById('if_Yes').style.visibility = 'visible';
    }
    else document.getElementById('if_Yes').style.visibility = 'hidden';

}
</script>





<script type="text/javascript">
    function yes_or_noCheck2() {
    if (document.getElementById('yes_Check2').checked) {
        document.getElementById('if_Yes2').style.visibility = 'visible';
    }
    else document.getElementById('if_Yes2').style.visibility = 'hidden';

}
</script>







<script type="text/javascript">
    function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}
</script>














<script type="text/javascript">
        $('#countries').on('change', function() {
                get_state_by_country();
            });
                function get_state_by_country(){
                    var country_id = $('#countries').val();
                    $.post('{{route('getStates')}}',{_token:'{{ csrf_token() }}', country_id:country_id}, function(data){
                        $('#states').html(null);
                        $('#states').append($('<option value="{{ $value->id }}">Select State</option>', {

                        }));
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
                function get_state_by_state(){
                    var state_id = $('#states').val();
                    $.post('{{route('getCities')}}',{_token:'{{ csrf_token() }}', state_id:state_id}, function(data){
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
</html>
