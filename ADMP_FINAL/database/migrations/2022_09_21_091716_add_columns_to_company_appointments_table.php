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
        Schema::table('company_appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors')->after('id');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('appointments')->after('company_id');
            $table->unsignedBigInteger('slot_id');
            $table->foreign('slot_id')->references('id')->on('visitor_slots')->after('slot_id');
            $table->date('companyappdate')->after('slot_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_appointments', function (Blueprint $table) {
            //
        });
    }
};
