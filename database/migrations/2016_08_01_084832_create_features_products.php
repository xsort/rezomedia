<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features_products', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id')->unsigned();
            $table->integer('features_id')->unsigned();
            $table->integer('value')->index();

            $table->foreign('products_id')->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('features_id')->references('id')->on('features')
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
        Schema::table('features_products', function(Blueprint $table) {
            $table->dropForeign('features_products_products_id_foreign');
        });

        Schema::table('products_news', function(Blueprint $table) {
            $table->dropForeign('features_products_features_id_foreign');
        });
        Schema::drop('features_products');
    }
}
