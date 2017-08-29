<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_schedule', function (Blueprint $table) {
            //$table->increments('id');
            //$table->integer('user')->unsigned();
            $table->integer('owner')->unsigned();
            $table->integer('animal_name')->unsigned();
            $table->integer('type_of_service')->unsigned();
            $table->date('schedule_date');
            //$table->foreign('user')->references('user_id')
            $table->foreign('owner')->references('user_id')->on('user_account');
            $table->foreign('animal_name')->references('reg_animal_id')->on('animal_registration');
            $table->foreign('type_of_service')->references('service_id')->on('animal_service_type');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_schedule');
    }
}
