<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Repositories\ArticlesRepository;
use Config;
use Validator;
use Html;
use Arr;
use Session;
use App\Models\Menu;
use App\Models\Article;
use App\Http\Requests;

class SearchController extends SiteController
{
	public function __construct(ArticlesRepository $a_rep){
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu));

		$this->a_rep = $a_rep;
		$this->template = env('THEME').'.search';
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function serArt($q = FALSE, $cat = FALSE)
    {
	//dd($cat);
     	$articles = $this->a_rep->sech($q,$cat);
    	return $articles;
    }



    public function store(Request $request)
    {
		if(!session()->has('lang')){
			session()->put('lang', 'oz');
		}
		$cat = session('lang');

	  	if($cat != 'oz' && $cat != 'uz' && $cat != 'ru' && $cat != 'en'){
			abort(404);
		}
	  if('oz'==$cat){$tre = '<h3>3 белгидан ками қидирилмайди</h3>';}
	  elseif('uz'==$cat){$tre = '<h3>3 belgidan kami qidirilmaydi</h3>';}
	  elseif('ru'==$cat){$tre = '<h3>Неименье 3 сен волов</h3>';}
	  elseif('en'==$cat){$tre = '<h3>Neimenie 3 networks ox</h3>';}
	  if('oz'==$cat){$top = 'га маълумот топилмади';}
	  elseif('uz'==$cat){$top = 'ga ma`lumot topilmadi';}
	  elseif('ru'==$cat){$top = 'не найден';}
	  elseif('en'==$cat){$top = 'is not found';}

              $this->title = 'Ma`lumotlarni izlash';
		$this->keywords = 'Ma`lumotlarni izlash';
		$this->meta_desc = 'Ma`lumotlarni izlash';
         $data = $request->except('_token');


        $validator = Validator::make($data,[
        	 'query' => 'required|min:3|max:255',
        ]);

$pub = $this->ArticleLike(0,0);


        if($validator->fails()){
$product = view(env('THEME').'.search_content')->with(['message'=>$tre])->render();
$this->vars = Arr::add($this->vars,'content',$product);
		}else{
			$articles = $this->serArt($data['query'],$cat);
			//dd($articles);

    	if(count($articles) == 0){
$product = view(env('THEME').'.search_content')->with(['message'=>$top,'search'=>$data['query'],'pub'=>$pub])->render();
$this->vars = Arr::add($this->vars,'content',$product);
		}else{

	 $this->title = $data['query'];
		$this->keywords = $data['query'];
		$this->meta_desc = $data['query'];

		$product = view(env('THEME').'.search_content')->with(['products'=>$articles,'search'=>$data['query'],'pub'=>$pub])->render();
		$this->vars = Arr::add($this->vars,'content',$product);

				}

			}




       	return $this->renderOutput($cat);
    }



public function ArticleLike($id, $cat_id){

    if($id>0 && $cat_id>0){
    $articles = Article::where('id','!=',$id)->where('img','!=',NULL)->where('category_id',$cat_id)->inRandomOrder()->limit(3)->get();
}else{
    $articles = Article::where('img','!=',NULL)->orderBy('created_at', 'desc')->inRandomOrder()->limit(3)->get();
}


    return $articles;
}

}
