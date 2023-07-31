<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use DB;

use App\Models\Faculty;

use App\Models\Departments;

use App\Models\ProgrammeType;

use App\Models\Logo;

use App\Models\Semesters;

use App\Models\CoursesStatuses;

use App\Models\Courses;

use App\Models\Gender;

use App\Models\Religion;

use App\Models\TeachingOrNonTeaching;

use App\Models\StaffRoles;

use App\Models\MedicalConditions;

use App\Models\ShouldWeContactThem;

use App\Models\GovernmentOfficial;

use App\Models\MilitaryForce;

use App\Models\MaritalStatus;

use App\Models\TeachingExperience;

use App\Models\ComputerExperience;

use App\Models\HighestEducation;

use App\Models\StaffDetails;

use App\Models\StudentsDetails;

use App\Models\Countries;

use App\Models\States;

use App\Models\Cities;

use App\Models\User;

use App\Models\AcademicSession;

use App\Models\Level;

use App\Models\SiteLogo;

use App\Models\Events;

use App\Models\StaffCircular;

use App\Models\StudentsCircular;

use App\Models\AttendanceResponse;

use App\Models\TeachersToCourses;

use App\Models\ApplicantsOldResults;

use App\Models\DepartmentsMaxUnit;

use App\Models\EmployeeApplication;

use App\Models\EmploymentAndFinancialAidFormPdf;

use App\Models\CourseFeedback;

