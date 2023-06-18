<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_applications', function (Blueprint $table) {
            $table->id();

            $table->string('position_applying_for');
            $table->string('full_name');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip_code');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('highest_degree_obtained')->nullable();
            $table->string('name_of_institution')->nullable();
            $table->string('major')->nullable();
            $table->date('graduation_date')->nullable();
            $table->string('company_name_1')->nullable();
            $table->string('position_1')->nullable();
            $table->date('date_employed_1')->nullable();
            $table->string('reasons_for_leaving_1')->nullable();
            $table->string('company_name_2')->nullable();
            $table->string('position_2')->nullable();
            $table->date('date_employed_2')->nullable();
            $table->string('reasons_for_leaving_2')->nullable();
            $table->string('referee_name_1')->nullable();
            $table->string('referee_email_1')->nullable();
            $table->string('referee_phone_1')->nullable();
            $table->string('referee_relationship_1')->nullable();
            $table->string('referee_name_2')->nullable();
            $table->string('referee_email_2')->nullable();
            $table->string('referee_phone_2')->nullable();
            $table->string('referee_relationship_2')->nullable();
            $table->string('referee_name_3')->nullable();
            $table->string('referee_email_3')->nullable();
            $table->string('referee_phone_3')->nullable();
            $table->string('referee_relationship_3')->nullable();
            $table->string('certification_or_license')->nullable();
            $table->string('issuing_organization')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('signature')->nullable();
            $table->date('Date')->nullable();

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
        Schema::dropIfExists('employee_applications');
    }
}
