<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeterReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meter_readings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meter_type_id');
            $table->foreign('meter_type_id')->references('id')->on('meter_types');
            $table->string('current_reading')->nullable();
            $table->string('previous_reading')->nullable();
            $table->unsignedBigInteger('reading_by_user')->nullable();
            $table->foreign('reading_by_user')->references('id')->on('users')->nullable();
            $table->unsignedBigInteger('reading_by_admin')->nullable();
            $table->foreign('reading_by_admin')->references('id')->on('users')->nullable();

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
        Schema::dropIfExists('meter_readings');
    }
}
