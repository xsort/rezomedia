<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features_values', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('features_id')->unsigned();
            $table->string('name', 200);
            $table->string('name_ro', 200);
            $table->string('name_en', 200);

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
        Schema::table('features_values', function(Blueprint $table) {
            $table->dropForeign('features_values_features_id_foreign');
        });
        Schema::drop('features_values');
    }
}
