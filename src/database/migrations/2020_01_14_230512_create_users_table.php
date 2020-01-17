<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo');
            $table->timestamp('birthday');
            $table->enum('sex', ['male', 'female']);
            $table->unsignedInteger('country_id');
            $table->string('city');
            $table->text('about_yourself');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table){
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropForeign('country_id');
        });
        Schema::dropIfExists('users');
    }
}
