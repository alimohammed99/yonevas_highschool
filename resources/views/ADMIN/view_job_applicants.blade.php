<!DOCTYPE html>
<html lang="en">

<head>
    @include("ADMIN.css")
</head>

<body>



    @include("ADMIN.navbar")


    @if(session()->has('success_message'))
    <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('success_message')}}
    </div>
    @endif


    @if(session()->has('error_message'))
    <div class="alert alert-danger alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        {{session()->get('error_message')}}
    </div>
    @endif


    <div class="container">


        <h1 style="text-align:center; font-size:30px">JOB APPLICANTS</h1>

        <div class="table-responsive">

            <table style="" id="example" class="table table-lg table-bordered table-hover">
                <thead class="thead-dark">
                    <tr style="text-align:center">
                        <th style="text-align:center" scope="col">NAME</th>
                        <th style="text-align:center" scope="col">EMAIL </th>
                        <th style="text-align:center" scope="col">PHONE NUMBER</th>
                        <th style="text-align:center" scope="col">VIEW APPLICATION</th>
                        <th style="text-align:center" scope="col">SEND EMAIL</th>
                        <th style="text-align:center" scope="col">DELETE</th>

                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align:center">
                        <td>aa</td>
                        <td>aa</td>
                        <td>aa</td>

                        <td class=""> <a class="btn btn-success" href="{{url('view_job_applicants_profile')}}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg></a></td>
                        <td class=""> <a class="btn btn-primary" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                                    <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
                                </svg>
                            </a></td>

                        <td class=""><a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{url('delete_job_applicants_profile')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                </svg></a> </td>
                    </tr>
                    </tr>
                </tbody>

            </table>
        </div>
        <!-- Core -->
        @include("ADMIN.script")
</body>





</html>
