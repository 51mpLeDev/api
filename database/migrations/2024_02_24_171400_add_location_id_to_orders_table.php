<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationIdToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table){
            $table->integer('table_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table){
            $table->dropColumn('table_id');
        });
    }
}
