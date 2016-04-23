<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('direccion', 500);
            $table->date('fecha_nacimiento');
            $table->integer('oficina_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('oficina_id')->references('id')->on('oficinas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personas');
    }
}
