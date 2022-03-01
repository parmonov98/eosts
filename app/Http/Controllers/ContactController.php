<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contact;
use App\Models\Settings;
use App\Models\User;
use App\Models\Maps;
use App\Repositories\ContactRepository;
use Validator;
use Auth;
use Arr;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class ContactController extends SiteController
{


    public function __construct(ContactRepository $c_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu));
        $this->c_rep = $c_rep;
        $this->template = env('THEME') . '.articles';
    }

    public function index()
    {

        if (empty(session('lang'))) {
            session()->put('lang', 'ru');
        }
        $lang = session('lang');

        if ($lang != 'ru' && $lang != 'en' && $lang !== 'tu') {
            abort(404);
        }

        $maps = $this->getMaps();

        $this->title = 'Контакты';


        $getsetting = $this->getSetting();

        $articles = view(config('settings.theme') . '.contact', compact('getsetting', 'maps'))->render();

        $this->vars = Arr::add($this->vars, 'content', $articles);


        return $this->renderOutput($lang);


    }

    public function getMaps()
    {
        $id = Maps::min('id');
        $vopros = Maps::where('id', $id)->first();
        return $vopros;
    }


    public function getSetting()
    {
        $man = Settings::select()->first();
        return $man;
    }

    public function show(Request $request)
    {
        dd($request);
    }

    public function store(Request $request)
    {

        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'message' => 'string|required',
            // 'site' => 'string|required'
        ]);

// name

        // dd($data);


        $validator->sometimes(['name', 'email'], 'required|max:255', function ($input) {
            return !Auth::check();
        });
        if ($validator->fails()) {
            return back()->with(['errors' => $validator->errors()->all()]);

        }

        $user = Auth::user();
//        dd($user);
        $contact = new Contact($data);
//        dd($contact);
        if ($user) {
            $contact->user_id = $user->id;
        }

        $contact->fill($data)->save();
        // $this->send();
//        return back()->with(['status' => 'Saqlandi']);

        // return \Response::json(['status'=>'Saqlandi']);

        exit();

    }

    public function send()
    {
        $emails = User::select('name', 'telemail')->where('telemail', '<>', null)->get();
        //dd($emails);
        $objDemo = new \stdClass();
        $objDemo->demo_one = '..';
        $objDemo->demo_two = 'Yangi xabar';
        $objDemo->sender = '...';
        foreach ($emails as $k => $email) {
            //dd($email->telemail);
            $objDemo->receiver = $email->name;
            Mail::to($email->telemail)->send(new OrderShipped($objDemo));
        }
    }

}
