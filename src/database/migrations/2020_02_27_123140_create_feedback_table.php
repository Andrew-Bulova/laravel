<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->enableQueryLog();
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('target_type', ['App\\Contractor', 'App\\\\User']);
            $table->unsignedBigInteger('target_id');
            $table->text('feedback');
            $table->unsignedTinyInteger('rating');
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
        Schema::dropIfExists('feedback');
    }
}
