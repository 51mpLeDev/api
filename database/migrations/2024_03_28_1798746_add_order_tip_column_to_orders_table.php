<?php

namespace Firdavs\Api\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderTipColumnToOrdersTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('orders', 'order_tip')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->string('order_tip')->nullable();
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('orders', 'order_tip')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('order_tip');
            });
        }
    }
}
