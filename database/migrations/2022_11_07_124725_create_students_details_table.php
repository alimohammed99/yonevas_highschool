<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_details', function (Blueprint $table) {
            $table->id();

            $table->string('student_id');  
            $table->string('student_matric_number')->nullable(); 
            $table->string('marital_status'); 
            $table->string('date_of_birth'); 
            $table->string('zip_code'); 
            $table->string('gender'); 
            $table->string('student_image'); 
            $table->string('student_password'); 
            $table->string('religion'); 
            $table->string('country'); 
            $table->string('state'); 
            $table->string('city'); 
            $table->string('address'); 
            $table->string('facebook_page')->nullable();
            $table->string('twitter_page')->nullable(); 
            $table->string('instagram_page')->nullable(); 
            $table->string('linkedin_page')->nullable(); 
            $table->string('currently_studying');
            $table->string('name_of_current_institution')->nullable();
            $table->string('major')->nullable();
            $table->string('years_of_study')->nullable();
            $table->string('online_classes');
            $table->string('how_long_for_online_classes')->nullable();
            // $table->string('what_do_you_want_to_study');
            $table->string('type_of_enrollment');
            $table->string('enrollment_period');
            $table->string('free_time');
            $table->string('residential_home');
            $table->string('group_of_individual_or_organization');
            $table->string('name_them')->nullable();
            $table->string('languages');
            $table->string('military_force');
            $table->string('government_official');
            $table->string('medical_conditions');

            $table->string('next_of_kin_name');
            $table->string('next_of_kin_email');
            $table->string('next_of_kin_phone');
            $table->string('next_of_kin_address');
            
            $table->string('academic_session');
            $table->string('programme_type');
            $table->string('level')->nullable();
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->string('name_of_certificate_course')->nullable();


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
        Schema::dropIfExists('students_details');
    }
}
