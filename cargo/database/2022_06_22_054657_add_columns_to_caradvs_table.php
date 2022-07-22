<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCaradvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caradvs', function (Blueprint $table) {
            $table->unsignedBigInteger('cust_id');
			$table->foreign('cust_id')->references('id')->on('customers')->after('id');
			$table->unsignedBigInteger('ctype_id');
			$table->foreign('ctype_id')->references('id')->on('cartypes')->after('cust_id');
			$table->string('img')->after('ctype_id');
			$table->string('title')->after('img');
			$table->string('rent')->after('title');
			$table->string('model')->after('rent');
			$table->string('description')->after('model');
		    $table->string('mobile')->after('description');
			$table->string('email')->after('mobile');
			$table->string('city')->after('email');
			$table->string('address')->after('city');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caradvs', function (Blueprint $table) {
            //
        });
    }
}
