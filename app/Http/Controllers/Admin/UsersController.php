<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Gate;
Use App\Models\Role;
use App\Http\Requests\UserRequest;
use App\Repositories\UsersRepository;
use App\Repositories\RolesRepository;

class UsersController extends AdminController
{

    protected $us_rep;
    protected $rol_rep;


    public function __construct(RolesRepository $rol_rep, UsersRepository $us_rep) {
        parent::__construct();

        if (Gate::allows('EDIT_USERS')) {
            abort(403);
        }

        $this->us_rep = $us_rep;
        $this->rol_rep = $rol_rep;

        $this->template = config('settings.theme').'.admin.users.users';

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'Пользователи';
        $users = $this->us_rep->get('*',TRUE,TRUE,FALSE,TRUE);;

        $this->content = view(config('settings.theme').'.admin.users.users_content',compact(['users']));

        return $this->renderOutput();
    }


/*
    public function edit($id)
    {
        if(Gate::denies('publish')) {
			return redirect('/');
		}
		$roles = Role::orderBy('name')->pluck('name', 'id');
        $article = User::find($id);
       return view(config('settings.theme').'.admin.users.edit',compact(['article','roles']));
    }
*/
	public function getRoles() {
		return \App\Models\Role::all();
	}

    public function edit(User $user)
    {

  //       if(Gate::denies('edit', new User)) {
		// 	abort(403);
		// }
       $this->title =  'Редактирование пользователя - '. $user->name;

		$roles = $this->getRoles()->reduce(function ($returnRoles, $role) {
		    $returnRoles[$role->id] = $role->name;
		    return $returnRoles;
		}, []);

		$this->content = view(config('settings.theme').'.admin.users.users_create_content',compact(['roles','user']));

        return $this->renderOutput();

    }


  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*
    public function update(Request $request, $id)
    {
		$request['role_id'] =$request->role;
				if(Gate::denies('publish')) {
			return redirect('/');
		}
	   $article = User::find($id);
	   $roles = Role::orderBy('name')->pluck('name', 'id');
		//dd($roles);
		$article->roles()->sync([$request['role_id']]);

	     view(config('settings.theme').'.admin.users.edit',compact(['article','roles']));
		        return redirect()->route('users.index')
                        ->with('success','Foydalanuvchi huquqi o`zgartildi');
    }

	public function getRoles() {
		return Role::all();
	}
*/

    //public function update(UserRequest $request, User $user)
    public function update(Request $request, $id)
    {
		//dd($request);
  //       if(Gate::denies('edit', new User)) {
		// 	abort(403);
		// }
        $this->title = 'Пользователи';
		$result = $this->us_rep->updateUser($request,$id);
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		return redirect('/admins/users')->with($result);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('delete')) {
			return redirect('/');
		}
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Foydalanuvchi o`chirildi');
    }
}
