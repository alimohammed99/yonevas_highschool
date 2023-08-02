<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use DB;

use App\Models\User;

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

use App\Models\AcademicSession;

use App\Models\Level;

use App\Models\SiteLogo;

use App\Models\Events;

use App\Models\StaffCircular;

use App\Models\StudentsToCourseRegTable;

use App\Models\StudentsCircular;

use App\Models\AttendanceResponse;

use App\Models\CoursesToDepartment;

use App\Models\ApplicantsOldResults;

use App\Models\CourseFeedback;

use Illuminate\Support\Facades\Stroage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{

    public function __construct()
    {
        // Your condition to determine whether to redirect or not
        if (!Auth::check()) {
            return redirect('/');
        }
    }

    public function pay_school_fees()
    {


        $usertype = Auth::user()->usertype;

        $getCurrentUserId = Auth::user()->id;



        if ($usertype == '3') {

            if (Auth::user()->reg_complete == 1) {

                $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

                $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();

                return view("studentdashboard.pay_school_fees", compact('studentsCircularCount', 'studentsCircular'));
            } else {
                return redirect()->back()->with('error_message', 'You have not completed your Profile! Kindly do so to complete your registration');
            }
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function upload_olevel_and_utme()
    {


        // $logo = SiteLogo::all();


        $data =  Auth::user();

        $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

        $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();


        return view("studentdashboard.upload_olevel_and_utme", compact('studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
    }

    public function store_olevel_and_utme(Request $request)
    {



        $usertype = Auth::user()->usertype;

        $getCurrentUserId = Auth::user()->id;


        if ($usertype == '3') {

            $data = new ApplicantsOldResults;


            $data->student_id = Auth::user()->id;


            // UTME VALIDATION
            // UTME VALIDATION
            // UTME VALIDATION

            $utme = $request->utme;

            if (empty($utme)) {
            } else {

                $filenameutme = time() . '.' . $utme->getClientOriginalExtension();

                $request->utme->move('students_utme', $filenameutme);

                $utme_fileExtensionType = $request->utme->getClientMimeType();

                // dd($utme_fileExtensionType);

                // dd($utme_fileExtensionType);

                // $data->utme = $filenameutme;
            }



            // WAEC VALIDATION
            // WAEC VALIDATION
            // WAEC VALIDATION
            $waec_or_neco_1 = $request->waec_or_neco_1;

            if (empty($waec_or_neco_1)) {
            } else {

                $filenamewaco1 = time() . '.' . $waec_or_neco_1->getClientOriginalExtension();

                $request->waec_or_neco_1->move('students_waec_or_neco_1', $filenamewaco1);

                $waec_or_neco_1_fileExtensionType = $request->waec_or_neco_1->getClientMimeType();

                // $data->waec_or_neco_1 = $filenamewaco1;
            }




            // NECO VALIDATION
            // NECO VALIDATION
            // NECO VALIDATION
            $waec_or_neco_2 = $request->waec_or_neco_2;

            if (empty($waec_or_neco_2)) {
                //////////////
            } else {
                $filenamewaco2 = time() . '.' . $waec_or_neco_2->getClientOriginalExtension();

                $request->waec_or_neco_2->move('students_waec_or_neco_2', $filenamewaco2);

                $waec_or_neco_2_fileExtensionType = $request->waec_or_neco_2->getClientMimeType();

                // $data->waec_or_neco_2 = $filenamewaco2;

            }



            // original_certificate VALIDATION
            // original_certificate VALIDATION
            // original_certificate VALIDATION

            $original_certificate = $request->original_certificate;

            if (empty($original_certificate)) {
                //////////////
            } else {
                $file_original_certificate = time() . '.' . $original_certificate->getClientOriginalExtension();

                $request->original_certificate->move('students_original_certificate', $file_original_certificate);

                $original_certificate_fileExtensionType = $request->original_certificate->getClientMimeType();
            }



            // birth_certificate VALIDATION
            // birth_certificate VALIDATION
            // birth_certificate VALIDATION

            $birth_certificate = $request->birth_certificate;

            if (empty($birth_certificate)) {
                //////////////
            } else {
                $file_birth_certificate = time() . '.' . $birth_certificate->getClientOriginalExtension();

                $request->birth_certificate->move('students_birth_certificate', $file_birth_certificate);

                $birth_certificate_fileExtensionType = $request->birth_certificate->getClientMimeType();
            }




            // valid_form_of_id VALIDATION
            // valid_form_of_id VALIDATION
            // valid_form_of_id VALIDATION

            $valid_form_of_id = $request->valid_form_of_id;

            if (empty($valid_form_of_id)) {
                //////////////
            } else {
                $file_valid_form_of_id = time() . '.' . $valid_form_of_id->getClientOriginalExtension();

                $request->valid_form_of_id->move('students_valid_form_of_id', $file_valid_form_of_id);

                $valid_form_of_id_fileExtensionType = $request->valid_form_of_id->getClientMimeType();
            }




            // letter_of_sponsorship VALIDATION
            // letter_of_sponsorship VALIDATION
            // letter_of_sponsorship VALIDATION

            $letter_of_sponsorship = $request->letter_of_sponsorship;

            if (empty($letter_of_sponsorship)) {
                //////////////
            } else {
                $file_letter_of_sponsorship = time() . '.' . $letter_of_sponsorship->getClientOriginalExtension();

                $request->letter_of_sponsorship->move('students_letter_of_sponsorship', $file_letter_of_sponsorship);

                $letter_of_sponsorship_fileExtensionType = $request->letter_of_sponsorship->getClientMimeType();
            }



            // passport VALIDATION
            // passport VALIDATION
            // passport VALIDATION

            $passport = $request->passport;

            if (empty($passport)) {
                //////////////
            } else {
                $file_passport = time() . '.' . $passport->getClientOriginalExtension();

                $request->passport->move('students_passport', $file_passport);

                $passport_fileExtensionType = $request->passport->getClientMimeType();
            }


            if (ApplicantsOldResults::where('student_id', '=', Auth::user()->id)->doesntExist()) {

                $data = new ApplicantsOldResults;

                $data->student_id = Auth::user()->id;



                if (!empty($waec_or_neco_1)) {
                    $data->waec_or_neco_1 = $filenamewaco1;
                    $data->waec_or_neco_1_fileExtensionType = $waec_or_neco_1_fileExtensionType;
                }

                if (!empty($waec_or_neco_2)) {
                    $data->waec_or_neco_2 = $filenamewaco2;
                    $data->waec_or_neco_2_fileExtensionType = $waec_or_neco_2_fileExtensionType;
                }

                if (!empty($utme)) {
                    $data->utme = $filenameutme;
                    $data->utme_fileExtensionType = $utme_fileExtensionType;
                }

                if (!empty($original_certificate)) {
                    $data->original_certificate = $file_original_certificate;
                    $data->original_certificate_fileExtensionType = $original_certificate_fileExtensionType;
                }

                if (!empty($birth_certificate)) {
                    $data->birth_certificate = $file_birth_certificate;
                    $data->birth_certificate_fileExtensionType = $birth_certificate_fileExtensionType;
                }

                if (!empty($valid_form_of_id)) {
                    $data->valid_form_of_id = $file_valid_form_of_id;
                    $data->valid_form_of_id_fileExtensionType = $valid_form_of_id_fileExtensionType;
                }

                if (!empty($letter_of_sponsorship)) {
                    $data->letter_of_sponsorship = $file_letter_of_sponsorship;
                    $data->letter_of_sponsorship_fileExtensionType = $letter_of_sponsorship_fileExtensionType;
                }

                if (!empty($passport)) {
                    $data->passport = $file_passport;
                    $data->passport_fileExtensionType = $passport_fileExtensionType;
                }

                $data->status = '9';

                $data->reason = '';

                $data->save();

                return redirect()->back()->with('success_message', 'Results uploaded successfully. Kindly keep your eyes on the Approval page for feedback.      :)');
            }


            $student_documents_status = DB::table('applicants_old_results')->where('student_id', '=', $getCurrentUserId)->select('status')->first();

            if ($student_documents_status->status == '0') {
                // THIS MEANS IF THE RESULTS WERE REJECTED
                // THIS MEANS IF THE RESULTS WERE REJECTED
                // THIS MEANS IF THE RESULTS WERE REJECTED


                $waec_or_neco_1 = $request->waec_or_neco_1;

                if (empty($waec_or_neco_1)) {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['waec_or_neco_1' => '']);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['waec_or_neco_1_fileExtensionType' => '']);
                } else {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['waec_or_neco_1' => $filenamewaco1]);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['waec_or_neco_1_fileExtensionType' => $waec_or_neco_1_fileExtensionType]);
                }


                $waec_or_neco_2 = $request->waec_or_neco_2;

                if (empty($waec_or_neco_2)) {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['waec_or_neco_2' => '']);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['waec_or_neco_2_fileExtensionType' => '']);
                } else {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['waec_or_neco_2' => $filenamewaco2]);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['waec_or_neco_2_fileExtensionType' => $waec_or_neco_2_fileExtensionType]);
                }


                $utme = $request->utme;

                if (empty($utme)) {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['utme' => '']);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['utme_fileExtensionType' => '']);
                } else {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['utme' => $filenameutme]);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['utme_fileExtensionType' => $utme_fileExtensionType]);
                }


                $original_certificate = $request->original_certificate;

                if (empty($original_certificate)) {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['original_certificate' => '']);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['original_certificate_fileExtensionType' => '']);
                } else {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['original_certificate' => $file_original_certificate]);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['original_certificate_fileExtensionType' => $original_certificate_fileExtensionType]);
                }


                $birth_certificate = $request->birth_certificate;

                if (empty($birth_certificate)) {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['birth_certificate' => '']);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['birth_certificate_fileExtensionType' => '']);
                } else {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['birth_certificate' => $file_birth_certificate]);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['birth_certificate_fileExtensionType' => $birth_certificate_fileExtensionType]);
                }


                $valid_form_of_id = $request->valid_form_of_id;

                if (empty($valid_form_of_id)) {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['valid_form_of_id' => '']);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['valid_form_of_id_fileExtensionType' => '']);
                } else {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['valid_form_of_id' => $file_valid_form_of_id]);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['valid_form_of_id_fileExtensionType' => $valid_form_of_id_fileExtensionType]);
                }


                $letter_of_sponsorship = $request->letter_of_sponsorship;

                if (empty($letter_of_sponsorship)) {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['letter_of_sponsorship' => '']);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['letter_of_sponsorship_fileExtensionType' => '']);
                } else {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['letter_of_sponsorship' => $file_letter_of_sponsorship]);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['letter_of_sponsorship_fileExtensionType' => $letter_of_sponsorship_fileExtensionType]);
                }


                $passport = $request->passport;

                if (empty($passport)) {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['passport' => '']);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['passport_fileExtensionType' => '']);
                } else {
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['passport' => $file_passport]);
                    ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['passport_fileExtensionType' => $passport_fileExtensionType]);
                }

                ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['status' => 9]);

                ApplicantsOldResults::where('student_id', Auth::user()->id)->update(['reason' => '']);

                return redirect()->back()->with('success_message', 'Results uploaded successfully. Kindly keep your eyes on the Approval page for feedback.      :)');
            }


            $student_documents_status = DB::table('applicants_old_results')->where('student_id', '=', $getCurrentUserId)->select('status')->first();

            if ($student_documents_status->status == '9') {
                // THIS MEANS IF THE RESULTS WERE ARE WAITING FOR APPROVAL
                // THIS MEANS IF THE RESULTS WERE ARE WAITING FOR APPROVAL
                // THIS MEANS IF THE RESULTS WERE ARE WAITING FOR APPROVAL

                return redirect()->back()->with('error_message', 'Sorry, Your results already exist in the record and are waiting for approval     :)');
            }



            $student_documents_status = DB::table('applicants_old_results')->where('student_id', '=', $getCurrentUserId)->select('status')->first();

            // if ($student_documents_status->status == '1') {
            //     THIS MEANS IF THE RESULTS HAVE BEEN APPROVED
            //     THIS MEANS IF THE RESULTS HAVE BEEN APPROVED
            //     THIS MEANS IF THE RESULTS HAVE BEEN APPROVED

            //     return redirect()->back()->with('success_message', 'Your documents have been approved   :)');
            // }


        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function student_admission_status()
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '3') {

            $data =  Auth::user();

            $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

            $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();

            return view("studentdashboard.student_admission_status", compact('studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function manage_student_profile()
    {


        $usertype = Auth::user()->usertype;

        $getCurrentUserId = Auth::user()->id;



        if ($usertype == '3') {


            if (Auth::user()->reg_complete == 1) {

                $data = User::where('users.id', $getCurrentUserId)
                    ->join('students_details', 'users.id', '=', 'students_details.student_id')
                    ->join('countries', 'students_details.country', '=', 'countries.id')
                    ->join('states', 'students_details.state', '=', 'states.id')
                    ->join('cities', 'students_details.city', '=', 'cities.id')
                    ->join('academic_sessions', 'students_details.academic_session', '=', 'academic_sessions.id')
                    ->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')
                    ->join('faculties', 'students_details.faculty', '=', 'faculties.id')
                    ->join('departments', 'students_details.department', '=', 'departments.id')
                    ->select(
                        'users.id as id',
                        'users.*',
                        'students_details.*',
                        'countries.name_country',
                        'states.name_state',
                        'cities.name_city',
                        'academic_sessions.academic_session',
                        'programme_types.programme',
                        'faculties.faculty_name as faculty',
                        'departments.department_name as department'
                    )
                    ->first();
                $exist = ApplicantsOldResults::where('student_id', auth()->user()->id);
                if (!$exist) return redirect('/upload_olevel_and_utme')->with('error_message', 'Please Upload your documents first');
                $olevel_data = $exist->select('applicants_old_results.utme as utme', 'applicants_old_results.waec_or_neco_1 as waco1', 'applicants_old_results.waec_or_neco_2 as waco2')->first();

                $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

                $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();



                return view("studentdashboard.manage_student_profile", compact('data', 'olevel_data', 'studentsCircularCount', 'studentsCircular'));
            } else {
                return redirect()->back()->with('error_message', 'You have not completed your Profile! Kindly do so to complete your registration');
            }
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function edit_student_profile($id)
    {



        $usertype = Auth::user()->usertype;

        $getTeacherId = Auth::user()->id;

        $getCurrentUserId = Auth::user()->id;



        if ($usertype == '3') {

            $data = User::where('users.id', $getCurrentUserId)->join('students_details', 'users.id', '=', 'students_details.student_id')
                ->join('countries', 'students_details.country', '=', 'countries.id')
                ->join('states', 'students_details.state', '=', 'states.id')
                ->join('cities', 'students_details.city', '=', 'cities.id')
                ->join('academic_sessions', 'students_details.academic_session', '=', 'academic_sessions.id')
                ->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')
                // ->join('levels', 'students_details.level', '=', 'levels.id')
                ->join('faculties', 'students_details.faculty', '=', 'faculties.id')
                ->join('departments', 'students_details.department', '=', 'departments.id')
                // ->join('courses', 'students_details.name_of_certificate_course', '=', 'courses.id')


                ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'students_details.student_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'students_details.address', 'students_details.marital_status as status', 'students_details.date_of_birth', 'students_details.zip_code', 'students_details.religion', 'students_details.student_password', 'students_details.gender', 'students_details.student_image', 'students_details.free_time', 'students_details.residential_home', 'students_details.group_of_individual_or_organization', 'academic_sessions.academic_session', 'students_details.name_them', 'students_details.languages', 'students_details.military_force', 'students_details.government_official', 'students_details.medical_conditions', 'students_details.currently_studying', 'students_details.name_of_current_institution', 'students_details.major', 'students_details.years_of_study', 'students_details.online_classes', 'students_details.how_long_for_online_classes', 'students_details.type_of_enrollment', 'students_details.type_of_enrollment', 'students_details.enrollment_period', 'programme_types.programme', 'students_details.level', 'students_details.faculty', 'students_details.department', 'students_details.name_of_certificate_course', 'students_details.facebook_page', 'students_details.twitter_page', 'students_details.instagram_page', 'students_details.linkedin_page', 'students_details.next_of_kin_name', 'students_details.next_of_kin_email', 'students_details.next_of_kin_phone', 'students_details.next_of_kin_address')->first();



            $data1 = MaritalStatus::all();
            $data2 = Religion::all();
            $data3 = MilitaryForce::all();
            $data4 = GovernmentOfficial::all();
            $data5 = MedicalConditions::all();
            $data6 = Departments::all();
            $acad = AcademicSession::where('status', '=', '1')->get();
            $level = Level::where('id', '=', '1')->get();
            $cert_courses = Courses::where('programme_type', '=', '2')->get();

            $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

            $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();

            return view("studentdashboard.edit_student_profile", compact('data', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'acad', 'level', 'cert_courses', 'studentsCircularCount', 'studentsCircular'));
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function update_student_profile(Request $request, $id)
    {
        $rules = [
            'countries' => 'required',
            'states' => 'required',
            'cities' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->with('error_message', '[countries,state,city] must be filled!');
        }

        $usertype = Auth::user()->usertype;


        if ($usertype == '3') {



            $data = User::find($id);

            // $data->first_name = $request->first_name;

            // $data->last_name = $request->surname;

            // $data->other_names = $request->other_names;

            $data->email = $request->email;

            $data->phone = $request->phone_number;

            $data->password = Hash::make($request->password);



            $data->save();



            $data2 = StudentsDetails::where('student_id', auth()->user()->id)->first();
            // dd($data2->country, $data2->state, $data2->city);

            $data2->marital_status = $request->marital_status ?? $data2->marital_status;

            $data2->date_of_birth = $request->date_of_birth;

            $data2->zip_code = $request->zip_code;

            $data2->gender = $request->gender ?? $data2->gender;

            $data2->religion = $request->religion ?? $data2->religion;

            // $data2->student_password = '';



            $image = $request->image;

            if ($image) {

                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->image->move('StudentImages', $imagename);

                $data2->student_image = $imagename;
            }

            $data2->country = $request->countries ?? $data2->country;

            $data2->state = $request->states ?? $data2->state;

            $data2->city = $request->cities ?? $data2->city;

            $data2->address = $request->address ?? $data2->address;

            $data2->facebook_page = $request->facebook_page;

            $data2->twitter_page = $request->twitter_page;

            $data2->instagram_page = $request->instagram_page;

            $data2->linkedin_page = $request->linkedin_page;


            $data2->currently_studying = $request->currently_studying ?? $data2->currently_studying;

            if ($data2->currently_studying == 'Yes') {

                $data2->name_of_current_institution = $request->name_of_current_institution;

                $data2->major = $request->major;

                $data2->years_of_study = $request->years_of_study;
            } else {

                $data2->name_of_current_institution = 'null';

                $data2->major = 'null';

                $data2->years_of_study = 'null';
            }


            $data2->online_classes = $request->online_classes ?? $data2->online_classes;

            if ($data2->online_classes == 'Yes') {

                $data2->how_long_for_online_classes = $request->how_long_for_online_classes;
            } else {

                $data2->how_long_for_online_classes = 'null';
            }



            // $data2->what_do_you_want_to_study = $request->what_do_you_want_to_study;

            $data2->type_of_enrollment = $request->type_of_enrollment ??  $data2->type_of_enrollment;

            $data2->enrollment_period = $request->enrollment_period ?? $data2->enrollment_period;

            $data2->free_time = $request->free_time ?? $data2->free_time;

            $data2->residential_home = $request->residential_home ?? $data2->residential_home;


            $data2->group_of_individual_or_organization = $request->group_of_individual_or_organization ?? $data2->group_of_individual_or_organization;

            if ($data2->group_of_individual_or_organization == 'Yes') {

                $data2->name_them = $request->name_them;
            } else {

                $data2->name_them = 'null';
            }


            $data2->languages = $request->languages;

            $data2->military_force = $request->military_force ?? $data2->military_force;

            $data2->government_official = $request->government_official ?? $data2->government_official;
            if ($request->medical_conditions) {
                $data2->medical_conditions = $request->medical_conditions;
            }

            if ($request->academic_session) $data2->academic_session = $request->academic_session;

            if ($request->programme_type) $data2->programme_type = $request->programme_type;

            if ($data2->programme_type == '1') {
                if ($request->de_faculty) $data2->faculty = $request->de_faculty;

                if ($request->de_department) $data2->department = $request->de_department;

                if ($request->de_level) $data2->level = $request->de_level;

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


            return redirect('/manage_student_profile')->with('success_message', 'Profile updated successfully     :)');
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function download_waco1(Request $request, $waco1)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '3') {
            return response()->download(public_path('students_waec_or_neco_1/' . $waco1));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function download_waco2(Request $request, $waco2)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '3') {
            return response()->download(public_path('students_waec_or_neco_2/' . $waco2));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function download_utme(Request $request, $utme)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '3') {
            return response()->download(public_path('students_utme/' . $utme));
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function change_student_password()
    {

        $usertype = Auth::user()->usertype;

        $getStudentId = Auth::user()->id;


        if ($usertype == '3') {

            if (Auth::user()->reg_complete == 1) {

                $data = User::where('users.id', $getStudentId)->join('students_details', 'users.id', '=', 'students_details.student_id')
                    ->join('marital_statuses', 'students_details.marital_status', '=', 'marital_statuses.id')
                    ->join('religions', 'students_details.religion', '=', 'religions.id')
                    ->join('countries', 'students_details.country', '=', 'countries.id')
                    ->join('states', 'students_details.state', '=', 'states.id')
                    ->join('cities', 'students_details.city', '=', 'cities.id')
                    ->join('military_forces', 'students_details.military_force', '=', 'military_forces.id')
                    ->join('government_officials', 'students_details.government_official', '=', 'government_officials.id')
                    ->join('medical_conditions', 'students_details.medical_conditions', '=', 'medical_conditions.id')
                    ->join('academic_sessions', 'students_details.academic_session', '=', 'academic_sessions.id')
                    ->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')
                    // ->join('levels', 'students_details.level', '=', 'levels.id')
                    // ->join('faculties', 'students_details.faculty', '=', 'faculties.id')
                    // ->join('departments', 'students_details.department', '=', 'departments.id')
                    // ->join('courses', 'students_details.name_of_certificate_course', '=', 'courses.id')


                    ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'students_details.student_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'students_details.address', 'marital_statuses.status', 'students_details.date_of_birth', 'students_details.zip_code', 'religions.religion_name', 'students_details.student_password', 'students_details.gender', 'students_details.student_image', 'students_details.free_time', 'students_details.residential_home', 'students_details.group_of_individual_or_organization', 'academic_sessions.academic_session', 'students_details.name_them', 'students_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', 'students_details.currently_studying', 'students_details.name_of_current_institution', 'students_details.major', 'students_details.years_of_study', 'students_details.online_classes', 'students_details.how_long_for_online_classes', 'students_details.type_of_enrollment', 'students_details.type_of_enrollment', 'students_details.enrollment_period', 'programme_types.programme', 'students_details.level', 'students_details.faculty', 'students_details.department', 'students_details.name_of_certificate_course', 'students_details.facebook_page', 'students_details.twitter_page', 'students_details.instagram_page', 'students_details.linkedin_page', 'students_details.next_of_kin_name', 'students_details.next_of_kin_email', 'students_details.next_of_kin_phone', 'students_details.next_of_kin_address')->first();

                $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

                $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();

                return view("studentdashboard.change_student_password", compact('data', 'studentsCircularCount', 'studentsCircular'));
            } else {
                return redirect()->back()->with('error_message', 'You have not completed your Profile! Kindly do so to complete your registration');
            }
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function update_student_password(Request $request)
    {

        $usertype = Auth::user()->usertype;

        $getStudentId = Auth::user()->id;


        if ($usertype == '3') {


            $StudentOldPassword = User::where('id', '=', $getStudentId)->select('users.password')->first();

            $current_password = $request->current_password;
            $new_password = $request->new_password;
            $confirm_new_password = $request->confirm_new_password;

            $new_encrypted_password = Hash::make($confirm_new_password);

            $isOldPasswordValid =  Hash::check($current_password, $StudentOldPassword->password);

            if ($new_password != $confirm_new_password) {
                return redirect()->back()->with('error_message', 'New Password & Confirm New Password must match!');
            }

            if (!$isOldPasswordValid) {
                return redirect()->back()->with('error_message', 'Your Old Password is wrong. Check carefully.');
            }



            User::where('id', '=', $getStudentId)->update(array('password' => $new_encrypted_password));

            StudentsDetails::where('student_id', '=', $getStudentId)->update(array('student_password' => $confirm_new_password));

            return redirect()->back()->with('success_message', 'Password changed successfully       :)');
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }

    public function students_course_reg()
    {

        $usertype = Auth::user()->usertype;

        $getStudentId = Auth::user()->id;


        if ($usertype == '3') {

            if (Auth::user()->reg_complete == 1) {



                $data = User::where('users.id', $getStudentId)->join('students_details', 'users.id', '=', 'students_details.student_id')
                    ->join('countries', 'students_details.country', '=', 'countries.id')
                    ->join('states', 'students_details.state', '=', 'states.id')
                    ->join('cities', 'students_details.city', '=', 'cities.id')
                    ->join('academic_sessions', 'students_details.academic_session', '=', 'academic_sessions.id')
                    ->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')
                    // ->join('levels', 'students_details.level', '=', 'levels.id')
                    ->join('faculties', 'students_details.faculty', '=', 'faculties.id')
                    ->join('departments', 'students_details.department', '=', 'departments.id')
                    // ->join('courses', 'students_details.name_of_certificate_course', '=', 'courses.id')


                    ->select('users.id as id', 'users.*', 'students_details.*',  'countries.name_country', 'states.name_state', 'cities.name_city', 'academic_sessions.academic_session', 'programme_types.programme')->first();

                $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

                $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();

                $getStudentDepartment = StudentsDetails::where('students_details.student_id', $getStudentId)->join('departments', 'students_details.department', '=', 'departments.id')->first();



                $getCurrentStudentInfo = StudentsDetails::where('student_id', '=', $getStudentId)->first();



                $getStudentsData1 = CoursesToDepartment::join('programme_types', 'courses_to_departments.programme_type', '=', 'programme_types.id')
                    ->join('courses', 'courses_to_departments.course_id', '=', 'courses.id')
                    ->join('courses_statuses', 'courses_to_departments.course_status', '=', 'courses_statuses.id')
                    ->join('semesters', 'courses_to_departments.semester_id', '=', 'semesters.id')
                    ->select('courses_to_departments.id', 'courses.course_code', 'courses.course_title', 'courses.course_unit', 'semesters.semester_name', 'courses_statuses.status')
                    ->where('courses_to_departments.department_id', '=', $getCurrentStudentInfo->department)
                    ->where('courses.programme_type', '=', $getCurrentStudentInfo->programme_type)
                    ->where('courses_to_departments.course_status', '=', '1')
                    ->get();

                $getStudentsData2 = CoursesToDepartment::join('programme_types', 'courses_to_departments.programme_type', '=', 'programme_types.id')
                    ->join('courses', 'courses_to_departments.course_id', '=', 'courses.id')
                    ->join('courses_statuses', 'courses_to_departments.course_status', '=', 'courses_statuses.id')
                    ->join('semesters', 'courses_to_departments.semester_id', '=', 'semesters.id')
                    ->select('courses_to_departments.id', 'courses.course_code', 'courses.course_title', 'courses.course_unit', 'semesters.semester_name', 'courses_statuses.status')
                    ->where('courses_to_departments.department_id', '=', $getCurrentStudentInfo->department)
                    ->where('courses.programme_type', '=', $getCurrentStudentInfo->programme_type)
                    ->where('courses_to_departments.course_status', '=', '2')
                    ->get();


                $getStudentsData = StudentsDetails::where('students_details.student_id', $getStudentId)->first()->department;
                // $aaa = $getStudentsData->department;
                // dd($getStudentsData);

                //    $boom =  $getStudentsData1->course_unit->sum();
                //    dd($boom);




                return view("studentdashboard.students_course_reg", compact("data", 'studentsCircularCount', 'studentsCircular', 'getStudentDepartment', 'getStudentsData1', 'getStudentsData2'));
            } else {

                return redirect()->back()->with('error_message', 'You have not completed your Profile! Kindly do so to complete your registration');
            }
        } else {
            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }


    public function getDepartments(Request $request)
    {
        $states = Departments::where('faculty_id', '=', $request->faculty_id)->orderBy('department_name')->get();
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

    public function students_to_course_reg(Request $request)
    {

        $usertype = Auth::user()->usertype;

        $getStudentId = Auth::user()->id;


        if ($usertype == '3') {

            $getStudentsDepartment = StudentsDetails::where('students_details.student_id', $getStudentId)->first()->department;

            $getStudentsLevel = StudentsDetails::where('students_details.student_id', $getStudentId)->first()->level;


            $getStudentsDepartmentMaxUnit = DB::table('students_details')->join('departments_max_units', 'students_details.department', '=', 'departments_max_units.department')->select('departments_max_units.max_unit')->where('students_details.student_id', '=', Auth::user()->id)->first();




            $savedCourses = $request->students_courses_to_register;



            //    COMPARING DEPT MAX UNIT AND
            $fetch =  CoursesToDepartment::whereIn('courses_to_departments.id', $savedCourses)->join('courses', 'courses_to_departments.course_id', '=', 'courses.id')->get();

            $currentRegUnit = 0;

            foreach ($fetch as $list) {
                $currentRegUnit += $list->course_unit;
            }


            if ($currentRegUnit > $getStudentsDepartmentMaxUnit->max_unit) {

                // return error
                return redirect()->back()->with('error_message', 'You have exceeded the maximum Course unit! Kindly remove some elective(s) and try again.');
            }

            // dd($getStudentsDepartmentMaxUnit->max_unit, $savedCourses, $fetch);


            if (StudentsToCourseRegTable::where('student_id', '=', Auth::user()->id)->where('course_id', '=', $savedCourses)->where('level', '=', $getStudentsLevel)->doesntExist()) {

                // if (($sumOfCourseUnits < $getStudentsDepartmentMaxUnit) || ($sumOfCourseUnits == $getStudentsDepartmentMaxUnit)) {


                foreach ($savedCourses as $course) {

                    // $course_status = $request['set_course_status' . $course];

                    $data = new StudentsToCourseRegTable;

                    $data->student_id = Auth::user()->id;
                    $data->course_id = $course;
                    $data->level     = $getStudentsLevel;


                    $data->save();
                }


                return redirect()->back()->with('success_message', 'You have successfully registered your courses    :)');
                // } else {
                //     return redirect()->back()->with('error_message', 'OOPS.....You have exceeded the maximum unit, kindly unclick some elective courses.');
                // }
            } else {
                return redirect()->back()->with('error_message', 'Oops...You have already registered courses for this semester!');
            }
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




    public function services_and_links()
    {

        $data =  Auth::user();

        $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

        $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();


        return view("studentdashboard.services_and_links", compact('studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
    }





    public function forms()
    {

        $data =  Auth::user();

        $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

        $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();


        return view("studentdashboard.forms", compact('studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
    }




    public function course_feedback()
    {

        $data =  Auth::user();

        $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

        $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();


        return view("studentdashboard.course_feedback", compact('studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
    }


    public function submit_course_feedback(Request $request)
    {

        $usertype = Auth::user()->usertype;


        if ($usertype == '3') {

            $data = new CourseFeedback;

            $data->course_name = $request->course_name;

            $data->instructor_name = $request->instructor_name;

            $data->semester_year = $request->semester_year;

            $data->overall_satisfaction = $request->overall_satisfaction;

            $data->clarity_of_topics = $request->clarity_of_topics;

            $data->real_world_relevance = $request->real_world_relevance;

            $data->depth_and_breadth = $request->depth_and_breadth;

            $data->instructional_methods_effectiveness = $request->instructional_methods_effectiveness;

            $data->students_engagements = $request->students_engagements;

            $data->clarity_of_materials = $request->clarity_of_materials;

            $data->Course_materials_availability = $request->Course_materials_availability;

            $data->grading_criteria_clarity = $request->grading_criteria_clarity;

            $data->quality_of_instructor_feedback = $request->quality_of_instructor_feedback;

            $data->additional_comments = $request->additional_comments;


            $data->save();

            return redirect()->back()->with('success_message', 'Feedback has been submitted. Thanks for your time. :)');
        } else {

            return redirect()->back()->with('error_message', 'Access denied!');
        }
    }


    public function tuition_and_fees()
    {

        $data =  Auth::user();

        $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

        $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();


        return view("studentdashboard.tuition_and_fees", compact('studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
    }




    public function view_grades()
    {

        $data =  Auth::user();

        $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

        $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();


        return view("studentdashboard.view_grades", compact('studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
    }




    public function generate_transcript()
    {

        $data =  Auth::user();

        $studentsCircularCount = StudentsCircular::select('students_circulars.title as title', 'students_circulars.content as content')->count();

        $studentsCircular = StudentsCircular::select('students_circulars.id as id', 'students_circulars.title as title', 'students_circulars.content as content')->get();


        return view("studentdashboard.generate_transcript", compact('studentsCircularCount', 'studentsCircular'))->with(['data' => $data]);
    }
}
