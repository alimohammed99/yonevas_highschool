<!DOCTYPE html>
<html lang="en">

<head>
    @include('ADMIN.css')

    <style type="text/css">
        #aaa {
            width: 100%;
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




    <!-- Button to Open the Modal -->
    <button style="background-color:#5e72e4; text-align:center;   box-shadow: 5px 5px 5px  black;" type="button"
        class="mt-5 btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModal">
        Add Session
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div style="border-radius:50px" class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 style="text-align:center; color:white" class="modal-title">Add Academic Session</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form style="width:100%" class="form" action="{{ url('upload_academic_session') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf




                        <div class="form-group">
                            <label style="font-weight:bolder" for="price">Session:</label> <br>
                            <select class="" style="width:100%; padding-right:70px" id="aaa"
                                name="academic_session" size="">

                                <option value="<?php echo date('Y') . ' / ' . date('Y') + 1 . ' SESSION'; ?>"> <?php echo date('Y') . ' / ' . date('Y') + 1 . ' SESSION'; ?> </option>

                                <?php

                                for ($i = 0; $i < 50; $i++) {

                                    $acsession = date('Y') + 1 + $i . ' / ' . date('Y') + 1 + 1 + $i . ' SESSION';

                                    echo "<option value='$acsession'>" . $acsession . '</option>';
                                }

                                ?>
                            </select>
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
                    <th style="text-align:center" scope="col">SESSION</th>
                    <th style="text-align:center" scope="col">STATUS</th>
                    <th style="text-align:center" scope="col">OPEN SESSION</th>
                    <th style="text-align:center" scope="col">CLOSE SESSION</th>
                    <th style="text-align:center" scope="col">MODIFY</th>
                    <th style="text-align:center" scope="col">DELETE</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr style="text-align:center">
                        <td>{{ $data->academic_session }}</td>
                        <td>{{ $data->status }}</td>
                        <td class=""> <a class="btn btn-success"
                                href="{{ url('open_academic_session', $data->id) }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-key" viewBox="0 0 16 16">
                                    <path
                                        d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg></a></td>
                        <td class=""> <a class="btn btn-warning"
                                href="{{ url('close_academic_session', $data->id) }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-lock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                </svg></a></td>
                        <td class=""> <a class="btn btn-info"
                                href="{{ url('edit_academic_session', $data->id) }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a></td>
                        <td class=""><a onclick="return confirm('Are you sure?')" class="btn btn-danger"
                                href="{{ url('delete_academic_session', $data->id) }}"><svg
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
