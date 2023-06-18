<!DOCTYPE html>
<html lang="en">

<head>
    @include('studentdashboard.css')
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



    @include('studentdashboard.body')
    <!-- Core -->
    @include('studentdashboard.script')
</body>

</html>
