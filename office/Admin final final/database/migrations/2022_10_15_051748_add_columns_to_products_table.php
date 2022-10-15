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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('cate_id');
			$table->foreign('cate_id')->references('id')->on('categories')->after('id');
            $table->string('product_name')->after('cate_id');
            $table->string('product_img')->after('product_name');
            $table->string('url')->after('product_img');
            $table->string('meta_title')->after('url');
            $table->string('meta_description')->after('meta_title');
            $table->string('keywords')->after('meta_description');
            $table->string('product_name_fr')->after('keywords');
            $table->string('meta_title_fr')->after('product_name_fr');
            $table->string('meta_description_fr')->after('meta_title_fr');
            $table->string('keywords_fr')->after('meta_description_fr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
