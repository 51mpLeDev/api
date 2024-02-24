<?php

namespace Firdavs\Api\Database\Migrations;


use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateLocationSettings extends Migration
{
    public function up()
    {
        if (Schema::hasTable('location_settings')){
            return;
        }
        Schema::create('location_settings', function ($table){
            $table->increments('id')->unsigned();
            $table->integer('settings_id')->nulable();
            $table->integer('location_id')->nulable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('location_settings');
    }
}
