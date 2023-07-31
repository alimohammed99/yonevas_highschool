<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use DB;
use Cookie;

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
use App\Models\Circular;
use App\Models\Level;

use App\Models\SiteLogo;

use App\Models\StudentsCircular;

use App\Models\EmployeeApplication;

use App\Models\VisitorsFeedback;

use Mail;

use App\Mail\ContactMail;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function redirect(Request $request)
    {

        $usertype = Auth::user()->usertype;

        // dd($usertype);

        $data =  Auth::user();

        if ($usertype == '1') {

            $regNotCompleteQuery = User::where('reg_complete', '=', 0)->select('users.first_name', 'users.last_name', 'users.email', 'users.phone')->where('usertype', '!=', 1)->count();

            $regCompleteQuery = DB::table('users')->join('students_details', 'users.id', '=', 'students_details.student_id')->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')->count();
            // dd($query);

            return view('ADMIN.home', compact('regNotCompleteQuery', 'regCompleteQuery'))->with(['data' => $data]);
        } elseif ($usertype == '2') {


            return view('teacherdashboard.home')->with(['data' => $data]);;
        } elseif ($usertype == '3') {

            $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();

            $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();
            // dd($studentsCircularCount);

            return view('studentdashboard.home', compact('studentsCircular', 'studentsCircularCount'))->with(['data' => $data]);;
        } else {
            $request->session()->regenerate();
            Cookie::queue(Cookie::forget('laravel_session'));
            Cookie::queue(Cookie::forget('XSRF-TOKEN'));
            return redirect()->back()->with('error_message', 'Failed     :)');
        }
    }






    public function index()
    {


        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = SiteLogo::all();

            return view('USER.home', compact('data'));
        }
    }





    public function update_student_profile()
    {

        $data1 = MaritalStatus::all();
        $data2 = Religion::all();
        $data3 = MilitaryForce::all();
        $data4 = GovernmentOfficial::all();
        $data5 = MedicalConditions::all();
        $data6 = Departments::all();
        $acad = AcademicSession::where('status', '=', '1')->get();
        $level = Level::where('id', '=', '1')->get();
        $cert_courses = Courses::where('programme_type', '=', '2')->get();
        $logo = SiteLogo::all();
        //$which_user = Auth::user()->id;

        //dd($which_user);

        $data =  Auth::user();

        $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

        $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();


        return view("studentdashboard.update_student_profile", compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'acad', 'level', 'cert_courses', 'logo', 'studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
    }







    public function upload_students_profile(Request $request)
    {
        if($request->programme_type =="1"){
            if ($request->de_faculty&&$request->countries&&$request->states&&$request->cities&&$request->academic_session&&$request->de_department) {
                User::where('id', Auth::user()->id)->update(['reg_complete' => '1']);
            }
        }
        
        if($request->programme_type =="2"){
            if ($request->countries&&$request->states&&$request->cities&&$request->academic_session) {
                User::where('id', Auth::user()->id)->update(['reg_complete' => '1']);
            }
        }

        $usertype = Auth::user()->usertype;



        $data2 = new StudentsDetails;

        $data2->student_id =  Auth::user()->id;

        $data2->marital_status = $request->marital_status;

        $data2->date_of_birth = $request->date_of_birth;

        $data2->zip_code = $request->zip_code;

        $data2->gender = $request->gender;

        $data2->religion = $request->religion;

        $image = $request->student_image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->student_image->move('StudentImages', $imagename);

            $data2->student_image = $imagename;
        } else {
            $data2->student_image = " ";
        }


        $data2->country = $request->countries;

        $data2->state = $request->states;

        $data2->city = $request->cities;

        $data2->address = $request->address;



        if ($request->facebook_page) {
            $data2->facebook_page = $request->facebook_page;
        } else {
            $data2->facebook_page = " ";
        }


        if ($request->twitter_page) {
            $data2->twitter_page = $request->twitter_page;
        } else {
            $data2->twitter_page = " ";
        }

        if ($request->instagram_page) {
            $data2->instagram_page = $request->instagram_page;
        } else {
            $data2->instagram_page = " ";
        }

        if ($request->linkedin_page) {
            $data2->linkedin_page = $request->linkedin_page;
        } else {
            $data2->linkedin_page = " ";
        }


        if ($request->next_of_kin_name) {
            $data2->next_of_kin_name = $request->next_of_kin_name;
        } else {
            $data2->next_of_kin_name = " ";
        }

        if ($request->next_of_kin_email) {
            $data2->next_of_kin_email = $request->next_of_kin_email;
        } else {
            $data2->next_of_kin_email = " ";
        }


        if ($request->next_of_kin_phone) {
            $data2->next_of_kin_phone = $request->next_of_kin_phone;
        } else {
            $data2->next_of_kin_phone = " ";
        }

        if ($request->next_of_kin_address) {
            $data2->next_of_kin_address = $request->next_of_kin_address;
        } else {
            $data2->next_of_kin_address = " ";
        }


        $data2->currently_studying = $request->currently_studying;

        if (!$data2->currently_studying) {
            $data2->currently_studying = ' ';
            $data2->name_of_current_institution = ' ';
            $data2->major = ' ';
            $data2->years_of_study = ' ';
        }


        if ($data2->currently_studying == 'Yes') {

            $data2->currently_studying = 'Yes';

            $data2->name_of_current_institution = $request->name_of_current_institution;

            $data2->major = $request->major;

            $data2->years_of_study = $request->years_of_study;
        } else {

            $data2->currently_studying = 'Null';

            $data2->name_of_current_institution = 'null';

            $data2->major = 'null';

            $data2->years_of_study = 'null';
        }


        $data2->online_classes = $request->online_classes;

        if (!$data2->online_classes) {
            $data2->online_classes = ' ';
            $data2->how_long_for_online_classes = ' ';
        }

        if ($data2->online_classes == 'Yes') {
            $data2->online_classes = 'Yes';
            $data2->how_long_for_online_classes = $request->how_long_for_online_classes;
        } else {
            $data2->online_classes = 'null';
            $data2->how_long_for_online_classes = 'null';
        }



        if ($request->type_of_enrollment) {
            $data2->type_of_enrollment = $request->type_of_enrollment;
        } else {
            $data2->type_of_enrollment = " ";
        }

        if ($request->enrollment_period) {
            $data2->enrollment_period = $request->enrollment_period;
        } else {
            $data2->enrollment_period = " ";
        }

        if ($request->free_time) {
            $data2->free_time = $request->free_time;
        } else {
            $data2->free_time = " ";
        }

        if ($request->residential_home) {
            $data2->residential_home = $request->residential_home;
        } else {
            $data2->residential_home = " ";
        }

        if($request->group_of_individual_or_organization){
            $data2->group_of_individual_or_organization = $request->group_of_individual_or_organization;
        }else{
            $data2->group_of_individual_or_organization = " ";
        }


        if ($data2->group_of_individual_or_organization == 'Yes') {
            $data2->group_of_individual_or_organization == 'Yes';
            $data2->name_them = $request->name_them;
        } else {
            $data2->group_of_individual_or_organization == ' ';
            $data2->name_them = ' ';
        }

        if ($request->languages) {
            $data2->languages = $request->languages;
        } else {
            $data2->languages = " ";
        }

        if ($request->military_force) {
            $data2->military_force = $request->military_force;
        } else {
            $data2->military_force = " ";
        }

        if ($request->government_official) {
            $data2->government_official = $request->government_official;
        } else {
            $data2->government_official = " ";
        }


        if ($request->medical_conditions) {
            $data2->medical_conditions = $request->medical_conditions;
        } else {
            $data2->medical_conditions = " ";
        }

        if ($request->academic_session) {
            $data2->academic_session = $request->academic_session;
        } else {
            $data2->academic_session = " ";
        }


        $data2->programme_type = $request->programme_type;

        if ($data2->programme_type == '1') {

            $data2->level = $request->de_level;

            $data2->faculty = $request->de_faculty;

            $data2->department = $request->de_department;

            $data2->name_of_certificate_course = 'null';
        } elseif ($data2->programme_type == '7') {

            $data2->level = 'null';

            $data2->faculty = 'null';

            $data2->department = 'null';

            $data2->name_of_certificate_course = 'null';
        } else {
            $data2->level = 'null';

            $data2->faculty = 'null';

            $data2->department = 'null';

            $data2->name_of_certificate_course = $request->name_of_certificate_course;
        }






        $data2->save();


        return redirect()->back()->with('success_message', 'You have successfully completed your profile     :)');
    }


    // ROUTES FOR THE FRONTEND PAGES
    // ROUTES FOR THE FRONTEND PAGES
    // ROUTES FOR THE FRONTEND PAGES

    public function programs()
    {
        return view('USER.programs');
    }


    public function about()
    {
        return view('USER.about');
    }

    public function contactUs()
    {
        return view('USER.contactUs');
    }


    public function academics()
    {
        return view('USER.academics');
    }


    public function course_profile()
    {
        return view('USER.course_profile');
    }


    public function admission()
    {
        return view('USER.admission');
    }


    public function cost()
    {
        return view('USER.cost');
    }


    public function partnership()
    {
        return view('USER.partnership');
    }


    public function donate()
    {
        return view('USER.donate');
    }


    public function employment()
    {
        return view('USER.employment');
    }


    public function registrar()
    {
        return view('USER.registrar');
    }


    public function resource()
    {
        return view('USER.resource');
    }


    public function student()
    {
        return view('USER.student');
    }


    public function scholarship()
    {
        return view('USER.scholarship');
    }


    public function wellness()
    {
        return view('USER.wellness');
    }



    public function lyzofi()
    {
        return view('USER.lyzofi');
    }

    public function zlasic()
    {
        return view('USER.zlasic');
    }

    public function explore()
    {
        return view('USER.explore');
    }

    public function board()
    {
        return view('USER.board');
    }


    public function undergraduate()
    {
        return view('USER.undergrad');
    }

    public function diploma()
    {
        return view('USER.diploma');
    }

    public function socialScience()
    {
        return view('USER.socialScience');
    }

    public function businessManagement()
    {
        return view('USER.businessManagement');
    }

    public function artMediaDesign()
    {
        return view('USER.artMediaDesign');
    }

    public function schoolLaw()
    {
        return view('USER.schoolLaw');
    }

    public function schoolcomputer()
    {
        return view('USER.schoolcomputer');
    }

    public function schoolCommunication()
    {
        return view('USER.schoolCommunication');
    }

    public function facultyEducation()
    {
        return view('USER.facultyEducation');
    }

    public function foundation()
    {
        return view('USER.foundation');
    }

    public function faq()
    {
        return view('USER.faq');
    }

    public function academic_calendar()
    {
        return view('USER.academic-calendar');
    }


    public function certificate()
    {
        return view('USER.certificate');
    }

    public function financial_aid()
    {
        return view('USER.financial-aid');
    }

    public function website_feedback()
    {
        return view('USER.website_feedback');
    }

    // public function certificate()
    // {
    //     return view('USER.certificate');
    // }

    //    public function financial_aid(){
    //         return view('user.financial-aid');
    //       }



    // public function scholarship()
    // {
    //     return view('USER.scholarship');
    // }



    // ROUTES FOR THE FRONTEND PAGES
    // ROUTES FOR THE FRONTEND PAGES
    // ROUTES FOR THE FRONTEND PAGES



    // USERS CAN SEND EMAIL TO THE SCHOOL HERE
    // USERS CAN SEND EMAIL TO THE SCHOOL HERE
    // USERS CAN SEND EMAIL TO THE SCHOOL HERE

    // public function users_send_email(Request $request)
    // {

    //     // $isUserLoggedIn = Auth::user();

    //     // if($isUserLoggedIn){


    //     //VALIDATE FORM
    //     //VALIDATE FORM
    //     //VALIDATE FORM

    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'subject' => 'required',
    //         'message' => 'required'
    //     ]);

    //     //USING THE BELOW INTERNET CONNECTION METHOD
    //     //USING THE BELOW INTERNET CONNECTION METHOD
    //     //USING THE BELOW INTERNET CONNECTION METHOD

    //     if ($this->isOnline()) {
    //         $msg = " Sender Email => " . $request->email . "..................." . "Body of the message => " . $request->message;
    //         $mail_data = [
    //             'recipient' => 'inquires@yonevas.institute',
    //             'fromEmail' => $request->email,
    //             'fromName' => $request->name,
    //             'subject' => $request->subject,
    //             'body' => $msg
    //         ];

    //         \Mail::send('email-template', $mail_data, function ($message) use ($mail_data) {
    //             $message->to($mail_data['recipient'])
    //                 ->from($mail_data['fromEmail'], $mail_data['fromName'])
    //                 ->subject($mail_data['subject']);
    //         });

    //         return redirect()->back()->with('success_message', 'Email has been sent. We will get back shortly   :)');
    //     } else {
    //         return redirect()->back()->with('error_message', 'Check your Internet connection!');
    //     }



    //     // }else{
    //     //     return redirect()->back()->with('error', 'OOPS...You have to log in first!');
    //     // }

    // }


    // TESTING INTERNET CONNECTION WITH YOUTUBE SITE
    // TESTING INTERNET CONNECTION WITH YOUTUBE SITE
    // TESTING INTERNET CONNECTION WITH YOUTUBE SITE

    // public function isOnline($site = "https://youtube.com")
    // {
    //     if (@fopen($site, "r")) {
    //         return true;
    //     } else {
    //         false;
    //     }
    // }


    public function users_send_email(Request $request)
    {
        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to('info@yonevas.institute')->send(new ContactMail($details));

        return back()->with('success_message', 'Email has been sent. We will get back shortly');
    }




    public function application()
    {
        return view('USER.application');
    }





    public function submit_employee_application(Request $request)
    {

        $data = new EmployeeApplication;

        $data->position_applying_for = $request->position_applying_for;
        $data->full_name = $request->full_name;
        $data->country = $request->countries;
        $data->state = $request->states;
        $data->city = $request->cities;
        $data->zip_code = $request->zip_code;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->highest_degree_obtained = $request->highest_degree_obtained;
        $data->name_of_institution = $request->name_of_institution;
        $data->major = $request->major;
        $data->graduation_date = $request->graduation_date;
        $data->company_name_1 = $request->company_name_1;
        $data->position_1 = $request->position_1;
        $data->date_employed_1 = $request->date_employed_1;
        $data->reasons_for_leaving_1 = $request->reasons_for_leaving_1;
        $data->company_name_2 = $request->company_name_2;
        $data->position_2 = $request->position_2;
        $data->date_employed_2 = $request->date_employed_2;
        $data->reasons_for_leaving_2 = $request->reasons_for_leaving_2;
        $data->referee_name_1 = $request->referee_name_1;
        $data->referee_email_1 = $request->referee_email_1;
        $data->referee_phone_1 = $request->referee_phone_1;
        $data->referee_relationship_1 = $request->referee_relationship_1;
        $data->referee_name_2 = $request->referee_name_2;
        $data->referee_email_2 = $request->referee_email_2;
        $data->referee_phone_2 = $request->referee_phone_2;
        $data->referee_relationship_2 = $request->referee_relationship_2;
        $data->referee_name_3 = $request->referee_name_3;
        $data->referee_email_3 = $request->referee_email_3;
        $data->referee_phone_3 = $request->referee_phone_3;
        $data->referee_relationship_3 = $request->referee_relationship_3;
        $data->certification_or_license = $request->certification_or_license;
        $data->issuing_organization = $request->issuing_organization;
        $data->expiration_date = $request->expiration_date;
        $data->signature = $request->signature;
        $data->Date = $request->Date;

        $data->save();

        return redirect()->back()->with('success_message', 'You have successfully submitted your application. We will get back to you soon     :)');
    }


    public function submit_visitors_feedback(Request $request)
    {

        $data = new VisitorsFeedback;

        $data->overall_impression = $request->overall_impression;

        $data->navigation = $request->navigation;

        $data->design_and_visual_appeal = $request->design_and_visual_appeal;

        $data->responsiveness = $request->responsiveness;

        $data->clarity_info = $request->clarity_info;

        $data->completeness_of_info = $request->completeness_of_info;

        $data->load_time = $request->load_time;

        $data->interactive_elements = $request->interactive_elements;

        $data->suggestions = $request->suggestions;

        $data->user_name = $request->user_name;

        $data->user_email = $request->user_email;

        $data->save();

        return redirect()->back()->with('success_message', 'Feedback has been submitted. Thanks for your time     :)');
    }
}
