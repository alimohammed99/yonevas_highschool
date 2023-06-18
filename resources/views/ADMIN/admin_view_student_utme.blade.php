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

        if ($data->utme_fileExtensionType == 'application/pdf') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->utme_fileExtensionType }}</h3><br><br>

        <iframe style="overflow:scroll" src="/students_utme/{{ $data->utme }}" height="700" width="1000" frameborder="0"></iframe>

        @php

        }


        if ($data->utme_fileExtensionType == 'image/png' || $data->utme_fileExtensionType == 'image/jpg' || $data->utme_fileExtensionType == 'image/jpeg') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->utme_fileExtensionType }}</h3><br><br>

        <img src="{{ asset('students_utme/' . $data->utme) }}" />

        @php
        }
        @endphp



    </div>



    <!-- Core -->
    @include('admin.script')
</body>

</html>
