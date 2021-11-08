<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ArticlesRepository;
use App\Repositories\RoleUserRepository;
use Auth;
use App\Models\User;
use App\Models\Article;
use App\Models\Settings;
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
// dd($cat);
				$articles = Article::where([
								['description'.$cat,'!=','NULL'],
								['text'.$cat,'!=','NULL'],
								['heddin','!=','0']
								])
								->where('img','!=','NULL')
								->where('title','!=','NULL')
								->orderBy('created_at', 'desc')
								->latest('id')->paginate(Config::get('settings.paginate_index'));

		// dd($articles);
		if($articles){
			$articles->load('menu');
		}

		return $articles;
	}





	public function getSetting(){
		$man = Settings::select()->first();
		return $man;
	}





	public function myCaptcha()
    {
        return view('myCaptcha');
    }
	    public function myCaptchaPost(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']);
        dd("You are here :) .");
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function refreshCaptcha()
    {

        return response()->json(['captcha'=>  '<img src="'.Captcha::src().'">']);
    }



	    public function generate_pdf($id){
		if(!session()->has('lang')){
			session()->put('lang', 'oz');
		}
		$cat = session('lang');



	if($cat != 'oz' && $cat != 'uz' && $cat != 'ru' && $cat != 'en'){
			abort(404);
		}
	$article = Article::select('title','text'.$cat,'img')->find($id);

	if($article==null){abort(404);}
	$str = Str::random(8);
	$user = ['title'=>$article->title[$cat], 'text'=>$article['text'.$cat], 'img'=>$article->img];
// dd($user);
      $pdf = PDF::loadView('pdf.pdf', compact('user'));
      return $pdf->download($str.'.pdf');
    }












}
