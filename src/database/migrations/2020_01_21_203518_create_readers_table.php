<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readers', function (Blueprint $table){
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
        });

        Schema::create('marks', function (Blueprint $table){
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('reader_id')->unsigned();
            $table->integer('mark');
        });

        Schema::table('marks', function (Blueprint $table){
            $table->foreign('reader_id')->references('id')->on('readers');
            $table->foreign('book_id')->references('id')->on('readers');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
