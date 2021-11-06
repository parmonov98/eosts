<?php
namespace App\Repositories;

use App\Models\Role_users;
use App\Models\Role;
use App\Models\User;
use Gate;
use Config;


class RoleUserRepository extends Repositor {

	public function __construct(Role_users $role_user){
		$this->model = $role_user;
	}





		public function one($id,$attr = array()){
		$result = $this->model->where('user_id',$id)->first();
		return $result;
	}


	public function addRuser($request) {

		//$data = $request->except('_token');
		//$result = Role_users::select()->get();

		$result = $this->one($request->id);
		//dd($request->id);
		if(empty($result)){

		$data['user_id'] = $request->id;
		if(empty($data)) {
			return array('error' => 'Нет информации');
		}
		$this->model->fill($data);

				if($this->model->fill($data)->save()) {
					return ['status' => 'Сохранено'];
				}
		}




		}

	}