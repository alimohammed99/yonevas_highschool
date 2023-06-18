<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')
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


        <div class="d-flex">
            <h1>APPLICATION FORMS</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                <path fill-rule="evenodd"
                    d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>


        <div class="row mt-4">
            <div class="col-lg-3 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex"><svg style="border-radius:22px" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class=" bi bi-plus-lg"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                </svg>
                                <h6 class="mb-2">Add Application Forms</h6> <br>
                            </div>

                        </div>
                        <p style="color:red">Upload .pdf files only</p>

                    </div>
                    <div class="table-responsive">
                        <form style="width:100%" class="form" action="{{ url('upload_application_form_pdf') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf




                            <div class="mt-3 form-group" style="margin-left:30px; margin-right:30px">
                                <label style="font-weight:bolder" for="price">Employee Application Form:</label> <br>
                                <input style="width:100%" type="file" name="employee_application_form"
                                    accept=".pdf">
                            </div> <br>


                            <div class="mt-3 form-group" style="margin-left:30px; margin-right:30px">
                                <label style="font-weight:bolder" for="price">Financial-aid Form</label> <br>
                                <input style="width:100%" type="file" name="financial_aid_form" accept=".pdf">
                            </div>


                            <div class="form-group" style="margin-left:30px;">
                                <input
                                    style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white"
                                    type="submit" class="btn btn-success" value="Submit">
                            </div>



                        </form>
                    </div>
                </div>
            </div>











            <div class="col-lg-9" style="margin-bottom:50%">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">APPLICATION FORMS PDF</h6>
                    </div>

                    <div class="card">
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <thead class="thead-dark">
                                    <thead class="thead-dark">
                                        <tr style="text-align:center">
                                            <th style="text-align:center" scope="col">S/N</th>
                                            <th style="text-align:center" scope="col">FORM(PDF)</th>
                                            <th style="text-align:center" scope="col">VIEW</th>
                                            <th style="text-align:center" scope="col">DELETE</th>

                                    </thead>
                                </thead>
                                <tbody>



                                    @foreach ($data as $query)
                                        <tr style="text-align:center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $query->employee_application_form }}</td>
                                            <td>{{ $query->financial_aid_form }}</td>
                                            <td>add a delete button pls</td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>






            <!-- Core -->
            @include('ADMIN.script')
</body>











</html>
