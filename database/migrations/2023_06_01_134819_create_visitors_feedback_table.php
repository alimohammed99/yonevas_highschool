<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors_feedback', function (Blueprint $table) {
            $table->id();

            $table->string('overall_impression');
            $table->string('navigation');
            $table->string('design_and_visual_appeal');
            $table->string('responsiveness');
            $table->string('clarity_info');
            $table->string('completeness_of_info');
            $table->string('load_time');
            $table->string('interactive_elements');
            $table->string('suggestions');
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();

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
        Schema::dropIfExists('visitors_feedback');
    }
}
