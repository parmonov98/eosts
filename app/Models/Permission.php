<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
	protected $table = 'permissions';
    protected $fillable = ['name','atama'];

	protected $casts = [
        'atama' => 'array'
    ];

    public function roles() {
		return $this->belongsToMany(Role::class,'permission_role');
	}
}
