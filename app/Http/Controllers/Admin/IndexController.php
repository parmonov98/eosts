<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Article;
use App\Models\User;
use Arr;


use Gate;

class IndexController extends AdminController
{
    //

    public function __construct() {

		parent::__construct();
		if(Gate::allows('viewadmin')) {
			abort(403);
		}


		$this->template = config('settings.theme').'.admin.index';

	}

	public function index() {


		$this->title = 'Панель администратора';
		// $comment = Comment::where('prev', 0)->count();
		//$qabulxona = Qabulxona::where('prev', 0)->count();
		$user = User::count();
		$article = Article::count();

        $articles = view(config('settings.theme').'.admin.index_view',compact('article','user'));
		   $this->vars = Arr::add($this->vars,'content',$articles);

		return $this->renderOutput();

	}



   public function create()
    {
        $this->title = 'Савдо бўлими';

         $user = 50;

        // $articles = view(config('settings.theme').'.admin.product.product_index',compact('comment','article','user'));
        //    $this->vars = array_add($this->vars,'content',$articles);


        // $this->content = view(config('settings.theme').'.admin.product.product_index')->with(['articles'=>FALSE])->render();
        $this->content = view(config('settings.theme').'.admin.product.product_content');

         return $this->renderOutput();

    }

}
