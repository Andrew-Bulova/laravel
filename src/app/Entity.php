<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $table = 'entities';
    protected $fillable = [
        'user_id',
        'name',
        'legal_address',
        'tin',
        'contact_person',
        'head_position',
        'head_name',
        'phone',
        'email'
    ];
}
