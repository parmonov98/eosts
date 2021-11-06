<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ArticlesRepository;
use App\Repositories\CommentRepository;
use Gate;
use App\Models\Article;
use App\Models\User;
use App\Models\Product;
use App\Models\Comment;




class CommentController extends AdminController
{

     public function __construct(CommentRepository $c_rep, ArticlesRepository $a_rep) {

		parent::__construct();

		$this->c_rep = $c_rep;
		$this->a_rep = $a_rep;

		$this->template = config('settings.theme').'.admin.comment.comment';

	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(!Gate::allows('VIEW_ADMIN_COMMENT')) {
            abort(403);
        }
        
       $this->title = 'Менеджер статтей';

        $counts = Comment::where('prev', 0)->count();
        $comments = $this->getComments();


			$users = User::select()->get();
			$username = array();
		foreach($users as $user) {
				$username[$user->id] = $user->name;
		}

        $useremail = array();
		foreach($users as $user) {
				$useremail[$user->id] = $user->email;
		}

$this->content = view(config('settings.theme').'.admin.comment.comments_content')->with(['comments'=>$comments,'user'=>$username,'email'=>$useremail,'counts'=>$counts])->render();


        return $this->renderOutput();
    }

    public function getComments()
    {
        return $this->c_rep->get('*',TRUE,TRUE,FALSE,TRUE);
    }

    public function getCounts()
    {
    $where = ['prev',0];
    $counts = count($this->c_rep->get('prev',FALSE,FALSE,$where));
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
       // dd($request);
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
  //   	if(Gate::denies('save', new Comment)) {
		// 	abort(403);
		// }

        $comment = $this->c_rep->one($id);

        $result = $this->c_rep->upKurish2($id);

		$this->title = 'Реадактирование материала - '. $comment->name;

        		$this->content = view(config('settings.theme').'.admin.comment.comment_create_content')->with(['comment' => $comment])->render();

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
    	if(!Gate::allows('destroy', new Comment)) {
			abort(403);
		}

       $result = $this->c_rep->updateIzox($request, $id);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return redirect('/admins/izox')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    	if(Gate::denies('destroy', new Comment)) {
			abort(403);
		}

        $result = $this->c_rep->deleteComment($id);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return redirect('/admins/izox')->with($result);

    }
}
