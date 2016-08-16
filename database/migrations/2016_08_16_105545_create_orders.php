<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function($t){
            $t->increments('id');
            $t->string('phone',     200);
            $t->string('fiscal',    200);
            $t->string('company',   200);
            $t->string('name',      200);
            $t->string('address',   200);
            $t->string('filename',  200);
            $t->text('comments');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
