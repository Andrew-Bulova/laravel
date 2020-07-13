<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'author_id',
        'published_at',
        'source',
        'content',
    ];

    public function author(){
        return $this->belongsTo(User::class,
            'author_id',
            'id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,
            'articles_categories',
            'article_id',
            'category_id');
    }
}
