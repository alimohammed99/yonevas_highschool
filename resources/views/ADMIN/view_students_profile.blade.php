
<!DOCTYPE html>
<html lang="en">

<head>
@include("ADMIN.css")
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




<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
    <form method="post">

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <label for="">Student Image</label>
                            <img style="width:300px; border-radius:25px" height="300" width="300" src="{{ asset('StudentImages/' . $data->student_image) }}" alt="Student Image"/>



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
                                        {{$data->teaching_or_nonteaching}}
                                    </h6>
                                    <p style="color:red; font-size:25px" class="proile-rating">Filter Student Profile with the menu below:</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#academicinterest" role="tab" aria-controls="profile" aria-selected="false">Academic Interest</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#hobby" role="tab" aria-controls="profile" aria-selected="false">Hobby</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#social" role="tab" aria-controls="profile" aria-selected="false">Social Media Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#nextOfKin" role="tab" aria-controls="profile" aria-selected="false">Next of Kin's Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#course" role="tab" aria-controls="profile" aria-selected="false">Course</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                   <a href="{{url('edit_students', $data->id)}}" class="btn btn-success">Edit Profile</a>
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











                            <p>ADDRESS</p> <br>
                            <div class="d-flex"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
</svg><a class="pl-2" href="javascript:;">{{$data->name_country}}</a><br/> </div>
<div class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-europe-africa" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM3.668 2.501l-.288.646a.847.847 0 0 0 1.479.815l.245-.368a.809.809 0 0 1 1.034-.275.809.809 0 0 0 .724 0l.261-.13a1 1 0 0 1 .775-.05l.984.34c.078.028.16.044.243.054.784.093.855.377.694.801-.155.41-.616.617-1.035.487l-.01-.003C8.274 4.663 7.748 4.5 6 4.5 4.8 4.5 3.5 5.62 3.5 7c0 1.96.826 2.166 1.696 2.382.46.115.935.233 1.304.618.449.467.393 1.181.339 1.877C6.755 12.96 6.674 14 8.5 14c1.75 0 3-3.5 3-4.5 0-.262.208-.468.444-.7.396-.392.87-.86.556-1.8-.097-.291-.396-.568-.641-.756-.174-.133-.207-.396-.052-.551a.333.333 0 0 1 .42-.042l1.085.724c.11.072.255.058.348-.035.15-.15.415-.083.489.117.16.43.445 1.05.849 1.357L15 8A7 7 0 1 1 3.668 2.501Z"/>
</svg><a class="pl-2" href="javscript:;">{{$data->name_state}}</a><br/> </div>
<div class="d-flex"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> <a class="pl-2" href="javscript:;">{{$data->name_city}}</a><br/></div>
<div class="d-flex"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
</svg> <a class="pl-2"d href="javscript:;">{{$data->address}}</a><br/></div>
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
                                                @php

                                                if(empty($data->other_names)){

                                                    @endphp
                                                    <p style="font-size:20px;">Null</p>
                                                    @php
                                                }

                                                @endphp
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
                                                <p style="font-size:20px">{{$data->student_password}}</p>
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

                            <div class="tab-pane fade" id="academicinterest" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Are you currently studying at any institution of higher learning?</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->currently_studying}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">If so, what is the name of the institution?</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->name_of_current_institution}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">What is your major?</label>
                                            </div>

                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->major}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Years of study:</label>
                                            </div>
                                            <div class="col-md-6">
                                              <p style="font-size:20px">{{$data->years_of_study}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Have you taken online classes in the past?</label>
                                            </div>
                                            <div class="col-md-6">
                                              <p style="font-size:20px">{{$data->online_classes}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">For how long?</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->how_long_for_online_classes}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">What type of enrollment?</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->type_of_enrollment}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Enrollment period:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$data->enrollment_period}}</p>
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
                                                <label style="font-size:22px">How often do you travel outside of your residential home?</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->residential_home}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Do you belong to any group of individuals or organizations?</label>
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
                                            <label style="font-size:22px">How many languages can you speak?</label>
                                            </div>
                                            <div class="col-md-6">
                                    <p style="font-size:20px">{{$data->languages}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Are you a member of Nigerian military force?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->military_force}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Are you a government official or do you hold any position in the federal government office?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->government_official}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Do you have any medical conditions that we need to know of?</label>
                                            </div>
                                            <div class="col-md-6">
                                        <p style="font-size:20px">{{$data->medical_conditions}}</p>
                                            </div>



