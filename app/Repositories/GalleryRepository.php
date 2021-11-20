<?php
namespace App\Repositories;

use App\Models\Gallery;
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

class GalleryRepository extends Repositor {

	public function __construct(Gallery $silse){
		$this->model = $silse;
	}

	public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		return $result;
	}

	public function img($id,$attr = array()){
		$result = $this->model->where('img',$id)->first();
		return $result;
	}

public function addFiles($request){

		$data = $request->except('_token','max','min');	

		$validator=	$request->validate([
				'name.name.ru' => 'required',
				'name.name.en' => 'required',
				'max' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				'min' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
	
	        if (empty($validator) && $validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }else{
        			$rand = '_'.strtolower(Str::random(20));

		$max = 'max'.$rand.'.'.$request->max->extension();
		$min = 'min'.$rand.'.'.$request->min->extension();
			   
		$request->max->move(public_path('gallery'), $max);
		$request->min->move(public_path('gallery'), $min);
		$data['img'] = ['max'=>$max,'min'=>$min];

	if(isset($data['img']) && $this->model->fill($data)->save()) {
	   return ['status' => 'Информация добавлена'];
	}else{ return ['error' => 'Нет фото'];}
        }



		
}







	public function deleteFile($id) {
		$result = $this->one($id);

		if(isset($result->img) && is_file(public_path('/gallery/').$result->img['max'])){
		$zmax = public_path('/gallery/').$result->img['max'];File::delete($zmax);
		}
		if(isset($result->img) && is_file(public_path('/gallery/').$result->img['min'])){
		$zmin = public_path('/gallery/').$result->img['min'];File::delete($zmin);
		}
			if($result->delete()) {
				return ['status' => 'Удалено'];
			}
	}



}