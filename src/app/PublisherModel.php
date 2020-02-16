<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublisherModel extends Model
{
    protected $table = 'publishers';
    protected $fillable = [
        'name',
        'city_id',
        'owner_id'
    ];

    protected function city()
    {
        return $this->hasOne(CityModel::class);
    }

    protected function owner()
    {
        return $this->hasOne(OwnerModel::class, 'id', 'owner_id');
    }
}
