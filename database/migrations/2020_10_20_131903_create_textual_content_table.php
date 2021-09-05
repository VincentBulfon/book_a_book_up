<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextualContentTable extends Migration
{
    public function up()
    {
        Schema::create('textual_content', function (Blueprint $table) {
            $table->increments('id');
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('textual_content');
    }
}
