<!DOCTYPE html>
<html lang="en">

<head>
    @include('studentdashboard.css')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <style>
        html,
        body,
        .intro {
            height: 100%;
        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        thead th {
            color: #fff;
        }

        .card {
            border-radius: .5rem;
        }

        .table-scroll {
            border-radius: .5rem;
        }

        .table-scroll table thead th {
            font-size: 1.25rem;
        }

        thead {
            top: 0;
            position: sticky;
        }

    </style>
</head>

<body>



    @include('studentdashboard.navbar')

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

    <div class="container mb-5">


        <h1 style="text-transform:uppercase; color:#5e72e4; font-style:italic; font-family:broadway; font-size:30px; margin-top:; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:">
            transcript
        </h1>

        <h3 style="font-size:25px; color:red">
            <marquee scrollamount="10">
                No records found! <i style="font-size:35px;" class="uil uil-sad"></i>
            </marquee>
        </h3>

        <section class="intro">
            <div class="bg-image h-100" style="background-color: #f5f7fa;">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: auto">
                                            <table class="table table-striped mb-0">
                                                <thead style="background-color: #002d72;">
                                                    <tr>
                                                        <th scope="col">DEPARTMENT</th>
                                                        <th scope="col">SEMESTER</th>
                                                        <th scope="col">COURSE TITLE</th>
                                                        <th scope="col">COURSE UNIT</th>
                                                        <th scope="col">GPA</th>
                                                        <th scope="col">CGPA</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>



    <!-- Core -->
    @include('studentdashboard.script')
</body>




</html>
