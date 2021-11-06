<?php
namespace App\Repositories;

use Config;
use DB;

abstract class Repositor {

	protected $model = FALSE;

		public function get($select = '*',$take = FALSE,$pagination = FALSE,$where = FALSE,$latest= FALSE,$pagination2 = FALSE) {

		$builder = $this->model->select($select);

		if($take){
			$builder->take($take);
		}


		//dd($where);
		if($where){
			$builder->where($where[0],$where[1]);
		}


		if($latest){
			$builder->latest('created_at');
		}

		if($pagination){
			return $this->check($builder->paginate(Config::get('settings.paginate')));
		}
		if($pagination2){
			return $this->check($builder->paginate(Config::get('settings.cat_count')));
		}
		return $this->check($builder->get());
	}





	protected function check($result){
		if($result->isEmpty()){
			return FALSE;
		}
		$result->transform(function($item, $key){

			if(is_string($item->img) && is_object(json_decode($item->img)) && (json_last_error() == JSON_ERROR_NONE)){
				$item->img = json_decode($item->img);
			}
			return $item;
		});

		return  $result;
	}

		public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		return $result;
	}




	//$articles = $this->a_rep->get('*',TRUE,TRUE,$where,TRUE);
	//public function get($select = '*',$take = FALSE,$pagination = FALSE,$where = FALSE,$latest= FALSE)

	public function sechArt($q = FALSE,$cat = 'uz',$attr = array()){
		$result = $this->model
					->where('heddin','=',1)
					->where('title','like','%'.$q.'%')
					->orWhere('text'.$cat,'like','%'.$q.'%')
       				->orderBy('id','desc')
       				->paginate(Config::get('settings.search_paginate'));
		return $result;
	}


		public function sech($q = FALSE,$cat = FALSE, $attr = array()){

		$result = $this->model
					->where('heddin','=',1)
					->where('title','LIKE','%'.$q.'%')
       				->orWhere('text'.$cat,'LIKE','%'.$q.'%')
       				->orderBy('id','desc')
       				->paginate(Config::get('settings.search_paginate'));
      		//dd($result);
		return $result;
	}


	public function transliterate($string) {
		$str = mb_strtolower($string, 'UTF-8');

		$leter_array = array(
			'a' => 'а',
			'b' => 'б',
			'v' => 'в',
			'g' => 'г,ґ,ғ',
			'd' => 'д',
			'e' => 'е,є,э',
			'jo' => 'ё',
			'zh' => 'ж',
			'z' => 'з',
			'i' => 'и,і',
			'ji' => 'ї',
			'j' => 'й',
			'k' => 'к,қ',
			'l' => 'л',
			'm' => 'м',
			'n' => 'н',
			'o' => 'о',
			'p' => 'п',
			'r' => 'р',
			's' => 'с',
			't' => 'т',
			'u' => 'у,ў',
			'f' => 'ф',
			'kh' => 'х',
			'ts' => 'ц',
			'ch' => 'ч',
			'sh' => 'ш',
			'shch' => 'щ',
			'' => 'ъ',
			'y' => 'ы',
			'' => 'ь',
			'yu' => 'ю',
			'ya' => 'я',
		);

		foreach($leter_array as $leter => $kyr) {
			$kyr = explode(',',$kyr);

			$str = str_replace($kyr,$leter, $str);

		}

		//  A-Za-z0-9-
		$str = preg_replace('/(\s|[^A-Za-z0-9\-])+/','-',$str);

		$str = trim($str,'-');

		return $str;
	}

}