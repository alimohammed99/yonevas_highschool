
<!DOCTYPE html>
<html lang="en">

<head> 
@include("admin.css")
</head>

<body>



<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

        <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, Jane</h2>
          <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
            Sign Out
          </a>
        </div>
      </div>


      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
            aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
     
          <span class="sidebar-icon">
            <!-- <img src="../../assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo"> -->
          </span>
          <!-- @ for each ( $ logo as $ logo )
  <img style="width:100%" class="img-fluid rounded-circle" src="/SiteLogo/ {  {  $   logo  - >  logo  }  }"alt="logo" width="" height=""> 

  @   end    for    each -->
    
      </li>
    













          </ul>
        </div>
      </li>










      
    


          </ul>
        </div>
      </li>


   



 





        <main class="content">

            <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
  <div class="container-fluid px-0">
    <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
      <div class="d-flex align-items-center">
        <!-- Search form -->
        <form class="navbar-search form-inline" id="navbar-search-main">
          <div class="input-group input-group-merge search-bar">
              <span class="input-group-text" id="topbar-addon">
                <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </span>
              <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
          </div>
        </form>
        <!-- / Search form -->
      </div>
      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown">
          <!-- <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
          </a> -->
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
            <div class="list-group list-group-flush">
              <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <img alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg" class="avatar-md rounded">
                    </div>
                    <div class="col ps-0 ms-2">
                      <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                          </div>
                          <div class="text-end">
                            <small class="text-danger">a few moments ago</small>
                          </div>
                      </div>
                      <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                    </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                    <div class="col-auto">
                   
                      <img alt="Image placeholder" src="../../assets/img/team/profile-picture-2.jpg" class="avatar-md rounded">
                    </div>
                    <div class="col ps-0 ms-2">
                      <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                          </div>
                          <div class="text-end">
                            <small class="text-danger">2 hrs ago</small>
                          </div>
                      </div>
                      <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new project".</p>
                    </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="../../assets/img/team/profile-picture-3.jpg" class="avatar-md rounded">
                    </div>
                    <div class="col ps-0 m-2">
                      <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                          </div>
                          <div class="text-end">
                            <small>5 hrs ago</small>
                          </div>
                      </div>
                      <p class="font-small mt-1 mb-0">Tagged you in a document called "Financial plans",</p>
                    </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                    <div class="col-auto">
                    
                      <img alt="Image placeholder" src="../../assets/img/team/profile-picture-4.jpg" class="avatar-md rounded">
                    </div>
                    <div class="col ps-0 ms-2">
                      <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                          </div>
                          <div class="text-end">
                            <small>1 d ago</small>
                          </div>
                      </div>
                      <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                    </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                    <div class="col-auto">
                    
                      <img alt="Image placeholder" src="../../assets/img/team/profile-picture-5.jpg" class="avatar-md rounded">
                    </div>
                    <div class="col ps-0 ms-2">
                      <!-- <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                          </div>
                          <div class="text-end">
                            <small>2 hrs ago</small>
                          </div>
                      </div> -->
                      <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing page."</p>
                    </div>
                </div>
              </a>
              <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                View all
              </a>
            </div>
          </div>
        </li>



 






        <li class="nav-item dropdown ms-lg-3">
          <!-- <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="media d-flex align-items-center">
              <img class="avatar rounded-circle" alt="Image placeholder" src="../../assets/img/team/profile-picture-3.jpg">
              <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                <span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
              </div>
            </div>
          </a> -->
          <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
              My Profile
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
              Settings
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
              Messages
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
              Support
            </a>
            <div role="separator" class="dropdown-divider my-1"></div>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>                
              Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>



       @if(session()->has('success_message'))
      <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('success_message')}}
      </div>
      @endif


      @if(session()->has('error_message'))
      <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('error_message')}}
      </div>
      @endif


      <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:20px">COMPLETE STUDENT PROFILE</h1>


      <span style="color:red; font-size:22px">Fill all details carefully. Do not leave any field blank.</span>
      <div class="card card_border mt-2 py-2 mb-4">
      
                <div class="card-body" back>
                 
                <form class="form-horizontal" action="{{url('upload_students')}}" method="post" enctype="multipart/form-data">
   
   @csrf
                        <span style="font-size:22px" class="font-weight-bold pb-3">1. Personal Information</span><br><br>
                     
                      
                        <div class="form-group">
                         
                          
                                <label for="inputPassword4" class="input__label">Marital Status</label>
                                <select style="width:" name="marital_status" id="marital_status" class="form-control" required="required">
                                @foreach($data1 as $data1)
                                <option value="{{$data1->id}}" required="required">{{$data1->status}}</option>
                                @endforeach
                             </select>
                          
                        </div>

                     

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control input-style" id=""
                                    placeholder="Email" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">Zip Code</label>
                                <input type="number" name="zip_code" class="form-control input-style" id=""
                                    placeholder="Enter Zip code" required="required">
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
                                <label for="" class="input__label">Student Password</label>
                                <input type="text" name="password" class="form-control input-style" id=""
                                    placeholder="Enter the Password provided during registration" required="required">
                            </div>
                        </div>



                    

                        <div class="form-row">
                            <div class="form-group col-md-6"  style="border:1px solid grey">
                                <label for="" class="input__label">Gender</label> <br>
                                <label for="">Male</label>
                                <input class="" type="radio" id="male" name="gender" value="Male" required="required">  &nbsp; &nbsp;
                                <label for="">Female</label>
                                <input class=""  type="radio" id="female" name="gender" value="Female" required="required">
                            </div>
                     
                            <div class="form-group col-md-6"  style="border:1px solid grey">
                            <label for="inputAddress2" class="input__label">Student Image</label>
                            <input type="file" name="student_image" class="form-control input-style" id="" required="required">
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
                            <input type="text" name="address" class="form-control input-style" id="inputAddress2"
                                placeholder="Enter address" required="required">
                        </div><br><br>



                        <span style="font-size:22px" class="font-weight-bold pt-5 m-3 pb-3">2. Academic Interest</span><br><br>

                        <div class="form-group" style="border:1px solid grey; padding:10px">
                             <label for="" class="input__label">Are you currently studying at any institution of higher learning?</label> <br>
                                <label for="">Yes</label>
                                <input onclick="javascript:yesnoCheck();" class="" type="radio" id="yesCheck" name="currently_studying" value="Yes" required="required">  &nbsp; &nbsp;
                                <label for="">No</label>
                                <input onclick="javascript:yesnoCheck();" class=""  type="radio" id="noCheck" name="currently_studying" value="No" required="required">
                        </div>

            <div id="ifYes" style="visibility:hidden">

                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">If so, what is the name of the institution?</label>
                            <input type="text" name="name_of_current_institution" class="form-control input-style" id=""
                                placeholder="Enter name of Current Institution">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">What is your major?</label>
                                <input type="text" name="major" class="form-control input-style" id="inputEmail4"
                                    placeholder="Enter your Course of study">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Years of study</label>
                                <input type="number" name="years_of_study" class="form-control input-style" id=""
                                    placeholder="Enter number of Years">
                            </div>
                        </div>
            </div>


                        <div class="form-row">
                             <div class="form-group col-md-6"  style="border:1px solid grey">
                             <label for="" class="input__label">Have you taken online classes in the past?</label> <br>
                                <label for="">Yes</label>
                                <input onclick="javascript:yes_or_noCheck2();" class="" type="radio" id="yes_Check2" name="online_classes" value="Yes" required="required"> &nbsp; &nbsp;
                                <label for="">No</label>
                                <input onclick="javascript:yes_or_noCheck2();" class=""  type="radio" id="no_Check2" name="online_classes" value="No" required="required">
                            </div>
                            <div class="form-group col-md-6">
                            <div id="if_Yes2" style="visibility:hidden">
                                <label for="inputPassword4" class="input__label">For how long?</label>
                                <input type="text" class="form-control input-style" id="" name="how_long_for_online_classes">
                                 
                            </div>
                            </div>
                        </div>

                    

                        <div class="form-row">
                            <div class="form-group col-md-6"  style="border:1px solid grey">
                                <label for="" class="input__label">What type of enrollment?</label> <br>
                                <label for="">Degree programme</label> 
                                <input class="" type="radio" id="male" name="type_of_enrollment" value="Degree programme" required="required">  &nbsp; &nbsp;
                                <label for="">Non-Degree programme</label>
                                <input class=""  type="radio" id="female" name="type_of_enrollment" value="Non-Degree programme" required="required">
                            </div>
                     
                            <div class="form-group col-md-6"  style="border:1px solid grey">
                                <label for="" class="input__label">Enrollment period</label> <br>
                                <label for="">February intake</label>
                                <input class="" type="radio" id="male" name="enrollment_period" value="February intake" required="required">  &nbsp; &nbsp;
                                <label for="">September intake</label>
                                <input class=""  type="radio" id="female" name="enrollment_period" value="September intake" required="required">
                            </div>

                        </div><br><br>

                        <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">3. Hobby</span><br><br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">What do you do in your free time?</label>
                                <input type="text" class="form-control input-style" id=""
                                    placeholder="Enter answer" name="free_time" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="input__label">How often do you travel outside of your residential home?</label>
                                <input type="text" class="form-control input-style" id="" name="residential_home"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-row">
                             <div class="form-group col-md-6"  style="border:1px solid grey">
                             <label for="" class="input__label">Do you belong to any group of individuals or organizations?</label> <br>
                                <label for="">Yes</label>
                                <input onclick="javascript:yes_or_noCheck();" class="" type="radio" id="yes_Check" name="group_of_individual_or_organization" value="Yes" required="required"> &nbsp; &nbsp;
                                <label for="">No</label>  
                                <input onclick="javascript:yes_or_noCheck();" class=""  type="radio" id="no_Check" name="group_of_individual_or_organization" value="No" required="required">
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
                                <input type="number" class="form-control input-style" id="" name="languages"
                                    required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Are you a member of Nigerian military force?</label>
                                <select style="width:" name="military_force" id="" class="form-control" required="required">
                                @foreach($data3 as $data3)
                                <option value="{{$data3->id}}" required="required">{{$data3->military_force}}</option>
                                @endforeach
                             </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">Are you a government official or do you hold any position in the federal government office?</label>
                                <select style="width:" name="government_official" id="" class="form-control" required="required">
                                @foreach($data4 as $data4)
                                <option value="{{$data4->id}}" required="required">{{$data4->government_official}}</option>
                                @endforeach
                             </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Do you have any medical conditions that we need to know of?</label>
                                <select style="width:" name="medical_conditions" id="" class="form-control" required="required">
                                @foreach($data5 as $data5)
                                <option value="{{$data5->id}}" required="required">{{$data5->medical_conditions}}</option>
                                @endforeach
                             </select>
                            </div>
                        </div><br><br>


                        <span style="font-size:22px" class="font-weight-bold pt-5 pb-3">4. Select Course</span><br><br>

                 


                        <div class="form-group">
                            <label for="" class="input__label">Choose Academic Session</label>
                            <select style="width:" name="academic_session" id="states" class="form-control" required="required">
                            @foreach($acad as $acad)
                                        <option value="{{$acad->id}}" required="required">{{$acad->academic_session}}</option>
                            @endforeach

                            </select>
                         </div>


                        <div class="form-group col-md-12"  style="border:1px solid grey">
                             <label style="color:red; font-size:22px" for="" class="input__label">Choose Programme type*</label> <br>
                                <label for="">Diploma</label>
                                <input onclick="javascript:dip_or_cert();" class="" type="radio" id="dipcert1" name="programme_type" value="1" required="required"> &nbsp; &nbsp;
                                <label for="">Certificate & Training</label>
                                <input onclick="javascript:dip_or_cert();" class=""  type="radio" id="dipcert2" name="programme_type" value="2" required="required">
                            </div>



                            <div id="cert" style="visibility:hidden">

