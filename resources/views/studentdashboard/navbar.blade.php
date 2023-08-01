<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="http:http://www.yonevas.institute/assets/newImages/Y-06.png" alt="School logo" /> <img
            class="navbar-brand-light" src="http://www.yonevas.institute/assets/newImages/Y-06.png" alt="School badge logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <!-- <img src="" alt=""> -->


                </div>
                <div class="d-block">
                    <!-- <h2 class="h5 mb-3">Hi, Jane</h2> -->
                    <a href="javascript:void(0)" class="btn btn-success btn-sm d-inline-flex align-items-center">

                        ONLINE
                    </a>
                </div>
            </div>

            @include('studentdashboard.sidebar')
            <main class="content">

                <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
                    <div class="container-fluid px-0">
                        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                            <div class="d-flex align-items-center">
                                <!-- Search form -->
                                <form class="navbar-search form-inline" id="navbar-search-main">
                                    <div class="input-group input-group-merge search-bar">
                                        <span class="input-group-text" id="topbar-addon">
                                            <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" id="topbarInputIconLeft"
                                            placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                                    </div>
                                </form>
                                <!-- / Search form -->
                            </div>
                            <!-- Navbar links -->
                            <!--<ul class="navbar-nav align-items-center">-->
                            <!--    <li class="nav-item dropdown">-->
                            <!--        <a class="nav-link text-dark notification-bell dropdown-toggle"-->
                            <!--            style="width:%; background-color:; padding:; border-radius:20px;  border-top:20px groove tomato"-->
                            <!--            data-unread-notifications="flase" href="#" role="button"-->
                            <!--            data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"><span-->
                            <!--                class="badge badge-danger">-->



                            <!--                {{ $studentsCircularCount }}-->



                            <!--            </span>-->
                            <!--            <svg style="font-size:30px" xmlns="http://www.w3.org/2000/svg" width="16"-->
                            <!--                height="16" fill="currentColor" class="bi bi-envelope pl-1"-->
                            <!--                viewBox="0 0 16 16">-->
                            <!--                <path-->
                            <!--                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />-->
                            <!--            </svg>-->
                            <!--        </a>-->
                            <!--        <div style="width:100%"-->
                            <!--            class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">-->
                            <!--            <div class="list-group list-group-flush">-->
                            <!--                <a href="#"-->
                            <!--                    class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>-->
                            <!--                <div class="list-group-item list-group-item-action border-bottom">-->
                            <!--                    <div class="row align-items-center">-->
                            <!--                        <div class="col-auto">-->

                            <!--                            {{-- <img alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg" class="avatar-md rounded"> --}}-->
                            <!--                        </div>-->

                            <!--                        @foreach ($studentsCircular as $studentsCircular)-->
                            <!--                            <div style="border-bottom:2px solid grey"-->
                            <!--                                class="col-12 ps-0 ms-2">-->
                            <!--                                <h2 class="text-success pt-2">{{ $studentsCircular->title }}-->
                            <!--                                </h2>-->
                            <!--                                <div-->
                            <!--                                    class="d-flex justify-content-between align-items-center">-->
                            <!--                                    <div>-->
                            <!--                                        {{-- <h4 class="h6 mb-0 text-small">Jose Leos</h4> --}}-->
                            <!--                                    </div>-->
                            <!--                                    <div class="text-end">-->
                            <!--                                        {{-- <small class="text-danger">a few moments ago</small> --}}-->
                            <!--                                        {{-- <h3>Title</h3> --}}-->
                            <!--                                    </div>-->
                            <!--                                    {{-- <h3 class="font-smal">Added you to an event "h3roject stand-up" tomorrow at 12:30 AM.  </h3> --}}-->
                            <!--                                    <p class="font-small mt-3 mb-0">-->
                            <!--                                        {{ $studentsCircular->content }} </p>-->

                            <!--                                </div>-->
                            <!--                                <a href="{{ route('read', $studentsCircular->id) }}"-->
                            <!--                                    class="btn btn-success">Mark as read</a> <br><br>-->




                            <!--                            </div>-->
                            <!--                            {{-- <hr/> --}}-->
                            <!--                        @endforeach-->
                            <!--                    </div>-->
                            <!--                </div>-->


                            <!--                <a href="#"-->
                            <!--                    class="dropdown-item text-center fw-bold rounded-bottom py-3">-->
                            <!--                    <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor"-->
                            <!--                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">-->
                            <!--                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>-->
                            <!--                        <path fill-rule="evenodd"-->
                            <!--                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"-->
                            <!--                            clip-rule="evenodd"></path>-->
                            <!--                    </svg>-->
                            <!--                    View all-->
                            <!--                </a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </li>-->
                            <!--</ul>-->



                            <li>

                                <x-app-layout style="">

                                </x-app-layout>


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
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        My Profile
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Settings
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Messages
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Support
                                    </a>
                                    <div role="separator" class="dropdown-divider my-1"></div>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-danger me-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                        Logout
                                    </a>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </div>
                </nav>
