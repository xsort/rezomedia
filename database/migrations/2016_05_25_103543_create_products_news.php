<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_news', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id')->unsigned();
            $table->integer('news_id')->unsigned();
        });
        Schema::table('products_news', function(Blueprint $table) {
            $table->foreign('products_id')->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('products_news', function(Blueprint $table) {
            $table->foreign('news_id')->references('id')->on('news')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_news', function(Blueprint $table) {
            $table->dropForeign('products_news_products_id_foreign');
        });

        Schema::table('products_news', function(Blueprint $table) {
            $table->dropForeign('products_news_news_id_foreign');
        });
        Schema::drop('products_news');
    }
}
