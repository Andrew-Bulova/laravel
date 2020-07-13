<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlesCategories extends Model
{
    protected $table = 'articles_categories';
    protected $fillable = [
        'article_id',
        'category_id'
    ];
    public $timestamps = false;
}
