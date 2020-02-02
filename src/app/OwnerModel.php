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
}
