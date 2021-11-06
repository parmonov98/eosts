<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ArticlesRepository;
use App\Repositories\MenusRepository;
use Gate;
use App\Models\Article;
use App\Models\Comment;
use Image;
use Menu;
use Config;

class ArticleController extends AdminController
{

    public function __construct(ArticlesRepository $a_rep, MenusRepository $m_rep) {

		parent::__construct();

		$this->a_rep = $a_rep;
		$this->m_rep = $m_rep;

		$this->template = config('settings.theme').'.admin.articles.article';

	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



	    public function index()
    {

        if(!Gate::allows('VIEW_ADMIN_ARTICLES')) {
            abort(403);
        }      

         $this->title = 'Менеджер статья';

        $tmp = $this->getM()->roots();
    	$menus = $tmp->reduce(function($returnMenus, $menu) {
    		$returnMenus[$menu->id] = $menu->title;
    		return $returnMenus;
    	},['0' => 'Выберите желаемое меню']);


        $this->content = view(config('settings.theme').'.admin.articles.articles_content')->with(['articles'=>FALSE,'menus'=>$menus])->render();

        return $this->renderOutput();
    }



   
    public function getArticles($cat)
    {
    	//$while = ['category_id',$cat];

            $articl = Article::where('category_id',$cat)
                                ->orderBy('id', 'desc')
                            ->latest('id')->paginate(Config::get('settings.pag_admin_article'));


        return $articl;
    }

   public function getM()
    {
        $menu = $this->m_rep->get();
        if($menu->isEmpty()) {
			return FALSE;
		}
		return Menu::make('forMenuPart', function($m) use($menu) {
			foreach($menu as $item) {
				if($item->parent == 0) {
					$m->add($item->title['ru'],$item->path)->id($item->id);
				}else{
					$m->add('..'.$item->title['ru'],$item->path)->id($item->id);
				}
			}
		});
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(Gate::denies('save', new Article)) {
			abort(403);
		}
		$this->title = "Добавить статью";

		//$catMens = $this->m_rep->get(['id','title','path','parent']);


			   $tmp = $this->getM()->roots();
    	$menus = $tmp->reduce(function($returnMenus, $menu) {
    		$returnMenus[$menu->id] = $menu->title;
    		return $returnMenus;
    	},['0' => 'Выберите желаемое меню']);

		$this->content = view(config('settings.theme').'.admin.articles.article_create_content')->with('catMens', $menus)->render();

		return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->title = 'Менеджер статтей';
          if(isset($request->parent)){



		$tmp = $this->getM()->roots();
    	$menus = $tmp->reduce(function($returnMenus, $menu) {
    		$returnMenus[$menu->id] = $menu->title;
    		return $returnMenus;
    	},['0' => 'Выберите желаемое меню']);
    	//dd($request->parent);

        $articles = $this->getArticles($request->parent);
        //dd($articles);
        $this->content = view(config('settings.theme').'.admin.articles.articles_content')->with(['articles'=>$articles,'menu'=>$request,'menus'=>$menus])->render();

        return $this->renderOutput();
       // return response()->json($this->content);





        }
		else{





		             $result = [
					 'title' => 'required|max:255',
            // 'description' => 'required',
            'category_id' => 'required|integer'];

        $validator = Validator::make($request->all(),$result);

if($validator->fails()){
	return back()->with(['error'=>'tuldirilmagan maydoncha']);

		}else{


			$result = $this->a_rep->addArticle($request);

        	if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
         }

		}

		return redirect('/admins/article')->with($result);
		}




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

        if(Gate::denies('edit', new Article)) {
			abort(403);
		}

        $product = $this->a_rep->one($id);
        //dd($product);
        $catMens = $this->m_rep->get(['id','title','path','parent']);

		   $tmp = $this->getM()->roots();
    	$menus = $tmp->reduce(function($returnMenus, $menu) {
    		$returnMenus[$menu->id] = $menu->title;
    		return $returnMenus;
    	},['0' => 'Выберите желаемое меню']);


		$this->title = 'Реадактирование материала - '. $product->name;

$this->content = view(config('settings.theme').'.admin.articles.article_create_content')->with(['catMens' =>$menus, 'products' => $product,'key'=>1])->render();

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
    {      // dd('DDD');
       $result = $this->a_rep->updateArticle($request, $id);
		if(is_array($result) && !empty($result['error'])) {
			//dd($result);

			return back()->with($result);
		}
		return redirect('/admins/article')->with($result);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		if(Gate::denies('destroy', new Article)) {
			abort(403);
		}
       $result = $this->a_rep->deleteArticle($id);

		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}

		return redirect('/admins/article')->with($result);
    }
}
