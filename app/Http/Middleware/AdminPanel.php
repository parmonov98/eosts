<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

    use Closure;
 use Illuminate\Support\Facades\Auth;
    use App\Models\Role;

    class AdminPanel
    {
        public function handle($request, Closure $next)
        {
            $user = Auth::user();
            dd($user);

            if($user){
                $role = Role::whereName('admin')->first();
                if($user->hasRole($role)){
                    return $next($request);
                }
            }
            return redirect('/');
        }
