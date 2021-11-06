<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';
	protected $fillable = ['name'];

    public function users() {
		return $this->belongsToMany(User::class,'role_user');
	}


	public function perms() {
		return $this->belongsToMany(Permission::class,'permission_role');
	}

	public function role_users() {
		return $this->hasMany(Role_users::class);
	}

	public function hasPermission($name, $require = false)
    {
        if (is_array($name)) {
            foreach ($name as $permissionName) {
                $hasPermission = $this->hasPermission($permissionName);

                if ($hasPermission && !$require) {
                    return true;
                } elseif (!$hasPermission && $require) {
                    return false;
                }
            }
            return $require;
        } else {
            foreach ($this->perms as $permission) {
                if ($permission->name == $name) {
                    return true;
                }
            }
        }

        return false;
    }

    public function savePermissions($inputPermissions) {

		if(!empty($inputPermissions)) {
			$this->perms()->sync($inputPermissions);
		}
		else {
			$this->perms()->detach();
		}

		return TRUE;
	}
}
