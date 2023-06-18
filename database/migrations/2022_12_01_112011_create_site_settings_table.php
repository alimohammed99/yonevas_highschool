<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id(); 

            $table->string('site_name'); 
            $table->string('site_phone'); 
            $table->string('site_address'); 
            $table->string('site_about'); 
            $table->string('site_facebook'); 
            $table->string('site_twitter'); 
            $table->string('site_instagram'); 
            $table->string('site_youtube'); 
            $table->string('site_quicknotice'); 

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
        Schema::dropIfExists('site_settings');
    }
}
