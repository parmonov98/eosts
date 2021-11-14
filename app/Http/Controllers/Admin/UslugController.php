<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Repositories\UslugsRepository;
use App\Repositories\MenusRepository;
use Gate;
use App\Models\Uslug;
use App\Models\Comment;
use Image;
use Menu;
use Config;

class UslugController extends AdminController
{

    public function __construct(UslugsRepository $u_rep, MenusRepository $m_rep) {

		parent::__construct();

		$this->u_rep = $u_rep;
		$this->m_rep = $m_rep;

		$this->template = config('settings.theme').'.admin.uslugi.uslug';

	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



	    public function index()
    {

        if(!Gate::allows('VIEW_ADMIN_ARTICLES')) {
            abort(403);
        }      

         $this->title = 'Менеджер услуги';


        $this->content = view(config('settings.theme').'.admin.uslugi.uslugi_content')->with(['uslugi'=>$this->getUslugi()])->render();

        return $this->renderOutput();
    }



   
    public function getUslugi()
    {
    	//$while = ['category_id',$cat];

            $articl = Uslug::orderBy('id', 'desc')
                            ->latest('id')->paginate(Config::get('settings.pag_admin_article'));


        return $articl;
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

		$this->title = "Добавить статью";

		//$catMens = $this->m_rep->get(['id','title','path','parent']);

		$this->content = view(config('settings.theme').'.admin.uslugi.uslug_create_content')->render();

		return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->title = 'Менеджер статтей';

			$result = $this->u_rep->addUslug($request);

        if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
         }		

		return redirect('/admins/uslug')->with($result);		
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
    public function edit(Uslug $uslug)
    {

	$this->title = 'Реадактирование материала - '. $uslug['title']['ru'];
    $this->content = view(config('settings.theme').'.admin.uslugi.uslug_create_content')->with(['uslugi' => $uslug])->render();

		return $this->renderOutput();
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uslug $uslug)
    {      
         // dd($uslug);
       $result = $this->u_rep->updateUslug($request, $uslug);
		if(is_array($result) && !empty($result['error'])) {
			//dd($result);

			return back()->with($result);
		}
		return redirect('/admins/uslug')->with($result);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uslug $uslug)
    {

       $result = $this->u_rep->deleteUslug($uslug);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return redirect('/admins/uslug')->with($result);
    }
}
