<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MenusRequest;
use App\Http\Controllers\Controller;

use App\Repositories\MenusRepository;

use Gate;
use Menu;
use App\Models\Menu as Menus;


class MenusController extends AdminController
{

    protected $m_rep;


    public function __construct(MenusRepository $m_rep)
    {
        parent::__construct();
        $this->m_rep = $m_rep;
        $this->template = config('settings.theme').'.admin.menus.menus';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('VIEW_ADMIN_MENU')) {
            abort(403);
        }


        $menu = $this->getMenus();
        $this->title = 'Menu';
        $this->content = view(config('settings.theme').'.admin.menus.menus_content')->with('menus',$menu)->render();

        return $this->renderOutput();
    }

    public function getMenus()
    {
        $menu = $this->m_rep->get();
        //dd($menu);
        if($menu->isEmpty()) {
			return FALSE;
		}
		return Menu::make('forMenuPart', function($m) use($menu) {

			foreach($menu as $item){

                if(substr($item->path,0,1) == '/...') {$urlm = ltrim($item->path,'/');}
                else{$urlm = $item->path;}

				if($item->parent == 0) {
					$m->add($item->title['ru'],$urlm)->id($item->id);
				}else{
					if($m->find($item->parent)){
						$m->find($item->parent)->add($item->title['ru'],$urlm)->id($item->id);
					}
				}
			}
		});
    }





 public function getM()
    {

        $menu = $this->m_rep->get();

        if($menu->isEmpty()) {
			return FALSE;
		}

		return Menu::make('forMenuPart', function($m) use($menu) {

			foreach($menu as $item) {
				if($item->parent == 0) {
					$m->add($item->title['ru'],$item->path)->id($item->id);
				}

				else {

					$m->add('--'.$item->title['ru'],$item->path)->id($item->id);

				}
			}


		});


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(Gate::denies('save', new Menus)) {
            abort(403);
        }
  
    	$this->title = 'Новый пункт меню';

    	$tmp = $this->getM()->roots();

    	$menus = $tmp->reduce(function($returnMenus, $menu) {
    		$returnMenus[$menu->id] = $menu->title;
    		return $returnMenus;
    	},['0' => 'Родительский пункт меню']);

		$this->content = view(config('settings.theme').'.admin.menus.menus_create_content')->with(['menus'=>$menus])->render();

		return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenusRequest $request)
    {
        $result = $this->m_rep->addMenu($request);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return redirect('/admins/menus')->with($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menus $menu)
    {
	  if(Gate::denies('edit', new Menus)) {
			abort(403);
		}

		$this->title = 'Редактирование ссылки - '.$menu->title['ru'];


       // $route = app('router')->getRoutes()->match(app('request')->create($menu->path));


    	$tmp = $this->getM()->roots();
    	$menus = $tmp->reduce(function($returnMenus, $menu) {
    		$returnMenus[$menu->id] = $menu->title;
    		return $returnMenus;
    	},['0' => 'Родительский пункт меню']);

//dd($menus);

		$this->content = view(config('settings.theme').'.admin.menus.menus_create_content')->with(['menu' => $menu,'menus'=>$menus])->render();

		return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menus $menu)
    {
       $result = $this->m_rep->updateMenu($request,$menu);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return redirect('/admins/menus')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($menu)
    {

		if(Gate::denies('destroy', new Menus)) {
			abort(403);
		}
        //
        //dd($menu);
        //
        $result = $this->m_rep->deleteMenu($menu);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return redirect('/admins/menus')->with($result);
    }
}
