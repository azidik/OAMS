<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_service', function (Blueprint $table) {
            $table->increments('get_id');
            $table->integer('get_service_type')->unsigned();
            //$table->integer('service_user')->unsigned();
            $table->integer('get_owner')->unsigned();
            $table->integer('get_animal_name')->unsigned();
            $table->foreign('get_service_type')->references('service_id')->on('animal_service_type');
            $table->foreign('get_owner')->references('user_id')->on('user_account');
            $table->foreign('get_animal_name')->references('reg_animal_id')->on('animal_registration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_service');
    }
}