</div>

</div>




<div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Facebook Page:</label>
                                            </div>
                                            <div class="col-md-6">




                                            <p style="font-size:20px">

                                            @php

                                            if(empty($data->facebook_page)){

                                                @endphp
                                                <p style="font-style:italic; color:grey">Not Provided</p>
                                                @php
                                            }

                                            @endphp

                                            {{$data->facebook_page}}


                                        </p>




                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Twitter Page:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">

                                        @php

                                        if(empty($data->twitter_page)){

                                            @endphp
                                            <p style="font-style:italic; color:grey">Not Provided</p>
                                            @php
                                        }

                                        @endphp

                                        {{$data->twitter_page}}


                                        </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Instagram Handle:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">

                                            @php

                                            if(empty($data->instagram_page)){

                                                @endphp
                                                <p style="font-style:italic; color:grey">Not Provided</p>
                                                @php
                                            }else{

                                            @endphp



                                            {{$data->instagram_page}}

                                            @php
                                            }
                                            @endphp



                                            </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">LinkedIn Page:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">

                                        @php

                                        if(empty($data->linkedin_page)){

                                            @endphp
                                            <p style="font-style:italic; color:grey">Not Provided</p>
                                            @php
                                        }

                                        @endphp

                                        {{$data->linkedin_page}}


                                        </p>
                                                                                    </div>
                                        </div>



                            </div>









                            <div class="tab-pane fade" id="nextOfKin" role="tabpanel" aria-labelledby="profile-tab">

                                       <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Next of Kin's Fullname:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->next_of_kin_name}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Next of Kin's Email:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->next_of_kin_email}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Next of Kin's Phone:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->next_of_kin_phone}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Next of Kin's Address:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->next_of_kin_address}}</p>
                                            </div>
                                        </div>


                            </div> </div>


<div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Entrance Academic Session:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-size:20px">{{$data->academic_session}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label style="font-size:22px">Programme Type:</label>
                                            </div>
                                            <div class="col-md-6">
                                                 <p style="font-size:20px">{{$data->programme}}</p>
                                            </div>
                                        </div>











                                        @if(empty($data->name_of_certificate_course) || $data->name_of_certificate_course=="null")
                                                @php

                                                  $getlevel = DB::table('levels')->where('id', '=', $data->level)->first();
                                                  $getfaculty = DB::table('faculties')->where('id', '=', $data->faculty)->first();
                                                  $getdepartment = DB::table('departments')->where('id', '=', $data->department)->first();

                                                @endphp

                                            <div class="row">
                                                <div class="col-md-6">
                                                <label style="font-size:22px">Level:</label>
                                                </div>

                                                <div class="col-md-6">

                                                <p style="font-size:20px">{{$getlevel->level_name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label style="font-size:22px">Faculty:</label>
                                                </div>
                                                <div class="col-md-6">
                                                  <p style="font-size:20px">{{$getfaculty->faculty_name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                <label style="font-size:22px">Department:</label>
                                                </div>
                                                <div class="col-md-6">
                                                  <p style="font-size:20px">{{$getdepartment->department_name}}</p>
                                                </div>
                                            </div>
                                        @endif


                                        @if(!empty($data->name_of_certificate_course) && $data->name_of_certificate_course != "null")
                                                @php


                                                  $getcourse = DB::table('courses')->where('id', '=', $data->name_of_certificate_course)->first();


                                                @endphp

                                        <div class="row">
                                            <div class="col-md-6">
                                            <label style="font-size:22px">Name of Certificate Course:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p style="font-size:20px">{{$getcourse->course_title}}</p>
                                            </div>
                                        </div>

                                        @endif




                            </div>




                        </div>
</div>





                    </div>
                </div>

            </form>
        </div>






    <!-- Core -->
@include("ADMIN.script")
</body>

</html>
