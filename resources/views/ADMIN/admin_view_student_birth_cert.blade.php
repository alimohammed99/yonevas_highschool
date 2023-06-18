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

        if ($data->birth_certificate_fileExtensionType == 'application/pdf') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->birth_certificate_fileExtensionType }}</h3><br><br>

        <iframe style="overflow:scroll" src="/students_birth_certificate/{{ $data->birth_certificate }}" height="700" width="1000" frameborder="0"></iframe>

        @php

        }


        if ($data->birth_certificate_fileExtensionType == 'image/png' || $data->birth_certificate_fileExtensionType == 'image/jpg' || $data->birth_certificate_fileExtensionType == 'image/jpeg') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->birth_certificate_fileExtensionType }}</h3><br><br>

        <img src="{{ asset('students_birth_certificate/' . $data->birth_certificate) }}" />

        @php
        }
        @endphp



    </div>



    <!-- Core -->
    @include('ADMIN.script')
</body>

</html>
