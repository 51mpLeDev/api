<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('checks', function (Blueprint $table){
            $table->id('check_id');
            $table->unsignedBigInteger('local_id');
            $table->json('orders_ids')->nullable();
            $table->string('check_total')->nullable();
            $table->integer('number_check')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('checks');
    }
};