<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name of Certificate Course:</label>
             
      <select style="width:" name="name_of_certificate_course" id="" class="form-control" >
      @foreach($cert_courses as $cert_courses)
      <option value="{{$cert_courses->id}}">{{$cert_courses->course_title}}</option>
                 @endforeach
         </select>
  
    </div>
</div>




     <div id="d_c" style="visibility:hidden">


                         <div class="form-group">
                            <label for="" class="input__label">Level:</label>
                            <select style="width:" name="level" id="states" class="form-control">
                            @foreach($level as $level)
                                        <option value="{{$level->id}}">{{$level->level_name}}</option>
                            @endforeach

                            </select>
                         </div>




                                            <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Faculty:</label>
                    
                        <select style="" name="faculty" id="faculty" class="form-control" >
                                                    <option value="">Select Faculty</option>
                                                    @foreach(App\Models\Faculty::orderBy('faculty_name')->get() as $key => $value)
                                                        <option value="{{ $value->id }}" >{{ $value->faculty_name }}</option>
                                                    @endforeach
                            </select>
                    
                        </div>


                            <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Department:</label>
                                    
                            <select style="width:" name="department" id="department" class="form-control" >
                                        <option value="" >Select Department</option>

                                </select>
                        
                            </div>

</div> 










                        <button style="background:green; font-size:20px" type="submit" class="btn btn-success btn-style mt-4">Submit</button>
                    </form>
                </div>
            </div>








    <!-- Core -->
@include("admin.script")
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
