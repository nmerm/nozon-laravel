<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaPublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_publication', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('media_id');
            $table->integer('publication_id');
            $table->foreign('media_id')->references('id')->on('medias');
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->index(['publication_id','media_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_publication');
    }
}
