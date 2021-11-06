<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\User;

class ContactPolicy
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
        return $user->canDo('ADD_CONTACT');
    }


   public function edit(User $user)
    {
    	 return $user->canDo('UPDATE_CONTACT');
    }

   public function destroy(User $user)
    {
    	 return $user->canDo('DELETE_CONTACT');
    }

}