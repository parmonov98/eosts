<?php

namespace App\Repositories;

use App\Models\Menu;
use Gate;

class MenusRepository extends Repositor {


	public function __construct(Menu $menu) {
		$this->model = $menu;
	}

	public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		return $result;
	}

	public function addMenu($request) {
		if(!Gate::allows('save', $this->model)) {
			abort(403);
		}
		$data = $request->except('_token');
		$data = $request->only('title','parent','path');

		// dd($data['path']);
		if($data['parent']>0){$par = $this->one($data['parent']);
				$pardd=$this->transliterate($par->title['ru']).'-';}else{$pardd='';}

		if($data['path'] == '#'){$data['path'] = '#';}
		//dd(str_limit($data['path'],4));
		//dd($data['path']);
		elseif(substr($data['path'],0,1) == '/'){$data['path'];}
		elseif(substr($data['path'],0,4) == 'http'){$data['path'];}
		elseif($data['path']!=null){$data['path']=$pardd.$this->transliterate($data['path']);}
		elseif($data['path']==null){$data['path']=$pardd.$this->transliterate($data['title']['ru']);}
		elseif(substr($data['path'],0,4) != 'http'){$data['path']=$pardd.$this->transliterate($data['title']['ru']);}
		//else{$data['path']=$this->transliterate($data['title']['uz']);}
		elseif(empty($data['path'])){$data['path']=$pardd.$this->transliterate($data['title']['ru']);}

		if(empty($data)) {
			return ['error'=>'Ma\'lumot yo\'q'];
		}


		if($this->model->fill($data)->save()) {
			return ['status'=>'Xavola qo\'shildi'];
		}



	}

	public function updateMenu($request, $id) {

	if(!Gate::allows('edit', $this->model)) {
			abort(403);
		}

		$data = $request->only('title','path','parent');

		if(empty($data)) {
			return ['error'=>'Нет информации'];
		}

		if($data['parent']>0){$par = $this->one($data['parent']);
				$pardd=$this->transliterate($par->title['ru']).'-';}else{$pardd='';}
	//	if($data['path']!=$id['path']){
			if($data['path'] == '#'){$data['path'] = '#';}

		elseif(substr($data['path'],0,1) == '/'){$data['path'];}
		elseif(substr($data['path'],0,4) == 'http'){$data['path'];}

		elseif($data['path']!=null){$data['path']=$pardd.$this->transliterate($data['path']);}
		elseif($data['path']==null){$data['path']=$pardd.$this->transliterate($data['title']['ru']);}
		elseif(substr($data['path'],0,4) != 'http'){$data['path']=$pardd.$this->transliterate($data['title']['ru']);}
		elseif(empty($data['path'])){$data['path']=$pardd.$this->transliterate($data['title']['ru']);}


		if($id->update($data)) {
			return ['status'=>'Xavola yangilandi'];
		}

	}

	public function deleteMenu($id) {
		if(!Gate::allows('destroy', $this->model)) {
			abort(403);
		}

	$result = $this->one($id);

		if($result->articles()->count()!=0){
		 return ['status'=>'Xavolada maqola bor'];
		}

		if($result->delete()) {
			return ['status'=>'Xavola uchirildi'];
		}
	}

}