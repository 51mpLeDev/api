<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGooglemapsIdColumnToLocationsTable extends Migration
{
    public function up()
    {
        Schema::table('locations', function (Blueprint $table){
            $table->integer('googlemaps_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('locations', function (Blueprint $table){
            $table->dropColumn('googlemaps_id');
        });
    }
}
