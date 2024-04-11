<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('order_types', function (Blueprint $table){
            $table->text('value')->nullable();
        });
    }

    public function down()
    {
        Schema::table('order_types', function (Blueprint $table){
            $table->dropColumn('value');
        });
    }
};
