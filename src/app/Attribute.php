<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static pluck(string $string)
 */
class Attribute extends Model
{
    protected $table = 'attributes';
    protected $fillable = [
        'attribute', 'discription'
    ];
    public $incrementing = false;

    public $timestamps = false;

    public function buildings()
    {
        return $this->belongsToMany(Building::class, 'building_attribute',
            'attribute_id', 'building_id');
    }
}
