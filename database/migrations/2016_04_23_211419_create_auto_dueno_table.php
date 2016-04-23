<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoDuenoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_dueno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('autobus_id')->unsigned();
            $table->integer('persona_id')->unsigned();
            $table->timestamps();

            $table->foreign('autobus_id')->references('id')->on('autobuses');
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auto_dueno');
    }
}