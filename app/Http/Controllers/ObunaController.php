<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UsersRepository;
use App\Http\Requests;
use App\Models\Uslug;
use App\Models\Obuna;
use App\Models\Settings;
use App\Models\OnasNaKl;
use App\Models\Employee;
use App\Models\OnasVap;
use App\Models\Maps;
use Arr;
use Auth;

class ObunaController extends SiteController
{




	public function __construct(UsersRepository $u_rep){
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu));

		$this->u_rep = $u_rep;
		$this->template = env('THEME').'.uslug';


	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'email' => 'required|email',
        ]);
    	// dd($request);

		if(!session()->has('lang')){
			session()->put('lang', 'oz');
		}
		$lang = session('lang');


if(is_object(Obuna::where('email', $request['email'])->first())){
	Obuna::where('email', $request['email'])->delete();
	return redirect()->back()->with(['tobuna' => 'Obuna tugatildi']);
}else{
	Obuna::insert( ['email' => $request['email']] );
	return redirect()->back()->with(['bobuna' => 'Siz obuna bo\'ldingiz']);
}


    }



    public function uslug()
    {

        $this->template = env('THEME').'.usluge';
        if(empty(session('lang'))){
           session()->put('lang', 'ru');
        }
       $cat = session('lang');

      if($cat != 'ru' && $cat != 'en' && $cat !== 'tu'){
        abort(404);
       }
       $pronas =$this->getSetting();


        $articles = Uslug::orderBy('created_at', 'desc')->limit(4)->get();

        $this->title = $this->keywords = $this->meta_desc = 'Услуги';



        $content = view(env('THEME').'.full_uslug_content',compact('articles','pronas','cat'))->render();
        $this->vars = Arr::add($this->vars,'content',$content);
        return $this->renderOutput($cat);

    }


    public function show($cat,$alias)
    {
        // dd('salom');


      if($cat != 'ru' && $cat != 'en' && $cat !== 'tu'){
        abort(404);
       }
        if(empty(session('lang'))){
           session()->put('lang', $cat);
        }
       $cat = session('lang');

    	if(empty($alias)){ abort(404); }


        $articles = Uslug::where("title",'!=','NULL')->where('alias',$alias)->first();

    	if($alias){
    		if($articles == null){
				abort(404);
		}



if(isset($articles->id)){
		$this->title = $articles->title[$cat];
        $this->keywords = isset($articles->keywords)?$articles->keywords:$articles->title[$cat];
        $this->meta_desc = isset($articles->description)?$articles->description:$articles->title[$cat];
		}


		$content = view(env('THEME').'.detal_uslug_content',compact('articles','cat'))->render();
       	$this->vars = Arr::add($this->vars,'content',$content);
       	return $this->renderOutput($cat);
    }        

    }



	public function getSetting(){
		$man = Settings::select()->first();
		return $man;
	}

    public function getEmployee(){
        $man = Employee::get();
        return $man;
    }


           public function pronas(){


        if(empty(session('lang'))){
           session()->put('lang', 'ru');
        }
       $lang = session('lang');

      if($lang != 'ru' && $lang != 'en' && $lang !== 'tu'){
        abort(404);
       }

        $this->title =  $this->keywords =  $this->meta_desc =  $this->getSetting()['names']['name'][$lang];

        $maps =$this->getMaps();

        $allmaps =$this->getAllMap();        
        // dd($maps);

        $employee =$this->getEmployee();
        $pronas =$this->getSetting();
        $vopros = OnasVap::get();
        $naskli = OnasNaKl::get();

        $pronas = view(config('settings.theme').'.pronas',compact('pronas','employee','vopros','naskli','maps','lang','allmaps'))->render();

        $this->vars = Arr::add($this->vars,'content',$pronas);


        return $this->renderOutput($lang);

            }

        public function getAllMap(){
        $vopros = Maps::orderBy('id', 'desc')->get();
        return $vopros;
        }      


    public function getMaps(){
        $id = Maps::max('id');
        $vopros = Maps::where('id', $id)->first();
        return $vopros;
        }       

}
