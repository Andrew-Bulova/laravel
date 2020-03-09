<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 */
class Requirement extends Model
{
    protected $table = 'requirements';
    protected $fillable = [
        'title',
        'description'
    ];
}
