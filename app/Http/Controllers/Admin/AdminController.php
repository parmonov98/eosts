<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Xatolar;
use App\Models\Comment;
use App\Models\User;
use Config;
// use Auth;
use Illuminate\Support\Facades\Auth;
use Cache;
use Menu;
use Arr;
use Gate;

class AdminController extends \App\Http\Controllers\Controller
{

	protected $p_rep;
    protected $a_rep;
    protected $user;
    protected $template;
    protected $content = FALSE;
    protected $title;
    protected $vars;
    protected $projects;


    public function __construct() {

              // $this->user = Auth::user();

        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();
    		if(!$this->user) {
				abort(403);
			}
            return $next($request);
        });
	
	}


	 public function authUsers() {
	 	$this->user = Auth::user();

	 	return $this->user;
	 }

 public function renderOutput() {


	 	if(!Gate::allows('VIEW_ADMIN')) {
			abort(403);
		}
	// dd(Auth::check());
		$this->vars = Arr::add($this->vars,'title',$this->title);





	// $mes = $this->messages();
	// //	dd($getKupUqi);
	// $mes = view(config('settings.theme').'.admin.mes')->with('mes',$mes)->render();
	// $this->vars = Arr::add($this->vars,'mes',$mes);


	// $xatolar = $this->getXato();
	// //	dd($getKupUqi);
	// $xato = view(config('settings.theme').'.admin.xato')->with('xato',$xatolar)->render();
	// $this->vars = Arr::add($this->vars,'xato',$xato);


	// $izoxlar = $this->getIzox();
	// //	dd($getKupUqi);
	// $izox = view(config('settings.theme').'.admin.izox')->with('izox',$izoxlar)->render();
	// $this->vars = Arr::add($this->vars,'izox',$izox);


$menu = $this->getMenu();
/*
    $navigation = Cache::remember('navigation',10,function(){
		$menu = $this->getMenu();
		return view(config('settings.theme').'.admin.navigation')->with('menu',$menu)->render();
	});
  */

		// $this->vars = Arr::add($this->vars,'mes',$this->messages());
		// $this->vars = Arr::add($this->vars,'xato',$this->getXato());
		$this->vars = Arr::add($this->vars,'izox',$this->getIzox());

		$navigation = view(config('settings.theme').'.admin.navigation')->with('menu',$menu)->render();

        $this->vars = Arr::add($this->vars,'navigation',$navigation);

		if($this->content) {
			$this->vars = Arr::add($this->vars,'content',$this->content);
		}

		$footer = view(config('settings.theme').'.admin.footer')->render();

    $this->vars = Arr::add($this->vars,'footer',$footer);

		return view($this->template)->with($this->vars);

	}





	public function messages() {
				$cou = Contact::where('prev','0')->orderBy('created_at', 'desc')->limit(Config::get('settings.izox_xato_xabar'))->get();
				$soni = Contact::where('prev','0')->orderBy('created_at', 'desc')->count();

			$users = User::select()->get();
			$user = array();
		foreach($users as $user) {
				$username[$user->id] = [$user->name,$user->image];
		}
 // dd($username);
		return [$cou,$soni,$username];
	}


	public function getXato() {
				$cou = Xatolar::where('prev','0')->orderBy('created_at', 'desc')->limit(Config::get('settings.izox_xato_xabar'))->get();
				$soni = Xatolar::where('prev','0')->orderBy('created_at', 'desc')->count();
		return [$cou,$soni];
	}

	public function getIzox() {
				$cou = Comment::where('prev','0')->orderBy('created_at', 'desc')->limit(Config::get('settings.izox_xato_xabar'))->get();
				$soni = Comment::where('prev','0')->orderBy('created_at', 'desc')->count();
		return [$cou,$soni];
	}





	public function getMenu() {
		return Menu::make('adminMenus', function($menu) {


$menu->add('<span>Главная страница</span>',array('route' => 'adminIndex'))->prepend('<i class="fa fa-dashboard"></i>');



	if(Gate::allows('VIEW_ADMIN_SETTINGS')) {
$sozla = $menu->add('<span>Настройки</span>',['disableActivationByURL' => true, 'url' => '#'])->attr('class', 'treeview')->prepend('<i class="fa fa-wrench"></i>');

 $sozla->add('<span>Названия компания</span>', array('route' => 'setNames'))->prepend('<i class="fa fa-street-view"></i>');

$sozla->add('<span>Адрес</span>', array('route' => 'setAddress'))->prepend('<i class="fa fa-map-marker"></i>');
 $sozla->add('<span>Социальной сети</span>', array('route' => 'setSotNetwork'))->prepend('<i class="fa fa-share-alt"></i>');

 // $sozla->add('<span>Йил дастури</span>', array('route' => 'setFiles'))->prepend('<i class="fa fa-newspaper-o"></i>');
 // $sozla->add('<span>Фото галирия</span>', array('route' => 'rasm.index'))->prepend('<i class="fa fa-camera"></i>');

 // $sozla->add('<span>Фон расмини ўзгартириш</span>', array('route' => 'setFon'))->prepend('<i class="fa fa-retweet"></i>');


$sozla->add('<span>Топ рейтинг</span>', array('route' => 'setRating'))->prepend('<i class="fa fa-line-chart"></i>');

		}







			if(Gate::allows('VIEW_ADMIN_XATO')) {
			$menu->add('<span>Хатолар</span>',array('route' => 'xato.index'))->prepend('<i class="fa fa-exclamation-triangle"></i>');
			}

			if(Gate::allows('VIEW_ADMIN_COMMENT')) {
			$menu->add('<span>Комментарии</span>',array('route' => 'izox.index'))->prepend('<i class="fa fa-comment"></i>');
			}



			if(Gate::allows('VIEW_ADMIN_CONTACT')) {
			$menu->add('<span>Сообщения</span>',array('route' => 'contact.index'))->prepend('<i class="fa fa-envelope-open"></i>');
			}


			if(Gate::allows('VIEW_ADMIN_ARTICLES')) {
			$menu->add('<span>Статьи</span>',  array('route'  => 'article.index'))->prepend('<i class="fa fa-newspaper-o"></i>');

			$menu->add('<span>Slider</span>',  array('route'  => 'slider.index'))->prepend('<i class="fa fa-slideshare"></i>');
			
			$menu->add('<span>Gallery</span>',  array('route'  => 'gallery.index'))->prepend('<i class="fa fa-picture-o"></i>');

		}



			if(Gate::allows('VIEW_ADMIN_MENU')) {
			$menu->add('<span>Меню</span>',  array('route'  => 'menus.index'))->prepend('<i class="fa fa-th-list"></i>');
			}


			if(Gate::allows('EDIT_PERMISSIONS')) {
			$menu->add('<span>Пользователи</span>',  array('route'  => 'users.index'))->prepend('<i class="fa fa-users"></i>');

			$menu->add('<span>Привилегии</span>',  array('route'  => 'permissions.index'))->prepend('<i class="fa fa-tags"></i>');
			}

			//class="sub-menu"
		});
	}

}
