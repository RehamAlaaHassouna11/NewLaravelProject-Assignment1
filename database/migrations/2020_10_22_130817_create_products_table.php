<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->unsignedBigInteger('Code')->unique()->nullable();
            $table->integer('ProductLineID');
            $table->string('Name',255);
            $table->integer('Scale');
            $table->string('Vendor',255);
            $table->string('PdtDescription');
            $table->integer('QtyInStock');
            $table->double('BuyPrice',19,0);
            $table->string('MSRP',225);
            $table->timestamps();

            $table->foreign('ProductLineID')->references('ID')->on('productLines');

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
