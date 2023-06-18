<!DOCTYPE html>
<html lang="en">

<head>
    @include("studentdashboard.css")

    {{-- FONT-AWESOME LINKS
FONT-AWESOME LINKS
FONT-AWESOME LINKS --}}


    <link rel="stylesheet" href="https://kit.fontawesome.com/9d015cb5ef.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d015cb5ef.js" crossorigin="anonymous"></script>


    {{-- FONT-AWESOME LINKS
FONT-AWESOME LINKS
FONT-AWESOME LINKS --}}


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









    {{--
        IF RESULTS IS WAITING FOR APPROVAL
        IF RESULTS IS WAITING FOR APPROVAL
        IF RESULTS IS WAITING FOR APPROVAL --}}


    @php

    $currentUser = Auth::user()->id;


    $resultStatus = DB::table('users')->join('applicants_old_results', 'users.id', '=', 'applicants_old_results.student_id')->where('student_id', '=', $currentUser)->select('applicants_old_results.status as status')->first();

    if(!empty($resultStatus) && $resultStatus->status == '9'){

    @endphp



    <div class="container">
        <div class="alert alert-info alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Hold on! &nbsp; <i class="fa-solid fa-handshake-simple pr-1"></i><i class="fa-solid fa-handshake-simple pr-1"></i><i class="fa-solid fa-handshake-simple pr-1"></i>
            </strong>
        </div>

    </div>

    <div style="border-bottom:28px groove lightblue; border-top-right-radius:50%; border-bottom-right-radius:50%; border-top-left-radius:20px; border-bottom-left-radius:20px" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 style="font-size: 17px">Your Documents have been uploaded. <br> Kindly check on the approval page for feedback.</h1>
        </div>
    </div>

    @php

    }

    @endphp







    @php

    $currentUser = Auth::user()->id;


    $resultStatus = DB::table('users')->join('applicants_old_results', 'users.id', '=', 'applicants_old_results.student_id')->where('student_id', '=', $currentUser)->select('applicants_old_results.status as status')->first();

    if(!empty($resultStatus) && $resultStatus->status == '1'){

    @endphp



    <div class="container">

        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Congratulations! &nbsp; <i class="fa fa-gift pr-1" aria-hidden="true"></i><i class="fa fa-gift pr-1" aria-hidden="true"></i><i class="fa fa-gift pr-1" aria-hidden="true"></i>
            </strong>
        </div>

    </div>

    <div style="border-bottom:28px groove green; border-top-right-radius:50%; border-bottom-right-radius:50%; border-top-left-radius:20px; border-bottom-left-radius:20px" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 style="font-size: 17px">Your O'Level and Other Documents have been approved.</h1>
        </div>
    </div>

    @php

    }

    @endphp




    {{--
        IF RESULTS HAVE BEEN REJECTED
        IF RESULTS HAVE BEEN REJECTED
        IF RESULTS HAVE BEEN REJECTED --}}


    @php

    $currentUser = Auth::user()->id;


    $resultStatus = DB::table('users')->join('applicants_old_results', 'users.id', '=', 'applicants_old_results.student_id')->where('student_id', '=', $currentUser)->select('applicants_old_results.status as status', 'applicants_old_results.reason as reason')->first();


    if(!empty($resultStatus) && $resultStatus->status == '0'){

    @endphp



    <div class="container">

        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>

            <strong>Sorry! &nbsp; <i class="fa-solid fa-face-frown pr-1"></i><i class="fa-solid fa-face-frown pr-1"></i><i class="fa-solid fa-face-frown pr-1"></i>
            </strong>

        </div>

    </div>

    <div style="border-bottom:28px groove pink; border-top-right-radius:50%; border-bottom-right-radius:50%; border-top-left-radius:20px; border-bottom-left-radius:20px" class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1 style="font-size: 17px">Some of your Documents were rejected. <br> Kindly upload appropriate Documents.</h1> <br>
            <h3>
                REASON:

                @php

                echo $resultStatus->reason;

                @endphp

            </h3>
        </div>
    </div>

    @php

    }

    @endphp



















    <!-- Core -->
    @include("studentdashboard.script")
</body>

</html>
