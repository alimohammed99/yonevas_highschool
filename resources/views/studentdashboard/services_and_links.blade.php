<!DOCTYPE html>
<html lang="en">

<head>
    @include('studentdashboard.css')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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

    <div class="container">


        <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:25px; margin-top:0px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:13px">SERVICES AND LINKS</h1>


        <div class="row">

            <div style="font-size:23px; text-decoration:; cursor: ; border:15px groove tomato; text-align:center; border-top-right-radius:100px; border-bottom-left-radius:100px" class="col-lg-4 p-4 s_l">
                <a class="s_l_l" href="https://calendly.com/ebubeyonevas/60mins?month=2023-03"> Calendar news </a>
            </div>

            <div style="font-size:23px; text-decoration:; cursor: ; border:15px groove tomato; text-align:center; border-top-right-radius:100px; border-bottom-left-radius:100px" class="col-lg-4 p-4 s_l">
                <a class="s_l_l" href="https://calendly.com/meet_yonevas/30min""> Virtual Assistance </a>
            </div>

            <div style="font-size:23px; text-decoration:; cursor: ; border:15px groove tomato; text-align:center; border-top-right-radius:100px; border-bottom-left-radius:100px" class="col-lg-4 p-4 s_l">
                <a class="s_l_l" href="javascript:;"> Library </a>
            </div>
        </div>

        <div class="row">

            <div style="font-size:23px; text-decoration:; cursor: ; border:15px groove tomato; text-align:center; border-top-right-radius:100px; border-bottom-left-radius:100px" class="col-lg-4 p-4 s_l">
                <a class="s_l_l" href="mailto:career@yonevas.institute"> Career center </a>
            </div>

            <div style="font-size:23px; text-decoration:; cursor: ; border:15px groove tomato; text-align:center; border-top-right-radius:100px; border-bottom-left-radius:100px" class="col-lg-4 p-4 s_l">
                <a class="s_l_l" href="javascript:void(0)"> Directory </a>
            </div>

            <div style="font-size:23px; text-decoration:; cursor: ; border:15px groove tomato; text-align:center; border-top-right-radius:100px; border-bottom-left-radius:100px" class="col-lg-4 p-4 s_l">
                <a class="s_l_l" href="{{ url('/') }}"> My Yonevas </a>
            </div>
        </div>

        <div class="row">

            <div style="font-size:23px; text-decoration:; cursor: ; border:15px groove tomato; text-align:center; border-top-right-radius:100px; border-bottom-left-radius:100px" class="col-lg-4 p-4 s_l">
                <a class="s_l_l" href="javascript:void(o)"> Learning </a>
            </div>
        </div>

    </div>



    <!-- Core -->
    @include('studentdashboard.script')
</body>




</html>
