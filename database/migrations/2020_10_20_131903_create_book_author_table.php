<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookAuthorTable extends Migration
{
    public function up()
    {
        Schema::create('book_author', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('book_id')->unsigned();
            $table->integer('author_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('book_author');
    }
}
