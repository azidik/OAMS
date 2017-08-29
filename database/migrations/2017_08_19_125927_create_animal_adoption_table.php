<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalAdoptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_adoption', function (Blueprint $table) {
            $table->increments('adoption_id');
            $table->integer('adopt_first_name')->unsigned();
            $table->integer('adopt_last_name')->unsigned();
            $table->integer('adopted')->unsigned();
            $table->timestamps('adopted_at');
            $table->foreign('adopt_first_name')->references('user_id')->on('user_account');
            $table->foreign('adopt_last_name')->references('user_id')->on('user_account');
            $table->foreign('adopted')->references('impounding_id')->on('animal_impounding');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_adoption');
    }
}
