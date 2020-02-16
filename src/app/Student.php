<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'first_name',
        'second_name',
        'last_name'
    ];
    public $timestamps = false;

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->second_name.' '.$this->last_name;
    }
}
