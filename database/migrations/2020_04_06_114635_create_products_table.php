<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->string('amount')->default(0);
            $table->float('price');
            $table->float('sale')->default(0);
            $table->text('content')->nullable();
            $table->string('color');
            $table->string('size');
            $table->string('img');
            $table->boolean('new')->default(true);
            $table->integer('id_category')->unsigned();
            $table->string('star')->default(5);
            $table->foreign('id_category')->references('id')->on('categories');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
