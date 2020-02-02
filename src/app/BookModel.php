<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'name',
        'year',
        'publisher_id',
        'author_id'
    ];

    public function publisher(){
        return $this->hasOne(PublisherModel::class,  'id','publisher_id');
    }

    public function author(){
        return $this->hasOne(AuthorModel::class, 'id', 'author_id');
    }

}
