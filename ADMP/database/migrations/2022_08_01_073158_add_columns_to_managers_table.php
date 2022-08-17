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
        Schema::table('managers', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
			$table->foreign('company_id')->references('id')->on('companies')->after('id');
            $table->string('Manager_name')->after('company_id');
            $table->string('first_name')->after('Manager_name');
            $table->string('last_name')->after('first_name');
            $table->string('email')->after('last_name');
            $table->string('password')->after('email');
            $table->string('mprofile_img')->after('password');
            $table->string('visiting_card')->after('mprofile_img');
            $table->enum('status',['Block','Unblock'])->default('Unblock')->after('visiting_card');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('managers', function (Blueprint $table) {
            //
        });
    }
};
