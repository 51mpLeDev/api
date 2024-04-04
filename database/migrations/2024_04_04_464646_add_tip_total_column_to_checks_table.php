<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('checks', function (Blueprint $table){
            $table->string('tip_total')->nullable();
        });
    }

    public function down()
    {
        Schema::table('checks', function (Blueprint $table){
            $table->dropColumn('tip_total');
        });
    }
};
