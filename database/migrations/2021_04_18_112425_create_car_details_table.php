<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_number');
            $table->string('engine_number');
            $table->string('chasis_number');
            $table->string('style');
            $table->string('brand_logo');
            $table->integer('cc');
            $table->date('expiry');
            $table->integer('no_claim');
            $table->integer('seating_capacity');
            $table->string('transmission');
            $table->string('variant');
            $table->integer('year');
            $table->string('brand');
            $table->timestamps();

            $table->index('car_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_details');
    }
}
