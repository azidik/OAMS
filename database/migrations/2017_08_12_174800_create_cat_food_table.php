<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_food', function (Blueprint $table) {
            $table->increments('cat_id');
            $table->enum('cfood_category',array('Dry','Canned','Semi-Moist'));
            $table->integer('cfood_quantity')->unsigned();
            $table->date('cfood_expiry');;
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
        Schema::dropIfExists('cat_food');
    }
}
