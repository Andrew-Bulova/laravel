<?php


namespace App\Services;

use App\User;
use App\Http\Requests\UserRequest;


abstract class BaseUserService
{
    protected $request;
    protected $user;

    protected function __construct(UserRequest $request)
    {
        $this->request = $request;
        $this->user = app(User::class);
    }

    protected function setNameAttribute()
    {
        return $this->user->name;
    }

    protected function setPasswordAttribute()
    {
       return $this->user->password;
    }

    protected function setEmailAttribute()
    {
        return $this->user->name;
    }

    private function saveUser()
    {

    }
}
