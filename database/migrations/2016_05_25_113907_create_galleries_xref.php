<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesXref extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries_xref', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('galleries_id')->unsigned();
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
       	Schema::drop('galleries_xref');

    }
}
