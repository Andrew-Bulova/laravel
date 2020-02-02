<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('city_id')->unsigned();
            $table->integer('owner_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('publishers', function (Blueprint $table){
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publishers');
    }
}
