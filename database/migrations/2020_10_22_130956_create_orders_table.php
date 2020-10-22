<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID')->unique()->nullable();
            $table->integer('CustomerID');
            $table->dateTime('OrderDate');
            $table->dateTime('RequiredDate');
            $table->dateTime('ShippedDate');
            $table->integer('Status');
            $table->string('Comments',225);
            $table->timestamps();

            $table->foreign('CustomerID')->references('ID')->on('customers');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
