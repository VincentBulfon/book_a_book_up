<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('academic_year_id')->unsigned();
            $table->boolean('is_archived')->default(false);
            $table->boolean('is_draft')->default(true);
        });
    }

    public function down()
    {
        Schema::drop('orders');
    }
}
