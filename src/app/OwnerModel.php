<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerModel extends Model
{
    protected $table = 'owners';
    protected $fillable = [
        'firstName',
        'lastName'
    ];

    public function owner()
    {
        $this->hasOne(OwnerModel::class, 'id', 'owner_id');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
