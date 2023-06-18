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

use App\Models\StudentsCircular;

use App\Models\AttendanceResponse;

use App\Models\TeachersToCourses;


class TeacherController extends Controller
{
    



    public function manage_teacher_profile(){

       
  $usertype = Auth::user()->usertype;

  $getCurrentUserId = Auth::user()->id;



  if($usertype == '2'){


      $data = User::where('users.id', $getCurrentUserId)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
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
      ->join('teachers_to_courses', 'users.id', '=', 'teachers_to_courses.teacher_id')

      ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', 'staff_details.staff_cv as file', 'staff_details.twitter_page', 'staff_details.instagram_page', 'staff_details.facebook_page', 'staff_details.linkedin_page')->first();

    // dd($data);

    return view("teacherdashboard.manage_teacher_profile", compact("data"));

  }else{

    return redirect()->back()->with('error_message', 'Access denied!');
    
    }
  }








  public function edit_staff_profile($id){


      
    $usertype = Auth::user()->usertype;

    $getTeacherId = Auth::user()->id;
  
  
  
    if($usertype == '2'){
  
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
      ->join('teachers_to_courses', 'users.id', '=', 'teachers_to_courses.teacher_id')
  
      ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', )->first();
  
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
  
      return view("teacherdashboard.edit_staff_profile", compact('data', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9', 'data10', 'data11', 'acad'));
  
    }else{
  
      return redirect()->back()->with('error_message', 'Access denied!');
      
      }
      
  }







  public function update_staff_profile(Request $request, $id){

    $usertype = Auth::user()->usertype;
  
  
    if($usertype == '2'){



      $data = User::find($id);
 
    
              // $data->first_name = $request->first_name;
    
              // $data->last_name = $request->surname;
    
              // $data->other_names = $request->other_names;
    
              $data->email = $request->email;
    
              $data->phone = $request->phone_number;
    
              $data->password = Hash::make($request->password);
    

    
              $data->save();


    

      $data2 = StaffDetails::where('staff_id',$id)->first();
    
              $data2->marital_status = $request->marital_status;
    
              $data2->date_of_birth = $request->date_of_birth;
    
              $data2->zip_code = $request->zip_code;
    
              $data2->gender = $request->gender;
    
              $data2->religion = $request->religion;
    
              $data2->staff_password = $request->password;


    
                            $image = $request->image;

                            if($image){
    
                            $imagename = time(). '.' .$image->getClientOriginalExtension();
                            $request->image->move('StaffImages', $imagename);
                          
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
    
              // $data2->staff_role = $request->staff_role;
    
              // $data2->teaching_or_nonteaching = $request->teaching_or_nonteaching;
    
    
                            // $get_staff_id = $data->id;
    
                            // $data2->staff_id = $get_staff_id;
    
    
              $data2->save();
    
    
      return redirect()->back()->with('success_message', 'Changes made successfully     :)');

    }else{

      return redirect()->back()->with('error_message', 'Access denied!');

    }
  
}




public function change_teacher_password(){

  $usertype = Auth::user()->usertype;

  $getTeacherId = Auth::user()->id;
  
  
  if($usertype == '2'){

    $data = User::where('users.id', $getTeacherId)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
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
    ->join('teachers_to_courses', 'users.id', '=', 'teachers_to_courses.teacher_id')

    ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', )->first();

    return view("teacherdashboard.change_teacher_password", compact('data'));
  
  }else{

    return redirect()->back()->with('error_message', 'Access denied!');

  }




}








public function update_staff_password(Request $request){

  $usertype = Auth::user()->usertype;

  $getTeacherId = Auth::user()->id;


  if($usertype == '2'){


    $TeacherOldPassword = User::where('id', '=', $getTeacherId)->select('users.password')->first();

    $current_password = $request->current_password;
    $new_password = $request->new_password;
    $confirm_new_password = $request->confirm_new_password;

    $new_encrypted_password = Hash::make($confirm_new_password);

    $isOldPasswordValid =  Hash::check($current_password, $TeacherOldPassword->password);

         if($new_password != $confirm_new_password){
            return redirect()->back()->with('error_message', 'New Password & Confirm New Password must match!'); 
         }

         if(!$isOldPasswordValid){
          return redirect()->back()->with('error_message', 'Your Old Password is wrong. Check carefully.');
         }



         User::where('id', '=', $getTeacherId)->update(array('password' => $new_encrypted_password));

         StaffDetails::where('staff_id', '=', $getTeacherId)->update(array('staff_password' => $confirm_new_password));

    return redirect()->back()->with('success_message', 'Password changed successfully       :)');

  }else{

    return redirect()->back()->with('error_message', 'Access denied!');

  }

}







public function view_my_diploma_students(){

  $usertype = Auth::user()->usertype;

  $getCurrentUserId = Auth::user()->id;
  
  
  if($usertype == '2'){


    $data = User::where('users.id', $getCurrentUserId)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
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
    ->join('teachers_to_courses', 'users.id', '=', 'teachers_to_courses.teacher_id')

    ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', 'staff_details.staff_cv as file', 'staff_details.twitter_page', 'staff_details.instagram_page', 'staff_details.facebook_page', 'staff_details.linkedin_page', 'teachers_to_courses.department', 'teachers_to_courses.name_of_certificate_course')->first();

   


  

    $data2 = DB::table('users')->join('students_details', 'users.id', '=', 'students_details.student_id')->join('programme_types', 'students_details.programme_type', '=', 'programme_types.id')->select('users.id as id', 'users.first_name', 'users.last_name', 'students_details.student_image', 'users.email', 'users.phone', 'students_details.gender', 'programme_types.programme', 'students_details.date_of_birth', 'students_details.student_password', 'students_details.student_matric_number')->where('students_details.programme_type', '=', '1')->get();

    dd($data2);
    // dd('here');

    return view("teacherdashboard.view_my_diploma_students", compact('data', 'data2'));



   }else{

    return redirect()->back()->with('error_message', 'Access denied!');

  }
  

}






public function view_my_diploma_courses(){

  $usertype = Auth::user()->usertype;

  $getCurrentUserId = Auth::user()->id;
  
  
  if($usertype == '2'){

    $data = User::where('users.id', $getCurrentUserId)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
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
    ->join('teachers_to_courses', 'users.id', '=', 'teachers_to_courses.teacher_id')

    ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', 'staff_details.staff_cv as file', 'staff_details.twitter_page', 'staff_details.instagram_page', 'staff_details.facebook_page', 'staff_details.linkedin_page', 'teachers_to_courses.department', 'teachers_to_courses.name_of_certificate_course')->first();


    $data2 = DB::table('courses')
    ->join('teachers_to_courses', 'courses.id', '=', 'teachers_to_courses.course')
       ->join('faculties', 'courses.faculty_id', '=', 'faculties.id')
          ->join('departments', 'courses.department_id', '=', 'departments.id')
            ->join('levels', 'courses.level', '=', 'levels.id')
          ->join('semesters', 'courses.semester', '=', 'semesters.id')
         ->join('courses_statuses', 'courses.course_status', '=', 'courses_statuses.id')
        ->select('courses.id as id','faculties.faculty_name', 'departments.department_name', 'courses.course_code', 'courses_statuses.status', 'levels.level_name', 'courses.course_title', 'courses.course_description', 'semesters.semester_name')
      ->where('teachers_to_courses.teacher_id', '=', Auth::user()->id)->where('teachers_to_courses.programme_type', '=', '1')->get();

    // dd($data2);

    return view("teacherdashboard.view_my_diploma_courses", compact('data', 'data2'));


  }else{

    return redirect()->back()->with('error_message', 'Access denied!');

  }




}














public function view_my_certificate_courses(){

  $usertype = Auth::user()->usertype;

  $getCurrentUserId = Auth::user()->id;
  
  
  if($usertype == '2'){

    $data = User::where('users.id', $getCurrentUserId)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
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
    ->join('teachers_to_courses', 'users.id', '=', 'teachers_to_courses.teacher_id')

    ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', 'staff_details.staff_cv as file', 'staff_details.twitter_page', 'staff_details.instagram_page', 'staff_details.facebook_page', 'staff_details.linkedin_page', 'teachers_to_courses.department', 'teachers_to_courses.name_of_certificate_course')->first();


    $data2 = DB::table('courses')
    ->join('teachers_to_courses', 'courses.id', '=', 'teachers_to_courses.name_of_certificate_course')
        ->select('course_title')
      ->where('teachers_to_courses.teacher_id', '=', Auth::user()->id)->where('teachers_to_courses.programme_type', '=', '2')->get();

    // dd($data2);

    return view("teacherdashboard.view_my_certificate_courses", compact('data', 'data2'));


  }else{

    return redirect()->back()->with('error_message', 'Access denied!');

  }




}











public function teacher_view_course_profile($id){

  $usertype = Auth::user()->usertype;
  
  $getCurrentUserId = Auth::user()->id;

  if($usertype == '2'){



    $data = User::where('users.id', $getCurrentUserId)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
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
    ->join('teachers_to_courses', 'users.id', '=', 'teachers_to_courses.teacher_id')

    ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', 'staff_details.staff_cv as file', 'staff_details.twitter_page', 'staff_details.instagram_page', 'staff_details.facebook_page', 'staff_details.linkedin_page', 'teachers_to_courses.department', 'teachers_to_courses.name_of_certificate_course')->first();


    $join = DB::table('courses')->join('faculties', 'courses.faculty_id', '=', 'faculties.id')

    ->join('departments', 'courses.department_id', '=', 'departments.id')

      ->join('semesters', 'courses.semester', '=', 'semesters.id')

        ->join('courses_statuses', 'courses.course_status', '=', 'courses_statuses.id')

        ->join('programme_types', 'courses.programme_type', '=', 'programme_types.id')
        
        ->join('levels', 'courses.level', '=', 'levels.id')
        
        
 ->select('courses.id as id', 'faculties.faculty_name', 'departments.department_name', 'courses.course_code', 'courses.course_title', 'courses.course_description', 'courses_statuses.status', 'courses.course_unit', 'courses.image', 'semesters.semester_name', 'levels.level_name')->where('programme_type', '=', '1')->where('courses.id', '=', $id)->first();


//  dd($join);

  return view("teacherdashboard.teacher_view_course_profile", compact('join', 'data'));
}else{
return redirect()->back()->with('error_message', 'Access denied!');
}
}










public function view_my_cv(){
  $usertype = Auth::user()->usertype;


  if($usertype == '2'){

    $getCurrentUserId = Auth::user()->id;

  // $data = StaffDetails::where('staff_id', $id)->first();

  $data = User::where('users.id', $getCurrentUserId)->join('staff_details', 'users.id', '=', 'staff_details.staff_id')
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
  ->join('teachers_to_courses', 'users.id', '=', 'teachers_to_courses.teacher_id')

  ->select('users.id as id', 'users.first_name', 'users.last_name', 'users.other_names', 'staff_roles.staff_roles', 'teaching_or_non_teachings.teaching_or_non_teaching', 'staff_details.staff_image', 'users.email', 'users.phone', 'countries.name_country', 'states.name_state', 'cities.name_city', 'staff_details.address', 'marital_statuses.status', 'staff_details.date_of_birth', 'staff_details.zip_code', 'religions.religion_name', 'staff_details.staff_password', 'staff_details.gender', 'highest_education.highest_education', 'staff_details.name_of_highest_education', 'staff_details.elementary_school', 'staff_details.elementary_school_year', 'staff_details.secondary_school', 'staff_details.secondary_school_year', 'staff_details.higher_institution', 'staff_details.higher_institution_year', 'staff_details.currently_employed', 'staff_details.looking_for_employment', 'staff_details.name_of_previous_employer', 'staff_details.job_start_end', 'staff_details.reasons_for_living', 'staff_details.employer_contact', 'should_we_contact_thems.should_we_contact_them', 'teaching_experiences.teaching_experience', 'staff_details.years_of_teaching_experience', 'computer_experiences.computer_experience', 'staff_details.years_of_computer_experience', 'staff_details.guarantor_name', 'staff_details.guarantor_email', 'staff_details.guarantor_phone', 'staff_details.package_one', 'staff_details.package_two', 'staff_details.package_three', 'staff_details.package_four', 'staff_details.free_time', 'staff_details.residential_home', 'staff_details.group_of_individual_or_organization', 'staff_details.name_them', 'staff_details.languages', 'military_forces.military_force', 'government_officials.government_official', 'medical_conditions.medical_conditions', 'staff_details.staff_cv as file', 'staff_details.twitter_page', 'staff_details.staff_cv', 'staff_details.instagram_page', 'staff_details.facebook_page', 'staff_details.linkedin_page', 'teachers_to_courses.department', 'teachers_to_courses.name_of_certificate_course')->first();


  // dd($data);
  return view("teacherdashboard.view_my_cv", compact('data'));
}else{
return redirect()->back()->with('error_message', 'Access denied!');
}
}







public function download_my_cv(Request $request, $file){
  $usertype = Auth::user()->usertype;


  if($usertype == '2'){
  return response()->download(public_path('staffcv/' . $file));
}else{
return redirect()->back()->with('error_message', 'Access denied!');
}
}




















}
