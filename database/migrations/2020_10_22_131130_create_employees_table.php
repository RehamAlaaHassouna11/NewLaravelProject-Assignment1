<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID')->unique()->nullable();
            $table->integer('OfficeCode');
            $table->integer('ReportsTo');
            $table->string('LastName',225);
            $table->string('FirstName',225);
            $table->string('Extension',225);
            $table->string('Email',225);
            $table->string('JopTitle',100);
            $table->timestamps();

            $table->foreign('ID')->references('ID')->on('employees');
            $table->foreign('OfficeCode')->references('Code')->on('offices');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
