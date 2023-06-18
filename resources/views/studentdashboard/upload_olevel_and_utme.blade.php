<!DOCTYPE html>
<html lang="en">

<head>
    @include('studentdashboard.css')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    {{-- <style>
        .files input {
            outline: 2px dashed #92b0b3;
            outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear;
            padding: 120px 0px 85px 35%;
            text-align: center !important;
            margin: 0;
            width: 100% !important;
        }

        .files input:focus {
            outline: 2px dashed #92b0b3;
            outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear;
            border: 1px solid #92b0b3;
        }

        .files {
            position: relative
        }

        .files:after {
            pointer-events: none;
            position: absolute;
            top: 60px;
            left: 0;
            width: 50px;
            right: 0;
            height: 56px;
            content: "";
            background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
            display: block;
            margin: 0 auto;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        .color input {
            background-color: #f1f1f1;
        }

        .files:before {
            position: absolute;
            bottom: 10px;
            left: 0;
            pointer-events: none;
            width: 100%;
            right: 0;
            height: 57px;
            content: " or drag it here. ";
            display: block;
            margin: 0 auto;
            color: #2ea591;
            font-weight: 600;
            text-transform: capitalize;
            text-align: center;
        }
    </style> --}}
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


    <h1 style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:25px; margin-top:0px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:13px">
        DOCUMENTS UPLOAD</h1>


    <span style="color:green; text-transform:uppercase; font-size:15px">If you currently do not have any of the
        Information required, kindly leave the space blank</span>
    <div class="card card_border mt-2 py-2 mb-4">

        <div class="card-body" back>

            <form class="form-horizontal" action="{{ url('store_olevel_and_utme') }}" method="post" enctype="multipart/form-data">

                @csrf
                <span style="font-size:22px" class="font-weight-bold pb-3">1. O'Level</span><br><br>
                <label style="color:green; font-size:16px" for="aaaaa"><span style="color:red; text-transform:">Accepted formats: .jpg, .png, .jpeg, .pdf </span></label>





                <div class="form-group">
                    <label style="color:; font-size:" for="inputPassword4" class="input__label">JAMB</label>
                    <input type="file" class="form-control" name="utme" id="" accept=".jpg,.jpeg,.png,.pdf">
                </div>












                <div class="form-group">
                    <label style="color:; font-size:" for="inputPassword4" class="input__label">WAEC</label>
                    <input type="file" class="form-control" name="waec_or_neco_1" id="" accept=".jpg,.jpeg,.png,.pdf">
                </div>







                <div class="form-group">
                    <label style="color:; font-size:" for="inputPassword4" class="input__label">NECO </label>
                    <input type="file" class="form-control" name="waec_or_neco_2" id="" accept=".jpg,.jpeg,.png,.pdf">
                </div> <br><br><br>





                <span style="font-size:22px; padding-top:" class="font-weight-bold pb-3">2. Others</span><br><br>
                <label style="color:red; font-size:" for="aaaaa"><span style="color:red; text-transform:">Accepted formats: .jpg, .png, .jpeg, .pdf </span></label> <br><br>






                <div class="form-group">
                    <label style="color:; font-size:" for="inputPassword4" class="input__label">ORIGINAL
                        CERTIFICATE (WAEC)</label>
                    <input type="file" class="form-control" name="original_certificate" id="" accept=".jpg,.jpeg,.png,.pdf">
                </div><br>






                <div class="form-group">
                    <label style="color:; font-size:" for="inputPassword4" class="input__label">BIRTH
                        CERTIFICATE</label>
                    <input type="file" class="form-control" name="birth_certificate" id="" accept=".jpg,.jpeg,.png,.pdf">
                </div><br>






                <div class="form-group">
                    <label for="inputPassword4" class="input__label">
                        VALID FORM OF IDENTIFICATION <br>


                        <span style="color:blue; text-transform:lowercase;">(NATIONAL ID, VOTERS CARD, INTERNATIONAL
                            PASSPORT ETC)</span>

                    </label>
                    <input type="file" class="form-control" name="valid_form_of_id" id="" accept=".jpg,.jpeg,.png,.pdf">
                </div><br>









                <div class="form-group">
                    <label for="inputPassword4" class="input__label">LETTER OF
                        SPONSORSHIP</label>
                    <input type="file" class="form-control" name="letter_of_sponsorship" id="" accept=".jpg,.jpeg,.png,.pdf">
                </div><br>







                <div class="form-group">
                    <label style="color:; font-size:" for="inputPassword4" class="input__label">PASSPORT STYLED
                        PHOTO</label>
                    <input type="file" class="form-control" name="passport" id="" accept=".jpg,.jpeg,.png,.pdf">
                </div><br>












                <button style="background:green; font-size:20px" type="submit" class="btn btn-success btn-style mt-4">Submit</button>
            </form>
        </div>
    </div>



    <!-- Core -->
    @include('studentdashboard.script')
</body>




</html>
