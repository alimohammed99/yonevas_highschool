
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




       <h1 class="pb-3 pt-5" style="text-align:center; font-size:30px">Filter Students</h1>

       <h1 class="text-danger pb-3" style="font-size:22px">You can filter Students by:</h1>

       <form class="form-horizontal" action="{{url('display_diploma_students_according_to_departments')}}" method="get">


       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Faculty:</label>
      <div class="col-sm-10">
      <select style="" name="faculty_id" id="countries" class="form-control" required="required">
                                <option value="">Select Faculty</option>
                                @foreach(App\Models\Faculty::orderBy('faculty_name')->get() as $key => $value)
                                    <option value="{{ $value->id }}" required="required">{{ $value->faculty_name }}</option>
                                @endforeach
        </select>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Department:</label>
      <div class="col-sm-10">
      <select style="width:" name="department_id" id="states" class="form-control" required="required">
                 <option value="" required="required">Select Department</option>

         </select>
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success mt-4" style="background:green; text-align:center">Submit</button>
      </div>
    </div>

       </form>

















       <h1 style="text-align:center; font-size:30px">Diploma Students</h1>

       <div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
  <thead class="thead-dark">
    <tr style="text-align:center">
    <th style="text-align:center" scope="col">FIRST NAME</th>
      <th style="text-align:center" scope="col">LAST NAME</th>
      <th style="text-align:center" scope="col">EMAIL </th>
      <th style="text-align:center" scope="col">PHONE NUMBER</th>
      <th style="text-align:center" scope="col">PROGRAMME TYPE</th>
      <th style="text-align:center" scope="col">STUDENT MATRIC NO.</th>
      <th style="text-align:center" scope="col">VIEW PROFILE</th>
      <th style="text-align:center" scope="col">SEND EMAIL</th>
      <th style="text-align:center" scope="col">EDIT</th>
      <th style="text-align:center" scope="col">DELETE</th>

    </tr>
  </thead>
  <tbody>





  @foreach($data as $data)
<tr style="text-align:center">
<td>{{$data->first_name}}</td>
<td>{{$data->last_name}}</td>
<td>{{$data->email}}</td>
<td>{{$data->phone}}</td>
<td>{{$data->programme}}</td>

<td>
  @php

  if(empty($data->student_matric_number)){

    @endphp

   <span style="font-style:italic; color:red">unassigned</span>

    @php
  }

  if(!empty($data->student_matric_number)){

  @endphp

  {{$data->student_matric_number}}

  @php
  }
  @endphp
</td>
<td class=""> <a class="btn btn-success" href="{{url('view_students_profile', $data->id)}}">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></td>
<td class=""> <a class="btn btn-primary" href="javascript:;">   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
  <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
</svg>
</a></td>
<td class=""> <a class="btn btn-info" href="{{url('edit_students', $data->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></td>
      <td class=""><a onclick="return confirm('Are you sure?')"  class="btn btn-danger" href="{{url('delete_students', $data->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></a> </td>
</tr>
@endforeach



  </tbody>

</table>
</div>
    <!-- Core -->
@include("ADMIN.script")
</body>



<script type="text/javascript">
        $('#countries').on('change', function() {
                get_state_by_country();
            });
                function get_state_by_country(){
                    var faculty_id = $('#countries').val();
                    $.post('{{route('getDepartments')}}',{_token:'{{ csrf_token() }}', faculty_id:faculty_id}, function(data){
                        $('#states').html(null);
                        $('#states').append($('<option value="{{ $value->id }}">Select Department</option>', {

                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#states').append($('<option>', {
                                value: data[i].id,
                                text: data[i].department_name
                            }));

                        }
                });
            }
</script>


</html>
