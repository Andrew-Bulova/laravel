<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'users';
    protected function  country()
    {
        return $this->hasOne('app/Country');
    }
}
