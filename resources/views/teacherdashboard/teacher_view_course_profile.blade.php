
<!DOCTYPE html>
<html lang="en">

<head> 
@include("teacherdashboard.css")
</head>

<body>



       @include("teacherdashboard.navbar")
       <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{'/redirect'}}">Admin</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">Course Profile</a></li>
              <li class="breadcrumb-item active" aria-current="page">Course</li>
            </ol>
          </nav>
         

<div class="row">





       <div class="row gutters-sm">


                <div class="col-md-8 mb-3">

                <h1 style="font-size:33px; color:tomato">{{$join->course_title}}</h1> <br>

              <p style="color:grey; font-size:22px"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe unde modi suscipit vel neque laborum facere quia, officia nam atque maiores dolor nisi obcaecati tempora, placeat, consectetur qui? Officia eligendi vitae, dicta quam mollitia quisquam veniam deserunt, et cumque a inventore, facilis dolorem ratione rerum earum vel rem temporibus quae repellat quasi? Voluptate fugiat omnis pariatur repellendus, ipsam, nam, ducimus exercitationem cumque maiores sed eius nisi quam eveniet quasi odio laudantium placeat libero repellat quibusdam voluptatem aliquam.</p> <br><br><br>


              <div>
              <img class="" style="width:300px; heigh:500px" height="500" width="500"  src="{{ asset('diplomaCourseImages/' . $join->image) }}" alt="Course Image"/>

           
             
              </div>

                </div>




                <div class="col-md-4 mb-3">
                  <div class="card h-100">
                  <!-- <div class="card mt-3"> -->
              <h1 class="p-3" style="color:blue">COURSE INFORMATION</h1>
                <ul class="list-group list-group-flush">
              
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">               Faculty:</h6>
                    <span class="text-secondary">{{$join->faculty_name}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">              Department:</h6>
                       <span class="text-secondary">{{$join->department_name}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">                Level:</h6>
                       <span class="text-secondary">{{$join->level_name}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">                Course Code:</h6>
                       <span class="text-secondary">{{$join->course_code}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">                Course Status:</h6>
                       <span class="text-secondary">{{$join->status}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">                Course Unit:</h6>
                       <span class="text-secondary">{{$join->course_unit}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">                Semester:</h6>
                       <span class="text-secondary">{{$join->semester_name}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">                Lecturer:</h6>
                       <span class="text-secondary">aaaaaaa</span>
                  </li>


             
                </ul>
              <!-- </div> -->
                  </div>
                </div>


                </div>





    <!-- Core -->
@include("teacherdashboard.script")
</body>

</html>
