<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\ContactRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Gate;
use App\Models\Contact;
use App\Models\User;


class ContactController extends AdminController
{

    public function __construct(ContactRepository $c_rep) {

		parent::__construct();

		if(Gate::allows('VIEW_ADMIN_CONTACT')) {
			abort(403);
		}


		$this->c_rep = $c_rep;

		$this->template = config('settings.theme').'.admin.contact.contact';

	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'Xabarlar bilan ishlash bo`limi';

        //$counts = $this->getCounts();

        $comments = $this->getComments();
        $counts = Contact::where('prev', 0)->count();
        //dd($comments);
        if($counts==NULL){$counts=0;}
    	if($comments==false){$comments=null;}
        	//	dd($comments);
			$users = User::select()->get();
			$user = array();
		foreach($users as $user) {
				$username[$user->id] = $user->name;
		}

        $useremail = array();
		foreach($users as $user) {
				$useremail[$user->id] = $user->email;
		}
        //$this->content = view(config('settings.theme').'.admin.contact.contacts_content',compact(['comments','users'=>$username,'email'=>$useremail,'counts'=>$counts]));

$this->content = view(config('settings.theme').'.admin.contact.contacts_content')->with(['comments'=>$comments,'user'=>$username,'email'=>$useremail,'counts'=>$counts])->render();
         return $this->renderOutput();
    }



    public function getComments()
    {
        return $this->c_rep->get('*',TRUE,TRUE,FALSE,TRUE);
    }

    public function getCounts()
    {
    $where = ['prev',0];

    $count = $this->c_rep->get('prev',FALSE,FALSE,$where);
    if($count==NULL){$counts=0;}
    else{$counts = count($count); }

        return $counts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
    {

        //$lan = substr($_SERVER['REQUEST_URI'], 1,4);
     // dd($request);
        //dd($request->articles);
         $data = $request->except('_token','comment_post_ID','comment_parent');
        $data['parent_id'] = $request->input('comment_parent');
        $data['cat'] = $request->input('comment_parent_ur');

        if(!session()->has('lang')){
            session()->put('lang', 'ru');
        }
       $lang = session('lang');



        $data['article_id'] = $request->input('comment_post_ID');
        $data['site'] = asset('/'.$lang.'/blog/'.$data['cat'].'/'.$data['article_id']);



        $validator = Validator::make($data,[
            'article_id' => 'integer|required',
            'parent_id' => 'integer|required',
            'text' => 'string|required',
            'site' => 'string|required'
        ]);


        $validator->sometimes(['name','email'],'required|max:255',function($input) {
            return !Auth::check();
        });
        if($validator->fails()) {

//dd($validator->errors()->all());

            //return \Response::json(['error'=>$validator->errors()->all()]);
           return redirect()->back()->with(['error'=>'Maydonchlarni tuldiring']);
        }

        $user = Auth::user();

        $comment = new Comment($data);

        if($user) {
            $comment->user_id = $user->id;
        }
        //$data['name'] = (!empty($data['name'])) ? $data['name'] : $comment->user->name;
    //  $data['email'] = (!empty($data['email'])) ? $data['email'] : $comment->user->email;
        $post = Article::find($data['article_id']);

        //dd($data['name']);
//dd($post->comments()->save($comment));
        //dd($post);
        $post->comments()->save($comment);

        //dd($comment);



        $comment->load('user');
        $data['id'] = $comment->id;

        $data['email'] = (!empty($data['email'])) ? $data['email'] : $comment->user->email;
        $data['name'] = (!empty($data['name'])) ? $data['name'] : $comment->user->name;
        $data['hash'] = md5($data['email']);

        // $this->send($data['name']);

        $result = $this->a_rep->upKurish($comment->id);
        $view_comment = view(config('settings.theme').'.content_one_comment')->with(['data'=>$data,'son'=>$result])->render();
        //return \Response::json(['comment'=>$view_comment,'data' => $data]);



        //return back()->with(['status'=>'Sizning ma`lumotingiz saqlandi!']);

        return redirect()->back()->with(['status'=>'Sizning ma`lumotingiz saqlandi!']);

     exit();
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
    public function edit($id)
    {
        dd('Salom');
    	if(Gate::denies('destroy', new Contact)) {
			abort(403);
		}

        $comment = $this->c_rep->one($id);

        if(isset($comment->user_id)){$comment['name'] = User::find($comment->user_id)->first()->name;  }

        $result = $this->c_rep->upKurish($id);

		$this->title = 'Реадактирование материала - '. $comment->name;

        		$this->content = view(config('settings.theme').'.admin.contact.contact_create_content')->with(['comment' => $comment])->render();

		return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	if(Gate::denies('destroy', new Contact)) {
			abort(403);
		}

        $result = $this->c_rep->deleteContact($id);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return redirect('/admins/contact')->with($result);
    }
}
