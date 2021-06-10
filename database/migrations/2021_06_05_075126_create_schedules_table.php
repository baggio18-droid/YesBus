<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bus_id');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->unsignedBigInteger('placeDeparture_id');
            $table->foreign('placeDeparture_id')->references('id')->on('places')->onDelete('cascade');
            $table->unsignedBigInteger('placeDestination_id');
            $table->foreign('placeDestination_id')->references('id')->on('places')->onDelete('cascade');
            $table->datetime('departureTime');
            $table->datetime('arrivalTime');
            $table->integer('Price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
