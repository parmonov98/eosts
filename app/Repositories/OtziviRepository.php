<?php

namespace App\Repositories;

use App\Models\Otzivi;
use Validator;
use Gate;
use File;
use Str;

class OtziviRepository extends Repositor {


	public function __construct(Otzivi $otzivi) {
		$this->model = $otzivi;
	}

	public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		return $result;
	}

	public function addOtziv($request) {
	
   $validator = Validator::make($request->except('_token'), [                
                'name' => 'required|string',
                'img' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'text' => 'required|string'
    ]);

        if ($validator->fails())
        {
            return ['errors'=>$validator->errors()->all()];
        }else{

		$data = $request->except('_token','img');

        	$rand = '_'.strtolower(Str::random(20));

		$user = 'user'.$rand.'.'.$request->img->extension();
		
			   
		$request->img->move(public_path('users'), $user);
		$data['img'] = $user;

	if(isset($data['img']) && $this->model->fill($data)->save()) {
				return ['status'=>'Ma\'lumot qo\'shildi'];
			}
        }

	}

	public function updateOtziv($request, $otzivi, $id) {

		$data = $request->except('_token','img','_method');
        	 $result = $this->one($id);

        $request->validate([
        'name' => 'required|string',
        'img' => 'image:jpeg,jpg,png,gif|max:1024',
        'text' => 'required|string'
        ]);
// dd($request->file());
        if($request->file()) {

		$img = public_path('/users/').$result->img;File::delete($img);

        $data['img'] = $user = 'user_'.strtolower(Str::random(20)).'.'.$request->img->extension();
      
   
        $request->img->move(public_path('users'), $user);

            if($result->update($data)){	return ['status' => 'File yangilandi.'];}
        }elseif($result->update($data)){	


        	return ['status' => 'File yangilandi.'];}

	}

	public function deleteOtziv($id) {
	$result = $this->one($id);

	if(isset($result->img) && is_file(public_path('/users/').$result->img)){
		$zmax = public_path('/users/').$result->img;File::delete($zmax);
		}


		if($result->delete()) {
			return ['status'=>'Ma\'lumot uchirildi'];
		}
	}

}