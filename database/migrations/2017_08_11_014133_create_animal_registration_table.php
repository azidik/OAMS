<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_registration', function (Blueprint $table) {
            $table->increments('reg_animal_id');
            $table->string('reg_animal_name', 50);
            $table->smallInteger('reg_animal_age')->unsigned();
            $table->enum('reg_animal_gender', array('Male','Female'));
            $table->string('reg_animal_species', 50);
            $table->string('reg_animal_breed', 100);
            $table->string('reg_animal_color', 50);
            $table->integer('reg_owner')->unsigned();
            $table->foreign('reg_owner')->references('user_id')->on('user_account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_registration');
    }
}
