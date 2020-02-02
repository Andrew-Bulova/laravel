<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name'
    ];

    protected function cities()
    {
        return $this->hasMany('cities');
    }
}
