<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpoundingRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impounding_request', function (Blueprint $table) {
            $table->increments('imp_id');
            $table->integer('impounding_category')->unsigned();
            $table->string('impounding_name',50)->nullable();
            $table->smallinteger('impounding_age')->nullable();
            $table->enum('impounding_gender',array('Male','Female'));
            $table->string('impounding_species',50);
            $table->string('impounding_breed',100);
            $table->string('impounding_color',50);
            $table->string('place_found',100)->nullable();
            $table->integer('impounded_by')->unsigned();
            $table->foreign('impounding_category')->references('category_id')->on('animal_category');
            $table->foreign('impounded_by')->references('user_id')->on('user_account');
            $table->dateTimetz('imp_requestDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impounding_request');
    }
}
