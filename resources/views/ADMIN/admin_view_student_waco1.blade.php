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

        if ($data->waec_or_neco_1_fileExtensionType == 'application/pdf') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->waec_or_neco_1_fileExtensionType }}</h3><br><br>

        <iframe style="overflow:scroll" src="/students_waec_or_neco_1/{{ $data->waec_or_neco_1 }}" height="700" width="1000" frameborder="0"></iframe>

        @php

        }


        if ($data->waec_or_neco_1_fileExtensionType == 'image/png' || $data->waec_or_neco_1_fileExtensionType == 'image/jpg' || $data->waec_or_neco_1_fileExtensionType == 'image/jpeg') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->waec_or_neco_1_fileExtensionType }}</h3><br><br>

        <img src="{{ asset('students_waec_or_neco_1/' . $data->waec_or_neco_1) }}" />

        @php
        }
        @endphp



    </div>



    <!-- Core -->
    @include('ADMIN.script')
</body>

</html>
