<?php
namespace App\Repositories;

use App\Models\OnasNaKl;
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

class NakilRepository extends Repositor {

	public function __construct(OnasNaKl $onasnakl){
		$this->model = $onasnakl;
	}

	public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		return $result;
	}

	public function img($id,$attr = array()){
		$result = $this->model->where('img',$id)->first();
		return $result;
	}

public function addKil($request){

		$data = $request->except('_token','img');	

		$validator=	$request->validate([
				'name' => 'required|max:255',
				'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024'
			]);
	
	        if (empty($validator) && $validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }else{

        $rand = '_'.strtolower(Str::random(20));

		$img = 'img'.$rand.'.'.$request->img->extension();
			   
		$request->img->move(public_path('nakil'), $img);
		$data['img'] = $img;

	if(isset($data['img']) && $this->model->fill($data)->save()) {
	   return ['status' => 'Ma\'lumot qo\'shildi'];
	}else{ return ['error' => 'Нет фото'];}
        }
    }




public function updateKil($request, $id){
	// dd($id);
		$result = $this->one($id);

		$data = $request->except('_token','img','_method');	

		$validator=	$request->validate([
				'name' => 'required|max:255',
				// 'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024'
			]);
	
	        if (empty($validator) && $validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }else{

	$rand = '_'.strtolower(Str::random(20));
if($request->hasFile('img')) {
	if(is_array($result->img)){
		$file2 = public_path('nakil/').$result->img;File::delete($file2);
	}    		

$img = 'img'.$rand.'.'.$request->img->extension();
   
$request->img->move(public_path('nakil'), $img);
$data['img'] = $img;

}




	if($result->update($data)) {
	   return ['status' => 'Ma\'lumot yangilandi'];
	}else{ return ['error' => 'Нет фото'];}
        }



		
}







	public function deleteKil($id) {
		$result = $this->one($id);

		if(isset($result->img) && is_file(public_path('/nakil/').$result->img)){
		$zmax = public_path('/nakil/').$result->img;File::delete($zmax);
		}
			if($result->delete()) {
				return ['status' => 'Uchirildi'];
			}
	}



}