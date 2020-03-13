<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'buildings';
    protected $fillable = [
        'entity_id',
        'name',
        'actual_address',
        'registration_date',
        'appointment',
        'appointment_in_detail',
        'storeys',
        'room_location'
    ];

    public function getAttr()
    {
        return array_merge($this->fillable, $this->details());
    }

    public function details()
    {
        return Attribute::pluck('attribute')->toArray();
    }
    /**
     * @return array
     */
    public function getFillable(): array
    {
        return $this->fillable;
    }

    public function attributes()
    {
        return $this->hasMany(BuildingAttribute::class, 'building_id', 'id');
    }

    public function entity()
{
    return $this->belongsTo(Entity::class);
}
}
