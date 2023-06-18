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

        if ($data->letter_of_sponsorship_fileExtensionType == 'application/pdf') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->letter_of_sponsorship_fileExtensionType }}</h3><br><br>

        <iframe style="overflow:scroll" src="/students_letter_of_sponsorship/{{ $data->letter_of_sponsorship }}" height="700" width="1000" frameborder="0"></iframe>

        @php

        }


        if ($data->letter_of_sponsorship_fileExtensionType == 'image/png' || $data->letter_of_sponsorship_fileExtensionType == 'image/jpg' || $data->letter_of_sponsorship_fileExtensionType == 'image/jpeg') {

        @endphp

        <h3 style="color:red; text-decoration:underline">DOCUMENT FORMAT: {{ $data->letter_of_sponsorship_fileExtensionType }}</h3><br><br>

        <img src="{{ asset('students_letter_of_sponsorship/' . $data->letter_of_sponsorship) }}" />

        @php
        }
        @endphp



    </div>



    <!-- Core -->
    @include('ADMIN.script')
</body>

</html>
