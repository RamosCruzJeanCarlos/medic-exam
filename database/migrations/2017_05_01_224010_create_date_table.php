<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('idUser')->unsigned();

            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('date_turn_exam', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDate')->unsigned();
            $table->integer('idTurnExam')->unsigned();

            $table->foreign('idDate')->references('id')->on('date')->onDelete('cascade');
            $table->foreign('idTurnExam')->references('id')->on('turn_exam')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date');
        Schema::dropIfExists('date_turn_exam');
    }
}
