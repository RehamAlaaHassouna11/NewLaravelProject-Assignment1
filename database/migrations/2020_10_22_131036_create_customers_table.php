<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ID')->unique()->nullable();
            $table->integer('salesRepEmployeeNum');
            $table->string('Name');
            $table->string('LastName',225);
            $table->string('FirstName',225);
            $table->string('Phone',225);
            $table->string('Address1',225);
            $table->string('Address2',225);
            $table->string('City',225);
            $table->string('State',225);
            $table->integer('PostalCode');
            $table->string('Country',255);
            $table->double('CreditLimit',19,0);
            $table->timestamps();

            $table->foreign('salesRepEmployeeNum')->references('ID')->on('employees');
            //$table->foreign('ID')->references('ID')->on('employees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
