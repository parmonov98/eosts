<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
	

	public function save(User $user)
	{   
		return $user->canDo('ADD_USERS');
	}

	public function edit(User $user)
	{
		return $user->canDo('EDIT_USERS');
	}

	public function destroy(User $user)
	{
		return $user->canDo('DELETE_USERS');
	}
	
}
