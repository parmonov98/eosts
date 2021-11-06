<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MenusRepository;
use App\Models\Article;
use App\Models\Slider;
use App\Models\Settings;
use Config;
use Cache;
use Menu;
use Arr;
use Str;
use App\Models\Menu as Menus;


class SiteController extends Controller
{

    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;
    protected $sl_rep;
    protected $gm_rep;
    protected $cart_rep;

    protected $keywords;
    protected $meta_desc;
    protected $title;

    protected $template;
    protected $vars = array();

    protected $contentRightBar = FALSE;
    protected $contentLeftBar = FALSE;

    protected $bar = 'no';


    public function __construct(MenusRepository $m_rep ){
		$this->m_rep = $m_rep;

	}


	protected function renderOutput($lang = 'ru',$cat = null){

	if(!session()->has('lang')){
			session()->put('lang', 'ru');
		}
	$lang = session('lang');

	if($lang != 'oz' && $lang != 'uz' && $lang != 'ru' && $lang != 'en'){
			abort(404);
		}


	$navigation = view(config('settings.theme').'.navigation')->with('menu',$this->getMenu($lang))->render();
	$this->vars = Arr::add($this->vars,'navigation',$navigation);


	$slider = view(config('settings.theme').'.slider')->with('sliders',$this->getSliders($lang))->render();
	$this->vars = Arr::add($this->vars,'slider',$slider);


	$this->vars = Arr::add($this->vars,'keywords',$this->keywords);
		$this->vars = Arr::add($this->vars,'meta_desc',$this->meta_desc);
		$this->vars = Arr::add($this->vars,'title',$this->title);
	$this->vars = Arr::add($this->vars,'getsetting',$this->getSetting());

	return view($this->template)->with($this->vars);
	}






	public function getMenu($cat= 'ru'){
			if(empty($cat)){
		$cat = session('lang');
	}
		$menu = $this->m_rep->get();
		// dd($menu);

		$mBuilder = Menu::make('MyNav',function($m) use($menu,$cat){
			foreach($menu as $item){
				if(Str::limit($item->path,4) == 'http...'){$urlm = '';}
				else if(Str::limit($item->path,1) == '/...') {$urlm = '..';}
				else if($item->path == "#"){$urlm = '..';}
				else{$urlm = $cat.'/blog/';}

				if($item->parent == 0) {
					$m->add($item->title[$cat],$urlm.$item->path)->id($item->id);
				}else{
					if($m->find($item->parent)){
						$m->find($item->parent)->add($item->title[$cat],$urlm.$item->path)->id($item->id);
					}
				}
			}
		});
		return $mBuilder;
		}


	public function getSliders($cat = null){
		//dd($cat);

			$art = 	$articles = Slider::orderBy('created_at', 'desc')
							->latest('id')->take(Config::get('settings.slider_kurish'))->get();

			// dd($art);
		return [$art,$cat];
	}

	public function getSetting(){
		$man = Settings::select()->first();
		return $man;
	}
}

