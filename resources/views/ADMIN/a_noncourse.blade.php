<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')
    <link rel="icon" href="assets/newImages/Y-07.png" type="image/vnd.microsoft.icon" />
</head>

<body>
    @include('ADMIN.navbar')
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
        <h1 class="pt-5"
            style="text-align:center; color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; border-radius:70px 10px 70px 10px; background-color:white;">
            ADD NON-DEGREE COURSES</h1>
<form class="form-horizontal" method="POST" action="{{ route('ad_noncourse') }}">
    @csrf
    <div class="form-group">
        <label class="control-label" for="email">Programme Type:</label>
        <select name="programme_type" id="myselection" class="myselection form-control" required="required">
            <option value="">Select Programme Type</option>
            <option value="2">PROFESSIONAL CERTIFICATE/NON-DEGREE</option>
            <option value="3">CONTINOUS/ADULT LEARNING EDUCATION</option>
        </select>
    </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Course Title:</label>
            <input type="text" class="form-control" placeholder="Enter course title"
                name="course_name">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success mt-4"
                    style="background:green; text-align:center">Submit</button>
            </div>
        </div>
</form>
</div>

<!-- Core -->
@include('ADMIN.script')
</body>
</html>