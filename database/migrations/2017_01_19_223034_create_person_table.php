<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('persons', function (Blueprint $table) {
        $table->increments('id');
        $table->string('type',20);
        $table->string('firstname', 50);
        $table->string('lastname', 50);
        $table->string('skype', 50);
        $table->string('phone_mobile', 50);
        $table->string('phone_home', 50);
        $table->string('address', 100);
        $table->date('birthdate');
        $table->bigInteger('competence_id')->references('id')->on('competences')->onDelete('none');
        $table->bigInteger('user_id')->references('id')->on('users')->onDelete('none');
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
          Schema::drop('persons');
    }
}
