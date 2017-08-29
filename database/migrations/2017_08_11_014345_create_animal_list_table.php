<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_list', function (Blueprint $table) {
            $table->increments('list_id');
            $table->integer('list_name')->unsigned();
            $table->integer('list_owner')->unsigned();
            $table->foreign('list_name')->references('reg_animal_id')->on('animal_registration');
            $table->foreign('list_owner')->references('user_id')->on('user_account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_list');
    }
}
