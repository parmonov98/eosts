<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Article;

class ArticlePolicy
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
        return $user->canDo('VIEW_ADMIN_ARTICLES');
    }


	public function save(User $user)
    {
    	 return $user->canDo('ADD_ARTICLES');
    }


	public function edit(User $user)
    {
    	 return $user->canDo('UPDATE_ARTICLES');
    }


	public function destroy(User $user, Article $article)
    {
    	 return $user->canDo('DELETE_ARTICLES') ;
    }
}
