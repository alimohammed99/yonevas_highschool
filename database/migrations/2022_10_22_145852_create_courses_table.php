<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('faculty_id');
            $table->string('department_id');
            $table->string('level');
            $table->string('semester');
            $table->string('course_code');
            $table->string('course_title');
            $table->string('course_description');
            $table->string('course_status');
            $table->string('course_unit');
            $table->string('academic_session');
            $table->string('image');
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
        Schema::dropIfExists('courses');
    }
}
