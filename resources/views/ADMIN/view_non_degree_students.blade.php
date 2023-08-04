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


    <div class="container">


        <h1 class="mt-5" style="text-align:center; font-size:30px">Non-Degree Students</h1>

        <div class="table-responsive">

            <table style="" id="example" class="table table-lg table-bordered table-hover">
                <thead class="thead-dark">
                    <tr style="text-align:center">
                        <th style="text-align:center" scope="col">S/N</th>
                        <th style="text-align:center" scope="col">NAME</th>
                        <th style="text-align:center" scope="col">PROGRAMME</th>
                        <th style="text-align:center" scope="col">SESSION</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($nonDegreeStudents as $getAllnonDegreeStudents)
                        <tr style="text-align:center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $getAllnonDegreeStudents->first_name }} {{ $getAllnonDegreeStudents->last_name }}
                            </td>
                            <td>{{ $getAllnonDegreeStudents->programme_type }}</td>
                            <td>{{ $getAllnonDegreeStudents->academic_session }}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        <!-- Core -->
        @include('ADMIN.script')
</body>

</html>
