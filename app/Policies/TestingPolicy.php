<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\User;
use App\Models\Testing;

class TestingPolicy
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


	public function change(User $user) {

 	//EDIT_PERMISSIONS
		return $user->canDo('VIEW_ADMIN_TEST');
	}

	public function save(User $user)
	{
		return $user->canDo('ADD_TEST');
	}

	public function edit(User $user)
	{
		return $user->canDo('EDIT_TEST');
	}

	public function destroy(User $user,Testing $testing)
	{
		return $user->canDo('DELETE_TEST');
	}

}
