<?php


namespace App\Services;


use App\User;
use App\UserDetails;
use App\UserDetals;

class UserService extends BaseUserService
{
    protected $userDetail;

    protected function __construct()
    {
        parent::__construct($this->request);
        $this->userDetail = app(UserDetails::class);
    }

    protected function setUserIdAttribute()
    {
        return $this->userDetail
    }
}
