<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_details';
    protected $fillable = [
        'id',
        'position',
        'about'
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
