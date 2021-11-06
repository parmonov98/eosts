<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\User;
use App\Models\Article;

class CommentPolicy
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
		return $user->canDo('ADD_COMMENT');
	}

	public function edit(User $user)
	{
		return $user->canDo('UPDATE_COMMENT');
	}

	public function destroy(User $user)
	{
		return $user->canDo('DELETE_COMMENT');
	}

}
