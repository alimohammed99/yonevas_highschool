<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePublicViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_public_views', function (Blueprint $table) {
            $table->id();

            $table->string('programme_name');
            $table->string('programme_description');
            $table->string('estimated_course');
            $table->string('programme_length');
            $table->string('medium');
            $table->string('start_terms');
            $table->string('awards_offered');
            $table->string('prerequisites');
            // $table->string('programme_name');

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
        Schema::dropIfExists('course_public_views');
    }
}
