<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref_id');
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('provider_id');
            $table->string('addon_id')->nullable();
            $table->string('payment_id');
            $table->string('full_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('ic_number');
            $table->string('maritial_status');
            $table->string('hire_purchase');
            $table->string('postcode');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('city');
            $table->string('state');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('accidents');
            $table->float('final_amount');
            $table->timestamps();

            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurances');
    }
}
