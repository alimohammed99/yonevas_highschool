<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_details', function (Blueprint $table) {
            $table->id();

            $table->string('staff_id');  
            $table->string('marital_status'); 
            $table->string('date_of_birth'); 
            $table->string('zip_code'); 
            $table->string('gender'); 
            $table->string('staff_image'); 
            $table->string('staff_password'); 
            $table->string('religion'); 
            $table->string('country'); 
            $table->string('state'); 
            $table->string('city'); 
            $table->string('address'); 
            $table->string('facebook_page')->nullable();
            $table->string('twitter_page')->nullable(); 
            $table->string('instagram_page')->nullable(); 
            $table->string('linkedin_page')->nullable(); 
            $table->string('highest_education');
            $table->string('name_of_highest_education');
            $table->string('elementary_school');
            $table->string('elementary_school_year');
            $table->string('secondary_school');
            $table->string('secondary_school_year');
            $table->string('higher_institution');
            $table->string('higher_institution_year');
            $table->string('currently_employed');
            $table->string('looking_for_employment');
            $table->string('name_of_previous_employer');
            $table->string('job_start_end');
            $table->string('reasons_for_living');
            $table->string('employer_contact');
            $table->string('should_we_contact_them');
            $table->string('teaching_experience');
            $table->string('years_of_teaching_experience');
            $table->string('computer_opearting_experience');
            $table->string('years_of_computer_experience');
            $table->string('guarantor_name');
            $table->string('guarantor_email');
            $table->string('guarantor_phone');
            $table->string('package_one')->nullable();
            $table->string('package_two')->nullable();
            $table->string('package_three')->nullable();
            $table->string('package_four')->nullable();
            $table->string('free_time');
            $table->string('residential_home');
            $table->string('group_of_individual_or_organization');
            $table->string('name_them')->nullable();
            $table->string('languages');
            $table->string('military_force');
            $table->string('government_official');
            $table->string('medical_conditions');
            $table->string('staff_role');
            $table->string('teaching_or_nonteaching');
            $table->string('academic_session');
            $table->string('staff_cv');
            $table->string('account_holder_name');
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('branch');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_details');
    }
}
