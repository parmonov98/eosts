<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Xatolar;
use App\Models\Comment;
use App\Models\User;
use App\Models\Requ;
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


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


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
		$this->vars = Arr::add($this->vars,'requ',$this->getRequ());

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




	public function getRequ() {
				$cou = Requ::where('prev','0')->orderBy('created_at', 'desc')->limit(Config::get('settings.izox_xato_xabar'))->get();
				$soni = Requ::where('prev','0')->orderBy('created_at', 'desc')->count();
		return [$cou,$soni];
	}





	public function getMenu() {
		return Menu::make('adminMenus', function($menu) {


// $menu->add('<span>Главная страница</span>',array('route' => 'adminIndex'))->prepend('<i class="fa fa-dashboard"></i>');



	if(Gate::allows('VIEW_ADMIN_SETTINGS')) {
$sozla = $menu->add('<span>Настройки</span>',['disableActivationByURL' => true, 'url' => '#'])->attr('class', 'treeview')->prepend('<i class="fa fa-wrench"></i>');

 $sozla->add('<span>Названия компания</span>', array('route' => 'setNames'))->prepend('<i class="fa fa-street-view"></i>');

$sozla->add('<span>Адрес</span>', array('route' => 'setAddress'))->prepend('<i class="fa fa-map-marker"></i>');
 $sozla->add('<span>Социальной сети</span>', array('route' => 'setSotNetwork'))->prepend('<i class="fa fa-share-alt"></i>');

		}


$onas = $menu->add('<span>О нас</span>',['disableActivationByURL' => true, 'url' => '#'])->attr('class', 'treeview')->prepend('<i class="fa fa-cubes"></i>');

 $onas->add('<span>Про EOSTS</span>', array('route' => 'setOnas'))->prepend('<i class="fa fa-user-circle-o"></i>');
 $onas->add('<span>Наше уникальность</span>', array('route' => 'setQuestion'))->prepend('<i class="fa fa-bookmark-o"></i>');
 $onas->add('<span>Показатели</span>', array('route' => 'setSelect'))->prepend('<i class="fa fa-bar-chart"></i>');
 $onas->add('<span>Выбир EOSTS</span>', array('route' => 'setVeboros'))->prepend('<i class="fa fa-sellsy"></i>');
$onas->add('<span>Наша команда</span>', array('route' => 'employee.index'))->prepend('<i class="fa fa-users"></i>');
$onas->add('<span>Наши клиенты</span>', array('route' => 'setNakils'))->prepend('<i class="fa fa-child"></i>');
$onas->add('<span>Вопросы</span>', array('route' => 'setVopraos'))->prepend('<i class="fa fa-share-alt"></i>');


$uslugi = $menu->add('<span>Услуги</span>',['disableActivationByURL' => true, 'url' => '#'])->attr('class', 'treeview')->prepend('<i class="fa fa-server"></i>');
	$uslugi->add('<span>Качество</span>',array('route' => 'setCachistva'))->prepend('<i class="fa fa-eercast"></i>');
	$uslugi->add('<span>Услуги</span>',array('route' => 'uslug.index'))->prepend('<i class="fa fa-handshake-o"></i>');
	$uslugi->add('<span>Особенность</span>',array('route' => 'setOsobiy'))->prepend('<i class="fa fa-wpexplorer"></i>');
	$uslugi->add('<span>Компетентность</span>',array('route' => 'setCompetent'))->prepend('<i class="fa fa-compass"></i>');
	$uslugi->add('<span>Отзывы от клиентов</span>',array('route' => 'otziv.index'))->prepend('<i class="fa fa-id-card-o"></i>');


$sent = $menu->add('<span>Все сообщения</span>',['disableActivationByURL' => true, 'url' => '#'])->attr('class', 'treeview')->prepend('<i class="fa fa-comments-o"></i>');
 $sent->add('<span>Заявок</span>', array('route' => 'requ.index'))->prepend('<i class="fa fa-paste"></i>');
 $sent->add('<span>Сообщения</span>', array('route' => 'contact.index'))->prepend('<i class="fa fa-envelope-open"></i>');



$foto = $menu->add('<span>Фото</span>',['disableActivationByURL' => true, 'url' => '#'])->attr('class', 'treeview')->prepend('<i class="fa fa-image"></i>');
 $foto->add('<span>Slider</span>', array('route' => 'slider.index'))->prepend('<i class="fa fa-picture-o"></i>');
$foto->add('<span>Gallery</span>', array('route' => 'gallery.index'))->prepend('<i class="fa fa-camera"></i>');









			if(Gate::allows('VIEW_ADMIN_MENU')) {
			$menu->add('<span>Меню</span>',  array('route'  => 'menus.index'))->prepend('<i class="fa fa-th-list"></i>');
			}


			if(Gate::allows('EDIT_PERMISSIONS')) {
			// $menu->add('<span>Пользователи</span>',  array('route'  => 'users.index'))->prepend('<i class="fa fa-users"></i>');

			// $menu->add('<span>Привилегии</span>',  array('route'  => 'permissions.index'))->prepend('<i class="fa fa-tags"></i>');
			}
		});
	}

}
