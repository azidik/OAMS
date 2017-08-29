<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_food', function (Blueprint $table) {
            $table->increments('dog_id');
            $table->enum('dfood_category',array('Dry','Canned','Semi-Moist'));
            $table->integer('dfood_quantity')->unsigned();
            $table->date('dfood_expiry');
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
        Schema::dropIfExists('dog_food');
    }
}
