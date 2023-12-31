<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemsToDeliveryPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_periods', function (Blueprint $table) {
            $table->string('from')->nullable();
            $table->string('to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_periods', function (Blueprint $table) {
            $table->dropColumn('from');
            $table->dropColumn('to');
        });
    }
}
