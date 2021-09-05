<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('title', 255);
            $table->integer('textual_content_id')->unsigned()->nullable();
            $table->boolean('available');
            $table->integer('stock')->unsigned();
            $table->string('isbn')->unique();
            $table->string('editor');
        });
    }

    public function down()
    {
        Schema::drop('books');
    }
}
