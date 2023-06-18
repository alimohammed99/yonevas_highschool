<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')
</head>

<body>








    @include('ADMIN.navbar')



    <div class=" container col-lg-12" style="overflow:scroll;" class="image-responsive">
        {{-- <hr> <br> --}}

        @php

        if ($data->passport_fileExtensionType == 'application/pdf') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: PDF</h3><br><br>

        <iframe style="overflow:scroll" src="/students_passport/{{ $data->passport }}" height="700" width="1000" frameborder="0"></iframe>

        @php

        }


        if ($data->passport_fileExtensionType == 'image/png' || $data->passport_fileExtensionType == 'image/jpg' || $data->passport_fileExtensionType == 'image/jpeg') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->passport_fileExtensionType }}</h3><br><br>

        <img src="{{ asset('students_passport/' . $data->passport) }}" />

        @php
        }
        @endphp



    </div>



    <!-- Core -->
    @include('ADMIN.script')
</body>

</html>
