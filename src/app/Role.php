<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable =
        ['name', 'description'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(OverUserRole::class,
            'over_users_roles',
            'role_id',
            'user_id');
    }
}
