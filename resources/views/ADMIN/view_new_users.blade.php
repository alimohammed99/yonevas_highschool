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


    <div style="margin-bottom:22px" class="container">
        <h1 class="mt-5" style="text-align:center; font-size:30px">New Users</h1>

        <div class="table-responsive">

            <table style="" id="example" class="table table-lg table-bordered table-hover">
                <thead class="thead-dark">
                    <tr style="text-align:center">
                        <th style="text-align:center" scope="col">FIRST NAME</th>
                        <th style="text-align:center" scope="col">LAST NAME</th>
                        <th style="text-align:center" scope="col">EMAIL </th>
                        <th style="text-align:center" scope="col">PHONE NUMBER</th>
                        {{-- <th style="text-align:center" scope="col">APPROVE</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($query as $data)
                        <tr>
                            <td>{{ $data->first_name }}</td>
                            <td>{{ $data->last_name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
        </div>
    </div>




    <!-- Core -->
    @include('ADMIN.script')
</body>

</html>
