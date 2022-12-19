<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Policies\RolePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', [RolePolicy::class, 'isAdmin']);
        Gate::define('product', [RolePolicy::class, 'isProduct']);
        Gate::define('category', [RolePolicy::class, 'isCategory']);

        // Gate::define('admin', function(User $user) {
        //     return $user->id == 1 ? true : false;
        // });
        
        // Gate::define('product', function(User $user) {
        //     return $user->id == 3 ? true : false;
        // });

        // Gate::define('category', function(User $user) {
        //     return $user->id != 1 && $user->id != 3 ? true : false;
        // });
    }
}
