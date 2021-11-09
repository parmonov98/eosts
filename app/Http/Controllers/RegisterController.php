<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Image;
use File;
use Arr;
// use App\SetUmum;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends SiteController
{
    public function __construct(){
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu));
		$this->template = env('THEME').'.reg';
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
		if(Auth::user()){
		abort(404);
		}
    	$this->title = 'Ruyxatdan o`tish';
		$this->keywords = 'Ruyxatdan o`tishr';
		$this->meta_desc = 'Ruyxatdan o`tish';

        $articles = view(env('THEME').'.register')->render();
        $this->vars = Arr::add($this->vars,'content',$articles);
        return $this->renderOutput();
    }


public function SetUmumlar()
    {
        $shts = SetUmum::select()->get();
        return $shts;
    }

    public function millatlar()
    {
        $shts = $this->SetUmumlar();
         $fanam = array();
            $sht['0'] = '-Танланг-';
        foreach($shts[0]['millat']['mil'] as $k=>$fanam) {
                $sht[$k+1] = $fanam;
        }
        // dd($sht);
        return $sht;

    }

	public function store($cat='oz'){
	if(Auth::user()){
		abort(404);
		}
        $this->title = 'Parolni tiklash';
		$this->keywords = 'Parolni tiklash';
		$this->meta_desc = 'Parolni tiklash';
        $articles = view(env('THEME').'.email')->render();
        $this->vars = Arr::add($this->vars,'content',$articles);
        return $this->renderOutput($cat);
    }


	/*public function show($email)
    {
        dd($email);
    }*/

  public function show(Request $request, $token = null)
    {
        if (is_null($token)) {
            return $this->getEmail();
        }
        $email = $request->input('email');

        if (property_exists($this, 'resetView')) {
            return view($this->resetView)->with(compact('token', 'email'));
        }

        if (view()->exists($this->resetView)) {
            return view($this->resetView)->with(compact('token', 'email'));
        }

        return view($this->resetView)->with(compact('token', 'email'));
    }

    public function repeatpass(Request $request)
    {
         $request->validate([
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'current_password' => ['required'],
        ]);
        $data = $request->except('_token');


        if ( !Hash::check($request->current_password, Auth::user()->password) ) {
            return redirect()->back()->with('error', 'Joriy parol noto\'g\'ri.');
        }else{
            // dd($user);
           User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);
            // $user->update(['password',Hash::make($data['password'])]);
            return redirect()->back()->with('status', 'Parol yangilandi.');
        }


    }

    public function edit()
    {

    if(!session()->has('lang')){
            session()->put('lang', 'oz');
        }
    $cat = session('lang');

   		if($cat != 'oz' && $cat != 'uz' && $cat != 'ru' ){
			abort(404);
		}

			if(!Auth::user()){
				abort(404);
			}

        $this->title = 'Parolni tiklash';
		$this->keywords = 'Parolni tiklash';
		$this->meta_desc = 'Parolni tiklash';
// $mil = $this->millatlar();
// dd($this->Tavar());,compact('mil')
        $articles = view(env('THEME').'.profile')->with(['user' =>Auth::user(),'cat'=>$cat])->render();

	   $this->vars = Arr::add($this->vars,'content',$articles);
	 return $this->renderOutput($cat);

  }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

// dd($request);

	    $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);




		$data = $request->except('_token','image');
		$data = $request->only('name','email');

    $data['birthdate']=date('Y-m-d',strtotime($request['birthdate']));

		if($request->hasFile('image')) {
			$image = $request->file('image');

			//dd($image);
			if($image->isValid()) {

			$zzzz = public_path().'/'.env('THEME').'/i/users/'.Auth::user()->image;
				$delete = File::delete($zzzz);
				$str = time();
				$obj = new \stdClass;
				$obj = $str.'.jpg';
				$img = Image::make($image);
				$img->fit(Config::get('settings.file')['width'],
						Config::get('settings.file')['height'])->save(public_path().'/'.env('THEME').'/images/users/'.$obj);
				$data['image'] = $obj;


			}
		}else{
			if(!empty(Auth::user()->image)){$data['image']=Auth::user()->image;}
			else{$data['image']=null;}	}

		$request->user()->update($data);
	/*
		if(is_array($request) && !empty($result['error'])) {
			return back()->with($request);
		}
*/
		return redirect('/profile')->with(['status'=>'Saqlandi']);
    }









}
