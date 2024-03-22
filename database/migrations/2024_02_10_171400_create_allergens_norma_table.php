<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergensNormaTable extends Migration
{
    public function up()
    {
        Schema::create('allergens_norma', function (Blueprint $table){
            $table->id('allergens_norma_id');
            $table->unsignedBigInteger('allergen_id')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->integer('norma')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('allergens_norma');
    }
}
