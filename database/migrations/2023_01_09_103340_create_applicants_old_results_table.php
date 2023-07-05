<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsOldResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants_old_results', function (Blueprint $table) {
            $table->id();

            $table->string('student_id');

            $table->string('utme')->nullable();
            $table->string('utme_fileExtensionType')->nullable();

            $table->string('waec_or_neco_1')->nullable();
            $table->string('waec_or_neco_1_fileExtensionType')->nullable();

            $table->string('waec_or_neco_2')->nullable();
            $table->string('waec_or_neco_2_fileExtensionType')->nullable();

            $table->string('original_certificate')->nullable();
            $table->string('original_certificate_fileExtensionType')->nullable();

            $table->string('birth_certificate')->nullable();
            $table->string('birth_certificate_fileExtensionType')->nullable();

            $table->string('valid_form_of_id')->nullable();
            $table->string('valid_form_of_id_fileExtensionType')->nullable();

            $table->string('letter_of_sponsorship')->nullable();
            $table->string('letter_of_sponsorship_fileExtensionType')->nullable();

            $table->string('passport')->nullable();
            $table->string('passport_fileExtensionType')->nullable();

            $table->string('status');

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
        Schema::dropIfExists('applicants_old_results');
    }
}
