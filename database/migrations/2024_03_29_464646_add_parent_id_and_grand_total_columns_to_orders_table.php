<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table){
            $table->integer('parent_id')->default(0);
            $table->string('grand_total')->nullable();
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table){
            $table->dropColumn(['parent_id', 'grand_total']);
        });
    }
};
