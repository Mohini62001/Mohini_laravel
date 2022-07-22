<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productadvs', function (Blueprint $table) {
            $table->unsignedBigInteger('cate_id');
			$table->foreign('cate_id')->references('id')->on('categories')->after('id');
			$table->string('img')->after('cate_id');
			$table->string('productname')->after('img');
			$table->string('productprice')->after('productname');
			$table->string('description')->after('productprice');
		    $table->string('productlink')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productadvs', function (Blueprint $table) {
            //
        });
    }
};
