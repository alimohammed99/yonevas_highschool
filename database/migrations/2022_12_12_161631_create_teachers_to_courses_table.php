<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_to_courses', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id');
            $table->string('programme_type');
            $table->string('level')->nullable();
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->string('course')->nullable();
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
        Schema::dropIfExists('teachers_to_courses');
    }
}
