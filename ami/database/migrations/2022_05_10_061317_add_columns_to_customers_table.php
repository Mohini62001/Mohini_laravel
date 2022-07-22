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
        Schema::table('customers', function (Blueprint $table) {
			 $table->string('img')->after('id')->default('null');
             $table->string('username')->after('img');
			 $table->string('name')->after('username'); 
			 $table->string('password')->after('name');
			 $table->string('email')->after('password');
			 $table->string('mobileno')->after('email');
			 $table->string('address')->after('mobileno');
			 $table->enum('status',['Block','Unblock'])->default('Unblock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
};
