<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('cust_id');
			$table->foreign('cust_id')->references('id')->on('customers')->after('id');
			$table->unsignedBigInteger('cadv_id');
			$table->foreign('cadv_id')->references('id')->on('caradvs')->after('cust_id');
			$table->string('name')->after('cadv_id');
		    $table->string('mobile')->after('name');
			$table->string('email')->after('mobile');
			$table->string('city')->after('email');
			$table->string('address')->after('city');
			$table->string('zipcode')->after('address');
			$table->string('totalrent')->after('zipcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
}
