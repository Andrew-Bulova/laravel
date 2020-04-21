<?php

namespace App\Policies;

use App\OverUserModel\User;
use App\Entity;
use Illuminate\Auth\Access\HandlesAuthorization;

class EntityPolicy extends BasePolicy
{
    public function __construct()
    {
        $this->role = 'userManager';
    }
}
