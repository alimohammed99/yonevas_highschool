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

    <div class="container">


        <br><br>

        {{-- <div style=""> --}}
        <h3 style="float:left;"><button style="float:left; font-size:20px" class="btn btn-success mt-0 mb-0">ENROLLMENT<span style="font-size:27px">:</span>
                {{ $data->programme }} </button></h3> <br><br><br>


        <hr style="">

        {{-- form to add course --}}
        <form style="width:" class="form" action="{{ url('non_degree_course_reg') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Please select the course you will like to add to your curriculum!</label>
                <select required name="name_of_certificate_course" class="form-control" id="exampleFormControlSelect1">
                    <option>please select an option</option>
                    @foreach ($courses as $item)
                    <option style="color:black" value="{{$item->course_name}}">{{$item->course_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label" for="exampleCheck1">Please be sure about your choice because you can't delete it back!</label>
            </div>
            <button type="submit" class="btn btn-primary text-success">Submit</button>
        </form>



        {{-- </div> --}}
        <div style="margin-left: 0%; margin-right:0%" class="mt-5">
            <div class="table-responsive">

                <table style="width:100%; padding-left:; padding-right:" class="table table-bordered table-responsive table-hover">
                    <tr style="text-align:center; color:white; background-color:rgb(18, 18, 63)">
                        <td style="">S/N</td>
                        <td style="">Course Name</td>
                        @foreach ($course_details as $studentsData1)
                    <tr style="text-align: center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $studentsData1->course_name }}</td>
                        {{-- <td></td> --}}
                    <tr>
                        @endforeach
                </table>


            </div><br>
        </div>



        <!-- Core -->
        @include('studentdashboard.script')
</body>

</html>
