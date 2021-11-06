<?php
namespace App\Repositories;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Obuna;
use App\Models\Menu;
use Gate;
use Image;
use Config;
use File;
// use Mail;
use Str;

use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;



class ArticlesRepository extends Repositor {

	public function __construct(Article $article){
		$this->model = $article;
	}

	public function one($id,$attr = array()){

		$result = $this->model->where('id',$id)->first();
		return $result;
	}


	public function img($id,$attr = array()){
		$result = $this->model->where('img',$id)->first();
		return $result;
	}


	public function upKurish($id) {
		$result = $this->one($id);
		$result->update(['prev' => 1]);
	}


	public function addArticle($request) {

   // dd($request);
		if(Gate::denies('save', $this->model)) {
			abort(403);
		}

		// if(empty($data)) {
		// 	return array('error' => 'Маълумот йўқ');
		// }

		if($request->created_at != NULL)
		{
		$data = $request->except('_token','image');
		$data['created_at'] .= date(' H:i:s');
		}
			else
			{
			$data = $request->except('_token','image','created_at');
			$data['created_at'] = date('Y-m-d H:i:s');
			}



		if(empty($data['title']['ru'])) {
			return array('error' => 'Нет русского названия');
		}

		if(empty($data['title']['en'])) {
			return array('error' => 'No Russian title');
		}



		if(empty($data['descriptionru']) && empty($data['textru'])) {
			return array('error' => 'Примечание. Краткое или полное текстовое поле не заполняется.');
		}


		if(empty($data['descriptionen']) && empty($data['texten'])) {
			return array('error' => 'Note The short or full text field is not filled');
		}


		if($data['category_id'] == 0) {
			return array('error' => 'Выберите меню');
		}


		if(empty($data['textru'])) {
			$data['textru'] = null;
		}

		if(empty($data['texten'])) {
			$data['texten'] = null;
		}
		if(empty($data['texttu'])) {
			$data['texttu']= null;
		}


	// $data['keywords'] = $data['meta_desc'] = $request->title;


		if($request->hasFile('image')) {
			$image = $request->file('image');

			if(!empty($request->image)){

				$obj = new \stdClass;

		$rand = '_'.strtolower(Str::random(20));

		$obj->max = 'max'.$rand.'.jpg';
		$obj->sr = 'sr'.$rand.'.jpg';
		$obj->min = 'min'.$rand.'.jpg';



	$img = Image::make($image);

	$img->fit(Config::get('settings.blog')['max']['width'],
		 Config::get('settings.blog')['max']['height'])->save(public_path('articles/').$obj->max);

	$img->fit(Config::get('settings.blog')['sr']['width'],
		 Config::get('settings.blog')['sr']['height'])->save(public_path('articles/').$obj->sr);

$img->fit(Config::get('settings.blog')['min']['width'],
			Config::get('settings.blog')['min']['height'])->save(public_path('articles/').$obj->min);




				$data['img'] = ['max'=>$obj->max,'sr'=>$obj->sr,'min'=>$obj->min];
				//dd($data['img']);
			}else{
				dd('yuq!!!!');
			}

			}

		empty($data['descriptionru'])?($data['descriptionru']=NULL):'';
		empty($data['descriptionen'])?($data['descriptionen']=NULL):'';
		empty($data['descriptionru'])?($data['descriptionru']=NULL):'';
		empty($data['descriptionen'])?($data['descriptionen']=NULL):'';

		// $data['created_at'] = utf8_encode($data['created_at']);
		 // dd($data);

		$this->model->fill($data);

// dd($data['created_at']);
				if($request->user()->articles()->save($this->model)) {
						return ['status' => 'Информация добавлена'];
				}

	}

	    public function send($nam,$url)
    {
		$emails = Obuna::select('name','email')->where('sent_new',1)->get();
		//dd($emails);
        $objDemo = new \stdClass();
        $objDemo->demo_one = $nam;
        $objDemo->demo_two = '<a href="'.$url.'">Перейти к прочтению</a>';
        $objDemo->sender = 'Admin';
		foreach($emails as $k=>$email){
        $objDemo->receiver = $email->name;
         Mail::to($email->email)->send(new DemoEmail($objDemo));
		}
    }


