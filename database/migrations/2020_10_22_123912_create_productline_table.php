<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productLines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID')->unique()->nullable();
            $table->char('DescInText',225);
            $table->string('DescInHTML',225);
            $table->string('Image',100);
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
        Schema::dropIfExists('productLines');
    }
}
