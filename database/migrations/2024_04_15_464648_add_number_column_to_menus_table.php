<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('menus', function (Blueprint $table){
            $table->integer('number')->default(1);
        });
    }

    public function down()
    {
        Schema::table('menus', function (Blueprint $table){
            $table->dropColumn('number');
        });
    }
};
