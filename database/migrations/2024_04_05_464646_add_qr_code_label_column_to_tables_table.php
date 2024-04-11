<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tables', function (Blueprint $table){
            $table->text('qrcode_label')->nullable();
        });
    }

    public function down()
    {
        Schema::table('tables', function (Blueprint $table){
            $table->dropColumn('qrcode_label');
        });
    }
};
