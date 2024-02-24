<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsInOrderTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table){
            $table->string('last_name')->change()->nullable();
            $table->string('email')->change()->nullable();
            $table->string('telephone')->change()->nullable();
            $table->string('payment')->change()->nullable();
        });
    }
}
