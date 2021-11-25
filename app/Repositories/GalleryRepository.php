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
				'min' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
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




public function updateGallery($request, $gallery){
	// dd($request);

		$data = $request->except('_token','max','min');	

		$validator=	$request->validate([
				'name.name.ru' => 'required',
				'name.name.en' => 'required',
				'max' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				'min' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
			]);
	
	        if (empty($validator) && $validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }else{

	$rand = '_'.strtolower(Str::random(20));
if($request->hasFile('max') && $request->hasFile('min')) {
if(is_array($gallery->img)){
$file2 = public_path('gallery/').$gallery->img['max'];File::delete($file2);
$file = public_path('gallery/').$gallery->img['min'];File::delete($file);
}    		

$max = 'max'.$rand.'.'.$request->max->extension();
$min = 'min'.$rand.'.'.$request->min->extension();
   
$request->max->move(public_path('gallery'), $max);
$request->min->move(public_path('gallery'), $min);
$data['img'] = ['max'=>$max,'min'=>$min];

}
elseif($request->hasFile('max')) {
if(is_array($gallery->img)){$file2 = public_path('gallery/').$gallery->img['max'];File::delete($file2);}
$max = 'max'.$rand.'.'.$request->max->extension();			   
$request->max->move(public_path('gallery'), $max);
$data['img'] = ['max'=>$max,'min'=>$gallery->img['min']];
}
elseif($request->hasFile('min')) {
if(is_array($gallery->img)){$file = public_path('gallery/').$gallery->img['min'];File::delete($file);}

$min = 'min'.$rand.'.'.$request->min->extension();
$request->min->move(public_path('gallery'), $min);
$data['img'] = ['max'=>$gallery->img['max'],'min'=>$min];

}
			





	if($gallery->update($data)) {
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