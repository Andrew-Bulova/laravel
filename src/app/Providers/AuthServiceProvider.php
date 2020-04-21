<?php

namespace App\Providers;

use App\Building;
use App\Contractor;
use App\Entity;
use App\Policies\BuildingPolicy;
use App\Policies\ContractorPolicy;
use App\Policies\EntityPolicy;
use App\Policies\RequirementsPolicy;
use App\Policies\UserPolicy;
use App\Requirement;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Contractor::class => ContractorPolicy::class,
        Requirement::class => RequirementsPolicy::class,
        Building::class => BuildingPolicy::class,
        Entity::class => EntityPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
