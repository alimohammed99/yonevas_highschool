<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')
</head>

<body>



    @include('ADMIN.navbar')

    <div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1
            style="color:#5e72e4; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; border-radius:70px 10px 70px 10px; background-color:white; padding:15px; margin-bottom:52px">
            EDIT DEPARTMENT MAX UNIT</h1>


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



        <form style="width:100%" class="form" action="{{ url('update_dept_max_unit', $data->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf



            <div style="; display:block; margin:auto; width:100%">


                <div class="form-group">
                    <label style="font-size:22px" for="price">Programme Type</label> <br>
                    <input
                        style="text-transform:uppercase; color:tomato; border-top-left-radius:50px; border-top-right-radius:50px; padding:30px;  width:"
                        class="form-control" type="text" name="unused_prog_type" value="{{ $getData->programme }}"
                        required="required" readonly>
                </div><br>


                {{-- HIDDEN --}}
                {{-- HIDDEN --}}
                {{-- HIDDEN --}}
                <div style="display:none" class="form-group">
                    <label style="font-size:22px" for="price">Programme Type</label> <br>
                    <input
                        style="text-transform:uppercase; color:tomato; border-top-left-radius:50px; border-top-right-radius:50px; padding:30px;  width:"
                        class="form-control" type="text" name="prog_type" value="{{ $getData->Programme_type }}"
                        required="required" readonly>
                </div><br>
                {{-- HIDDEN --}}
                {{-- HIDDEN --}}
                {{-- HIDDEN --}}







                <div class="form-group">
                    <label style="font-size:22px" for="price">Department</label> <br>
                    <input
                        style="text-transform:uppercase; color:tomato;  border-top-left-radius:50px; border-bottom-right-radius:50px; padding:30px;  padding:30px;  width:"
                        class="form-control" type="text" name="unused_department" value="{{ $getData->department_name }}"
                        required="required" readonly>
                </div><br>






                {{-- HIDDEN --}}
                {{-- HIDDEN --}}
                {{-- HIDDEN --}}
                <div style="display:none" class="form-group">
                    <label style="font-size:22px" for="price">Department</label> <br>
                    <input
                        style="text-transform:uppercase; color:tomato;  border-top-left-radius:50px; border-bottom-right-radius:50px; padding:30px;  padding:30px;  width:"
                        class="form-control" type="text" name="department" value="{{ $getData->department }}"
                        required="required" readonly>
                </div><br>
                {{-- HIDDEN --}}
                {{-- HIDDEN --}}
                {{-- HIDDEN --}}







                <div class="form-group">
                    <label style="font-size:22px" for="price">Max Unit</label> <br>
                    <input
                        style="color:tomato; border-radius:30px; padding:30px;  border-bottom-left-radius:50px; border-bottom-right-radius:50px; padding:30px;   width:"
                        class="form-control" type="number" name="max_unit" value="{{ $getData->max_unit }}"
                        required="required">
                </div> <br>




                <div class="form-group">
                    <input style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white"
                        type="submit" class="btn btn-success" value="Update">
                </div> <br>



                <div class="form-group">
                    <a class="btn btn-info" href="{{ url('set_dept_max_unit') }}">View Departmental Maximum Units</a>
                </div>


            </div>

        </form>













        <!-- Core -->
        @include('ADMIN.script')
</body>

</html>
