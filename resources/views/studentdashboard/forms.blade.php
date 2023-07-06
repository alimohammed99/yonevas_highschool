<!DOCTYPE html>
<html lang="en">

<head>
    @include('studentdashboard.css')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <style>
        .s_l_l:hover {
            color: white;
        }

        td:hover {
            background: rgb(141, 57, 141);
            color: white;
            transition: 0.7s;
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


        <h1
            style="text-transform:uppercase; color:#5e72e4; font-style:italic; font-family:broadway; font-size:30px; margin-top:0px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:">
            You can downlaod the forms below:</h1>




        <div class="row table-responsive">

            <table class="" style="border: 2px solid green">
                <tr style="text-align: center; align:center">


                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4 s_l">
                        <td class="p-4" style="border-right: 5px double black">
                            <a title="Click to download change of course form" class="btn btn-info s_l_l"
                                href="javascript:void(0)" style="font-size:20px">
                                Change of Course form
                                <i style="font-size:30px" class="bi bi-arrow-down-circle"></i> </a>
                        </td>
                    </div>

                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4 s_l">
                        <td class="p-4" style="">
                            <a title="Click to download change of course form" class="btn btn-danger s_l_l"
                                href="javascript:void(0)" style="font-size:20px">
                               Financial Aid Application form
                                <i style="font-size:30px" class="bi bi-arrow-down-circle"></i> </a>
                        </td>
                    </div>

                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4 s_l">
                        <td class="p-4" style="border-left: 5px double black">
                            <a title="Click to download change of course form" class="btn btn-success s_l_l"
                                href="javascript:void(0)" style="font-size:20px">
                               Leave of absence Form

                                <i style="font-size:30px" class="bi bi-arrow-down-circle"></i> </a>
                        </td>
                    </div>
                </tr>
            </table>

        </div>

        <div class="row table-responsive"">

            <table style="border: 2px solid green">
                <tr style="text-align: center; align:center">


                    <div style="font-size:23px; text-align:center;" class="col-lg-6 p-4 s_l">
                        <td class="p-4" style="border-right: 5px double black">
                            <a title="Click to download change of course form" class="btn btn-warning s_l_l"
                                href="javascript:void(0)" style="font-size:20px">
                                Scholarship Application form

                                <i style="font-size:30px" class="bi bi-arrow-down-circle"></i> </a>
                        </td>
                    </div>

                    <div style="font-size:23px; text-align:center;" class="col-lg-6 p-4 s_l">
                        <td class="p-4" style="border: 2px dotted black">
                            <a title="Click to download change of course form" class="btn btn-secondary s_l_l"
                                href="javascript:void(0)" style="font-size:20px">
                               Transcript Request form
                                <i style="font-size:30px" class="bi bi-arrow-down-circle"></i> </a>
                        </td>
                    </div>
                </tr>
            </table>

        </div>


    </div>



    <!-- Core -->
    @include('studentdashboard.script')
</body>




</html>
