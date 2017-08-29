<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('donor_id');
            $table->string('donor_first_name',50)->nullable();
            $table->string('donor_last_name',50)->nullable();
            $table->string('donor_company',100)->nullable();
            $table->enum('donated',array('medicine','food'));
            $table->integer('donation_quantity')->unsigned();
            $table->timestamps('donated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
