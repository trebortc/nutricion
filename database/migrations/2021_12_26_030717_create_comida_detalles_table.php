<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComidaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comida_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comida_id');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('comida_id')->references('id')->on('comidas');
            $table->foreign('menu_id')->references('id')->on('menus');
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
        Schema::dropIfExists('comida_detalles');
    }
}
