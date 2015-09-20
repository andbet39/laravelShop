<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderItems extends Migration
{

    public function up()
    {
        Schema::create('order_items', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('file_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('order_items');
    }
}
