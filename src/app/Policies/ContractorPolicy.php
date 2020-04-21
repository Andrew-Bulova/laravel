<?php

namespace App\Policies;

use App\OverUserModel\User;
use App\Contractor;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContractorPolicy extends BasePolicy
{
    public function __construct()
    {
        $this->role = 'contractorManager';
    }
}
