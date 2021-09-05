<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookOrderTable extends Migration
{
    public function up()
    {
        Schema::create('book_order', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('order_id')->unsigned();
            $table->integer('book_id')->unsigned();
            $table->integer('quantity')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('book_order');
    }
}
