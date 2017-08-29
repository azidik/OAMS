<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_request', function (Blueprint $table) {
            $table->increments('adopt_id');
            $table->integer('adopt_first_name')->unsigned();
            $table->integer('adopt_last_name')->unsigned();
            $table->integer('adopted')->unsigned();
            $table->foreign('adopt_first_name')->references('user_id')->on('user_account');
            $table->foreign('adopt_last_name')->references('user_id')->on('user_account');
            $table->foreign('adopted')->references('impounding_id')->on('animal_impounding');
            $table->dateTimetz('adopt_requestDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoption_request');
    }
}
