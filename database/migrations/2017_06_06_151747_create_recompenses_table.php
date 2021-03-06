<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecompensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recompenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('equipe_id')->unsigned();
            $table->text('description');
            $table->index('equipe_id');
            $table->foreign('equipe_id')->references('id')->on('equipes');
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
        Schema::dropIfExists('recompenses');
    }
}
