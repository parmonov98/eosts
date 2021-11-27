<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ArticlesRepository;
use App\Repositories\RoleUserRepository;
use Auth;
use App\Models\User;
use App\Models\Article;
use App\Models\Uslug;
use App\Models\Settings;
use App\Models\Maps;
use App\Models\Contact;
use Config;
use Str;
use PDF;
use Arr;
use Session;

class IndexController extends SiteController
{
    public function __construct(ArticlesRepository $a_rep,RoleUserRepository $ru_rep){
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu));
		$this->a_rep = $a_rep;
		$this->ru_rep = $ru_rep;
		$this->template = env('THEME').'.index';
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = null)
    {


   	  if($lang != 'ru' && $lang != 'en' && $lang != 'tu'){
		abort(404);
	   }
	   session()->put('lang', $lang);
	   $lang = session('lang');
    	

		$this->title =  $this->keywords =  $this->meta_desc =  $this->getSetting()['names']['name'][$lang];

		if(Auth::user()){
			$request = Auth::user();
			$result = $this->ru_rep->addRuser($request);
			if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}}


		$articless =$this->getArticles($lang);

        $articles = view(config('settings.theme').'.content',compact('articless'))->render();

        $this->vars = Arr::add($this->vars,'content',$articles);

// dd(json_encode('Сертификат бўлимини кўриш'));



        return $this->renderOutput($lang);
    }





	public function getArticles($cat = null){

// dd(Uslug::get()[0]['title'][$cat]);

				$articles = Uslug::where([
								['title->'.$cat,'!=','NULL'],
								['desc->'.$cat,'!=','NULL'],
								['text->'.$cat,'!=','NULL']
								])
								->orderBy('created_at', 'desc')
								->latest('id')->paginate(Config::get('settings.paginate_index'));

		return $articles;
	}





	public function getSetting(){
		$man = Settings::select()->first();
		return $man;
	}







    public function selmap(Request $request)
    {

	   $lang = session('lang');
   	  if($lang != 'ru' && $lang != 'en' && $lang != 'tu'){
	   session()->put('lang', 'ru');
	   $lang = session('lang');
	   }
    	

    	$data = $request->except('_token');	
    	// dd($data['smap']);
    	if($data['smap']>0){
        $maps = Maps::where('id', $data['smap'])->first();

echo '<iframe width="600" height="450" src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;coord='.$maps->longitu.','.$maps->latitu.'&amp;q='.$maps->title[$lang].'&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';

    }else{
    	echo '';
    }


    }


















}
