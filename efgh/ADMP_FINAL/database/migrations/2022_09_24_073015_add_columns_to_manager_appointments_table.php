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
        Schema::table('manager_appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors')->after('id');
            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('managers')->after('doctor_id');
            $table->unsignedBigInteger('slot_id');
            $table->foreign('slot_id')->references('id')->on('visitor_slots')->after('manager_id');
            $table->date('managerappdate')->after('slot_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manager_appointments', function (Blueprint $table) {
            //
        });
    }
};
