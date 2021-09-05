cd ../<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    public function up()
    {
        Schema::table('order_status', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
        Schema::table('order_status', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('status')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('book_order', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('book_order', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('books', function (Blueprint $table) {
            $table->foreign('textual_content_id')->references('id')->on('textual_content')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('book_author', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('book_author', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('authors')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->foreign('academic_year_id')->references('id')->on('academic_years')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')
                        ->onDelete('cascade')
                        ->onUpdate('no action');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('academic_year_id')->references('id')->on('academic_years')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::table('order_status', function (Blueprint $table) {
            $table->dropForeign('order_status_order_id_foreign');
        });
        Schema::table('order_status', function (Blueprint $table) {
            $table->dropForeign('order_status_status_id_foreign');
        });
        Schema::table('book_order', function (Blueprint $table) {
            $table->dropForeign('book_order_order_id_foreign');
        });
        Schema::table('book_order', function (Blueprint $table) {
            $table->dropForeign('book_order_book_id_foreign');
        });
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('books_textual_content_id_foreign');
        });
        Schema::table('book_author', function (Blueprint $table) {
            $table->dropForeign('book_author_book_id_foreign');
        });
        Schema::table('book_author', function (Blueprint $table) {
            $table->dropForeign('book_author_author_id_foreign');
        });
        Schema::table('order_user', function (Blueprint $table) {
            $table->dropForeign('order_user_order_id_foreign');
        });
        Schema::table('order_user', function (Blueprint $table) {
            $table->dropForeign('order_user_user_id_foreign');
        });
    }
}
