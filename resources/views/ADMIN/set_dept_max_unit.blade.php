<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')
    <!-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="	https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <style>
        .dropdown {
            position: relative;
            display: inline-block;

        }

        .aaa:hover {
            /* transform: rotate(360deg); */
            transform: rotateY(360deg);
            /* transform: rotateZ(360deg); */
            transition: 3s;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            /* background-color: #f9f9f9; */
            background-color: yellow;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 2;
            transition: 2s;
            right: 0;
            /* top:0; */
        }

        .dropdown:hover .dropdown-content {
            display: block;
            transition: 2s;
            z-index: 2;
        }

        #ahh li {
            border-bottom: 3px solid grey;
            padding: 6px;
            z-index: 2;
        }
    </style>

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





        <h1 style="text-align:center; font-size:30px">DEPARTMENTS' MAXIMUM COURSE UNITS </h1><br>






        <!-- Button to Open the Modal -->
        <button style="background-color:#5e72e4; text-align:center;   box-shadow: 5px 5px 5px  black;" type="button"
            class="mt-5 btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModal">
            Set Maximum Unit
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div style="border-radius:50px" class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 style="text-align:center; color:green" class="modal-title">Add Maximum Unit</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form style="width:" class="form" action="{{ url('upload_max_unit') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf




                            <div class="form-group">
                                <label class="control-label col-sm" for="email">Programme Type:</label>
                                <div class="col-sm-10">
                                    <select required="required" style="" name="prog_type" id="prog_type"
                                        class="form-control">
                                        <option value="" required="required">Select Programme Type</option>
                                        @foreach (App\Models\ProgrammeType::orderBy('programme')->get() as $key => $value)
                                            <option value="{{ $value->id }}">{{ $value->programme }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>





                            <div class="form-group">
                                <label class="control-label col-sm" for="pwd">Department:</label>
                                <div class="col-sm-10">
                                    <select required="required" style="width:" name="department" id="department"
                                        class="form-control">
                                        <option required="required" value="">Select Department</option>

                                    </select>
                                </div>
                            </div>



                            <div class="form-group">

                                <label class="control-label col-sm" for="pwd">Max Unit:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="max_unit" placeholder="Enter Unit" class="form-control"
                                        required="required">
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-success"
                                    style="background-color:green">
                            </div>



                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" style="background:red"
                            data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div> <br> <br>







        <div class="table-responsive">

            <table style="width:" id="example" class="table table-lg table-bordered table-hover">
                <!-- <table style="" id="example" class="table table-lg table-bordered table-hover"> -->
                <thead class="thead-dark">
                    <tr style="text-align:center">
                        <th style="text-align:center" scope="col">S/N</th>
                        <th style="text-align:center" scope="col">PROGRAMME TYPE</th>
                        <th style="text-align:center" scope="col">DEPARTMENT</th>
                        <th style="text-align:center" scope="col">MAXIMUM UNIT </th>
                        <th style="text-align:center" scope="col">EDIT </th>
                        <th style="text-align:center" scope="col">DELETE </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dept_max_units as $all_dept_max_units)
                        <tr style="text-align:center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $all_dept_max_units->programme }}</td>
                            <td>{{ $all_dept_max_units->department_name }}</td>
                            <td>{{ $all_dept_max_units->max_unit }}</td>
                            <td class=""> <a class="btn btn-info"
                                    href="{{ url('edit_dept_max_unit', $all_dept_max_units->id) }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></a></td>
                            <td class=""><a onclick="return confirm('Are you sure?')" class="btn btn-danger"
                                    href="{{ url('delete_dept_max_unit', $all_dept_max_units->id) }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg></a> </td>


                        </tr>
                    @endforeach

                </tbody>
        </div>









        @include('ADMIN.script')


</body>



<script type="text/javascript">
    $('#prog_type').on('change', function() {
        get_dept_by_prog();
    });

    function get_dept_by_prog() {
        var programme_type = $('#prog_type').val();
        $.post('{{ route('getDepartmentsForProgType') }}', {
            _token: '{{ csrf_token() }}',
            programme_type: programme_type
        }, function(data) {
            $('#department').html(null);
            $('#department').append($('<option value="{{ $value->id }}">Select Department</option>', {

            }));
            for (var i = 0; i < data.length; i++) {
                $('#department').append($('<option>', {
                    value: data[i].id,
                    text: data[i].department_name
                }));

            }
        });
    }
</script>





</html>
