<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','password','otm','image',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function articles() {
        return $this->hasMany(Article::class);
    }

     public function roles() {
        return $this->belongsToMany(Role::class, 'role_user');
    }


    /**
     * Checks if User has access to $permissions.
     */
    public function canDo($permission, $require = FALSE) {

        if(is_array($permission)) {
            foreach($permission as $permName) {

                $permName = $this->canDo($permName);
                if($permName && !$require) {
                    return TRUE;
                }
                else if(!$permName && $require) {

                    return FALSE;
                }
            }

            return  $require;
        }
        else {

            foreach($this->roles as $role) {
                        // printf($role['perms'].'-'.'<br>+++');
                foreach($role->perms as $perm) {
                    //foo*    foobar
                    // if(Str::is($permission,$perm->name)) {
                    // dd($permission);
                    if($permission==$perm->name) {
                        return TRUE;
                    }
                }
            }
        }
    }

    // string  ['role1', 'role2']
    public function hasRole($name, $require = false)
    {
        // dd($name);
        if (is_array($name)) {
            foreach ($name as $roleName) {
                $hasRole = $this->hasRole($roleName);

                if ($hasRole && !$require) {
                    return true;
                } elseif (!$hasRole && $require) {
                    return false;
                }
            }
            return $require;
        } else {
            foreach ($this->roles as $role) {
                if($role->name == $name) {
                    return true;
                }
            }
        }

        return false;
    }


}
