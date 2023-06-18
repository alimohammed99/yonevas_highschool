  public function edit_staffs($id)
  {



  $usertype = Auth::user()->usertype;



  if ($usertype == '1') {






  $data = User::where('users.id', $id)->first();

  $data2 = StaffDetails::where('staff_id', '=', $id)->join('marital_statuses', 'staff_details.marital_status', '=', 'marital_statuses.id')
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
  ->join('teaching_or_non_teachings', 'staff_details.teaching_or_nonteaching', '=', 'teaching_or_non_teachings.id')->select('staff_details.marital_status')->first();


dd($data2);








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

  // }else{

  return redirect()->back()->with('error_message', 'Access denied!');
  }
  }
