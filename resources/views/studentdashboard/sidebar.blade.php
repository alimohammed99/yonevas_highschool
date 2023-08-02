<div class="collapse-close d-md-none">
    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </a>
</div>
</div>
<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">

        <span class="sidebar-icon">
            <!-- <img src="../../assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo"> -->
        </span><br>
        <span style="color:green; border:none; border-radius:20px; padding:12px; background:white" class="mt-5 ml-5 mb-4 ms-1 sidebar-text">Hi, {{$data->last_name}}  </span><br><br>

    </li>
    <li class="nav-item  active ">
        <a href="{{url('redirect')}}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
            </span>
            <span class="sidebar-text">MY YONEVAS</span>
        </a>
    </li>



    @php


    if(Auth::check()){
    $isRegComplete = Auth::user()->reg_complete;


    @endphp


    <br>

    @if(!$isRegComplete == 1)
    <li class="nav-item ">
            <span>

                <a href="{{url('update_student_profile')}}" target="_self" class="nav-link d-flex justify-content-between">
                    <span style="color:red; font-size:17px; background:white; padding:5px; border-radius:15px" class="sidebar-text">Update Profile<span style="font-size:25px; font-weight:bolder">!</span></span>
                </a></span>
    </li>
    @endif

    @php

    }

    @endphp








    @php


    // if ((!empty($student_documents_status) && $student_documents_status->status != '1') || (!empty($student_documents_status) &&!$student_documents_status->status)) {

    if (Auth::check()) {



    $getCurrentUserId = Auth::user()->id;




    $student_documents_status = DB::table('applicants_old_results')->where('student_id', '=', $getCurrentUserId)->select('status')->first();



    @endphp

    @if(!$student_documents_status == 9)
    <li class="nav-item ">
            <span>

                <a href="{{url('upload_olevel_and_utme')}}" target="_self" class="nav-link d-flex justify-content-between">
                    <span style="color:red; font-size:17px; background:white; padding:5px; border-radius:15px" class="sidebar-text">Upload Documents<span style="font-size:25px; font-weight:bolder">!</span>
                    </span>
                </a></span>
    </li>
    @endif

    @php

    }

    @endphp















    @php
    if (Auth::check()) {
    $hasUserSubmittedDocs = DB::table('users')->where('users.id', '=', Auth::user()->id)->join('applicants_old_results', 'users.id', 'applicants_old_results.student_id')->first();
    // dd(Auth::user()->id);
    if($hasUserSubmittedDocs){

    @endphp

    <li class="nav-item ">
        <span>
            <span class="sidebar-icon">

            </span>
            <a href="{{url('student_admission_status')}}" target="_self" class="nav-link d-flex justify-content-between">
                <span class="sidebar-text">Approval Page</span>
            </a>
    </li>

    @php
    }
    }
    @endphp








    <li class="nav-item ">
        <a href="{{url('manage_student_profile')}}" target="_self" class="nav-link d-flex justify-content-between">
            <span class="sidebar-text">Profile</span>
        </a>
    </li>



    <li class="nav-item ">
        <a href="tuition_and_fees" target="_self" class="nav-link d-flex justify-content-between">
            <span class="sidebar-text">Tuition & Fees</span>
        </a>
    </li>


    <li class="nav-item ">
        <a href="javascript:void(0)" target="_self" class="nav-link d-flex justify-content-between">
            <span class="sidebar-text">Transcripts / Grades</span>
        </a>
    </li>


    <li class="nav-item ">
        <a href="{{ url('services_and_links') }}" target="_self" class="nav-link d-flex justify-content-between">
            <span class="sidebar-text">Services & Links</span>
        </a>
    </li>




    <li class="nav-item ">
        <a href="{{ url('course_feedback') }}" target="_self" class="nav-link d-flex justify-content-between">
            <span class="sidebar-text">Course Feedback</span>
        </a>
    </li>



    <li class="nav-item ">
        <a href="{{ url('forms') }}" target="_self" class="nav-link d-flex justify-content-between">
            <span class="sidebar-text">Forms</span>
        </a>
    </li>




    <li class="nav-item ">
        <span>
            <span class="sidebar-icon">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                    <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
                </svg> --}}
            </span>
            <a href="javascript:void(0)" target="_self" class="nav-link d-flex justify-content-between">
                <span class="sidebar-text">Change Password</span>
            </a>
            <!--<a href="{{url('change_student_password')}}" target="_self" class="nav-link d-flex justify-content-between">-->
            <!--    <span class="sidebar-text">Change Password</span>-->
            <!--</a>-->
    </li>





    <li class="nav-item">
        <span>
            <span class="sidebar-icon">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                    <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z" />
                    <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z" />
                </svg> --}}
            </span>

            <a href="{{url('students_course_reg')}}" target="_self" class="nav-link d-flex justify-content-between">
                <span class="sidebar-text">Course Registration</span>
            </a>
            <!--<a href="javascript:void(0)" target="_self" class="nav-link d-flex justify-content-between">-->
            <!--    <span class="sidebar-text">Course Registration</span>-->
            <!--</a>-->
    </li>














    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
    <li class="nav-item">Others</li> <br>

























</ul>
</div>
</li>














</ul>
</div>
</li>











<!-- <li class="nav-item">
        <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="../../assets/img/themesberg.svg" height="20" width="28" alt="Themesberg Logo">
          </span>
          <span class="sidebar-text">Themesberg</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="../../pages/upgrade-to-pro.html"
          class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
          <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
          </span>
          <span>Upgrade to Pro</span>
        </a>
      </li> -->
</ul>
</div>
</nav>
