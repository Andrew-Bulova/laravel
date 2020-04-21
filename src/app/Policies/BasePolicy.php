<?php

namespace App\Policies;

use App\OverUserModel\User;
use App\Traits\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;

class BasePolicy
{
    use HandlesAuthorization, Permission;

    protected $role;

    public function index(User $user)
    {
        return $user->id > 0;
    }

    public function create(User $user)
    {
        return $this->getPermission($user, $this->role);
    }

    public function update(User $user)
    {
        return $this->getPermission($user, $this->role);
    }

    public function edit(User $user)
    {
        return $this->getPermission($user, $this->role);
    }

    public function destroy(User $user)
    {
        return $this->getPermission($user, $this->role);
    }
}