use Illuminate\Support\Facades\Stroage;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check()) {
                return redirect('/'); // Replace '/' with the desired home page URL
            }

            return $next($request);
        });
    }

    public function view_faculties()
    {
        $usertype = Auth::user()->usertype;

        $data = Faculty::all();

        if ($usertype == '1') {

            return view("ADMIN.view_faculties", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_faculties(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new Faculty;


            $data->faculty_abbreviation = $request->faculty_abbreviation;
            $data->faculty_name = $request->faculty_name;

            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a Faculty ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_faculties($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Faculty::find($id);
            return view("ADMIN.edit_faculties", compact("data"));
        } else {
            return redirect()->back()->with('error', 'Access denied!');
        }
    }





    public function update_faculties(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Faculty::find($id);

            $data->faculty_abbreviation = $request->faculty_abbreviation;
            $data->faculty_name = $request->faculty_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_faculties($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Faculty::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Faculty has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function view_departments()
    {
        $usertype = Auth::user()->usertype;

        $data = Faculty::all();


        $data2 = DB::table('faculties')
            ->join('departments', 'faculties.id', '=', 'departments.faculty_id')
            ->join('programme_types', 'departments.programme_type', '=', 'programme_types.id')
            ->select('departments.id as id', 'faculties.faculty_name', 'faculties.faculty_abbreviation', 'departments.department_name', 'departments.faculty_id', 'programme_types.programme')->get();

        $prog_type = ProgrammeType::all();

        if ($usertype == '1') {

            return view("ADMIN.view_departments", compact('data', 'data2', 'prog_type'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_departments(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new Departments;


            $data->faculty_id = $request->faculty_id;
            $data->department_name = $request->department_name;

            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a Department      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }




    public function edit_departments($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data2 = Departments::find($id);
            $data = Faculty::all();
            $prog_type = ProgrammeType::all();

            return view("ADMIN.edit_departments", compact("data", "data2", "prog_type"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_departments(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Departments::find($id);

            $data->faculty_id = $request->faculty_id;
            $data->programme_type = $request->prog_type;
            $data->department_name = $request->department_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_departments($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Departments::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Department has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function view_programmes()
    {
        $usertype = Auth::user()->usertype;

        $data = ProgrammeType::all();

        if ($usertype == '1') {

            return view("ADMIN.view_programmes", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_programmes(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new ProgrammeType;


            $data->programme = $request->programme_name;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a Programme      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_programmes($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = ProgrammeType::find($id);
            return view("ADMIN.edit_programmes", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_programmes(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ProgrammeType::find($id);

            $data->programme = $request->programme_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_programmes($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = ProgrammeType::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Programme has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



public function a_course(Request $request)
    {
        $usertype = Auth::user()->usertype;
        $data_stat = CoursesStatuses::all();
        if ($usertype == '1') {

            return view("ADMIN.a_course", compact('data_stat'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
    }
    }
    public function ad_course(Request $request){
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $data = new Courses;
            $data->programme_type = $request->programme_type;
            $data->faculty_id = $request->faculty;
            $data->department_id = $request->department;
            $data->level = $request->level;
            $data->semester = $request->input('semester');
            $data->course_code = $request->course_code;
            $data->course_title = $request->course_title;
            $data->course_description = $request->course_description;
            $data->course_status = $request->course_status;
            $data->course_unit = $request->course_unit;
            $data->image = $request->course_image;
        
            $data->save();
            return redirect()->back()->with('success', 'Form data saved successfully!');  
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }  
    }




    public function add_courses()
    {

        $usertype = Auth::user()->usertype;

        $data = ProgrammeType::all();

        $data_sem = Semesters::all();

        $data_stat = CoursesStatuses::all();

        $data_level = Level::all();

        $cert_courses = Courses::where('programme_type', '=', '2')->get();

        // $acad = AcademicSession::where('status', '=', '1')->get();

        // dd($acad);

        if ($usertype == '1') {

            return view("ADMIN.add_courses", compact('data', 'data_sem', 'data_stat', 'data_level', 'cert_courses'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_courses(Request $request)
    {

        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $data = new Courses;
        
            $data->course_title = $request->course_title;
            $data->programme_type = $request->programme_type;
        
            if ($data->programme_type == '1') {
                // DIPLOMA
                $data->faculty_id = $request->di_faculty;
                $data->department_id = $request->di_department;
                $data->level = $request->di_level;
            } else if ($data->programme_type == '7') {
                // DEGREE
                $data->faculty_id = $request->de_faculty;
                $data->department_id = $request->de_department;
                $data->level = $request->de_level;
            } else {
                // CERTIFICATE AND TRAINING
                $data->image = 'null';
                $data->faculty_id = 'null';
                $data->department_id = 'null';
                $data->level = 'null';
            }
        
            $data->course_code = $request->course_code;
            $data->course_status = $request->course_status;
            $data->course_unit = $request->course_unit;
            $data->semester = $request->semester;
            $data->course_status = $request->course_status;
            $data->course_description = $request->course_description;
        
            if (!empty($request->course_image)) {
                $image = $request->course_image;
                $imagename = time() . '.' . $image->getClientOriginalExtension();
        
                if ($data->programme_type == '1') {
                    $request->course_image->move('diplomaCourseImages', $imagename);
                } else if ($data->programme_type == '2') {
                    $request->course_image->move('degreeCourseImages', $imagename);
                }
        
                $data->image = $imagename;
            }
        
            $data->save();
        
            return redirect()->back()->with('success_message', 'You have successfully added a Course ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }        
    }






    public function view_nd1_courses()
    {
        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {

            $nd1 = Level::where('id', '=', '1')->get();
            // dd($nd1);

            $join = DB::table('courses')->join('faculties', 'courses.faculty_id', '=', 'faculties.id')

                ->join('departments', 'courses.department_id', '=', 'departments.id')

                ->join('semesters', 'courses.semester', '=', 'semesters.id')

                ->join('courses_statuses', 'courses.course_status', '=', 'courses_statuses.id')

                ->join('programme_types', 'courses.programme_type', '=', 'programme_types.id')

                ->join('levels', 'courses.level', '=', 'levels.id')


                ->select('courses.id as id', 'faculties.faculty_name', 'departments.department_name', 'courses.course_code', 'courses.course_title', 'courses.course_description', 'courses_statuses.status', 'courses.course_unit', 'courses.image', 'semesters.semester_name', 'levels.level_name')->where('programme_type', '=', '1')->where('courses.level', '=', '1')->get();
            // dd($join);


            return view("ADMIN.view_nd1_courses", compact('join', 'nd1'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }














    public function view_nd2_courses()
    {
        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {

            $nd2 = Level::where('id', '=', '2')->get();

            $join = DB::table('courses')->join('faculties', 'courses.faculty_id', '=', 'faculties.id')

                ->join('departments', 'courses.department_id', '=', 'departments.id')

                ->join('semesters', 'courses.semester', '=', 'semesters.id')

                ->join('courses_statuses', 'courses.course_status', '=', 'courses_statuses.id')

                ->join('programme_types', 'courses.programme_type', '=', 'programme_types.id')

                ->join('levels', 'courses.level', '=', 'levels.id')


                ->select('courses.id as id', 'faculties.faculty_name', 'departments.department_name', 'courses.course_code', 'courses.course_title', 'courses.course_description', 'courses_statuses.status', 'courses.course_unit', 'courses.image', 'semesters.semester_name', 'levels.level_name')->where('programme_type', '=', '1')->where('courses.level', '=', '2')

                ->get();
            // dd($join);


            return view("ADMIN.view_nd2_courses", compact('join', 'nd2'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function view_certificate_courses()
    {
        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {

            $join = DB::table('courses')->where('programme_type', '=', '2')->get();

            // dd($join);


            return view("ADMIN.view_certificate_courses", compact('join'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }











    public function edit_courses($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data_prog = ProgrammeType::all();

            $data_sem = Semesters::all();

            $data_stat = CoursesStatuses::all();

            $data = Courses::find($id);

            return view("ADMIN.edit_courses", compact('data', 'data_sem', 'data_stat'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function edit_certificate_courses($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = Courses::find($id);

            return view("ADMIN.edit_certificate_courses", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }











    public function update_courses(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Courses::find($id);


            $image = $request->image;

            if ($image) {


                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->book_image->move('diplomaCourseImages', $imagename);

                $data->image = $imagename;
            }

            $data->faculty_id = $request->faculty_id;

            $data->department_id = $request->department_id;

            $data->course_code = $request->course_code;

            $data->course_title = $request->course_title;

            $data->course_status = $request->programme_name;

            $data->course_unit = $request->course_unit;

            $data->semester = $request->semester;

            $data->course_status = $request->course_status;

            $data->course_description = $request->course_description;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function update_certificate_courses(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Courses::find($id);





            $data->course_title = $request->course_title;



            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function delete_certificate_courses($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Courses::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Course has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }
















    public function delete_courses($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Courses::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Course has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function site_logo()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = SiteLogo::all();
            // dd($data);
            return view("ADMIN.site_logo", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function upload_site_logo(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new SiteLogo;

            $image = $request->file;

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('SiteLogo', $imagename);

            $data->logo = $imagename;


            $data->save();

            return redirect()->back()->with('success_message', 'Logo uploaded successfully');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function edit_site_logo($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = SiteLogo::find($id);
            return view("ADMIN.edit_site_logo", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function update_site_logo(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = SiteLogo::find($id);



            $image = $request->logoimage;

            if ($image) {


                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->logoimage->move('SiteLogo', $imagename);

                $data->logo = $imagename;
            }

            $data->save();

            return redirect()->back()->with('success_message', 'Logo updated successfully');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    // public function getDepartments(Request $request)
    // {
    //     $states = Departments::whereProgrammeType($request->programme_type)->whereFacultyId($request->faculty_id)->orderBy('department_name')->get();
    //     return $states;
    // }

    public function getDepartments(Request $request)
    {
        $states = Departments::where('programme_type', '=', $request->programme_type)->where('faculty_id', '=', $request->faculty_id)->orderBy('department_name')->get();
        return $states;
    }








    public function getDepartmentsForProgType(Request $request)
    {
        $states = Departments::whereProgrammeType($request->programme_type)->orderBy('department_name')->get();
        return $states;
    }





    public function getCourse(Request $request)
    {
        $course = Courses::whereDepartmentId($request->department_id)->orderBy('course_title')->get();
        return $course;
    }








    public function view_semesters()
    {
        $usertype = Auth::user()->usertype;

        $data = Semesters::all();

        if ($usertype == '1') {

            return view("ADMIN.view_semesters", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_semesters(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new Semesters;


            $data->semester_name = $request->semester_name;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a Semester      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_semesters($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Semesters::find($id);
            return view("ADMIN.edit_semesters", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_semesters(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Semesters::find($id);

            $data->semester_name = $request->semester_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_semesters($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Semesters::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Semester has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function view_courses_statuses()
    {
        $usertype = Auth::user()->usertype;

        $data = CoursesStatuses::all();

        if ($usertype == '1') {

            return view("ADMIN.view_courses_statuses", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_courses_statuses(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new CoursesStatuses;


            $data->status = $request->status;


            $data->save();

            return redirect()->back()->with('success_message', 'Added Successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_courses_statuses($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = CoursesStatuses::find($id);
            return view("ADMIN.edit_courses_statuses", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_courses_statuses(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = CoursesStatuses::find($id);

            $data->status = $request->status;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_courses_statuses($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = CoursesStatuses::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Status has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function course_by_fac_and_dept(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $level = $request->level;
            $faculty = $request->faculty;
            $department = $request->department;

            $getDepartment = Departments::find($department);

            // faculty and department are the name of the inputs(dropdowns)

            if ($department == '') {

                return redirect()->back();
            } else {

                //   }else{


                //$data = Courses::where('department_id', 'Like', '%' . $department . '%')->get();

                $data = Courses::where('department_id', 'Like', '%' . $department . '%')->join('departments', 'courses.department_id', '=', 'departments.id')->join('faculties', 'courses.faculty_id', '=', 'faculties.id')->join('levels', 'courses.level', '=', 'levels.id')->join('courses_statuses', 'courses.course_status', '=', 'courses_statuses.id')->join('semesters', 'courses.semester', '=', 'semesters.id')->select('courses.id as id', 'departments.department_name', 'courses.course_title', 'courses.course_code', 'faculties.faculty_name', 'courses.course_description', 'levels.level_name', 'courses.course_status', 'courses.course_unit', 'courses.image', 'semesters.semester_name', 'courses_statuses.status')->where('level', '=', $level)->get();


                // dd($data);

                return view('ADMIN.course_by_fac_and_dept', compact('data', 'department', 'getDepartment'));
            }
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function genders()
    {
        $usertype = Auth::user()->usertype;

        $data = Gender::all();

        if ($usertype == '1') {

            return view("ADMIN.genders", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_genders(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new Gender;


            $data->gender_name = $request->gender_name;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a Gender      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_genders($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Gender::find($id);
            return view("ADMIN.edit_genders", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_genders(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Gender::find($id);

            $data->gender_name = $request->gender_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_genders($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Gender::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Gender has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function religions()
    {
        $usertype = Auth::user()->usertype;

        $data = Religion::all();

        if ($usertype == '1') {

            return view("ADMIN.religions", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_religions(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new Religion;


            $data->religion_name = $request->religion_name;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a Religion      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_religions($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Religion::find($id);
            return view("ADMIN.edit_religions", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_religions(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Religion::find($id);

            $data->religion_name = $request->religion_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_religions($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Religion::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Gender has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function staff_categories()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = TeachingOrNonTeaching::all();
            // dd($data);

            return view("ADMIN.staff_categories", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_staff_categories(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new TeachingOrNonTeaching;


            $data->teaching_or_non_teaching = $request->category_name;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added Staff Category        ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_staff_categories($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = TeachingOrNonTeaching::find($id);
            return view("ADMIN.edit_staff_categories", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_staff_categories(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = TeachingOrNonTeaching::find($id);

            $data->teaching_or_non_teaching = $request->category_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_staff_categories($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = TeachingOrNonTeaching::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Category has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function staff_roles()
    {
        $usertype = Auth::user()->usertype;

        $data = StaffRoles::all();

        if ($usertype == '1') {

            return view("ADMIN.staff_roles", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_staff_roles(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new StaffRoles;


            $data->staff_roles = $request->role_name;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added Staff Role        ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_staff_roles($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = StaffRoles::find($id);
            return view("ADMIN.edit_staff_roles", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_staff_roles(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = StaffRoles::find($id);

            $data->staff_roles = $request->role_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_staff_roles($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = StaffRoles::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Staff Role has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function add_staffs()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data1 = MaritalStatus::all();
            $data2 = Religion::all();
            $data3 = HighestEducation::all();
            $data4 = ShouldWeContactThem::all();
            $data5 = TeachingExperience::all();
            $data6 = computerExperience::all();
            $data7 = MilitaryForce::all();
            $data8 = GovernmentOfficial::all();
            $data9 = MedicalConditions::all();
            $data10 = StaffRoles::all();
            $data11 = TeachingOrNonTeaching::all();
            $acad = AcademicSession::where('status', '=', '1')->get();

            return view("ADMIN.add_staffs", compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9', 'data10', 'data11', 'acad'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function add_students()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data1 = MaritalStatus::all();
            $data2 = Religion::all();
            $data3 = MilitaryForce::all();
            $data4 = GovernmentOfficial::all();
            $data5 = MedicalConditions::all();
            $data6 = Departments::all();
            $acad = AcademicSession::where('status', '=', '1')->get();
            $level = Level::where('id', '=', '1')->get();
            $cert_courses = Courses::where('programme_type', '=', '2')->get();
            // dd($cert_courses);




            return view("ADMIN.add_students",  compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'acad', 'level', 'cert_courses'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function upload_students(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {



            $data = new User;

            $data->first_name = $request->first_name;

            $data->last_name = $request->surname;

            $data->other_names = $request->other_names;

            $data->email = $request->email;

            $data->phone = $request->phone_number;

            $data->password = Hash::make($request->password);

            $data->reg_complete = '1';



            $data->save();



            $data2 = new StudentsDetails;

            $data2->marital_status = $request->marital_status;

            $data2->date_of_birth = $request->date_of_birth;

            $data2->zip_code = $request->zip_code;

            $data2->gender = $request->gender;

            $data2->religion = $request->religion;

            $data2->student_password = $request->password;


            $image = $request->student_image;

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->student_image->move('StudentImages', $imagename);

            $data2->student_image = $imagename;


            $data2->country = $request->countries;

            $data2->state = $request->states;

            $data2->city = $request->cities;

            $data2->address = $request->address;

            $data2->facebook_page = $request->facebook_page;

            $data2->twitter_page = $request->twitter_page;

            $data2->instagram_page = $request->instagram_page;

            $data2->linkedin_page = $request->linkedin_page;


            $data2->currently_studying = $request->currently_studying;

            if ($data2->currently_studying == 'Yes') {

                $data2->name_of_current_institution = $request->name_of_current_institution;

                $data2->major = $request->major;

                $data2->years_of_study = $request->years_of_study;
            } else {

                $data2->name_of_current_institution = 'null';

                $data2->major = 'null';

                $data2->years_of_study = 'null';
            }


            $data2->online_classes = $request->online_classes;

            if ($data2->online_classes == 'Yes') {

                $data2->how_long_for_online_classes = $request->how_long_for_online_classes;
            } else {

                $data2->how_long_for_online_classes = 'null';
            }



            // $data2->what_do_you_want_to_study = $request->what_do_you_want_to_study;

            $data2->type_of_enrollment = $request->type_of_enrollment;

            $data2->enrollment_period = $request->enrollment_period;

            $data2->free_time = $request->free_time;

            $data2->residential_home = $request->residential_home;


            $data2->group_of_individual_or_organization = $request->group_of_individual_or_organization;

            if ($data2->group_of_individual_or_organization == 'Yes') {

                $data2->name_them = $request->name_them;
                // } else {

            } else {

                $data2->name_them = 'null';
            }


            $data2->languages = $request->languages;

            $data2->military_force = $request->military_force;

            $data2->government_official = $request->government_official;

            $data2->medical_conditions = $request->medical_conditions;

            $data2->academic_session = $request->academic_session;

            $data2->programme_type = $request->programme_type;

            if ($data2->programme_type == '1') {

                $data2->level = $request->level;

                $data2->faculty = $request->faculty;

                $data2->department = $request->department;

                $data2->name_of_certificate_course = 'null';
            } elseif ($data2->programme_type == '2') {

                $data2->level = 'null';

                $data2->faculty = 'null';

                $data2->department = 'null';

                $data2->name_of_certificate_course = $request->name_of_certificate_course;
            }


            $get_student_id = $data->id;

            $data2->student_id = $get_student_id;


            $data2->save();


            return redirect()->back()->with('success_message', 'You have successfully added a Student     ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }











    public function view_staffs()
    {
        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {


            return view("ADMIN.view_staffs");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function view_students()
    {

        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {


            $data = DB::table('users')->join('students_details', 'users.id', '=', 'students_details.student_id')->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')->select('users.id as id', 'users.first_name', 'users.last_name', 'students_details.student_image', 'users.email', 'users.phone', 'students_details.gender', 'programme_types.programme', 'students_details.date_of_birth', 'students_details.student_password', 'students_details.student_matric_number')->get();


            // dd($data);


            return view("ADMIN.view_students", compact('data'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function view_diploma_students()
    {

        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {


            $data = DB::table('users')->join('students_details', 'users.id', '=', 'students_details.student_id')->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')->select('users.id as id', 'users.first_name', 'users.last_name', 'students_details.student_image', 'users.email', 'users.phone', 'students_details.gender', 'programme_types.programme', 'students_details.date_of_birth', 'students_details.student_password', 'students_details.student_matric_number')->where('programme_type', '1')->get();


            // dd($data);


            return view("ADMIN.view_diploma_students", compact('data'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function view_certificate_students()
    {

        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {


            $data = DB::table('users')->join('students_details', 'users.id', '=', 'students_details.student_id')->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')->select('users.id as id', 'users.first_name', 'users.last_name', 'students_details.student_image', 'users.email', 'users.phone', 'students_details.gender', 'programme_types.programme', 'students_details.date_of_birth', 'students_details.student_password', 'students_details.student_matric_number')->where('programme_type', '2')->get();


            // dd($data);


            return view("ADMIN.view_certificate_students", compact('data'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function medical_conditions()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.medical_conditions");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function upload_medical_conditions(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = new MedicalConditions;


            $data->medical_conditions = $request->medical_conditions;


            $data->save();

            return redirect()->back()->with('success_message', 'Answer was added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function marital_status()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.marital_status");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function upload_marital_status(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = new MaritalStatus;


            $data->status = $request->marital_status;


            $data->save();

            return redirect()->back()->with('success_message', 'Answer was added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function should_we_contact_them()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.should_we_contact_them");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function upload_should_we_contact_them(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = new ShouldWeContactThem;


            $data->should_we_contact_them = $request->should_we_contact_them;


            $data->save();

            return redirect()->back()->with('success_message', 'Answer was added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function teaching_experience()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.teaching_experience");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }











    public function upload_teaching_experience(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = new TeachingExperience;


            $data->teaching_experience = $request->teaching_experience;


            $data->save();

            return redirect()->back()->with('success_message', 'Answer was added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function computer_experience()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.computer_experience");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function upload_computer_experience(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = new ComputerExperience;


            $data->computer_experience = $request->computer_experience;


            $data->save();

            return redirect()->back()->with('success_message', 'Answer was added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function military_force()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.military_force");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function upload_military_force(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = new MilitaryForce;


            $data->military_force = $request->military_force;


            $data->save();

            return redirect()->back()->with('success_message', 'Answer was added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function government_official()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.government_official");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function upload_government_official(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = new GovernmentOfficial;


            $data->government_official = $request->government_official;


            $data->save();

            return redirect()->back()->with('success_message', 'Answer was added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function highest_education()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.highest_education");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function upload_highest_education(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = new HighestEducation;


            $data->highest_education = $request->highest_education;


            $data->save();

            return redirect()->back()->with('success_message', 'Answer was added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function upload_staffs(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {



            $data = new User;

            $data->first_name = $request->first_name;

            $data->last_name = $request->surname;

            $data->other_names = $request->other_names;

            $data->email = $request->email;

            $data->phone = $request->phone_number;

            $data->usertype = "2";

            $data->password = Hash::make($request->password);

            // $get_staff_id = ;

            $data->save();



            $data2 = new StaffDetails;

            $data2->marital_status = $request->marital_status;

            $data2->date_of_birth = $request->date_of_birth;

            $data2->zip_code = $request->zip_code;

            $data2->gender = $request->gender;

            $data2->religion = $request->religion;

            $data2->staff_password = $request->password;


            $image = $request->staff_image;

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->staff_image->move('StaffImages', $imagename);

            $data2->staff_image = $imagename;


            $data2->country = $request->countries;

            $data2->state = $request->states;

            $data2->city = $request->cities;

            $data2->address = $request->address;

            $data2->facebook_page = $request->facebook_page;

            $data2->twitter_page = $request->twitter_page;

            $data2->instagram_page = $request->instagram_page;

            $data2->linkedin_page = $request->linkedin_page;

            $data2->highest_education = $request->highest_education;

            $data2->name_of_highest_education = $request->name_of_highest_education;

            $data2->elementary_school = $request->elementary_school;

            $data2->elementary_school_year = $request->elementary_school_year;

            $data2->secondary_school = $request->secondary_school;

            $data2->secondary_school_year = $request->secondary_school_year;

            $data2->higher_institution = $request->higher_institution;

            $data2->higher_institution_year = $request->higher_institution_year;

            $data2->currently_employed = $request->currently_employed;

            $data2->looking_for_employment = $request->looking_for_employment;

            $data2->name_of_previous_employer = $request->name_of_previous_employer;

            $data2->job_start_end = $request->job_start_end;

            $data2->reasons_for_living = $request->reasons_for_living;

            $data2->employer_contact = $request->employer_contact;

            $data2->should_we_contact_them = $request->should_we_contact_them;

            $data2->teaching_experience = $request->teaching_experience;

            $data2->years_of_teaching_experience = $request->years_of_teaching_experience;

            $data2->computer_operating_experience = $request->computer_operating_experience;

            $data2->years_of_computer_experience = $request->years_of_computer_experience;

            $data2->guarantor_name = $request->guarantor_name;

            $data2->guarantor_email = $request->guarantor_email;

            $data2->guarantor_phone = $request->guarantor_phone;

            $data2->package_one = $request->package_one;

            $data2->package_two = $request->package_two;

            $data2->package_three = $request->package_three;

            $data2->package_four = $request->package_four;

            $data2->free_time = $request->free_time;

            $data2->residential_home = $request->residential_home;

            $data2->group_of_individual_or_organization = $request->group_of_individual_or_organization;

            $data2->name_them = $request->name_them;

            $data2->languages = $request->languages;

            $data2->military_force = $request->military_force;

            $data2->government_official = $request->government_official;

            $data2->medical_conditions = $request->medical_conditions;

            $data2->staff_role = $request->staff_role;

            $data2->teaching_or_nonteaching = $request->teaching_or_nonteaching;

            $data2->academic_session = $request->academic_session;

            $file = $request->staff_cv;

            if (empty($request->staff_cv)) {
                ////////////
            } else {
                $filename = time() . '.' . $file->getClientOriginalExtension();

                $request->staff_cv->move('staffcv', $filename);

                $data2->staff_cv = $filename;
            }


            $data2->account_number = $request->account_number;

            $data2->account_holder_name = $request->account_holder_name;

            $data2->bank_name = $request->bank_name;

            $data2->branch = $request->branch;



            $get_staff_id = $data->id;

            $data2->staff_id = $get_staff_id;


            $data2->save();


            return redirect()->back()->with('success_message', 'You have successfully added a Teacher     ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function getStates(Request $request)
    {
        $states = States::whereCountryId($request->country_id)->orderBy('name_state')->get();
        return $states;
    }




    public function getCities(Request $request)
    {
        $cities = Cities::whereStateId($request->state_id)->orderBy('name_city')->get();
        return $cities;
    }











    public function view_all_staffs()
    {

        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {


            $data = DB::table('users')->join('staff_details', 'users.id', '=', 'staff_details.staff_id')->join('staff_roles', 'staff_details.staff_role', '=', 'staff_roles.id')->select('users.id as id', 'users.first_name', 'users.last_name', 'staff_details.staff_image', 'users.email', 'users.phone', 'staff_details.gender', 'staff_roles.staff_roles', 'staff_details.date_of_birth', 'staff_details.staff_password')->get();

            // dd($data);



            return view("ADMIN.view_all_staffs", compact('data'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }












    public function view_staffs_profile($id)
    {


        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {


            $data = User::where('users.id', $id)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
                ->join('marital_statuses', 'staff_details.marital_status', '=', 'marital_statuses.id')
                ->join('religions', 'staff_details.religion', '=', 'religions.id')
                ->join('countries', 'staff_details.country', '=', 'countries.id')->join('states', 'staff_details.state', '=', 'states.id')
                ->join('cities', 'staff_details.city', '=', 'cities.id')
                ->join('highest_education', 'staff_details.highest_education', '=', 'highest_education.id')
                ->join('should_we_contact_thems', 'staff_details.should_we_contact_them', '=', 'should_we_contact_thems.id')
                ->join('teaching_experiences', 'staff_details.teaching_experience', '=', 'teaching_experiences.id')
                ->join('computer_experiences', 'staff_details.computer_operating_experience', '=', 'computer_experiences.id')
                ->join('military_forces', 'staff_details.military_force', '=', 'military_forces.id')
                ->join('government_officials', 'staff_details.government_official', '=', 'government_officials.id')
                ->join('medical_conditions', 'staff_details.medical_conditions', '=', 'medical_conditions.id')
                ->join('staff_roles', 'staff_details.staff_role', '=', 'staff_roles.id')
                ->join('teaching_or_non_teachings', 'staff_details.teaching_or_nonteaching', '=', 'teaching_or_non_teachings.id')

                ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', 'staff_details.staff_cv as file', 'staff_details.facebook_page', 'staff_details.twitter_page', 'staff_details.instagram_page', 'staff_details.linkedin_page')->first();

            // dd($data);


            // $data2 =


            return view("ADMIN.view_staffs_profile", compact("data"));
        } else {

            //   }else{

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function edit_staffs($id)
    {



        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {

            $data = User::where('users.id', $id)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
                ->join('marital_statuses', 'staff_details.marital_status', '=', 'marital_statuses.id')
                ->join('religions', 'staff_details.religion', '=', 'religions.id')
                ->join('countries', 'staff_details.country', '=', 'countries.id')->join('states', 'staff_details.state', '=', 'states.id')
                ->join('cities', 'staff_details.city', '=', 'cities.id')
                ->join('highest_education', 'staff_details.highest_education', '=', 'highest_education.id')
                ->join('should_we_contact_thems', 'staff_details.should_we_contact_them', '=', 'should_we_contact_thems.id')
                ->join('teaching_experiences', 'staff_details.teaching_experience', '=', 'teaching_experiences.id')
                ->join('computer_experiences', 'staff_details.computer_operating_experience', '=', 'computer_experiences.id')
                ->join('military_forces', 'staff_details.military_force', '=', 'military_forces.id')
                ->join('government_officials', 'staff_details.government_official', '=', 'government_officials.id')
                ->join('medical_conditions', 'staff_details.medical_conditions', '=', 'medical_conditions.id')
                ->join('staff_roles', 'staff_details.staff_role', '=', 'staff_roles.id')
                ->join('teaching_or_non_teachings', 'staff_details.teaching_or_nonteaching', '=', 'teaching_or_non_teachings.id')

                ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions',)->first();

            $data1 = MaritalStatus::all();
            $data2 = Religion::all();
            $data3 = HighestEducation::all();
            $data4 = ShouldWeContactThem::all();
            $data5 = TeachingExperience::all();
            $data6 = computerExperience::all();
            $data7 = MilitaryForce::all();
            $data8 = GovernmentOfficial::all();
            $data9 = MedicalConditions::all();
            $data10 = StaffRoles::all();
            $data11 = TeachingOrNonTeaching::all();
            $acad = AcademicSession::where('status', '=', '1')->get();

            return view("ADMIN.edit_staffs", compact('data', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9', 'data10', 'data11', 'acad'));
        } else {

            //   }else{

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }












    public function update_staffs(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {



            $data = User::find($id);


            $data->first_name = $request->first_name;

            $data->last_name = $request->surname;

            $data->other_names = $request->other_names;

            $data->email = $request->email;

            $data->phone = $request->phone_number;

            $data->password = Hash::make($request->password);



            $data->save();




            $data2 = StaffDetails::where('staff_id', $id)->first();

            $data2->marital_status = $request->marital_status;

            $data2->date_of_birth = $request->date_of_birth;

            $data2->zip_code = $request->zip_code;

            $data2->gender = $request->gender;

            $data2->religion = $request->religion;

            $data2->staff_password = $request->password;



            $image = $request->staff_image;

            if ($image) {

                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->staff_image->move('StaffImages', $imagename);

                $data2->staff_image = $imagename;
            }




            $data2->country = $request->countries;

            $data2->state = $request->states;

            $data2->city = $request->cities;

            $data2->address = $request->address;

            $data2->highest_education = $request->highest_education;

            $data2->name_of_highest_education = $request->name_of_highest_education;

            $data2->elementary_school = $request->elementary_school;

            $data2->elementary_school_year = $request->elementary_school_year;

            $data2->secondary_school = $request->secondary_school;

            $data2->secondary_school_year = $request->secondary_school_year;

            $data2->higher_institution = $request->higher_institution;

            $data2->higher_institution_year = $request->higher_institution_year;

            $data2->currently_employed = $request->currently_employed;

            $data2->looking_for_employment = $request->looking_for_employment;

            $data2->name_of_previous_employer = $request->name_of_previous_employer;

            $data2->job_start_end = $request->job_start_end;

            $data2->reasons_for_living = $request->reasons_for_living;

            $data2->employer_contact = $request->employer_contact;

            $data2->should_we_contact_them = $request->should_we_contact_them;

            $data2->teaching_experience = $request->teaching_experience;

            $data2->years_of_teaching_experience = $request->years_of_teaching_experience;

            $data2->computer_operating_experience = $request->computer_operating_experience;

            $data2->years_of_computer_experience = $request->years_of_computer_experience;

            $data2->guarantor_name = $request->guarantor_name;

            $data2->guarantor_email = $request->guarantor_email;

            $data2->guarantor_phone = $request->guarantor_phone;

            $data2->package_one = $request->package_one;

            $data2->package_two = $request->package_two;

            $data2->package_three = $request->package_three;

            $data2->package_four = $request->package_four;

            $data2->free_time = $request->free_time;

            $data2->residential_home = $request->residential_home;

            $data2->group_of_individual_or_organization = $request->group_of_individual_or_organization;

            $data2->name_them = $request->name_them;

            $data2->languages = $request->languages;

            $data2->military_force = $request->military_force;

            $data2->government_official = $request->government_official;

            $data2->medical_conditions = $request->medical_conditions;

            $data2->staff_role = $request->staff_role;

            $data2->teaching_or_nonteaching = $request->teaching_or_nonteaching;


            $get_staff_id = $data->id;

            $data2->staff_id = $get_staff_id;


            $data2->save();


            return redirect()->back()->with('success_message', 'Changes made successfully     ');
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function delete_staffs($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = User::find($id);

            $data2 = StaffDetails::where('staff_id', $id)->first();

            $data->delete();

            $data2->delete();

            return redirect()->back()->with("success_message", "Staff has been deleted   :)");
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_students($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = User::find($id);

            $data2 = StudentsDetails::where('student_id', $id)->first();

            $data->delete();

            $data2->delete();

            return redirect()->back()->with("success_message", "Student has been deleted   :)");
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }














    public function view_teaching_staffs()
    {

        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {





            $data = TeachingOrNonTeaching::where('teaching_or_non_teaching', 'Teaching Staff')->join('staff_details', 'teaching_or_non_teachings.id', '=', 'staff_details.teaching_or_nonteaching')->join('users', 'users.id', '=', 'staff_details.staff_id')->join('staff_roles', 'staff_details.staff_role', '=', 'staff_roles.id')->select('users.id as id', 'users.first_name', 'users.last_name', 'staff_details.staff_image', 'users.email', 'users.phone', 'staff_details.gender', 'staff_roles.staff_roles', 'staff_details.date_of_birth', 'staff_details.staff_password')->get();


            // dd($data);



            return view("ADMIN.view_teaching_staffs", compact('data'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }












    public function view_non_teaching_staffs()
    {

        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {





            $data = TeachingOrNonTeaching::where('teaching_or_non_teaching', 'Non-Teaching Staff')->join('staff_details', 'teaching_or_non_teachings.id', '=', 'staff_details.teaching_or_nonteaching')->join('users', 'users.id', '=', 'staff_details.staff_id')->join('staff_roles', 'staff_details.staff_role', '=', 'staff_roles.id')->select('users.id as id', 'users.first_name', 'users.last_name', 'staff_details.staff_image', 'users.email', 'users.phone', 'staff_details.gender', 'staff_roles.staff_roles', 'staff_details.date_of_birth', 'staff_details.staff_password')->get();


            // dd($data);



            return view("ADMIN.view_non_teaching_staffs", compact('data'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }
















    public function view_students_profile($id)
    {


        $usertype = Auth::user()->usertype;



        if ($usertype == '1') {


            $data = User::where('users.id', $id)->join('students_details', 'users.id', '=', 'students_details.student_id')
                ->join('countries', 'students_details.country', '=', 'countries.id')
                ->join('states', 'students_details.state', '=', 'states.id')
                ->join('cities', 'students_details.city', '=', 'cities.id')
                ->join('academic_sessions', 'students_details.academic_session', '=', 'academic_sessions.id')
                ->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')
                // ->join('levels', 'students_details.level', '=', 'levels.id')
                ->join('faculties', 'students_details.faculty', '=', 'faculties.id')
                ->join('departments', 'students_details.department', '=', 'departments.id')
                // ->join('courses', 'students_details.name_of_certificate_course', '=', 'courses.id')




                ->select('users.id as id', 'users.*', 'students_details.*',  'countries.name_country', 'states.name_state', 'cities.name_city', 'programme_types.programme', 'academic_sessions.academic_session', 'departments.department_name as department', 'faculties.faculty_name as faculty')->first();


            // dd($data);


            return view("ADMIN.view_students_profile", compact("data"));
        } else {

            //   }else{

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }












    public function edit_students($id)
    {

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            $data = User::where('users.id', $id)
            ->join('students_details', 'users.id', '=', 'students_details.student_id')
                ->join('countries', 'students_details.country', '=', 'countries.id')
                ->join('states', 'students_details.state', '=', 'states.id')
                ->join('cities', 'students_details.city', '=', 'cities.id')

                ->select('users.id as id',
                'users.*' ,
                'students_details.*'
                ,'countries.name_country', 
                'states.name_state', 
                'cities.name_city'
                )->first();


            $data1 = MaritalStatus::all();
            $data2 = Religion::all();
            $data3 = MilitaryForce::all();
            $data4 = GovernmentOfficial::all();
            $data5 = MedicalConditions::all();
            $data6 = Departments::all();
            $acad = AcademicSession::where('status', '=', '1')->get();
            $level = Level::where('id', '=', '1')->get();
            $cert_courses = Courses::where('programme_type', '=', '2')->get();



            return view("ADMIN.edit_students", compact("data", 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'acad', 'level', 'cert_courses'));
        } else {

            //   }else{

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }
















    public function update_students(Request $request, $id)
    {
            return back()->with('error_message', 'Currently under maintenance');

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {



            $data =  User::find($id);

            $data->first_name = $request->first_name;

            $data->last_name = $request->surname;

            $data->other_names = $request->other_names;

            $data->email = $request->email;

            $data->phone = $request->phone_number;

            $data->password = Hash::make($request->password);



            $data->save();




            $data2 = StudentsDetails::where('student_id', $id)->first();

            $data2->marital_status = $request->marital_status;

            $data2->date_of_birth = $request->date_of_birth;

            $data2->zip_code = $request->zip_code;

            $data2->gender = $request->gender;

            $data2->religion = $request->religion;

            $data2->student_password = $request->password;



            $image = $request->student_image;

            if ($image) {

                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->staff_image->move('StudentImages', $imagename);

                $data2->student_image = $imagename;
            }



            $data2->country = $request->countries;

            $data2->state = $request->states;

            $data2->city = $request->cities;

            $data2->address = $request->address;


            $data2->currently_studying = $request->currently_studying;

            if ($data2->currently_studying == 'Yes') {

                $data2->name_of_current_institution = $request->name_of_current_institution;

                $data2->major = $request->major;

                $data2->years_of_study = $request->years_of_study;
            } else {

                $data2->name_of_current_institution = 'null';

                $data2->major = 'null';

                $data2->years_of_study = 'null';
            }


            $data2->online_classes = $request->online_classes;

            if ($data2->online_classes == 'Yes') {

                $data2->how_long_for_online_classes = $request->how_long_for_online_classes;
            } else {

                $data2->how_long_for_online_classes = 'null';
            }



            //$data2->what_do_you_want_to_study = $request->what_do_you_want_to_study;

            $data2->type_of_enrollment = $request->type_of_enrollment;

            $data2->enrollment_period = $request->enrollment_period;

            $data2->free_time = $request->free_time;

            $data2->residential_home = $request->residential_home;


            $data2->group_of_individual_or_organization = $request->group_of_individual_or_organization;

            if ($data2->group_of_individual_or_organization == 'Yes') {

                $data2->name_them = $request->name_them;
            } else {

                $data2->name_them = 'null';
            }


            $data2->languages = $request->languages;

            $data2->military_force = $request->military_force;

            $data2->government_official = $request->government_official;

            $data2->medical_conditions = $request->medical_conditions;

            $data2->academic_session = $request->academic_session;

            $data2->programme_type = $request->programme_type;

            if ($data2->programme_type == '1') {

                $data2->level = $request->level;

                $data2->faculty = $request->faculty;

                $data2->department = $request->department;

                $data2->name_of_certificate_course = 'null';
            } elseif ($data2->programme_type == '2') {

                $data2->level = 'null';

                $data2->faculty = 'null';

                $data2->department = 'null';

                $data2->name_of_certificate_course = $request->name_of_certificate_course;
            }


            $get_student_id = $data->id;

            $data2->student_id = $get_student_id;


            $data2->save();


            return redirect()->back()->with('success_message', 'Changes made successfully     ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function display_diploma_students_according_to_departments(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $faculty = $request->faculty_id;
            $department = $request->department_id;

            // faculty_id and department_id are the name of the inputs(dropdowns)

            $getDepartment = Departments::find($department);

            if ($faculty && $department == '') {

                // return view('ADMIN.view_diploma_courses');
                return redirect()->back();
            } else {




                $data = StudentsDetails::where('department', 'Like', '%' . $department . '%')->join('users', 'students_details.student_id', '=', 'users.id')->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')->get();




                // dd($data);

                return view('ADMIN.display_diploma_students_according_to_departments', compact('data', 'department', 'getDepartment'));
            }
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }














    public function academic_session()
    {
        $usertype = Auth::user()->usertype;

        $data = AcademicSession::all();

        if ($usertype == '1') {

            return view("ADMIN.academic_session", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function upload_academic_session(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new AcademicSession;


            $data->academic_session = $request->academic_session;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a Session      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function edit_academic_session($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = AcademicSession::find($id);
            return view("ADMIN.edit_academic_session", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_academic_session(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = AcademicSession::find($id);

            $data->academic_session = $request->academic_session;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_academic_session($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = AcademicSession::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Academic Session has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function open_academic_session($id)
    {

        $data = AcademicSession::find($id);

        $data->status = '1';

        $data->save();

        // $data2 = AcademicSession::where('id', '!=', $id)->get;
        // $data2->status = '0';
        // $data2->save();

        DB::table('academic_sessions')->where('id', '!=', $id)->update(['status' => '0',]);

        return redirect()->back()->with('success_message', 'This Academic Session is now opened ');
    }







    public function close_academic_session($id)
    {

        $data = AcademicSession::find($id);

        $data->status = '0';

        $data->save();

        return redirect()->back()->with('success_message', 'This Academic Session is now closed ');
    }


















    public function level()
    {
        $usertype = Auth::user()->usertype;

        $data = Level::all();
        $data = DB::table('levels')->join('programme_types', 'levels.programme_type', '=', 'programme_types.id')->select('levels.id as id', 'programme_types.programme', 'levels.level_name')->get();
        $prog_type = ProgrammeType::all();

        if ($usertype == '1') {

            return view("ADMIN.level", compact('data', 'prog_type'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_level(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new Level;

            $data->programme_type = $request->programme_type;
            $data->level_name = $request->level_name;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a Level      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_level($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $prog_type = ProgrammeType::all();
            $data = Level::find($id);
            return view("ADMIN.edit_level", compact("data", "prog_type"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_level(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Level::find($id);



            $data->programme_type = $request->programme_type;

            $data->level_name = $request->level_name;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_level($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Level::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Level has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }













    public function attendance_response()
    {
        $usertype = Auth::user()->usertype;

        $data = AttendanceResponse::all();

        if ($usertype == '1') {

            return view("ADMIN.attendance_response", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function upload_attendance_response(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new AttendanceResponse;


            $data->response = $request->response;


            $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added a response      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function edit_attendance_response($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = AttendanceResponse::find($id);
            return view("ADMIN.edit_attendance_response", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function update_attendance_response(request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = AttendanceResponse::find($id);

            $data->response = $request->response;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_attendance_response($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = AttendanceResponse::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Response has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }















    public function general_settings()
    {
        return view('ADMIN.general_settings');
    }






    public function events()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = Events::all();


            return view("ADMIN.events", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function upload_events(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new Events;


            $data->title = $request->event_title;
            $data->content = $request->event_content;
            $data->date = $request->event_date;

            $data->save();

            return redirect()->back()->with('success_message', 'Event added successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function students_circular()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = StudentsCircular::all();


            return view("ADMIN.students_circular", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function upload_students_circular(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new StudentsCircular;


            $circular->users()->attach($user);

            $data->title = $request->title;
            $data->content = $request->content;

            $data->save();

            return redirect()->back()->with('success_message', 'Circular has been uploaded successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function staff_circular()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = StaffCircular::all();


            return view("ADMIN.staff_circular", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function upload_staff_circular(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = new StaffCircular;

            $circular->users()->attach($user);

            $data->title = $request->title;
            $data->content = $request->content;


            $data->save();

            return redirect()->back()->with('success_message', 'Circular has been uploaded successfully      ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function delete_events($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = Events::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Event has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function delete_staff_circular($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = StaffCircular::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Circular has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function delete_students_circular($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            $data = StudentsCircular::find($id);
            $data->delete();
            return redirect()->back()->with("success_message", "Circular has been deleted   :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function download_staff_cv(Request $request, $file)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('staffcv/' . $file));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function view_staff_cv($id)
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = StaffDetails::where('staff_id', $id)->first();


            // dd($data);
            return view("ADMIN.view_staff_cv", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function teachers_to_courses()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data6 = Departments::all();
            // $acad = AcademicSession::where('status', '=', '1')->get();
            $level = Level::all();
            $cert_courses = Courses::where('programme_type', '=', '2')->get();

            //$data = StaffDetails::where('teaching_or_nonteaching', '=', 1);4
            $data = StaffDetails::where('teaching_or_nonteaching', '=', 1)->join('users', 'staff_details.staff_id', '=', 'users.id')->get();

            // dd($data);

            return view("ADMIN.teachers_to_courses", compact('data', 'data6', 'level', 'cert_courses',));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function assign_teachers_to_courses(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data2 = new TeachersToCourses;

            $data = StaffDetails::where('teaching_or_nonteaching', '=', 1)->join('users', 'staff_details.staff_id', '=', 'users.id')->select('users.id as id')->get();

            // dd($data->id);

            $data2->teacher_id = $request->teacher_id;

            $data2->programme_type = $request->programme_type;

            if ($data2->programme_type == '1') {

                $data2->level = $request->level;

                $data2->faculty = $request->faculty;

                $data2->department = $request->department;

                $data2->course = $request->course;
            } elseif ($data2->programme_type == '2') {


                $data2->name_of_certificate_course = $request->name_of_certificate_course;
            }

            $data2->save();

            return redirect()->back()->with('success_message', 'You have successfully assigned a Teacher to a Course');
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function admin_view_course_profile($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $join = DB::table('courses')->join('faculties', 'courses.faculty_id', '=', 'faculties.id')

                ->join('departments', 'courses.department_id', '=', 'departments.id')

                ->join('semesters', 'courses.semester', '=', 'semesters.id')

                ->join('courses_statuses', 'courses.course_status', '=', 'courses_statuses.id')

                ->join('programme_types', 'courses.programme_type', '=', 'programme_types.id')

                ->join('levels', 'courses.level', '=', 'levels.id')


                ->select('courses.id as id', 'faculties.faculty_name', 'departments.department_name', 'courses.course_code', 'courses.course_title', 'courses.course_description', 'courses_statuses.status', 'courses.course_unit', 'courses.image', 'semesters.semester_name', 'levels.level_name')->where('programme_type', '=', '1')->where('courses.id', '=', $id)->first();


            //  dd($join);

            return view("ADMIN.admin_view_course_profile", compact('join'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }






    public function students_olevel()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = DB::table('users')->join('applicants_old_results', 'users.id', '=', 'applicants_old_results.student_id')
                ->select(
                    'users.id as id',
                    'users.first_name',
                    'users.last_name',
                    'users.phone',
                    'users.email',
                    'applicants_old_results.utme',
                    'applicants_old_results.waec_or_neco_1',
                    'applicants_old_results.waec_or_neco_2',
                    'applicants_old_results.original_certificate',
                    'applicants_old_results.birth_certificate',
                    'applicants_old_results.valid_form_of_id',
                    'applicants_old_results.letter_of_sponsorship',
                    'applicants_old_results.passport',
                )->get();

            // $aaa = ApplicantsOldResults::where('student_id', '=', $data->id)->select('applicants_old_results.utme as utme', 'applicants_old_results.waec_or_neco_1 as waco1', 'applicants_old_results.waec_or_neco_2 as waco2')->first();



            // $abc = DB::table('applicants_old_results')->join('users', 'applicants_old_results.student_id', '=', 'users.id')->select('users.id as id', 'applicants_old_results.utme as utme', 'applicants_old_results.waec_or_neco_1 as waco1', 'applicants_old_results.waec_or_neco_2 as waco2')->first();

            // $olevel_data = ApplicantsOldResults::where('student_id', '=', $getCurrentUserId)->select('applicants_old_results.utme as utme', 'applicants_old_results.waec_or_neco_1 as waco1', 'applicants_old_results.waec_or_neco_2 as waco2')->first();

            // dd($data);



            return view("ADMIN.students_olevel", compact('data'));

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }








    public function admin_approve_students_olevel($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $data = ApplicantsOldResults::where('student_id', '=', $id)->first();

            $data->status = '1';

            $data->reason = '';

            $data->save();

            return redirect()->back()->with("success_message", "Student's results have been approved :)");
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function admin_disapprove_students_olevel(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;

        $currentUser = Auth::user()->id;


        if ($usertype == '1') {


            $data = ApplicantsOldResults::where('student_id', '=', $id)->first();

            $action = ApplicantsOldResults::where('student_id', $request->result_id)->update(['reason' => '']);

            // $userResultStatus = User::where('id', $currentUser)->updas('')

            $data->status = '0';


            $data->save();

            return redirect()->back()->with("success_message", "Student's results have been rejected. Please give reasons for this by clicking the reason icon on the Student's row :)");
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function upload_reason(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $xyz = $request->reason;


            $action = ApplicantsOldResults::where('student_id', $request->students_doc)->update(['reason' => $xyz]);

            // dd($xyz);

            if ($action) {

                return redirect()->back()->with("success_message", "Reasons added successfully :)");
            } else {
                return redirect()->back()->with("error_message", "Failed :)");
            }






            // $data = new ApplicantsOldResults;

            // $data->reason = $request->reason;

            // $data->save();




        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function admin_view_student_utme($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ApplicantsOldResults::where('student_id', $id)->first();


            // dd($data);

            return view("ADMIN.admin_view_student_utme", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function admin_view_student_waco1($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ApplicantsOldResults::where('student_id', $id)->first();


            // dd($data);

            return view("ADMIN.admin_view_student_waco1", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }










    public function admin_view_student_waco2($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ApplicantsOldResults::where('student_id', $id)->first();


            // dd($data);

            return view("ADMIN.admin_view_student_waco2", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_view_student_original_cert($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ApplicantsOldResults::where('student_id', $id)->first();


            // dd($data);

            return view("ADMIN.admin_view_student_original_cert", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }




    public function admin_view_student_birth_cert($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ApplicantsOldResults::where('student_id', $id)->first();


            // dd($data);

            return view("ADMIN.admin_view_student_birth_cert", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_view_student_valid_id($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ApplicantsOldResults::where('student_id', $id)->first();


            // dd($data);

            return view("ADMIN.admin_view_student_valid_id", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_view_student_sponsorship_letter($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ApplicantsOldResults::where('student_id', $id)->first();


            // dd($data);

            return view("ADMIN.admin_view_student_sponsorship_letter", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_view_student_passport($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = ApplicantsOldResults::where('student_id', $id)->first();


            // dd($data);

            return view("ADMIN.admin_view_student_passport", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function admin_download_student_utme(Request $request, $utme)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('students_utme/' . $utme));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function admin_download_student_waco1(Request $request, $waec_or_neco_1)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('students_waec_or_neco_1/' . $waec_or_neco_1));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function admin_download_student_waco2(Request $request, $waec_or_neco_2)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('students_waec_or_neco_2/' . $waec_or_neco_2));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_download_student_original_cert(Request $request, $original_certificate)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('students_original_certificate/' . $original_certificate));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_download_student_birth_cert(Request $request, $birth_certificate)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('students_birth_certificate/' . $birth_certificate));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_download_student_valid_id(Request $request, $valid_form_of_id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('students_valid_form_of_id/' . $valid_form_of_id));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_download_student_sponsorship_letter(Request $request, $letter_of_sponsorship)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('students_letter_of_sponsorship/' . $letter_of_sponsorship));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }



    public function admin_download_student_passport(Request $request, $passport)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return response()->download(public_path('students_passport/' . $passport));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function upload_course_reg()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $prog_type = ProgrammeType::all();
            $level = Level::all();
            $semester = Semesters::all();
            $departments = Departments::all();

            return view("ADMIN.upload_course_reg", compact('prog_type', 'level', 'semester', 'departments'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function course_reg_according_to_departments(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $prog_type = $request->prog_type;
            $department = $request->department;
            $level = $request->level;
            $semester = $request->semester;

            $getDepartment = Departments::find($department);
            $getLevel = Level::find($level);

            $data = Courses::where('semester', 'Like', '%' . $semester . '%')
                ->where('level', 'Like', '%' . $level . '%')
                ->where('programme_type', 'Like', '%' . $prog_type . '%')
                // ->join('courses_statuses', 'courses.course_status', '=', 'courses_statuses.id')
                ->join('semesters', 'courses.semester', '=', 'semesters.id')->select('courses.id as id', 'courses.course_code', 'courses.course_title', 'courses.course_unit', 'courses.course_status', 'courses.semester', 'semesters.semester_name')->get();

            $getCourseStatus = CoursesStatuses::all();

            // dd($data);

            return view('ADMIN.course_reg_according_to_departments', compact('data', 'getLevel', 'getDepartment', 'getCourseStatus', 'prog_type', 'department', 'level', 'semester'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

















    public function upload_courses_to_departments(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {



            // $data->course_id = json_encode($request->courses_to_register);

            // $savedCourses = json_encode($request->courses_to_register);
            //  This is gonna pack them in a single column

            $savedCourses = $request->courses_to_register;

            $department_id = $request->department;
            $level_id = $request->level;
            $semester_id = $request->semester;
            //   $course_status = $request->set_course_status;
            $programme_type = $request->prog_type;

            if (CoursesToDepartment::where('programme_type', '=', $programme_type)->where('course_id', '=', $savedCourses)->where('department_id', '=', $department_id)->where('level_id', '=', $level_id)->where('semester_id', '=', $semester_id)->doesntExist()) {

                foreach ($savedCourses as $course) {

                    $course_status = $request['set_course_status' . $course];

                    $data = new CoursesToDepartment;

                    $data->programme_type = $programme_type;
                    $data->course_id = $course;
                    $data->department_id = $department_id;
                    $data->level_id = $level_id;
                    $data->semester_id = $semester_id;
                    $data->course_status = $course_status;

                    $data->save();
                }
                return redirect()->back()->with('success_message', 'You have successfully uploaded courses to the selected department    ');
            } else {
                return redirect()->back()->with('error_message', 'Oops...the selected course(s) have already been assigned to this department!');
            }
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function set_dept_max_unit()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {



            $dept_max_units = DB::table('departments_max_units')
                ->join('programme_types', 'departments_max_units.programme_type', '=', 'programme_types.id')
                ->join('departments', 'departments_max_units.department', '=', 'departments.id')->select('departments_max_units.id as id', 'programme_types.programme', 'departments.department_name', 'departments_max_units.max_unit')->get();

            // dd($dept_max_units);




            return view("ADMIN.set_dept_max_unit", compact("dept_max_units"));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }









    public function upload_max_unit(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {




            $data = new DepartmentsMaxUnit;

            $data->Programme_type = $request->prog_type;
            $data->department = $request->department;
            $data->max_unit = $request->max_unit;

            $data->save();

            return redirect()->back()->with('success_message', 'Maximum unit uploaded successfully     ');
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function view_course_reg()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {



            $query = DB::table('courses_to_departments')
                ->join('programme_types', 'courses_to_departments.programme_type', '=', 'programme_types.id')
                ->join('departments', 'courses_to_departments.department_id', '=', 'departments.id')
                ->join('levels', 'courses_to_departments.level_id', '=', 'levels.id')
                ->join('semesters', 'courses_to_departments.semester_id', '=', 'semesters.id')
                ->join('courses_statuses', 'courses_to_departments.course_status', '=', 'courses_statuses.id')
                ->join('courses', 'courses_to_departments.course_id', '=', 'courses.id')


                ->select('programme_types.programme', 'departments.department_name', 'levels.level_name', 'semesters.semester_name', 'courses.course_code', 'courses_statuses.status')->get();

            // dd($query);


            return view("ADMIN.view_course_reg", compact('query'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }







    public function edit_dept_max_unit($id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            // $data = DepartmentsMaxUnit::where('id', $id)->select('departments_max_units.max_unit')->first();

            $data = DepartmentsMaxUnit::find($id);

            $getData = DepartmentsMaxUnit::where('departments_max_units.id', '=', $id)->join('programme_types', 'departments_max_units.Programme_type', '=', 'programme_types.id')->join('departments', 'departments_max_units.department', '=', 'departments.id')->select('programme_types.programme', 'departments.department_name', 'departments_max_units.max_unit', 'departments_max_units.Programme_type', 'departments_max_units.department')->first();

            // dd($data);

            return view("ADMIN.edit_dept_max_unit", compact("getData", "data"));
        } else {
            return redirect()->back()->with('error', 'Access denied!');
        }
    }







    public function update_dept_max_unit(Request $request, $id)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = DepartmentsMaxUnit::find($id);

            $data->Programme_type = $request->prog_type;
            $data->department = $request->department;
            $data->max_unit = $request->max_unit;

            $data->save();

            return redirect()->back()->with("success_message", "Changes made successfully  :)");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function view_new_users()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {


            $query = User::where('reg_complete', '=', 0)->select('users.first_name', 'users.last_name', 'users.email', 'users.phone')->where('usertype', '!=', 1)->orderBy('id', 'DESC')->get();
            // dd($query);
            return view("ADMIN.view_new_users", compact('query'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }




    public function view_job_applicants()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            return view("ADMIN.view_job_applicants");
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }




    public function application_forms()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = EmploymentAndFinancialAidFormPdf::all();

            return view("ADMIN.application_forms", compact("data"));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }





    public function upload_application_form_pdf(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {



            $employee_application_form = $request->employee_application_form;

            if (empty($employee_application_form)) {
            } else {

                $filenameemployee = time() . '.' . $employee_application_form->getClientOriginalExtension();

                $request->employee_application_form->move('employee_application_form', $filenameemployee);
            }


            $financial_aid_form = $request->financial_aid_form;

            if (empty($financial_aid_form)) {
            } else {

                $filenamefinancial = time() . '.' . $financial_aid_form->getClientOriginalExtension();

                $request->financial_aid_form->move('financial_aid_form', $filenamefinancial);
            }

            // if (ApplicantsOldResults::where('student_id', '=', Auth::user()->id)->doesntExist()) {

            if (EmploymentAndFinancialAidFormPdf::where('employee_application_form', '=', $employee_application_form)->doesntExist() || EmploymentAndFinancialAidFormPdf::where('financial_aid_form', '=', $financial_aid_form)->doesntExist()) {

                $data = new EmploymentAndFinancialAidFormPdf;

                if (!empty($employee_application_form)) {
                    $data->employee_application_form = $filenameemployee;
                }

                if (!empty($financial_aid_form)) {
                    $data->financial_aid_form = $filenamefinancial;
                }

                $check = DB::table('employment_and_financial_aid_form_pdfs')->select('employee_application_form', 'financial_aid_form')->first();
                // dd($check);
                if ($check) {
                    return redirect()->back()->with('error_message', 'Application form(s) already exist in the database      ');
                }

                $data->save();

                return redirect()->back()->with('success_message', 'Application forms uploaded successfully     ');
            }







            // $data->save();

            return redirect()->back()->with('success_message', 'You have successfully added Application Form(s)        ');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }
    
      public function students_course_feedback()
    {
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {

            $data = CourseFeedback::all();

            return view("ADMIN.students_course_feedback", compact('data'));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }
}




























  // CREATING DB FIELDS USING MODEL DIRECTLY


  //     dd($request->all());
  //     $createUserAccount = User::create([
  //        "email"=>$request->email
  //      ]);

  //      $updateUserAccount = User::find($id)->update([
  //        "email"=>$request->email
  //      ]);

  //      $createStaffAccount = Staff::create([
  //        "user_id"=>$createUserAccount->id,
  //        "address"=>$request->address
  //      ]);
