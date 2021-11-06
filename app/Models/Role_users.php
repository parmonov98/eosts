<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role_users extends Model
{

   	protected $table = 'role_user';
    protected $fillable = ['user_id','role_id'];

    public function user(){
		return $this->belongsTo(User::class,'user_id','id');
	}

  public function role(){
		return $this->belongsTo(Role::class,'role_id','id');
	}


}