	public function updateArticle($request, $id) {
// dd($request);

		if(Gate::denies('edit', new Article)) {
			abort(403);
		}

		//$data = $request->except('_token','image','_method');

	if($request->created_at != NULL)
		{
		$data = $request->except('_token','image','_method');
		$data['created_at'] .= date(' H:i:s');
		}
			else
			{
			$data = $request->except('_token','image','_method','created_at');
			}



		if(empty($data)) {
			return array('error' => 'Нет информации');
		}

		if(empty($data['textru'])) {
			$data['textru'] = null;
		}

		if(empty($data['texten'])) {
			$data['texten'] = null;
		}
		if(empty($data['texttu'])) {
			$data['texttu']= null;
		}


       // $data['keywords'] = $data['meta_desc'] = $request->title;

			$result = $this->one($id);
				if(isset($data['uchir']) and $data['uchir']==1){

		if(is_array($result->img)){

			if(is_file(public_path('articles/').$result->img['max'])){
			$file2 = public_path('articles/').$result->img['max'];File::delete($file2);}

			if(is_file(public_path('articles/').$result->img['sr'])){
			$file4 = public_path('articles/').$result->img['sr'];File::delete($file4);}

			if(is_file(public_path('articles/').$result->img['min'])){
			$file = public_path('articles/').$result->img['min'];
				File::delete($file);}

			}
			$data['img']=null;
		}



			//dd($result);


		if($request->hasFile('image')) {
			$image = $request->file('image');
// dd(public_path('articles/').$result->img['max']);
			if(is_array($result->img)){
			$file2 = public_path('articles/').$result->img['max'];File::delete($file2);

			if(isset($result->img['sr']) && is_file(public_path('articles/').$result->img['sr'])){
				$file4 = public_path('articles/').$result->img['sr'];File::delete($file4);
			}

			$file = public_path('articles/').$result->img['min'];File::delete($file);
			}

			if(!empty($request->image)){

				$obj = new \stdClass;


		$rand = '_'.strtolower(Str::random(20));

		$obj->max = 'max'.$rand.'.jpg';
		$obj->sr = 'sr'.$rand.'.jpg';
		$obj->min = 'min'.$rand.'.jpg';


	$img = Image::make($image);



	$img->fit(Config::get('settings.blog')['max']['width'],
		 Config::get('settings.blog')['max']['height'])->save(public_path('articles/').$obj->max);

	$img->fit(Config::get('settings.blog')['sr']['width'],
		 Config::get('settings.blog')['sr']['height'])->save(public_path('articles/').$obj->sr);

$img->fit(Config::get('settings.blog')['min']['width'],
			Config::get('settings.blog')['min']['height'])->save(public_path('articles/').$obj->min);




				$data['img'] = ['max'=>$obj->max,'sr'=>$obj->sr,'min'=>$obj->min];
				//dd($data['img']);
			}else{
				dd('yuq!!!!');
			}

		}

		//dd($result->fill($data)->update());
			//dd($data);
		if($result->fill($data)->update()) {
			return ['status' => 'Информация обновлена'];
		}

	}

		public function deleteArticle($id) {

		if(Gate::denies('destroy', new Article)) {
			abort(403);
		}
		$result = $this->one($id);

		if(isset($result->img)){

			if(is_file(public_path('articles/').$result->img['max'])){
			$file2 = public_path('articles/').$result->img['max'];File::delete($file2);
				}

			if(is_file(public_path('articles/').$result->img['sr'])){
			$file4 = public_path('articles/').$result->img['sr'];File::delete($file4);
				}


			if(is_file(public_path('articles/').$result->img['min'])){
			$file = public_path('articles/').$result->img['min'];File::delete($file);
				}


		}

		$result->comments()->delete();

		if($result->delete()) {
			return ['status' => 'Информация удалена'];
		}

	}
}