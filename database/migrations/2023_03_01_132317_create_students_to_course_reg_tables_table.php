<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsToCourseRegTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_to_course_reg_tables', function (Blueprint $table) {
            $table->id();

            $table->string('student_id');
            $table->string('course_id');
            // $table->string('prog_type');
            $table->string('level');
            $table->string('semester');

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
        Schema::dropIfExists('students_to_course_reg_tables');
    }
}
