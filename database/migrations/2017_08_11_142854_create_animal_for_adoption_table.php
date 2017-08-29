<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalForAdoptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_for_adoption', function (Blueprint $table) {
            $table->increments('');
            $table->integer('adopt_animal_age')->unsigned();
            $table->integer('adopt_animal_gender')->unsigned();
            $table->integer('adopt_animal_species')->unsigned();
            $table->integer('adopt_animal_breed')->unsigned();
            $table->integer('adopt_animal_color')->unsigned();
            $table->foreign('adopt_animal_age')->references('impounding_id')->on('animal_impounding');
            $table->foreign('adopt_animal_gender')->references('impounding_id')->on('animal_impounding');
            $table->foreign('adopt_animal_species')->references('impounding_id')->on('animal_impounding');
            $table->foreign('adopt_animal_breed')->references('impounding_id')->on('animal_impounding');
            $table->foreign('adopt_animal_color')->references('impounding_id')->on('animal_impounding');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_for_adoption');
    }
}
