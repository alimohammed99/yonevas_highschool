
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




       <h1 class="pb-3 pt-5" style="text-align:center; font-size:30px">Filter Courses</h1>

       <h1 class="text-danger pb-3" style="font-size:22px">You can filter Courses by Faculty and Department</h1>

       <form class="form-horizontal" action="{{url('course_by_fac_and_dept')}}" method="get">


       <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Level:</label>
      <div class="col-sm-10">
      <select style="width:" name="level" id="" class="form-control" required="required">
      @foreach($nd2 as $nd2)
      <option value="{{$nd2->id}}" >{{$nd2->level_name}}</option>

                 @endforeach

         </select>
      </div>
    </div>


       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Faculty:</label>
      <div class="col-sm-10">
      <select style="" name="faculty" id="countries" class="form-control" required="required">
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
      <select style="width:" name="department" id="states" class="form-control" required="required">
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

















       <h1 style="text-align:center; font-size:30px">ND2 Courses</h1>

       <div class="table-responsive">

<table style="" id="example" class="table table-lg table-bordered table-hover">
  <thead class="thead-dark">
    <tr style="text-align:center">
    <th style="text-align:center" scope="col">S/N</th>
      <th style="text-align:center" scope="col">FACULTY</th>
      <th style="text-align:center" scope="col">DEPARTMENT</th>
      <th style="text-align:center" scope="col">LEVEL</th>
      <!-- <th style="text-align:center" scope="col">COURSE CODE</th> -->
      <th style="text-align:center" scope="col">COURSE TITLE</th>
      <!-- <th style="text-align:center" scope="col">COURSE DESCRIPTION</th> -->
      <!-- <th style="text-align:center" scope="col">COURSE STATUSES</th> -->
      <!-- <th style="text-align:center" scope="col">COURSE UNIT</th> -->
      <!-- <th style="text-align:center" scope="col">IMAGE</th> -->
      <!-- <th style="text-align:center" scope="col">SEMESTER</th> -->
      <th style="text-align:center" scope="col">VIEW COURSE PROFILE</th>
      <th style="text-align:center" scope="col">EDIT</th>
      <th style="text-align:center" scope="col">DELETE</th>

    </tr>
  </thead>
  <tbody>


@foreach($join as $joined)

<tr style="color:black; text-align:center" class="table-">
<td>{{$loop->iteration}}</td>
      <td>{{$joined->faculty_name}}</td>
      <td>{{$joined->department_name}}</td>
      <td>{{$joined->level_name}}</td>
      <!-- <td>{{$joined->course_code}}</td> -->
      <td>{{$joined->course_title}}</td>
      <!-- <td>{{$joined->course_description}}</td> -->
      <!-- <td>{{$joined->status}}</td> -->
      <!-- <td>{{$joined->course_unit}}</td> -->
      <!-- <td><img style="height:" height="300" width="300" src="diplomaCourseImages/{{$joined->image}}" alt=""></td> -->
      <!-- <td>{{$joined->semester_name}}</td> -->
      <td class=""> <a class="btn btn-success" href="{{url('admin_view_course_profile', $joined->id)}}">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></td>
      <td class=""> <a class="btn btn-info" href="{{url('edit_courses', $joined->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></td>
      <td class=""><a onclick="return confirm('Are you sure?')"  class="btn btn-danger" href="{{url('delete_courses', $joined->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
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
