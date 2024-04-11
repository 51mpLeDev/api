<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_types', function (Blueprint $table){
            $table->id('order_type_id');
            $table->text('type')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_types');
    }
};
