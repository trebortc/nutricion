<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('alimento_id');
            $table->unsignedBigInteger('medida_id');
            $table->integer('porcion');
            $table->integer('cantidad');
            $table->enum('preparacion', ['cocida', 'vapor'])->nullable();
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('alimento_id')->references('id')->on('alimentos');
            $table->foreign('medida_id')->references('id')->on('medidas');
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
        Schema::dropIfExists('menu_detalles');
    }
}
