<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('entity_id');
            $table->string('name');
            $table->string('actual_address');
            $table->date('registration_date');
            $table->boolean('fire_risk');
            $table->string('appointment');
            $table->string('appointment_in_detail');
            $table->unsignedTinyInteger('storeys');
            $table->string('room_location');
            $table->boolean('automated_process_control');
            $table->boolean('flammable_liquids');
            $table->boolean('gas_station');
            $table->boolean('cars_sale_&_exhibition');
            $table->boolean('high_shelving');
            $table->boolean('permanent_workplace');
            $table->boolean('smoke_protection_system');
            $table->boolean('distance_from_far_entry_point<25');
            $table->boolean('corridors_length<15');
            $table->boolean('people_in_building');
            $table->boolean('people>50');
            $table->boolean('people>10');
            $table->boolean('night_stay');
            $table->boolean('round-the-clock_stay');
            $table->timestamps();
            $table->foreign('entity_id')->references('id')->on('entities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}
