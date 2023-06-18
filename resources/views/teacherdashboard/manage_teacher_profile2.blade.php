
<!DOCTYPE html>
<html lang="en">

<head> 
@include("teacherdashboard.css")
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
/* body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
} */
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}



</style>
</head>

<body>



       @include("teacherdashboard.navbar")


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




<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
    <form method="post">
 
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <label for="">Staff Image</label>
                            <img class="" style="width:300px; border-radius:25px" height="300" width="300" src="{{ asset('StaffImages/'.$data->staff_image) }}" alt="Staff Image"/>
                          
                            
                            <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                      
                        <div class="profile-head">
                                    <h1 class="pt-5" style="font-size:25px">
                                       {{$data->first_name}} {{$data->last_name}}
                                    </h1>
                                    <h6 style="font-size:25px">
                                        {{$data->staff_roles}} 
                                    </h6> <br>
                                    <h6 class="text-success" style="font-size:18px">
                                        {{$data->teaching_or_non_teaching}}
                                    </h6>
                                    <a href="{{url('view_staff_cv', $data->id)}}" class="mt-3  btn btn-info">View CV<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a>

                  <a href="{{url('download_staff_cv', $data->file)}}" class="mt-3 ml-2 btn btn-success">Download CV<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>
                                    <p style="color:red; font-size:25px" class="proile-rating">Filter Staff Profile with the menu below:</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#edubackground" role="tab" aria-controls="profile" aria-selected="false">Education Background</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#employment" role="tab" aria-controls="profile" aria-selected="false">Employment History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#guarantor" role="tab" aria-controls="profile" aria-selected="false">Guarantor's Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#computer" role="tab" aria-controls="profile" aria-selected="false">Most used Computer Packages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#hobby" role="tab" aria-controls="profile" aria-selected="false">Hobby</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#role" role="tab" aria-controls="profile" aria-selected="false">Role in School</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                   <a href="{{url('edit_staffs', $data->id)}}" class="btn btn-secondary">Edit Profile</a> 
                  
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p style="font-size:20px; color:blue">Contact Information</p> <br>
                            <div class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
</svg><a class="pl-1" href="javascript:;">{{$data->phone}}</a><br/>
</div>
                    <div class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
  <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
</svg><a class="pl-1" href="javascript:;">{{$data->email}}</a><br/></div>
                        










                            <p>ADDRESS</p>
                            <a href="javascript:;">{{$data->name_country}}</a><br/>
                            <a href="javscript:;">{{$data->name_state}}</a><br/>
                            <a href="javscript:;">{{$data->name_city}}</a><br/>
                            <a href="javscript:;">{{$data->address}}</a><br/>
                            <!-- <a href="">PHP, .Net</a><br/> -->
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Other Names:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px;">{{$data->other_names}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Marital Status:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->status}}</p>
                                            </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">D.O.B:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->date_of_birth}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Zip code:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->zip_code}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Religion:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->religion_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Password:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->staff_password}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Gender:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->gender}}</p>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Image:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">Lorem</p>
                                            </div>
                                        </div>
                                      -->
            </div>
            </div>
                                            
                            <div class="tab-pane fade" id="edubackground" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Highest level of Education completed:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->highest_education}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Name of the School/Institution:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->name_of_highest_education}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Name of Elementary School:</label>
                                            </div>
                                         
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->elementary_school}}</p> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Year Completed (Elementary School):</label>
                                            </div>
                                            <div class="col-md-6">
                                              <p style="font-size:20px">{{$data->elementary_school_year}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Name of Secondary School:</label>
                                            </div>
                                            <div class="col-md-6">
                                              <p style="font-size:20px">{{$data->secondary_school}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Year Completed (Secondary School):</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->secondary_school_year}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Name of University/Polytechnic/College:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->higher_institution}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Year Completed (Higher Institution):</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->higher_institution_year}}</p>
                                            </div>
                                        </div>
                                    
                              
                            </div>
                 


                     




                        <div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Currently employed?</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->currently_employed}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Looking for employment?</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->looking_for_employment}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Name of previous Employer:</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->name_of_previous_employer}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Job start/End:</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->job_start_end}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Reason for leaving:</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->reasons_for_living}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Previous Employer's contact:</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->employer_contact}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Should we contact them?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->should_we_contact_them}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Do you have Teaching experience?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->teaching_experience}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Years of Teaching experience:</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->years_of_teaching_experience}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Do you have Computer operating experience?</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->computer_experience}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Years of Computer operating experience:</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->years_of_computer_experience}}</p>
                                            </div>
                                        </div>
                               
                                    
</div>






                                        <div class="tab-pane fade" id="guarantor" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Guarantor's full name:</label>
                                            </div>
                                            <div class="col-md-6">
                                         <p style="font-size:20px">{{$data->guarantor_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Guarantor's phone number:</label>
                                            </div>
                                            <div class="col-md-6">
                                     <p style="font-size:20px">{{$data->guarantor_phone}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Guarantor's email:</label>
                                            </div>
                                            <div class="col-md-6">
                                     <p style="font-size:20px">{{$data->guarantor_email}}</p>
                                            </div>
                                        </div>
                                      
                                    
                              
                            </div>










                            
                        <div class="tab-pane fade" id="computer" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Pacakage One:</label>
                                            </div>
                                            <div class="col-md-6">
                                               <p style="font-size:20px">{{$data->package_one}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Pacakage Two:</label>
                                            </div>
                                            <div class="col-md-6">
                                           <p style="font-size:20px">{{$data->package_two}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Pacakage Three:</label>
                                            </div>
                                            <div class="col-md-6">
                                           <p style="font-size:20px">{{$data->package_three}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Pacakage Four:</label>
                                            </div>
                                            <div class="col-md-6">
                                           <p style="font-size:20px">{{$data->package_four}}</p>
                                            </div>
                                        </div>
                                      
                                    
</div>










<div class="tab-pane fade" id="hobby" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">What do you do in your free time?</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->free_time}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">How often do you travel out of your home?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->residential_home}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Do you belong to any group of Individual/Organizations?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->group_of_individual_or_organization}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">If so, name them:</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->name_them}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">How many languauges can you speak?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->languages}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Are you a member of Nigerian Military Force?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->military_force}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Do you hold any position in the Federal Government Office?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->government_official}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Do you have medical conditions?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->medical_conditions}}</p>
                                            </div>
                                        </div>
                                      
                                    
                              
                            </div>

                            <!-- <div class="tab-pane fade" id="role" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Tea h</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">Lorem</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Guarantor's phone number:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">Lorem</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Guarantor's email:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">Lorem</p>
                                            </div>
                                        </div>
                                      
                                    
                              
                            </div> -->


                 
                            </div>
                        </div>
</div>


                    


                    </div>
                </div>
           
            </form>           
        </div>






    <!-- Core -->
@include("teacherdashboard.script")
</body>

</html>
