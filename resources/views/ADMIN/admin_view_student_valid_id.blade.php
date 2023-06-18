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

        if ($data->valid_form_of_id_fileExtensionType == 'application/pdf') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->valid_form_of_id_fileExtensionType }}</h3><br><br>

        <iframe style="overflow:scroll" src="/students_valid_form_of_id/{{ $data->valid_form_of_id }}" height="700" width="1000" frameborder="0"></iframe>

        @php

        }


        if ($data->valid_form_of_id_fileExtensionType == 'image/png' || $data->valid_form_of_id_fileExtensionType == 'image/jpg' || $data->valid_form_of_id_fileExtensionType == 'image/jpeg') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->valid_form_of_id_fileExtensionType }}</h3><br><br>

        <img src="{{ asset('students_valid_form_of_id/' . $data->valid_form_of_id) }}" />

        @php
        }
        @endphp



    </div>




    <!-- Core -->
    @include('ADMIN.script')
</body>

</html>
