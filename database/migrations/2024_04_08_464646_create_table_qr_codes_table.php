<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('table_qr_codes', function (Blueprint $table){
            $table->id('table_qr_code_id');
            $table->unsignedBigInteger('table_id');
            $table->text('hash')->nullable();
            $table->text('image_name')->nullable();
            $table->text('url')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('table_qr_codes');
    }
};
