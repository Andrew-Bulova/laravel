<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OverUserModel\User;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable =
        ['name', 'description'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class,
            'over_users_roles',
            'role_id',
            'user_id');
    }
}
