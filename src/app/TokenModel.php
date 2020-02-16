<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenModel extends Model
{
    protected $table = 'tokens';
    protected $fillable = [
        'token', 'user_id', 'created_at', 'die_at'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
