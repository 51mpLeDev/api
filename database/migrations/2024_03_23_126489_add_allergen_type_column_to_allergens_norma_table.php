<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAllergenTypeColumnToAllergensNormaTable extends Migration
{
    public function up()
    {
        Schema::table('allergens_norma', function (Blueprint $table){
            $table->string('allergen_type')->nullable();
        });
    }

    public function down()
    {
        Schema::table('allergens_norma', function (Blueprint $table){
            $table->dropColumn('allergen_type');
        });
    }
}
