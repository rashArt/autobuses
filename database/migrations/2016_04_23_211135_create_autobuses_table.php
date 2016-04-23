<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutobusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autobuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serial', 60);
            $table->string('matricula', 12);
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
        Schema::drop('autobuses');
    }
}
