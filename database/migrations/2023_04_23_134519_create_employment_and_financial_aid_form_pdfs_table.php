<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentAndFinancialAidFormPdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_and_financial_aid_form_pdfs', function (Blueprint $table) {
            $table->id();

            $table->string('employee_application_form')->nullable();
            $table->string('financial_aid_form')->nullable();

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
        Schema::dropIfExists('employment_and_financial_aid_form_pdfs');
    }
}
