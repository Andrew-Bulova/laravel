<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticlesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_categories', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('article_id')
                ->unsigned();
            $table->tinyInteger('category_id')
                ->unsigned()
                ->nullable();
            $table->foreign('article_id')
                ->references('id')
                ->on('articles')
                ->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles_categories', function (Blueprint $table){
            $table->dropForeign('article_id');
            $table->dropForeign('category_id');
        });
        Schema::dropIfExists('articles');
    }
}
