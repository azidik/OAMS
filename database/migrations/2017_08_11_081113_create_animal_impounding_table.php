<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalImpoundingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_impounding', function (Blueprint $table) {
            $table->increments('impounding_id');
            $table->integer('impounding_category')->unsigned();
            $table->string('impounding_name',50)->nullable();
            $table->smallinteger('impounding_age')->nullable();
            $table->enum('impounding_gender',array('Male','Female'));
            $table->string('impounding_species',50)->nullable();
            $table->string('impounding_breed',100);
            $table->string('impounding_color',50);
            $table->dateTimetz('impounding_surrendered_at');
            $table->string('impounding_place_found',100)->nullable();
            $table->integer('impounded_by')->unsigned();
            $table->foreign('impounding_category')->references('category_id')->on('animal_category');
            $table->foreign('impounded_by')->references('user_id')->on('user_account');
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
        Schema::dropIfExists('animal_impounding');
    }
}
