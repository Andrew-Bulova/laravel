<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuildingAttribute extends Model
{
    protected $table = 'building_attribute';
    protected $fillable = [
        'building_id', 'attribute', 'value'
    ];
    public $timestamps = false;

    public function building()
    {
        return $this->hasOne(Building::class, 'building_id', 'id');
    }
}
