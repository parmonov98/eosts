<?php
namespace App\Repositories;

use App\Models\Maps;
use App\Models\User;
use Gate;
use Image;
use Input;
use Validator;
use Redirect;
use Config;
use Storage;
use File;
use Mail;
use Str;

class MapsRepository extends Repositor {

	public function __construct(Maps $maps){
		$this->model = $maps;
	}

	public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		return $result;
	}

	public function img($id,$attr = array()){
		$result = $this->model->where('img',$id)->first();
		return $result;
	}

public function addMap($request){

		$data = $request->except('_token');	

		$validator=	$request->validate([
				'title.ru' => 'required|max:255',
				'title.en' => 'required|max:255',
				'longitu' => 'required|max:255',
				'latitu' => 'required|max:255'
			]);
	
	        if (empty($validator) && $validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }else{

	if($this->model->fill($data)->save()) {
	   return ['status' => 'Информация добавлена'];
	}else{ return ['error' => 'Нет информация'];}
        }
    }




public function updateMap($request, $id){
	// dd($id);
		$result = $this->one($id);

		$data = $request->except('_token','_method');	

		$validator=	$request->validate([
				'title.ru' => 'required|max:255',
				'title.en' => 'required|max:255',
				'longitu' => 'required|max:255',
				'latitu' => 'required|max:255'
			]);
	
	        if (empty($validator) && $validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }else{


	if($result->update($data)) {
	   return ['status' => 'Информация обновлена'];
	}else{ return ['error' => 'Нет информация'];}
        }
	
}







	public function deleteMap($id) {
			$result = $this->one($id);
			if($result->delete()) {
				return ['status' => 'Удалено'];
			}
	}



}