<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\CommentRepository;
use Validator;
use Auth;
use App\Models\Comment;
use App\Models\User;
use App\Models\Article;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class CommentController extends SiteController
{

    public function __construct(CommentRepository $a_rep){
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu));

		$this->a_rep = $a_rep;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		//$lan = substr($_SERVER['REQUEST_URI'], 1,4);
	//	dd($request);
    	//dd($request->articles);
         $data = $request->except('_token','comment_post_ID','comment_parent');
        $data['parent_id'] = $request->input('comment_parent');
        $data['cat'] = $request->input('comment_parent_ur');


        $data['article_id'] = $request->input('comment_post_ID');
        $data['site'] = asset('/blog/'.$data['cat'] .'/'.$data['article_id']);
// dd($data);



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
	//	$data['email'] = (!empty($data['email'])) ? $data['email'] : $comment->user->email;
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

	//	exit();
    }

	public function send($nam)
    {
		$emails = User::select('name','telemail')->where('telemail','<>',null)->get();
		//dd($emails);
        $objDemo = new \stdClass();
        $objDemo->demo_one = $nam;
        $objDemo->demo_two = 'Yangi izox';
        $objDemo->sender = 'Foydalanuvchi '.$nam;
		foreach($emails as $k=>$email){
		//dd($email->telemail);
        $objDemo->receiver = $email->name;
         Mail::to($email->telemail)->send(new OrderShipped($objDemo));
		}
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
