<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name', 'parent_id'
    ];

    protected function children()
    {
        return $this->hasMany(CategoryModel::class, 'parent_id', 'id');
    }
}
