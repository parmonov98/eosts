<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\User;
use App\Models\Menu;

class MenusPolicy
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
		return $user->canDo('VIEW_ADMIN_MENU');
	}

	public function save(User $user)
	{
		return $user->canDo('ADD_MENU');
	}

	public function edit(User $user)
	{
		return $user->canDo('EDIT_MENU');
	}

	public function destroy(User $user,Menu $menu)
	{
		return $user->canDo('DELETE_MENU');
	}

}
