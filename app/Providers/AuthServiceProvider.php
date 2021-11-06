<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\Menu;
use App\Models\Settings;
use App\Models\Comment;
use App\Policies\PermissionPolicy;
use App\Policies\ContactPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\MenusPolicy;
use App\Policies\SettingPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< Updated upstream
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
=======
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Permission::class => PermissionPolicy::class,
        Role::class => RolePolicy::class,
        User::class => UserPolicy::class,
        Menu::class => MenusPolicy::class,
        Comment::class => ContactPolicy::class,        
        Settings::class => SettingPolicy::class,
>>>>>>> Stashed changes
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerPostPolicies();
    }

    public function registerPostPolicies()
    {
        //$this->registerPolicies($gate);
        
        Gate::define('VIEW_ADMIN',function($user){
            return $user->canDo('VIEW_ADMIN',FALSE);
        });

        Gate::define('VIEW_ADMIN_ARTICLES',function($user){
            return $user->canDo('VIEW_ADMIN_ARTICLES',FALSE);
        });

        Gate::define('ADD_USERS',function($user){
            return $user->canDo('ADD_USERS',FALSE);
        });

        Gate::define('EDIT_USERS',function($user){
            return $user->canDo('EDIT_USERS',FALSE);
        });

        Gate::define('DELETE_USERS',function($user){
            return $user->canDo('DELETE_USERS',FALSE);
        });

        Gate::define('ADD_ARTICLES',function($user){
            return $user->canDo('ADD_ARTICLES',FALSE);
        });

        Gate::define('UPDATE_ARTICLES',function($user){
            return $user->canDo('UPDATE_ARTICLES',FALSE);
        });

        Gate::define('DELETE_ARTICLES',function($user){
            return $user->canDo('DELETE_ARTICLES',FALSE);
        });

        Gate::define('DELETE_CONTACT',function($user){
            return $user->canDo('DELETE_CONTACT',FALSE);
        });

        Gate::define('VIEW_ADMIN_COMMENT',function($user){
            return $user->canDo('VIEW_ADMIN_COMMENT',FALSE);
        });

        Gate::define('ADD_COMMENT',function($user){
            return $user->canDo('ADD_COMMENT',FALSE);
        });

        Gate::define('UPDATE_COMMENT',function($user){
            return $user->canDo('UPDATE_COMMENT',FALSE);
        });

        Gate::define('DELETE_COMMENT',function($user){
            return $user->canDo('DELETE_COMMENT',FALSE);
        });

        Gate::define('EDIT_PERMISSIONS',function($user){
            return $user->canDo('EDIT_PERMISSIONS',FALSE);
        });

        Gate::define('EDIT_USERS', function ($user) {
            return $user->canDo('EDIT_USERS', FALSE);
        });

        Gate::define('VIEW_ADMIN_MENU', function ($user) {
            return $user->canDo('VIEW_ADMIN_MENU', FALSE);
        });

        Gate::define('ADD_MENU', function ($user) {
            return $user->canDo('ADD_MENU', FALSE);
        });

        Gate::define('EDIT_MENU', function ($user) {
            return $user->canDo('EDIT_MENU', FALSE);
        });

        Gate::define('DELETE_MENU', function ($user) {
            return $user->canDo('DELETE_MENU', FALSE);
        });
        

        Gate::define('VIEW_ADMIN_SETTINGS',function($user){
            return $user->canDo('VIEW_ADMIN_SETTINGS',FALSE);
        });

        Gate::define('UPDATE_SETTINGS',function($user){
            return $user->canDo('UPDATE_SETTINGS',FALSE);
        });

        Gate::define('DELETE_CONTACT',function($user){
            return $user->canDo('DELETE_CONTACT',FALSE);
        });
    }

}
