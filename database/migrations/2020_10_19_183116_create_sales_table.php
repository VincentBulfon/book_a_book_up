<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('public_price')->unsigned();
            $table->float('student_price')->unsigned();
            $table->integer('academic_year_id')->unsigned();
            $table->integer('book_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('sales');
    }
}
