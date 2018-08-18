<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot( GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('superadmin',function ($user){
        return $user->user_type == 'superadmin';
        });
        $gate->define('admin',function ($user){
            return $user->user_type == 'admin';
        });
        $gate->define('agent',function ($user){
            return $user->user_type == 'agent';
        });
        $gate->define('user',function ($user){
            return $user->user_type == 'user';
        });

    }
}
