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
        Schema::table('categories', function (Blueprint $table) {
            $table->string('parent_id')->after('id');
            $table->string('category_name')->after('parent_id');
            $table->string('category_img')->after('category_name');
            $table->string('banner_img')->after('category_img');
            $table->string('short_title')->after('banner_img');
            $table->string('short_description')->after('short_title');
            $table->string('description_title')->after('short_description');
            $table->string('description')->after('description_title');
            $table->string('home_cate_img')->after('description');
            $table->string('url')->after('home_cate_img');
            $table->string('order')->after('url');
            $table->string('meta_title')->after('order');
            $table->string('meta_description')->after('meta_title');
            $table->string('keywords')->after('meta_description');
            $table->string('category_name_fr')->after('keywords');
            $table->string('short_title_fr')->after('category_name_fr');
            $table->string('short_description_fr')->after('short_title_fr');
            $table->string('description_title_fr')->after('short_description_fr');
            $table->string('description_fr')->after('description_title_fr');
            $table->string('meta_title_fr')->after('description_fr');
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
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
};
