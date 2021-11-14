<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\SettingRepository;
use App\Models\Comment;
use App\Models\Article;
use App\User;
use App\Models\Settings;
use Arr;

use Gate;

class SettingController extends AdminController
{
    //

    public function __construct(SettingRepository $s_t) {

		parent::__construct();

		$this->s_t = $s_t;

		$this->template = config('settings.theme').'.admin.settings.setting';

	}

	public function index() {
        if(Gate::allows('VIEW_ADMIN_SETTINGS')) {
            abort(403);
        }
		        $this->title = 'Настройки сайта';

         $user = 50;


        $articles = view(config('settings.theme').'.admin.settings.setting_content',compact('user'));
		   $this->vars = Arr::add($this->vars,'content',$articles);

		return $this->renderOutput();

	}


   public function setful()
    {
      $setname = Settings::first();
      return $setname;
    }

   public function names()
    {
        $this->title = 'Название организации';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.names_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput();
        //return $set;
    }

     public function namesup(Request $request)
    {

        // dd($request);
        $result = $this->s_t->naup($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return back()->with($result);

    }





 public function address()
    {

        $this->title = 'Адреса организаций и телефонная информация!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.address_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput();
        //return $set;
    }

     public function addressup(Request $request)
    {
        $result = $this->s_t->addup($request);

        // dd($result);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return back()->with($result);

    }




 public function sotnetwork()
    {

        $this->title = 'Каналы социальных сетей!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.sotnetwork_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput();
        //return $set;
    }

     public function sotnetworkup(Request $request)
    {
        $result = $this->s_t->snw($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return back()->with($result);

    }













 public function setteng()
    {

        $this->title = 'Каналы социальных сетей!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.setteng_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput();
        //return $set;
    }

     public function settengup(Request $request)
    {
        $result = $this->s_t->stbot($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return back()->with($result);

    }




 public function onas()
    {
        $this->title = 'О нас!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.onas_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput(); 
    }

     public function onasup(Request $request)
    {
        $result = $this->s_t->onas($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }
        return back()->with($result);
    }



 public function vebor()
    {
        $this->title = 'О нас!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.vebor_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput(); 
    }

     public function veborup(Request $request)
    {
        $result = $this->s_t->vebor($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }
        return back()->with($result);
    }




 public function vopraos()
    {
        $this->title = 'О нас!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.vopraos_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput(); 
    }

     public function vopraosup(Request $request)
    {
        $result = $this->s_t->vopraos($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }
        return back()->with($result);
    }











public function files()
    {

        $this->title = 'Программа года!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.yildasturi_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput();
        //return $set;
    }

     public function filesup(Request $request)
    {
        $result = $this->s_t->filesup($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return back()->with($result);

    }



public function rating()
    {

        $this->title = 'Топ рейтинг!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.rating_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput();
        //return $set;
    }

     public function ratingup(Request $request)
    {
        $result = $this->s_t->ratingup($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return back()->with($result);

    }




public function fon()
    {
        $this->title = 'Фон расмини ўзгартириш бўлими!';
        $setname = $this->setful();

         $articles = view(config('settings.theme').'.admin.settings.fon_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput();
        //return $set;
    }

     public function fonup(Request $request)
    {
        $result = $this->s_t->fonsup($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return back()->with($result);

    }


   public function create()
    {
        $this->title = 'Савдо бўлими';
        $tavar = $this->Ntovars();
         // dd($tavar );

        // $articles = view(config('settings.theme').'.admin.product.product_index',compact('comment','article','user'));
        //    $this->vars = Arr::add($this->vars,'content',$articles);


        // $this->content = view(config('settings.theme').'.admin.product.product_index')->with(['articles'=>FALSE])->render();

              $artic = view(config('settings.theme').'.admin.ishla.maxsulot_content',compact('tavar'));
                 // $articles = view(config('settings.theme').'.admin.ishla.product_content')->with(['user'=>$user])->render();
                 // dd($articles);
		   $this->vars = Arr::add($this->vars,'content',$artic);

        // $this->content = view(config('settings.theme').'.admin.ishla.product_content')->with(['user'=>$user])->render();

         return $this->renderOutput();

    }




    public function store(Request $request)
    {
        // dd($request);


        $result = $this->s_t->changeNtavar($request);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return back()->with($result);

    }

}
