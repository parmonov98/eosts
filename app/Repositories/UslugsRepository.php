<?php
namespace App\Repositories;

use App\Models\Uslug;
use App\Models\Comment;
use App\Models\Menu;
use Gate;
use Image;
use Config;
use File;
use Str;





class UslugsRepository extends Repositor {

	public function __construct(Uslug $uslug){
		$this->model = $uslug;
	}

	public function one($id,$attr = array()){

		$result = $this->model->where('id',$id)->first();
		return $result;
	}


	public function img($id,$attr = array()){
		$result = $this->model->where('img',$id)->first();
		return $result;
	}


	public function upKurish($id) {
		$result = $this->one($id);
		$result->update(['prev' => 1]);
	}


	public function addUslug($request) {

		
		$data = $request->except('_token','image');	

		$validator=	$request->validate([
				'title.ru' => 'required', 'title.en' => 'required', 'desc.ru' => 'required','desc.en' => 'required',
				'text.ru' => 'required','text.en' => 'required',
				'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
	
	        if (empty($validator) && $validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }else{

        	$data['alias'] = $this->transliterate(Str::limit($data['title']['ru'],200));

        	$image = $request->file('image');
			if(!empty($request->image)){

				$obj = new \stdClass;

		$rand = '_'.strtolower(Str::random(20));

		$obj->max = 'max'.$rand.'.jpg';
		$obj->min = 'min'.$rand.'.jpg';

	$img = Image::make($image);

	$img->fit(Config::get('settings.ulug')['max']['width'],
		 Config::get('settings.ulug')['max']['height'])->save(public_path('uslugi/').$obj->max);

$img->fit(Config::get('settings.ulug')['min']['width'],
			Config::get('settings.ulug')['min']['height'])->save(public_path('uslugi/').$obj->min);

				$data['img'] = ['max'=>$obj->max,'min'=>$obj->min];

		empty($data['desc'])?($data['desc']=NULL):'';
	
			if($this->model->fill($data)->save()) {
						return ['status' => 'Ma\'lumot qo\'shildi'];
				}	

        }}

	}



	public function updateUslug($request, $uslug) {


$data = $request->except('_token','image','_method','old_image');


$validator=	$request->validate([
				'title.ru' => 'required', 'title.en' => 'required', 'desc.ru' => 'required','desc.en' => 'required',
				'text.ru' => 'required','text.en' => 'required',
			]);
	
	        if (empty($validator) && $validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }

		$data['alias'] = $this->transliterate(Str::limit($data['title']['ru'],200));


		if($request->hasFile('image')) {
			$request->validate([
				'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			$image = $request->file('image');


			if(is_array($uslug->img)){
			$file2 = public_path('uslugi/').$uslug->img['max'];File::delete($file2);

			$file = public_path('uslugi/').$uslug->img['min'];File::delete($file);
			}

			if(!empty($request->image)){

				$obj = new \stdClass;


		$rand = '_'.strtolower(Str::random(20));

		$obj->max = 'max'.$rand.'.jpg';
		$obj->min = 'min'.$rand.'.jpg';


	$img = Image::make($image);



	$img->fit(Config::get('settings.ulug')['max']['width'],
		 Config::get('settings.ulug')['max']['height'])->save(public_path('uslugi/').$obj->max);

$img->fit(Config::get('settings.ulug')['min']['width'],
			Config::get('settings.ulug')['min']['height'])->save(public_path('uslugi/').$obj->min);

				$data['img'] = ['max'=>$obj->max,'min'=>$obj->min];
				//dd($data['img']);
			}else{
				dd('yuq!!!!');
			}
		}
		if($uslug->update($data)) {
			return ['status' => 'Ma\'lumot yangilandi'];
		}
	}
	

	public function deleteUslug($uslug) {
		if(isset($uslug->img)){
			if(is_file(public_path('uslugi/').$uslug->img['max'])){
			$file2 = public_path('uslugi/').$uslug->img['max'];File::delete($file2);
				}

			if(is_file(public_path('uslugi/').$uslug->img['min'])){
			$file = public_path('uslugi/').$uslug->img['min'];File::delete($file);
				}
		}

		if($uslug->delete()) {
			return ['status' => 'Ma\'lumot uchirildi'];
		}
	}
}