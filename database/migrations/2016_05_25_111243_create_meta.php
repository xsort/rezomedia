<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta', function(Blueprint $table) {
            $table->increments('id');
            $table->string('meta_description', 250);
            $table->string('meta_description_ro', 250);
            $table->string('meta_description_en', 250);
            $table->string('meta_keywords', 250);
            $table->string('meta_keywords_ro', 250);
            $table->string('meta_keywords_en', 250);
            $table->string('title', 250);
            $table->string('title_ro', 250);
            $table->string('title_en', 250);
            $table->integer('table_id')->index('idx_table_id');
            $table->string('table', 20)->index('idx_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meta');
    }
}
