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
        Add Response
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div style="border-radius:50px" class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 style="text-align:center; color:white" class="modal-title">Add Response</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form style="width:" class="form" action="{{ url('upload_should_we_contact_them') }}"
                        method="post" enctype="multipart/form-data">
                        @csrf




                        <div class="form-group">
                            <label for="price">Status</label>
                            <input style="color:tomato" class="form-control" type="text"
                                name="should_we_contact_them" placeholder="Add answer" required="required">
                        </div>
                        <br>

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








    <!-- Core -->
    @include('ADMIN.script')
</body>

</html>
