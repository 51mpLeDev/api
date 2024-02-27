<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLoadStatusToLocationsTable extends Migration
{
    public function up()
    {
        Schema::table('locations', function (Blueprint $table){
            $table->smallInteger('load_status');
        });
    }

    public function down()
    {
        Schema::table('locations', function (Blueprint $table){
            $table->dropColumn('load_status');
        });
    }
}
