<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_feedback', function (Blueprint $table) {
            $table->id();

            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('student_or_not')->nullable();
            $table->string('taken_online_classes_or_not')->nullable();
            $table->string('academic_experience')->nullable();
            $table->string('interested')->nullable();
            $table->string('familiar_with_yonevas')->nullable();
            $table->string('opportunity_to_participate')->nullable();
            $table->string('age_range')->nullable();
            $table->string('computer_knowledge')->nullable();
            $table->string('class_schedule')->nullable();
            $table->string('likely_area_of_study')->nullable();
            $table->string('scholarship')->nullable();
            $table->string('highest_level_of_education')->nullable();
            $table->string('phone')->nullable();

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
        Schema::dropIfExists('course_feedback');
    }
}
