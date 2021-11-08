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
		$obj->sr = 'sr'.$rand.'.jpg';

if($data['sezi']==1){$maxw = 1400; $maxh = 700; $minw =520 ; $minh = 260;}
elseif($data['sezi']==2){$maxw = 700; $maxh = 1400; $minw = 260; $minh = 520;}
elseif($data['sezi']==3){$maxw = 1400; $maxh = 1400; $minw = 520; $minh = 520;}


	$img = Image::make($image);

	$img->fit($maxw,$maxh)->save(public_path('gallery/').$obj->max);
	$img->fit($minw,$minh)->save(public_path('gallery/').$obj->min);
	$img->fit(155,155)->save(public_path('gallery/').$obj->sr);

				$data['img'] = ['max'=>$obj->max,'min'=>$obj->min,'sr'=>$obj->sr];
			}else{
				dd('yuq!!!!');
			}



			}



	if(isset($data['img']) && $this->model->fill($data)->save()) {
	   return ['status' => 'Информация добавлена'];
	}else{ return ['error' => 'Нет фото'];}

	if(empty($data)){return ['error'=>'Нет информация'];	}
	if($result->update($data)){return ['status'=>'Информация обновлена'];}
}







	public function deleteFile($id) {
		$result = $this->one($id);

		if(isset($result->img) && is_file(public_path('/gallery/').$result->img['max'])){
		$zmax = public_path('/gallery/').$result->img['max'];File::delete($zmax);
		}
		if(isset($result->img) && is_file(public_path('/gallery/').$result->img['min'])){
		$zmin = public_path('/gallery/').$result->img['min'];File::delete($zmin);
		}
		if(isset($result->img) && is_file(public_path('/gallery/').$result->img['sr'])){
		$zsr = public_path('/gallery/').$result->img['sr'];File::delete($zsr);
		}
			if($result->delete()) {
				return ['status' => 'Удалено'];
			}
	}



}