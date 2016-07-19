<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_types', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('news_id')->unsigned();
            $table->integer('types_id')->unsigned();
        });
        Schema::table('news_types', function(Blueprint $table) {
            $table->foreign('news_id')->references('id')->on('news')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('news_types', function(Blueprint $table) {
            $table->foreign('types_id')->references('id')->on('types')
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
        Schema::table('news_types', function(Blueprint $table) {
            $table->dropForeign('news_types_news_id_foreign');
        });

        Schema::table('news_types', function(Blueprint $table) {
            $table->dropForeign('news_types_types_id_foreign');
        });
        Schema::drop('news_types');
    }
}
