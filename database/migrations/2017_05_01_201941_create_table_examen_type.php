<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExamenType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 60);
            $table->integer('limit');
            $table->time('stimations');
            $table->timestamps();
        });

        Schema::create('turn_exam', function (Blueprint $table){
            $table->increments('id');
            $table->integer('idExamType')->unsigned();
            $table->integer('idTurn')->unsigned();

            $table->foreign('idExamType')->references('id')->on('turn')->onDelete('cascade');
            $table->foreign('idTurn')->references('id')->on('exam_type')->onDelete('cascade');

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
        Schema::dropIfExists('exam_type');
        Schema::dropIfExists('turn_exam');
    }
}
