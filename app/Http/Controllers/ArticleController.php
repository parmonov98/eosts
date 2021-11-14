<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Repositories\ArticlesRepository;
use App\Models\Menu as Menus;
use Config;
use Arr;

class ArticleController extends SiteController
{
    public function __construct(ArticlesRepository $a_rep){
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu));

		$this->a_rep = $a_rep;

		$this->template = env('THEME').'.articles';
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index($lang = 'ru',$cat = FALSE)
    {
      if($lang != 'ru' && $lang != 'en' && $lang !== 'tu'){
        abort(404);
       }
       session()->put('lang', $lang);
       $lang = session('lang');
       // dd($lang);


		$productItems =$this->getArticles($cat);
        $pub = $this->ArticleLike(0,0);


        $this->title = $this->keywords = $this->meta_desc = $productItems[1][$lang];


        $articles = view(env('THEME').'.article_content')
        ->with(['articles'=>$productItems[0],'name'=>$productItems[1][$lang],'cat'=>$cat,'lang'=>$lang,'pub'=>$pub])
        ->render();

        // 

        $this->vars = Arr::add($this->vars,'content',$articles);




        return $this->renderOutput($cat);
    }





		public function getArticles($cat){
		$where = FALSE;
    	if($cat){
    		if(!Menus::select()->where('path',$cat)->first()){
				abort(404);
			}
			$id = Menus::select()->where('path',$cat)->first()->id;
			$title = Menus::select()->where('path',$cat)->first()->title;
			$where = ['category_id',$id];
		}

		$articles = Article::where([

								['heddin','!=','0'],
								['category_id',$id]
								])
								->where("title",'!=','NULL')
								->orderBy('created_at', 'desc')
								->latest('id')->paginate(Config::get('settings.paginate_article'));

// dd($articles);
		return [$articles, $title];
	}


public function all_articles($lang = 'ru')
    {

      if($lang != 'ru' && $lang != 'en' && $lang !== 'tu'){
        abort(404);
       }
       session()->put('lang', $lang);
       $lang = session('lang');

$titles = 'Yangiliklar';
        $pub = $this->ArticleLike(0,0);
        $name = $this->title =  $titles;
        $this->keywords =  $titles;
        $this->meta_desc =  $titles;

$articles =$this->allArticles($lang);

        $articles = view(env('THEME').'.article_content',compact('articles','name','pub' ))->render();
        $this->vars = Arr::add($this->vars,'content',$articles);
        return $this->renderOutput($lang);
    }


public function allArticles($lang){
                 $articles = Article::where([
                                ['description'.$lang,'!=','NULL'],
                                ['heddin','!=','0'],
                                ['img','!=','NULL']
                                ])
                                ->where("title",'!=','NULL')
                                ->orderBy('created_at', 'desc')
                                ->latest('id')->paginate(Config::get('settings.paginate_article'));

        if($articles){
            $articles->load('menu');
        }

        return $articles;
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
 	//   public function show(article $article)
	 public function show($cat = FALSE, $blog = FALSE, $id = FALSE)
    {
      if($cat != 'ru' && $cat != 'en' && $cat !== 'tu'){
        abort(404);
       }
       session()->put('lang', $cat);
       $cat = session('lang');


    	if(empty($cat) && empty($blog) && empty($id)){
			abort(404);
		}


        $articles = Article::where("title",'!=','NULL')->where('id',$id)->first();

    	if($id){
    		if($articles == null){
				abort(404);
		}



if(isset($articles->id)){
         $pub = $this->ArticleLike($id,$articles->category_id);
		$this->title = $this->keywords = $this->meta_desc = $articles->title[$cat];
		}

    $articles->increment('view_count');

		$content = view(env('THEME').'.detal_article_content',compact('articles','cat','pub'))->render();
       	$this->vars = Arr::add($this->vars,'content',$content);
       	return $this->renderOutput($cat);
    }
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
