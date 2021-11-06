<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UsersRepository;
use App\Http\Requests;

use App\Models\Obuna;

use Auth;

class ObunaController extends SiteController
{




	public function __construct(UsersRepository $u_rep){
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu));

		$this->u_rep = $u_rep;


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



}
