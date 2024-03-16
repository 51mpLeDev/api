<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsConfigTable extends Migration
{
    public function up()
    {
        Schema::create('models_config', function (Blueprint $table) {
            $table->id('model_config_id');
            $table->string('model');
            $table->json('fields')->nullable();
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('location_id')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('models_config');
    }
}
