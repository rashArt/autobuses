<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoRutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_ruta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auto_id')->unsigned();
            $table->integer('ruta_id')->unsigned();
            $table->timestamps();

            $table->foreign('auto_id')->references('id')->on('autobuses');
            $table->foreign('ruta_id')->references('id')->on('rutas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auto_ruta');
    }
}