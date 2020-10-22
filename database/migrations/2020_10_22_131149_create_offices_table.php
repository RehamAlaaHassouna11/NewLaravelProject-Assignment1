<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Code')->unique()->nullable();
            $table->string('City',225);
            $table->string('Phone',225);
            $table->string('Address1',225);
            $table->string('Address2',225);
            $table->string('State',225);
            $table->string('Country',255);
            $table->integer('PostalCode');
            $table->string('Territory',200);
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
        Schema::dropIfExists('offices');
    }
}
