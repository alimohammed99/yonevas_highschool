<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'other_names' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user =  User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'other_names' => $input['other_names'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);

       

      


        $saveStudentArr = [
            'user_id' => $user->id,
            'marital_status' => $request->marital_status,
            'date_of_birth' => $request->date_of_birth,
            'zip_code' => $request->zip_code,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'student_password' => $request->religion,
            'country' =>  $request->countries,
            'state' => $request->states,
            'city' => $request->cities,
            'address' =>  $request->address,
            'type_of_enrollment' =>  $request->type_of_enrollment,
            'enrollment_period' =>  $request->enrollment_period,
            'free_time' => $request->free_time,
            'residential_home' => $request->residential_home,
            'languages' => $request->languages,
            'military_force' => $request->military_force,
            'government_official' => $request->government_official,
            'medical_conditions' => $request->medical_conditions,
            'academic_session' => $request->academic_session,
            'currently_studying' => $request->currently_studying,
            'online_classes' => $request->online_classes,
            'group_of_individual_or_organization' => $request->group_of_individual_or_organization,
            'programme_type' => $request->programme_type,
        ];

        // dd( $saveStudentArr);

                $image = $request->student_image;

                $imagename = time(). '.' .$image->getClientOriginalExtension();
                $request->student_image->move('StudentImages', $imagename);

                $saveStudentArr['student_image'] = $imagename;


                if($request->currently_studying == 'Yes'){
                    $saveStudentArr['name_of_current_institution'] = $request->name_of_current_institution;
                    $saveStudentArr['major'] = $request->major;
                    $saveStudentArr['years_of_study'] = $request->years_of_study;
                }else{
                    $saveStudentArr['name_of_current_institution'] ='null';
                    $saveStudentArr['major'] ='null';
                    $saveStudentArr['years_of_study'] ='null';
                }



                if($request->online_classes == 'Yes'){
                    $saveStudentArr['how_long_for_online_classes'] = $request->how_long_for_online_classes;
                }else{
                    $saveStudentArr['how_long_for_online_classes'] = 'null';
                }



                if($request->group_of_individual_or_organization == 'Yes'){
                    $saveStudentArr['name_them'] =  $request->name_them;
                }else{
                    $saveStudentArr['name_them'] = 'null';
                }



                if($request->programme_type == '1'){
                    $saveStudentArr['level'] =  $request->level;
                    $saveStudentArr['faculty'] =  $request->faculty;
                    $saveStudentArr['department'] =   $request->department;
                    $saveStudentArr['name_of_certificate_course'] =  'null';
                }elseif($request->programme_type == '2'){
                    $saveStudentArr['level'] =  'null';
                    $saveStudentArr['faculty'] =  'null';
                    $saveStudentArr['department'] =  'null';
                    $saveStudentArr['name_of_certificate_course'] =  $request->name_of_certificate_course;
                }

                StudentsDetails::create($saveStudentArr);

                // dd( $saveStudentArr);

                // dd($request);

                return $user;

                

    }
  
}












