<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('status', 255);
        });
    }

    public function down()
    {
        Schema::drop('status');
    }
}
