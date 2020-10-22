<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID')->unique()->nullable();
            $table->unsignedBigInteger('OrderID')->unique()->nullable();
            $table->unsignedBigInteger('ProductCode')->unique()->nullable();
            $table->integer('Qty');
            $table->double('PriceEach',19,0);
            $table->timestamps();

            $table->foreign('ProductCode')->references('Code')->on('products');
            $table->foreign('OrderID')->references('ID')->on('orders');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__products');
    }
}
