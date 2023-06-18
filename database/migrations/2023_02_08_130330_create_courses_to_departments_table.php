<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesToDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_to_departments', function (Blueprint $table) {
            $table->id();
            $table->string('programme_type');
            $table->string('course_id');
            $table->string('department_id');
            $table->string('level_id');
            $table->string('semester_id');
            $table->string('course_status');


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
        Schema::dropIfExists('courses_to_departments');
    }
}
