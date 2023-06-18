<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')
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




    <!-- Button to Open the Modal -->
    <button style="background-color:#5e72e4; text-align:center;   box-shadow: 5px 5px 5px  black;" type="button"
        class="mt-5 btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModal">
        Add Department
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div style="border-radius:50px" class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 style="text-align:center" class="modal-title">Add Department</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form style="width:100px" class="form" action="{{ url('upload_departments') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf



                        <div class="form-group">
                            <label for="price">Select Faculty:</label> <br>
                            <select style="width:450px" class="form-control" style="color:tomato" name="faculty_id"
                                id="level" class="c">



                                @foreach ($data as $data)
                                    <option class="form-control" style="color:tomato; width:100px"
                                        value="{{ $data->id }}" required="required">{{ $data->faculty_name }}
                                    </option>
                                @endforeach

                            </select>

                        </div>


                        <div class="form-group">


                            <label class="control-label col-sm-2" for="email">Programme Type:</label>
                            <div class="col-sm-10">
                                <select style="width:450px" class="form-control" style="color:tomato" name="prog_type"
                                    id="level" class="c">
                                    <option value="" required="required">Select Programme Type</option>

                                    @foreach ($prog_type as $prog_type)
                                        <option value="{{ $prog_type->id }}" required="required">
                                            {{ $prog_type->programme }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <label style="font-weight:bolder" for="price">Department Name:</label> <br>
                            <input style="width:450px" type="text" name="department_name"
                                placeholder="Enter Department Name" required="required">
                        </div> <br>

                        <div class="form-group">
                            <input
                                style="background-color:green; border-radius:50px; font-size:22px; padding:27px; color:white"
                                type="submit" class="btn btn-success" value="Submit">
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
    </div> <br><br>



    <div class="table-responsive">

        <table style="" id="example" class="table table-lg table-bordered table-hover">
            <thead class="thead-dark">
                <tr style="text-align:center">
                    <th style="text-align:center" scope="col">FACULTY ABBREVIATION</th>
                    <th style="text-align:center" scope="col">FACULTY NAME</th>
                    <th style="text-align:center" scope="col">PROGRAMME TYPE</th>
                    <th style="text-align:center" scope="col">DEPARTMENT NAME</th>
                    <th style="text-align:center" scope="col">EDIT</th>
                    <th style="text-align:center" scope="col">DELETE</th>

                </tr>
            </thead>
            <tbody>


                @foreach ($data2 as $data2)
                    <tr style="color:black; text-align:center" class="table-">
                        <td>{{ $data2->faculty_abbreviation }}</td>
                        <td>{{ $data2->faculty_name }}</td>
                        <td>{{ $data2->programme }}</td>
                        <td>{{ $data2->department_name }}</td>
                        <td class=""> <a class="btn btn-info"
                                href="{{ url('edit_departments', $data2->id) }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a></td>
                        <td class=""><a onclick="return confirm('Are you sure?')" class="btn btn-danger"
                                href="{{ url('delete_departments', $data2->id) }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg></a> </td>

                    </tr>
                @endforeach






            </tbody>

        </table>

        <!-- Core -->
        @include('ADMIN.script')
</body>

</html>
