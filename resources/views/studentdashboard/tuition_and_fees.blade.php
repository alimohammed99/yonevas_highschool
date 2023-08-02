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
        .s_l_l:hover {
            color: white;
        }

        .s_l:hover {
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
            style="text-transform:uppercase; color:#5e72e4; font-style:italic; font-family:broadway; font-size:30px; margin-top:; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:">
            tuition and fees</h1>


        <h3 style="margin-top:20px; color:brown; font-size:27px">Estimated cost per semester is calculated based upon
            all possible fee payable and scholarship deductions.
        </h3>

        <div class="row table-responsive">
            <table style=" border: 2px solid green">
                <tr style="text-align: center; align:center; border-bottom:2px solid grey">


                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4">
                        <td style="font-size:22px" class="p-4" style="border-right: 5px double black">
                            Total fee due per year:
                        </td>
                    </div>

                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4">
                        <td style="font-size:22px" class="p-4" style="border-right: 5px double black">
                            <span style="color:indigo; font-size:25px">₦229,480</span>
                        </td>
                    </div>

                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4">
                        <td class="p-4 s_l" style="border: 17px groove black">
                            <a title="Click to download change of course form" class="btn btn-success s_l_l"
                                href="javascript:;" download="transcript_request_form" style="font-size:20px">
                                PAY NOW
                                <i style="font-size:26px" class="uil uil-credit-card"></i> </a>
                        </td>
                    </div>
                </tr>

                <tr style="text-align: center; align:center; border-bottom:2px solid grey">


                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4">
                        <td style="font-size:22px" class="p-4" style="border-right: 5px double black">
                            Pay part of the fee:
                        </td>
                    </div>

                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4">
                        <td style="font-size:22px" class="p-4" style="border-right: 5px double black;">
                            <span style="color:indigo; font-size:25px">₦114,740</span>
                        </td>
                    </div>

                    <div style="font-size:23px; text-align:center;" class="col-lg-4 p-4">
                        <td class="p-4 s_l" style="border: 17px groove black">
                            <a title="Click to download change of course form" class="btn btn-success s_l_l"
                                href="javascript:void(0)" download="transcript_request_form" style="font-size:20px">
                                PAY NOW
                                <i style="font-size:26px" class="uil uil-credit-card"></i> </a>
                        </td>
                    </div>
                </tr>
            </table>

        </div>

        <p class="pt-3" style="color:slateblue; font-size:22px">Feel free to contact registrar office for any
            questions regarding the information on your tuition and scholarhsip.</p>


    </div>



    <!-- Core -->
    @include('studentdashboard.script')
</body>




</html>
