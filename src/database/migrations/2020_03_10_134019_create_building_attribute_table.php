<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_attribute', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('building_id');
            $table->string('attribute');
            $table->boolean('value');
            $table->foreign('building_id')
                ->references('id')
                ->on('buildings')
                ->onDelete('cascade');
            $table->foreign('attribute')
                ->references('attribute')
                ->on('attributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('building_attribute_value',function (Blueprint $table){
            $table->dropForeign('building_id');
            $table->dropForeign('attribute');
        } );
        Schema::dropIfExists('building_attribute_value');
    }
}
