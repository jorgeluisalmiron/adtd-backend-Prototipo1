<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYoutubeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('youtube', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title', 100);
          $table->string('description', 255);
          $table->string('url', 255);
          $table->bigInteger('competence_id')->references('id')->on('competences')->onDelete('none');
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
          Schema::drop('youtube');
    }
}
