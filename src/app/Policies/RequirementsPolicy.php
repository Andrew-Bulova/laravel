<?php

namespace App\Policies;

use App\OverUserModel\User;
use App\Requirement;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequirementsPolicy extends BasePolicy
{
    public function __construct()
    {
        $this->role = 'requirementManager';
    }
}
