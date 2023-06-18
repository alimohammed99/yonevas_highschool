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







    <div class="table-responsive">

        <table style="" id="example" class="table table-lg table-bordered table-hover">
            <thead class="thead-dark">
                <tr style="text-align:center">
                    <th style="text-align:center" scope="col">PROGRAMME TYPE</th>
                    <th style="text-align:center" scope="col">DEPARTMENT</th>
                    <th style="text-align:center" scope="col">LEVEL</th>
                    <th style="text-align:center" scope="col">SEMESTER</th>
                    <th style="text-align:center" scope="col">COURSE</th>
                    <th style="text-align:center" scope="col">COURSE STATUS</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($query as $engine)
                    <tr style="text-align:center">
                        <td>{{ $engine->programme }}</td>
                        <td>{{ $engine->department_name }}</td>
                        <td>{{ $engine->level_name }}</td>
                        <td>{{ $engine->semester_name }}</td>
                        <td>{{ $engine->course_code }}</td>
                        <td>{{ $engine->status }}</td>
                    </tr>
                @endforeach






            </tbody>

        </table>

    </div>

    <!-- Core -->
    @include('ADMIN.script')
</body>

</html>
