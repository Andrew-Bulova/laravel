<?php

namespace App\Policies;

use App\OverUserModel\User;
use App\Traits\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy extends BasePolicy
{
    public function __construct()
    {
        $this->role = 'userManager';
    }
}
