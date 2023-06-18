<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')
    <!-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">




    <style>
        .dropdown {
            position: relative;
            display: inline-block;

        }

        .aaa:hover {
            /* transform: rotate(360deg); */
            transform: rotateY(360deg);
            /* transform: rotateZ(360deg); */
            transition: 3s;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            /* background-color: #f9f9f9; */
            background-color: yellow;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 2;
            transition: 2s;
            right: 0;
            /* top:0; */
        }

        .dropdown:hover .dropdown-content {
            display: block;
            transition: 2s;
            z-index: 2;
        }

        #ahh li {
            border-bottom: 3px solid grey;
            padding: 6px;
            z-index: 2;
        }

        td {
            max-width: 100%;
            white-space: nowrap;
        }

        /* .xxx {

            position: absolute;
            top: 0px;
            right: 100px;
            bottom: 0;
            left: -10px;
            z-index: 10040;
            overflow: auto;
            overflow-y: auto;
        } */

    </style>

</head>

<body>



    @include('ADMIN.navbar')


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


    <div class="container">





        <h1 style="text-align:center; font-size:30px">APPLICANTS' O' LEVEL RESULTS</h1><br>















        {{-- MODAL TO VIEW WACO 1
MODAL TO VIEW WACO 1
MODAL TO VIEW WACO 1 --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModa1ViewWaco1">
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
                            <h1>WACO 1</h1>





                            <iframe style="overflow:scroll" src="" height="600" width="3000px" frameborder="0"></iframe>
                        </div>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>








        {{-- MODAL TO VIEW WACO 2
MODAL TO VIEW WACO 2
MODAL TO VIEW WACO 2 --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModa1ViewWaco2">
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
                            <h1>WACO 2</h1>

                            <iframe style="overflow:scroll" src="" height="600" width="3000px" frameborder="0"></iframe>
                        </div>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>






        {{-- MODAL TO VIEW UTME
MODAL TO VIEW UTME
MODAL TO VIEW UTME --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModa1ViewUtme">
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
                            <h1>JAMB</h1>

                            <iframe style="overflow:scroll" src="" height="600" width="3000px" frameborder="0"></iframe>
                        </div>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>










        {{--
MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO1
MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO1
MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO1 --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModalWaco1">
            <div class="modal-dialog">
                <div style="border-radius:50px" class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 style="text-align:center; color:white" class="modal-title">O'Level</h4>
                        Action
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">


                        <table style="border-left-radius:50px" class="table table-striped table-bordered">

                            <legend style="font-size: 15px">WAEC / NECO 1:</legend>

                            <fieldset>

                                <tr style="text-align: center">
                                    <td>View</td>
                                    <td>Downlaod</td>
                                </tr>

                                <tr style="text-align: center">
                                    <td> <button style="color:" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModa1ViewWaco1"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg></button></td>



                                    <td> <button class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                            </svg></button></td>
                                </tr>
                            </fieldset>

                        </table>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        {{-- END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO1
  END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO1
  END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO1 --}}










        {{--
MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO2
MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO2
MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO2 --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModalWaco2">
            <div class="modal-dialog">
                <div style="border-radius:50px" class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 style="text-align:center; color:white" class="modal-title">O'Level</h4>
                        Action
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">


                        <table style="border-left-radius:50px" class="table table-striped table-bordered">

                            <legend style="font-size: 15px">WAEC / NECO 2:</legend>

                            <tr style="text-align: center">
                                <td>View</td>
                                <td>Downlaod</td>
                            </tr>

                            <tr style="text-align: center">
                                <td> <button style="color:" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModa1ViewWaco2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg></button></td>

                                <td> <button class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg></button></td>
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

        {{-- END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO2
  END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO2
  END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR WACO2 --}}











        {{--
MODAL TO PROMPT VIEW/DOWNLOAD FOR UTME
MODAL TO PROMPT VIEW/DOWNLOAD FOR UTME
MODAL TO PROMPT VIEW/DOWNLOAD FOR UTME --}}

        <!-- The Modal -->
        <div class="modal fade" id="myModalUtme">
            <div class="modal-dialog">
                <div style="border-radius:50px" class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 style="text-align:center; color:white" class="modal-title">O'Level</h4>
                        Action
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">


                        <table style="border-left-radius:50px" class="table table-striped table-bordered">

                            <legend style="font-size: 15px">JAMB:</legend>

                            <tr style="text-align: center">
                                <td>View</td>
                                <td>Downlaod</td>
                            </tr>

                            <tr style="text-align: center">
                                <td> <button style="color:" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModa1ViewUtme"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg></button></td>

                                <td> <button class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg></button></td>
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

        {{-- END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR UTME
  END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR UTME
  END OF MODAL TO PROMPT VIEW/DOWNLOAD FOR UTME --}}













        <!-- The Modal -->
        <div class="modal fade" id="myModalReason">
            <div class="modal-dialog modal-dialog-centered">
                <div style="border-radius:50px" class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 style="text-align:center; color:white" class="modal-title">O'Level</h4>
                        Give reason for rejecting Student's result(s)
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                        <form action="{{ url('upload_reason') }}" class="form" method="post" enctype="multipart/form-data">


                            @csrf
                            <input type="hidden" name="students_doc" id="students_doc">

                            <div class="form-group">
                                <input type="text" name="reason" id="" class="form-control" placeholder="State your reason" required="required">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" style="background:green" type="submit" value="Submit">
                            </div>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" style="background:red" data-bs-dismiss="modal">Close</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>







        {{-- MODAL FOR VIEWING EACH STUDENT'S DOCUMENTS
MODAL FOR VIEWING EACH STUDENT'S DOCUMENTS
MODAL FOR VIEWING EACH STUDENT'S DOCUMENTS --}}

        <!-- The Modal -->

        {{-- MODAL FOR VIEWING EACH STUDENT'S DOCUMENTS
MODAL FOR VIEWING EACH STUDENT'S DOCUMENTS
MODAL FOR VIEWING EACH STUDENT'S DOCUMENTS --}}






        <div class="table-responsive" style="width:;">

            <table style="width:100%" id="example" class="table table-lg table-bordered table-hover">
                <!-- <table style="" id="example" class="table table-lg table-bordered table-hover"> -->
                <thead class="thead-dark">
                    <tr style="text-align:center; font-size:2px">
                        <th style="text-align:center font-size:2px" scope="col">S/N</th>
                        <th style="text-align:center;" scope="col">FIRST NAME</th>
                        <th style="text-align:center" scope="col">LAST NAME</th>
                        <th style="text-align:center" scope="col">EMAIL </th>
                        <th style="text-align:center" scope="col">PHONE</th>
                        <th style="text-align:center" scope="col">VIEW DOCUMENTS</th>
                    </tr>
                </thead>
                <tbody>





                    @foreach ($data as $data)
                    <tr style="text-align:center">
                        <td>{{ $loop->iteration }}</td>
                        <td style="width:2px">{{ $data->first_name }}</td>
                        <td>{{ $data->last_name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        @php

                        $abc = DB::table('applicants_old_results')
                        ->join('users', 'applicants_old_results.student_id', '=', 'users.id')
                        ->where('student_id', '=', $data->id)
                        ->select('users.id as id', 'applicants_old_results.original_certificate as original_cert')
                        ->first();
                        @endphp
                        <td>
                            <button title="" type="button" data-bs-toggle="modal" data-bs-target="#viewEachStudentsDocuments{{ $loop->iteration }}" style="background:tomato; color:black; border-width:5px" class="btn btn-success" result_id="{{ $abc->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                            </button>

                            <div class="modal fade xxx" id="viewEachStudentsDocuments{{ $loop->iteration }}">
                                <div class="modal-dialog">
                                    <div style="border-radius:50px" class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 style="text-align:center; color:white" class="modal-title">
                                                Student's Documents</h4>
                                            Student's Documents
                                            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">

                                            <div class="table-responsive" style="width:;">

                                                <table style="width:5%" id="example2" class="table table-lg table-bordered table-hover">
                                                    <!-- <table style="" id="example" class="table table-lg table-bordered table-hover"> -->
                                                    <thead class="thead-dark">
                                                        <tr style="text-align:center; font-size:2px">
                                                            <th style="text-align:center;" scope="col">JAMB
                                                            </th>
                                                            <th style="text-align:center" scope="col">WAEC</th>
                                                            <th style="text-align:center" scope="col">NECO
                                                            </th>
                                                            <th style="text-align:center" scope="col">ORIGINAL
                                                                <br> BIRTH CERTIFICATE
                                                            </th>
                                                            <th style="text-align:center" scope="col">BIRTH
                                                                <br> CERTIFICATE
                                                            </th>
                                                            <th style="text-align:center" scope="col">ID</th>
                                                            <th style="text-align:center" scope="col">
                                                                SPONSORSHIP <br> LETTER</th>
                                                            <th style="text-align:center" scope="col">PASSPORT
                                                            </th>
                                                            <th style="text-align:center" scope="col">APPROVE
                                                            </th>
                                                            <th style="text-align:center" scope="col">
                                                                DISAPPROVE</th>
                                                            <th style="text-align:center" scope="col">STATUS
                                                            </th>
                                                            <th style="text-align:center" scope="col">REASON
                                                                FOR <br> DISAPPROVAL</th>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.letter_of_sponsorship as sponsorship_letter','applicants_old_results.valid_form_of_id as valid_id', 'applicants_old_results.passport as passport', 'applicants_old_results.birth_certificate as birth_cert', 'applicants_old_results.original_certificate as original_cert', 'applicants_old_results.waec_or_neco_2 as waco2', 'applicants_old_results.waec_or_neco_1 as waco1', 'applicants_old_results.utme as utme')->first();
                                                        @endphp
                                                        <tr>


                                                            <td>
                                                                @if(!empty($abc->utme))
                                                                <a title="Click to view" a href="{{ url('admin_view_student_utme', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg> </a> <br><br>

                                                                <a title="Click to download" href="{{ url('admin_download_student_utme', $data->utme) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg> </a>
                                                                @else
                                                                <span style="color: red"><em>No Document found</em></span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if(!empty($abc->waco1))
                                                                <a title="Click to view" a href="{{ url('admin_view_student_waco1', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg> </a> <br><br>

                                                                <a title="Click to download" href="{{ url('admin_download_student_waco1', $data->waec_or_neco_1) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg> </a>
                                                                @else
                                                                <span style="color: red"><em>No Document found</em></span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if(!empty($abc->waco2))
                                                                <a title="Click to view" a href="{{ url('admin_view_student_waco2', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg> </a> <br><br>

                                                                <a title="Click to download" href="{{ url('admin_download_student_waco2', $data->waec_or_neco_2) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg> </a>
                                                                @else
                                                                <span style="color: red"><em>No Document found</em></span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if(!empty($abc->original_cert))
                                                                <a title="Click to view" a href="{{ url('admin_view_student_original_cert', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg> </a> <br><br>

                                                                <a title="Click to download" href="{{ url('admin_download_student_original_cert', $data->original_certificate) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg> </a>
                                                                @else
                                                                <span style="color: red"><em>No Document found</em></span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if(!empty($abc->birth_cert))
                                                                <a title="Click to view" a href="{{ url('admin_view_student_birth_cert', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg> </a> <br><br>

                                                                <a title="Click to download" href="{{ url('admin_download_student_birth_cert', $data->birth_certificate) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg> </a>
                                                                @else
                                                                <span style="color: red"><em>No Document found</em></span>
                                                                @endif
                                                            </td>

                                                            <td>
                                                                @if(!empty($abc->valid_id))
                                                                <a title="Click to view" a href="{{ url('admin_view_student_valid_id', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg> </a> <br><br>

                                                                <a title="Click to download" href="{{ url('admin_download_student_valid_id', $data->valid_form_of_id) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg> </a>
                                                                @else
                                                                <span style="color: red"><em>No Document found</em></span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if(!empty($abc->sponsorship_letter))
                                                                <a title="Click to view" a href="{{ url('admin_view_student_sponsorship_letter', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg> </a> <br><br>

                                                                <a title="Click to download" href="{{ url('admin_download_student_sponsorship_letter', $data->letter_of_sponsorship) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg> </a>
                                                                @else
                                                                <span style="color: red"><em>No Document found</em></span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if(!empty($abc->passport))
                                                                <a title="Click to view" a href="{{ url('admin_view_student_passport', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                                    </svg> </a> <br><br>

                                                                <a title="Click to download" href="{{ url('admin_download_student_passport', $data->passport) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                    </svg> </a>
                                                                @else
                                                                <span style="color: red"><em>No Document found</em></span>
                                                                @endif
                                                            </td>


                                                            <td class="">
                                                                <a class="btn btn-success" href="{{ url('admin_approve_students_olevel', $data->id) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                                                    </svg> </a>
                                                            </td>
                                                            <td class="">
                                                                <a class="btn btn-danger" href="{{ url('admin_disapprove_students_olevel', $data->id) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                                                    </svg> </a>
                                                            </td>



                                                            {{-- aaaaaaaaaaaaa --}}

                                                            @php

                                                            $def = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('status')->first();

                                                            if($def->status == '0'){

                                                            @endphp


                                                            <td class="aaa" style=""><button title="UNAPPROVED" style="border:9px dotted black; margin:; border-radius: 30px;" class="btn btn-secondary">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                                                        <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                                                                    </svg>

                                                                </button></td>

                                                            @php

                                                            }



                                                            $def = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('status')->first();

                                                            if($def->status == '1'){

                                                            @endphp

                                                            <td class="aaa" style=""><button title="APPROVED" style="border:9px dotted black; margin:; border-radius: 30px;" class="btn btn-secondary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                                                        <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                                                    </svg>

                                                                </button></td>

                                                            @php

                                                            }
                                                            @endphp


                                                            @php



                                                            $def = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('status')->first();

                                                            if($def->status == '9'){

                                                            @endphp

                                                            <td class="aaa" style=""><button title="WAITING FOR APPROVAL" style="border:9px dotted black; margin:; border-radius: 30px;" class="btn btn-secondary">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                                                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                    </svg>


                                                                </button></td>

                                                            @php

                                                            }

                                                            @endphp



                                                            {{-- aaaaaaaaaaaaa --}}


                                                            @php

                                                            $def = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('status')->first();

                                                            if($def->status == '0'){

                                                            @endphp


                                                            <td>


                                                                @php

                                                                $owo = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('reason')->first();

                                                                if(empty($owo->reason)){

                                                                @endphp


                                                                <button title="Give reason" type="button" style="background:tomato; color:black; border-width:5px" class="btn btn-success reason" result_id="{{ $abc->id }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                    </svg>
                                                                </button>

                                                                @php

                                                                }else{

                                                                @endphp


                                                                {{ $owo->reason }}

                                                                @php
                                                                }

                                                                @endphp








                                                            </td>

                                                            @php

                                                            }else{

                                                            @endphp

                                                            <td>

                                                            </td>

                                                            @php

                                                            }

                                                            @endphp

                                                        </tr>
                                                    </tbody>
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
                        </td>



                        {{-- <td>

                            @php



                            $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.utme as utme')->first();

                            if(!empty($abc->utme)){



                            @endphp


                            <a title="Click to view" a href="{{ url('admin_view_student_utme', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg> </a> <br><br>

                        <a title="Click to download" href="{{ url('admin_download_student_utme', $data->utme) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> </a>
                        </td>

                        @php
                        }else{
                        @endphp

                        <span style="color: red"><em>Not provided</em></span>
                        @php
                        }
                        @endphp --}}



                        {{-- <td>

                            @php



                            $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.waec_or_neco_1 as waco1')->first();

                            if(!empty($abc->waco1)){



                            @endphp
                            <a title="Click to view" href="{{ url('admin_view_student_waco1', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg> </a> <br><br>

                        <a title="Click to download" href="{{ url('admin_download_student_waco1', $data->waec_or_neco_1) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> </a>
                        </td>

                        @php
                        }else{
                        @endphp

                        <span style="color: red"><em>Not provided</em></span>
                        @php
                        }
                        @endphp --}}











                        {{-- <td>

                            @php



                            $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.utme as utme', 'applicants_old_results.waec_or_neco_1 as waco1', 'applicants_old_results.waec_or_neco_2 as waco2')->first();

                            if(!empty($abc->waco2)){



                            @endphp


                            <a title="Click to view" href="{{ url('admin_view_student_waco2', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg> </a> <br><br>

                        <a title="Click to download" href="{{ url('admin_download_student_waco2', $data->waec_or_neco_2) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> </a>
                        </td>

                        @php
                        }else{
                        @endphp

                        <span style="color: red"><em>Not provided</em></span>
                        @php
                        }
                        @endphp --}}

                        {{-- <td>

                            @php



                            $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.original_certificate as original_cert')->first();

                            if(!empty($abc->original_cert)){



                            @endphp


                            <a title="Click to view" a href="{{ url('admin_view_student_original_cert', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg> </a> <br><br>

                        <a title="Click to download" href="{{ url('admin_download_student_original_cert', $data->original_certificate) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> </a>
                        </td>

                        @php
                        }else{
                        @endphp

                        <span style="color: red"><em>Not provided</em></span>
                        @php
                        }
                        @endphp --}}


                        {{-- <td>

                            @php



                            $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.birth_certificate as birth_cert')->first();

                            if(!empty($abc->birth_cert)){



                            @endphp


                            <a title="Click to view" a href="{{ url('admin_view_student_birth_cert', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg> </a> <br><br>

                        <a title="Click to download" href="{{ url('admin_download_student_birth_cert', $data->birth_certificate) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> </a>
                        </td>

                        @php
                        }else{
                        @endphp

                        <span style="color: red"><em>Not provided</em></span>
                        @php
                        }
                        @endphp --}}


                        {{-- <td>

                            @php



                            $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.valid_form_of_id as valid_id')->first();

                            if(!empty($abc->valid_id)){



                            @endphp


                            <a title="Click to view" a href="{{ url('admin_view_student_valid_id', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg> </a> <br><br>

                        <a title="Click to download" href="{{ url('admin_download_student_valid_id', $data->valid_form_of_id) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> </a>
                        </td>

                        @php
                        }else{
                        @endphp

                        <span style="color: red"><em>Not provided</em></span>
                        @php
                        }
                        @endphp --}}




                        {{-- <td>

                            @php



                            $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.letter_of_sponsorship as sponsorship_letter')->first();

                            if(!empty($abc->sponsorship_letter)){



                            @endphp


                            <a title="Click to view" a href="{{ url('admin_view_student_sponsorship_letter', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg> </a> <br><br>

                        <a title="Click to download" href="{{ url('admin_download_student_sponsorship_letter', $data->letter_of_sponsorship) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> </a>
                        </td>

                        @php
                        }else{
                        @endphp

                        <span style="color: red"><em>Not provided</em></span>
                        @php
                        }
                        @endphp --}}




                        {{-- <td>

                            @php



                            $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->where('student_id', '=', $data->id)->select('users.id as id', 'applicants_old_results.passport as passport')->first();

                            if(!empty($abc->passport)){



                            @endphp


                            <a title="Click to view" a href="{{ url('admin_view_student_passport', $data->id) }}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg> </a> <br><br>

                        <a title="Click to download" href="{{ url('admin_download_student_passport', $data->passport) }}" class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> </a>
                        </td>

                        @php
                        }else{
                        @endphp

                        <span style="color: red"><em>Not provided</em></span>
                        @php
                        }
                        @endphp --}}
















                        {{-- <td class=""> <a class="btn btn-success" href="{{url('admin_approve_students_olevel', $data->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                        </svg> </a></td> --}}

                        {{-- <td class=""> <a class="btn btn-danger" href="{{url('admin_disapprove_students_olevel', $data->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                            <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                        </svg> </a></td> --}}


                        {{-- @php

                        $def = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('status')->first();

                        if($def->status == '0'){

                        @endphp --}}


                        {{-- <td class="aaa" style=""><button title="UNAPPROVED" style="border:9px dotted black; margin:; border-radius: 30px;" class="btn btn-secondary">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                    <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                                </svg>

                            </button></td> --}}

                        {{-- @php

                        }



                        $def = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('status')->first();

                        if($def->status == '1'){

                        @endphp --}}

                        {{-- <td class="aaa" style=""><button title="APPROVED" style="border:9px dotted black; margin:; border-radius: 30px;" class="btn btn-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>

                            </button></td> --}}

                        {{-- @php

                        }
                        @endphp


                        @php



                        $def = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('status')->first();

                        if($def->status == '9'){

                        @endphp --}}

                        {{-- <td class="aaa" style=""><button title="WAITING FOR APPROVAL" style="border:9px dotted black; margin:; border-radius: 30px;" class="btn btn-secondary">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                </svg>


                            </button></td> --}}

                        {{-- @php

                        }

                        @endphp





                        @php

                        $def = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('status')->first();

                        if($def->status == '0'){

                        @endphp --}}


                        {{-- <td>


                            @php

                            $owo = DB::table('applicants_old_results')->where('student_id', '=', $data->id)->select('reason')->first();

                            if(empty($owo->reason)){

                            @endphp


                            <button title="Give reason" type="button" style="background:tomato; color:black; border-width:5px" class="btn btn-success reason" result_id="{{ $abc->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                        </button>

                        @php

                        }else{

                        @endphp


                        {{ $owo->reason }}

                        @php
                        }

                        @endphp








                        </td> --}}

                        {{-- @php

                        }else{

                        @endphp

                        <td>

                        </td>

                        @php

                        } --}}

                        {{-- @endphp --}}


                    </tr>
                    @endforeach

                    <br><br><br>

                </tbody>

            </table>
        </div> <br><br><br>
        <!-- Core -->
        @include('ADMIN.script')

        <script>
            $(document).ready(function() {
                $('body').on('click', '.reason', function() {
                    let el = this;
                    let result_id = $(el).attr('result_id');

                    $("#students_doc").val(result_id);
                    $("#myModalReason").modal('show');

                });
            })

        </script>



        <script>
            $(document).ready(function() {
                $('body').on('click', '.eachdoc', function() {
                    let el = this;
                    let each_doc = $(el).attr('each_doc');

                    $("#students_doc").val(students_doc);
                    $("#viewEachStudentsDocuments").modal('show');
                });
            })

        </script>
</body>





</html>
