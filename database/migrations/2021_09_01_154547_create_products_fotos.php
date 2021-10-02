<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsFotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_fotos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productId')->unsigned();
            $table->foreign('productId')
                ->references('id')
                ->on('products')
                ->onCascade('delete');
            $table->string('url');
            $table->integer('order');
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
        Schema::dropIfExists('products_fotos');
    }
}
