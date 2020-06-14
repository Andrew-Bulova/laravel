<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait Permission
{
    private function user()
    {
        return Auth::user();
    }

    public function checkAccess($action, $model)
    {
        if($this->user()->cant($action, $model)){
            return abort(403);
        }
        else return null;
    }

    public function getPermission($user, string $roleName) : bool
    {
        foreach($user->roles as $role){
            if($role->name === $roleName){
                return true;
            }
        }
        return false;
    }
}
