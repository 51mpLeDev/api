<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('allergens', function (Blueprint $table){
            $table->string('locale')->nullable();
        });
    }

    public function down()
    {
        Schema::table('allergens', function (Blueprint $table){
            $table->dropColumn('locale');
        });
    }
};
