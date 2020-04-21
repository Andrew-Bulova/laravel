<?php

namespace App\Policies;

use App\OverUserModel\User;
use App\Building;
use Illuminate\Auth\Access\HandlesAuthorization;

class BuildingPolicy extends BasePolicy
{
    public function __construct()
    {
        $this->role = 'userManager';
    }
}
