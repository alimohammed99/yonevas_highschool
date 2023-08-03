<!DOCTYPE html>
<html lang="en">

<head>
    @include("studentdashboard.css")

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        /* body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
} */

    </style>
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



    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/redirect'}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- <div style="float:right">dd</div> -->
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ asset('StudentImages/'.$data->student_image) }}" alt="Admin" class="rounded-circle" style="border-radius:100px" width="200" height="300">
                                <!-- <img class="" style="width:300px; border-radius:25px" height="300" width="300"  alt="Staff Image"/> -->
                                <div class="mt-3">
                                    <h4>{{$data->first_name}} {{$data->last_name}}</h4>
                                    <!-- <p class="text-secondary mb-1">{{$data->staff_roles}} </p> -->
                                    <!-- <p class="text-muted font-size-sm">{{$data->teaching_or_non_teaching}}</p><br> --> <br>

                                    @php

                                    $isUploadResult = Auth::user()->old_results_upload;


                                    if($isUploadResult != 0){

                                    @endphp


                                    <button style="background-color:#5e72e4; text-align:center;   box-shadow: 5px 5px 5px  black;" type="button" class="mt-5 btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModal">
                                        View my O' Level Results
                                    </button>


                                    @php

                                    }else{

                                    @endphp
                                    <a class="btn btn-secondary" href="{{url('upload_olevel_and_utme')}}" target="_self" class="nav-link d-flex justify-content-between">
                                        Upload O'Level
                                    </a>

                                    @php

                                    }

                                    @endphp










                                    <!-- MODAL FOR WAEC / NECO 1 -->
                                    <!-- MODAL FOR WAEC / NECO 1 -->
                                    <!-- MODAL FOR WAEC / NECO 1 -->


                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModalWaecNeco1">
                                        <div class="modal-dialog">
                                            <div style="border-radius:50px" class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 style="text-align:center; color:white" class="modal-title">O'Level</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">


                                                    <div class=" container col-lg-12" style="overflow:scroll;" class="image-responsive">
                                                        @if($olevel_data && $olevel_data->waco1)
                                                        <iframe style="overflow:scroll" src="/students_waec_or_neco_1/{{$olevel_data->waco1}}" height="600" width="3000px" frameborder="0"></iframe>
                                                        @else
                                                        <img src="https://cdn.pixabay.com/photo/2016/01/03/00/43/upload-1118929_960_720.png" alt="Admin" class="rounded-circle" style="border-radius:100px" width="200" height="300">
                                                        @endif

                                                        <!-- <iframe style="overflow:scroll" src="/staffcv/{{$data->staff_cv}}" height="700" width="1000" frameborder="0"></iframe> -->
                                                    </div>


                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>






                                    <!-- MODAL FOR WAEC / NECO 2 -->
                                    <!-- MODAL FOR WAEC / NECO 2 -->
                                    <!-- MODAL FOR WAEC / NECO 2 -->

                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModalWaecNeco2">
                                        <div class="modal-dialog">
                                            <div style="border-radius:50px" class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 style="text-align:center; color:white" class="modal-title">O'Level</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">


                                                    <div class=" container col-lg-12" style="overflow:scroll;" class="image-responsive">

                                                        @if($olevel_data && $olevel_data->waco2)

                                                        <!-- <iframe style="overflow:scroll" src="/students_utme/{{$olevel_data->utme}}" height="600" width="3000px" frameborder="0"></iframe> -->
                                                        <iframe style="overflow:scroll" src="/students_waec_or_neco_1/{{$olevel_data->waco2}}" height="600" width="3000px" frameborder="0"></iframe>
                                                        @else
                                                        <img src="https://cdn.pixabay.com/photo/2016/01/03/00/43/upload-1118929_960_720.png" alt="Admin" class="rounded-circle" style="border-radius:100px" width="200" height="300">
                                                        @endif
                                                    </div>


                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>








                                    <!-- MODAL FOR UTME-->
                                    <!-- MODAL FOR UTME-->
                                    <!-- MODAL FOR UTME-->

                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModalUtme">
                                        <div class="modal-dialog">
                                            <div style="border-radius:50px" class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 style="text-align:center; color:white" class="modal-title">O'Level</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">


                                                    <div class=" container col-lg-12" style="overflow:scroll;" class="image-responsive">

                                                        @if($olevel_data && $olevel_data->utme)
                                                        <!-- <iframe style="overflow:scroll" src="/students_utme/{{$data->utme_file}}" height="600" width="3000px" frameborder="0"></iframe> -->
                                                        <iframe style="overflow:scroll" src="/students_utme/{{$olevel_data->utme}}" height="600" width="3000px" frameborder="0"></iframe>
                                                        @else
                                                        <img src="https://cdn.pixabay.com/photo/2016/01/03/00/43/upload-1118929_960_720.png" alt="Admin" class="rounded-circle" style="border-radius:100px" width="200" height="300">
                                                        @endif
                                                    </div>


                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog">
                                            <div style="border-radius:50px" class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 style="text-align:center; color:white" class="modal-title"></h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <table class="table table-stripe table-hover">
                                                        <tr>
                                                            <td>Result</td>
                                                            <td>View</td>
                                                            <td>Download</td>
                                                        </tr>



                                                        <tr>

                                                            <td>WAEC/NECO 1</td>


                                                            @php

                                                            if(!empty($olevel_data->waco1)){

                                                            @endphp



                                                            <td class=""><button style="background-color:#5e72e4; text-align:center; " type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModalWaecNeco1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg>
                                                                </button>
                                                            </td>


                                                            @php

                                                            }else{

                                                            @endphp


                                                            <td style="color:red"><i>Not Provided</i></td>

                                                            @php

                                                            }

                                                            @endphp






                                                            @php


                                                            if(!empty($olevel_data->waco1)){

                                                            @endphp


                                                            <td> <a href="{{url('download_waco1', $olevel_data->waco1)}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg></a></td>



                                                            @php

                                                            }else{

                                                            @endphp


                                                            <td style="color:red"><i>Not Provided</i></td>

                                                            @php

                                                            }

                                                            @endphp


                                                        </tr>






                                                        <tr>
                                                            <td>WAEC/NECO 2</td>


                                                            @php

                                                            if(!empty($olevel_data->waco2)){

                                                            @endphp



                                                            <td class=""><button style="background-color:#5e72e4; text-align:center;   box-shadow: 5px 5px 5px  black;" type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModalWaecNeco2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg>
                                                                </button></td>



                                                            @php

                                                            }else{

                                                            @endphp


                                                            <td style="color:red"><i>Not Provided</i></td>

                                                            @php

                                                            }

                                                            @endphp






                                                            @php

                                                            if(!empty($olevel_data->waco2)){

                                                            @endphp
                                                            <td> <a href="{{url('download_waco2', $olevel_data->waco2)}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg></a></td>







                                                            @php

                                                            }else{

                                                            @endphp


                                                            <td style="color:red"><i>Not Provided</i></td>

                                                            @php

                                                            }

                                                            @endphp



                                                        </tr>






                                                        <tr>
                                                            <td>UTME</td>



                                                            @php

                                                            if(!empty($olevel_data->utme)){

                                                            @endphp
                                                            <td class=""><button style="background-color:#5e72e4; text-align:center;   box-shadow: 5px 5px 5px  black;" type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModalUtme">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg>
                                                                </button></td>



                                                            @php

                                                            }else{

                                                            @endphp


                                                            <td style="color:red"><i>Not Provided</i></td>

                                                            @php

                                                            }

                                                            @endphp






                                                            @php

                                                            if(!empty($olevel_data->utme)){

                                                            @endphp


                                                            <td> <a href="{{url('download_utme', $olevel_data->utme)}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg></a></td>



                                                            @php

                                                            }else{

                                                            @endphp


                                                            <td style="color:red"><i>Not Provided</i></td>

                                                            @php

                                                            }

                                                            @endphp


                                                        </tr>
                                                    </table>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <h1 class="p-3" style="color:blue">Contact Information</h1>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">

                                <h6 class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward" viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
                                    </svg>Phone</h6>
                                <span class="text-secondary">~{{$data->phone}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                                        <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
                                    </svg>Mail</h6>
                                <span class="text-secondary">~{{$data->email}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>Twitter</h6>
                                <span class="text-secondary"> <span class="text-secondary">
                                        @php
                                        if(!empty($data->twitter_page)){
                                        @endphp
                                        ~{{$data->twitter_page}}
                                        @php
                                        }else{
                                        @endphp
                                        <span style="font-style:italic; color:red">Not Provided</span>
                                        @php
                                        }
                                        @endphp
                                    </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <span class="text-secondary"> <span class="text-secondary">
                                        @php
                                        if(!empty($data->instagram_page)){
                                        @endphp
                                        ~{{$data->instagram_page}}
                                        @php
                                        }else{
                                        @endphp
                                        <span style="font-style:italic; color:red">Not Provided</span>
                                        @php
                                        }
                                        @endphp
                                    </span>
                            </li>


                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>Facebook</h6>
                                <span class="text-secondary">
                                    @php
                                    if(!empty($data->facebook_page)){
                                    @endphp
                                    ~{{$data->facebook_page}}
                                    @php
                                    }else{
                                    @endphp
                                    <span style="font-style:italic; color:red">Not Provided</span>
                                    @php
                                    }
                                    @endphp
                                </span>
                            </li>





                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                    </svg>LinkedIn</h6>
                                <span class="text-secondary"> <span class="text-secondary">
                                        @php
                                        if(!empty($data->linkedin_page)){
                                        @endphp
                                        ~{{$data->linkedin_page}}
                                        @php
                                        }else{
                                        @endphp
                                        <span style="font-style:italic; color:red">Not Provided</span>
                                        @php
                                        }
                                        @endphp
                                    </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="p-1 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$data->first_name}} {{$data->last_name}}
                                </div>
                            </div>
                            <hr>
                            <div class="p-1 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Country:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$data->name_country}}
                                </div>
                            </div>
                            <hr>
                            <div class="p-1 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">State of Origin:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$data->name_state}}
                                </div>
                            </div>
                            <hr>
                            <div class="p-1 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">City:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$data->name_city}}
                                </div>
                            </div>
                            <hr>
                            <div class="p-1 row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$data->address}}
                                </div>
                            </div>
                            <hr>
                            <div class="p-2 row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="" href="{{url('edit_student_profile', $data->id)}}">Edit profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-4 mb-3">
                            <div class="card h-100">
                                <!-- <div class="card mt-3"> -->
                                <h1 class="p-3" style="color:blue">Personal Information</h1>
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">

                                        <h6 class="mb-0"> Other Names:</h6>
                                        <span class="text-secondary"> @php
                                            if(!empty($data->other_names)){
                                            @endphp
                                            ~{{$data->other_names}}
                                            @php
                                            }else{
                                            @endphp
                                            <span style="font-style:italic; color:red">Not Provided</span>
                                            @php
                                            }
                                            @endphp
                                        </span>
                                    </li>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Marital Status:</h6>
                                        <span class="text-secondary">~{{$data->marital_status}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> D.O.B.:</h6>
                                        <span class="text-secondary">~{{$data->date_of_birth}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Zip Code:</h6>
                                        <span class="text-secondary">~{{$data->zip_code}}</span>
                                    </li>


                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Religion:</h6>
                                        <span class="text-secondary">~{{$data->religion}}</span>
                                    </li>





                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Password:</h6>
                                        <span class="text-secondary">~{{$data->student_password}}</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Gender:</h6>
                                        <span class="text-secondary">~{{$data->gender}}</span>
                                    </li>
                                </ul>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-8 mb-3">
                            <div class="card h-100">
                                <!-- <div class="card mt-3"> -->
                                <h1 class="p-3" style="color:blue">Hobby</h1>
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">

                                        <h6 class="mb-0"> What do you do in your free time?</h6>
                                        <span class="text-secondary">~{{$data->free_time}}</span>
                                    </li>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> How often do you travel out of your home?</h6>
                                        <span class="text-secondary">~{{$data->residential_home}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Do you belong to any group of Individual/Organizations?</h6>
                                        <span class="text-secondary">~{{$data->group_of_individual_or_organization}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> If so, name them:</h6>
                                        <span class="text-secondary">~{{$data->name_them}}</span>
                                    </li>


                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> How many languauges can you speak?</h6>
                                        <span class="text-secondary">~{{$data->languages}}</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Are you a member of Nigerian Military Force?</h6>
                                        <span class="text-secondary">~{{$data->military_force}}</span>
                                    </li>



                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Do you hold any position in the Federal Government Office?</h6>
                                        <span class="text-secondary">~{{$data->government_official}}</span>
                                    </li>


                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"> Do you have medical conditions?</h6>
                                        <span class="text-secondary">~{{$data->medical_conditions}}</span>
                                    </li>



                                </ul>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>












            <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                    <div class="card h-100">
                        <!-- <div class="card mt-3"> -->
                        <h1 class="p-3" style="color:blue">Academic Interest</h1>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> Are you currently studying at any institution of higher learning?</h6>
                                <span class="text-secondary">~{{$data->currently_studying}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> If so, what is the name of the institution?</h6>
                                <span class="text-secondary">~{{$data->name_of_current_institution}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> What is your major?</h6>
                                <span class="text-secondary">~{{$data->major}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> Years of study:</h6>
                                <span class="text-secondary">~{{$data->years_of_study}}</span>
                            </li>


                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> Have you taken online classes in the past?</h6>
                                <span class="text-secondary">~{{$data->online_classes}}</span>
                            </li>





                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> For how long?</h6>
                                <span class="text-secondary">~{{$data->how_long_for_online_classes}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> What type of enrollment?</h6>
                                <span class="text-secondary">~{{$data->type_of_enrollment}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> Enrollment period:</h6>
                                <span class="text-secondary">~{{$data->enrollment_period}}</span>
                            </li>




                        </ul>
                        <!-- </div> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>











    <div class="row gutters-sm">

        <div class="col-sm-6 mb-4">
            <div class="card h-100">
                <!-- <div class="card mt-3"> -->
                <h1 class="p-3" style="color:blue">Next of Kin's details</h1>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Next of Kin's Fullname:</h6>
                        <span class="text-secondary">~{{$data->next_of_kin_name}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Next of Kin's Email:</h6>
                        <span class="text-secondary">~{{$data->next_of_kin_email}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Next of Kin's Phone:</h6>
                        <span class="text-secondary">~{{$data->next_of_kin_phone}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Next of Kin's Address:</h6>
                        <span class="text-secondary">~{{$data->next_of_kin_address}}</span>
                    </li>



                </ul>
                <!-- </div> -->
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <div class="card h-100">
                <!-- <div class="card mt-3"> -->
                <h1 class="p-3" style="color:blue">Course</h1>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Entrance Academic Session:</h6>
                        <span class="text-secondary">~{{$data->academic_session}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Programme Type:</h6>
                        <span class="text-secondary">~{{$data->programme}}</span>
                    </li>

                    @if(empty($data->name_of_certificate_course) || $data->name_of_certificate_course=="null")

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Level:</h6>
                        <span class="text-secondary">~{{$data->level}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Faculty:</h6>
                        <span class="text-secondary">~{{$data->faculty}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Department:</h6>
                        <span class="text-secondary">~{{$data->department}}</span>
                    </li>


                    @endif


                    @if(!empty($data->name_of_certificate_course) && $data->name_of_certificate_course != "null")




                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> Name of Course:</h6>
                        <span class="text-secondary">~{{$data->name_of_certificate_course}}</span>
                    </li>
                    @endif



                </ul>
                <!-- </div> -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <br><br>
    </div>
    </div>

    <!-- Core -->
    @include("studentdashboard.script")
</body>

</html>
