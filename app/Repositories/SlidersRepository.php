<?php
namespace App\Repositories;

use App\Models\Slider;
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

class SlidersRepository extends Repositor {

	public function __construct(Slider $silse){
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

		$data = $request->except('_token','file');
	// dd($data);

		if(empty($data)) {return array('error' => 'Нет фото');}


		if($request->hasFile('image')) {
			$image = $request->file('image');

			if(!empty($request->image)){

				$obj = new \stdClass;

		$rand = '_'.strtolower(Str::random(20));

		$obj->max = 'max'.$rand.'.jpg';
		$obj->min = 'min'.$rand.'.jpg';


	$img = Image::make($image);

	$img->fit(Config::get('settings.slider')['max']['width'],
		 Config::get('settings.slider')['max']['height'])->save(public_path('sliders/').$obj->max);


$img->fit(Config::get('settings.slider')['min']['width'],
			Config::get('settings.slider')['min']['height'])->save(public_path('sliders/').$obj->min);




				$data['img'] = ['max'=>$obj->max,'min'=>$obj->min];
				//dd($data['img']);
			}else{
				dd('yuq!!!!');
			}

			}

	if(isset($data['img']) && isset($data['name']['name']['ru']) && isset($data['name']['name']['en']) && $this->model->fill($data)->save()) {
	   return ['status' => 'Информация добавлена'];
	}else{ return ['error' => 'Нет фото'];}

	if(empty($data)){return ['error'=>'Нет информация'];	}
	if($result->update($data)){return ['status'=>'Информация обновлена'];}
}







	public function deleteFile($id) {
		$result = $this->one($id);

		if(isset($result->img) && is_file(public_path('/sliders/').$result->img['max'])){			
		$zmax = public_path('/sliders/').$result->img['max'];File::delete($zmax);}
		if(isset($result->img) && is_file(public_path('/sliders/').$result->img['min'])){	
		$zmax = public_path('/sliders/').$result->img['min'];File::delete($zmax);}
			if($result->delete()) {
				return ['status' => 'Удалено'];
			}
	}



}