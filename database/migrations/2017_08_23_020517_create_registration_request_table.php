<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_request', function (Blueprint $table) {
            $table->increments('reg_id');
            $table->string('reg_animal_name', 50);
            $table->smallInteger('reg_animal_age')->unsigned();
            $table->enum('reg_animal_gender', array('Male','Female'));
            $table->string('reg_animal_species', 50);
            $table->string('reg_animal_breed', 100);
            $table->string('reg_animal_color', 50);
            $table->integer('reg_owner')->unsigned();
            $table->foreign('reg_owner')->references('user_id')->on('user_account');
            $table->dateTimetz('reg_requestDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_request');
    }
}
