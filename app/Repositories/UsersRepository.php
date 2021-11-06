<?php

namespace App\Repositories;

use App\Models\User;
use Config;

use Gate;
use Auth;

class UsersRepository extends Repositor
{


	public function __construct(User $user) {
		$this->model  = $user;

	}


	public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		return $result;
	}





	public function sentNew($sent, $id) {
		$result = $this->one($id);

		if($sent == 1){
			  $result['sent_new'] = 0;
		}else if($sent == 0){
			 $result['sent_new'] = 1;
		}


		if($result->update()) {
			return ['status' => 'Нет информации'];
		}

	}


	public function addUser($request) {


		if (\Gate::denies('create',$this->model)) {
            abort(403);
        }

		$data = $request->all();

		$user = $this->model->create([
            'name' => $data['name'],
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

		if($user) {
			$user->roles()->attach($data['role_id']);
		}

		return ['status' => 'Пользователь добавлен'];

	}


	public function updateUser($request, $id) {

	//	dd($user);
	//	$result = $this->one($id);

		// if (Gate::denies('edit',$this->model)) {
  //           abort(403);
  //       }


		$data = $request->all();
		//dd($data);
		if(isset($data['password'])) {
			$data['password'] = bcrypt($data['password']);
		}
		$user = $this->one($id);
		$user->fill($data)->update();
		$user->roles()->sync([$data['role_id']]);

		return ['status' => 'Пользователь изменен'];

	}

	public function deleteUser($id) {

	/*	if (Gate::denies('edit',$this->model)) {
            abort(403);
        }*/
		$result = $this->one($id);

		$result->roles()->detach();

		if($result->delete()) {
			return ['status' => 'Пользователь удален'];
		}
	}




}