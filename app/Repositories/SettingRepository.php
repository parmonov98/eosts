<?php
namespace App\Repositories;

use App\Models\Settings;
use App\Models\Comment;
use App\User;
use App\Models\OnasVap;
use App\Models\OnasNaKl;
use App\Models\Menu;
use Gate;
use Image;
use Config;
use File;
use Validator;
//use Mail;


use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;



class SettingRepository extends Repositor {

	protected $setting;


	public function __construct(Settings $setting){
		$this->model = $setting;
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
		if(isset($result)){
		$data['view_count'] = $result->view_count + 1;
		$result->fill($data)->update();
		}else{
			return redirect()->back()->withErrors(['error' => 'Информации не найдено!']);
		}

	}

	public function naup($request,$id = 1) {
		if(!Gate::allows('edit', $this->model)) {
			abort(403);
		}
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
		// dd($result);

		if($result->update(['names' => json_encode($data)])) {
			return ['status' => 'Информация обновлена'];
		}

	}

	public function addup($request,$id = 1) {
		if(!Gate::allows('edit', $this->model)) {
			abort(403);
		}
		$data = $request->except('_token');

		// dd($data);
		$result = $this->model->where('id',$id);
		if($result->update(['address' => json_encode($data)])) {
			return ['status' => 'Информация обновлена'];
		}

	}

	public function snw($request,$id = 1) {
		if(!Gate::allows('edit', $this->model)) {
			abort(403);
		}
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
//dd($data);

		if($result->update(['sot_network' => json_encode($data)])) {
			return ['status' => 'Информация обновлена'];
		}

	}




	public function stbot($request,$id = 1) {
		if(!Gate::allows('edit', $this->model)) {
			abort(403);
		}
		$data = $request->except('_token','telegram_user_id');
		$result = $this->model->where('id',$id);
//dd($data);


		if($result->update(['telegram_user_id'=>$request->get('telegram_user_id'),'setteng_telegram' => json_encode($data)])) {
			return ['status' => 'Информация обновлена'];
		}

	}




	public function onas($request,$id = 1) {

		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
// dd($data);

		if($result->update(['prcomp'=>$request->get('prcomp')])) {
			return ['status' => 'Информация обновлена'];
		}

	}


	public function questionup($request,$id = 1) {

		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
// dd($data);

		if($result->update(['question'=>$request->get('question')])) {
			return ['status' => 'Информация обновлена'];
		}

	}


	public function selectup($request,$id = 1) {
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
		if($result->update(['select'=>$request->get('select')])) {
			return ['status' => 'Информация обновлена'];
		}
	}


	public function cachistvaup($request,$id = 1) {
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
		if($result->update(['cachistva'=>$request->get('cachistva')])) {
			return ['status' => 'Информация обновлена'];
		}
	}


	public function osobiyup($request,$id = 1) {
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
		if($result->update(['osobiy'=>$request->get('osobiy')])) {
			return ['status' => 'Информация обновлена'];
		}
	}


	public function competentup($request,$id = 1) {
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
		if($result->update(['competent'=>$request->get('competent')])) {
			return ['status' => 'Информация обновлена'];
		}
	}




	public function vebor($request,$id = 1) {
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
		if($result->update(['vebor'=>$request->get('vebor')])) {
			return ['status' => 'Информация обновлена'];
		}
	}


	public function vopraos($request) {

		$data = $request->except('_token');
		$result = new OnasVap;
		$result->vopros=$data['vopros'];
		$result->otvet=$data['otvet'];

		if($result->save()) {
			return ['status' => 'Информация сохранина'];
		}
	}

	public function vopdel($request) {

		$data = $request->except('_token','_method');
		// dd($data);
		$result = OnasVap::where('id',$data['id'])->delete();
		if($result) {
			return ['status' => 'Информация сохранина'];
		}
	}













	public function filesup($request,$id = 1) {
		if(!Gate::allows('edit', $this->model)) {
			abort(403);
		}
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
//dd($data);

		if($result->update(['yildasturi' => json_encode($data)])) {
			return ['status' => 'Информация обновлена'];
		}

	}

	public function ratingup($request,$id = 1) {
		if(!Gate::allows('edit', $this->model)) {
			abort(403);
		}
		$data = $request->except('_token');
		$result = $this->model->where('id',$id);
//dd($data['rating']);

		if($result->update(['rating' => $data['rating']])) {
			return ['status' => 'Информация обновлена'];
		}

	}



	public function fonsup($request,$id = 1) {
		if(!Gate::allows('edit', $this->model)) {
			abort(403);
		}
			//,'_method'
		$data = $request->except('_token');
		//$result = $this->model->where('id',$id);
		if(empty($data)) {
			return array('error' => 'Нет информации');
		}
$result = $this->one($id);

if($request->hasFile('file')){

//dd($result->img);
if($result->img!=null){
	$zzzz = public_path().'/fon/'.$result->img;
		File::delete($zzzz);
}
		$file = $request->file('file');

		// $file1 = $file->getClientOriginalExtension();





			$validator = Validator::make($request->all(),//$rules
			['file' => 'mimes:png,gif,jpeg,jpg,zip,doc,docx,xls,xlsx,pdf|max:1024'],
			[
				'file.mimes' => 'Файл png,gif,jpeg,jpg,zip,doc,docx,xls,xlsx,pdf файл типига мос эмас.',
				'file.max' => 'Файл 1 Mb дан катта.'
				]
		);

			if($validator->fails()){
			return ['success'=>false,'xatolik'=>$validator->getMessageBag()->toArray()];

			}else if($validator->passes()){


				if($request->file('file')->isValid() ){


		$store = public_path('fon/').$result->img;
		File::delete($store);

		$extension = $file->getClientOriginalExtension();
		$rand = '002_'.strtolower(str_random(20));

		$datas['img'] = $name = $rand.'.'.$extension;


		// $this->processImage($file, $name);

		$file->move(public_path('/fon/'),$name);

		// $file = public_path('fon/').$name;
		// File::delete($file);
		// $datas['img'] = $rand.'.webp';

		$notification = array(
			'message'=>'Файл загружен',
			'alert-type'=>'success'
			);
		}	else{
				$notification = array(
				'message'=>'Файл не может быть загружен',
				'alert-type'=>'error'
				);
			}


        }


		if($result->update(['img' => $datas['img'],'css'=>$data['css']])) {
			return ['status' => 'Информация обновлена'];
		}
}






//dd($data['css']);
if($result->update(['css'=>$data['css']])) {
			return ['status' => 'Информация обновлена'];
		}
//return ['error' => 'Ma`lumot yo`q'];

	}




private function processImage($file, $name){

	$file->move(public_path('/fon/'),$name);

	$webp = public_path('/fon/'). $name;
	$im = imagecreatefromstring(file_get_contents($webp));
	$new_webp = preg_replace('"\.(jpg|jpeg|png|webp)$"','.webp', $webp);
	imagewebp($im, $new_webp, 50);
 	return ['message' => 'image successfully converted to webp. check your folder to see it'];

 }




	public function addArticle($request) {

   // dd($request);
		if(Gate::allows('save', $this->model)) {
			abort(403);
		}
		//title keywords
		$data = $request->except('_token','image');

		if(empty($data)) {
			return array('error' => 'Нет информации');
		}

		if(empty($data['textoz'])) {
			$data['textoz'] = null;
		}

		if(empty($data['textuz'])) {
			$data['textuz'] = null;
		}
		if(empty($data['textru'])) {
			$data['textru']= null;
		}

		if(empty($data['texten'])) {
			$data['texten']= null;
		}

	$data['keywords'] = $data['meta_desc'] = $request->title;


		if($request->hasFile('image')) {
			$image = $request->file('image');

			if($image->isValid()) {

				$str = str_random(8);

				$obj = new \stdClass;

				$obj = $str.'.jpg';

				$img = Image::make($image);

				$img->fit(Config::get('settings.blog')['width'],
						Config::get('settings.blog')['height'])->save(public_path().'/assets/i/article/'.$obj);


				$cat = $data['category_id'];
				$name = $data['title'];
				$data['img'] = $obj;
				//dd($data);

			}

		}

		empty($data['description'])?($data['description']=NULL):'';
		empty($data['text'])?($data['text']=NULL):'';
		//dd($data);


		$this->model->fill($data);





				if($request->user()->articles()->save($this->model)) {

				if(isset($data['img']))	{


				if($data['heddin'] == 1){


			$title = Menu::where('id', $data['category_id'])->first()->path;
			//dd($title);
			$data = $this->img($data['img'])->id;
			$ure = asset('/uz/blog/'.$title.'/'.$data);

				$this->send($name['oz'],$ure);

				}
				}
					return ['status' => 'Информация добавлена'];
				}

	}

	    public function send($nam,$url)
    {
		$emails = User::select('name','email')->where('sent_new',1)->get();
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
//dd($id);

		if(Gate::allows('edit', new Article)) {
			abort(403);
		}

		$data = $request->except('_token','image','_method');

		if(empty($data)) {
			return array('error' => 'Ma`lumot yo`q');
		}

		if(empty($data['textoz'])) {
			$data['textoz'] = null;
		}

		if(empty($data['textuz'])) {
			$data['textuz'] = null;
		}
		if(empty($data['textru'])) {
			$data['textru']= null;
		}

		if(empty($data['texten'])) {
			$data['texten']= null;
		}

       // $data['keywords'] = $data['meta_desc'] = $request->title;

			$result = $this->one($id);

			//dd($result);

		if($request->hasFile('image')) {
			$image = $request->file('image');

			if($image->isValid()) {

				$zzzz = public_path().'/assets/i/article/'.$result->img;


		$delete = File::delete($zzzz);

				$str = str_random(8);

				$obj = new \stdClass;

				$obj = $str.'.jpg';

				$img = Image::make($image);

				$img->fit(Config::get('settings.blog')['width'],
						Config::get('settings.blog')['height'])->save(public_path().'/assets/i/article/'.$obj);

				$data['img'] = $obj;

			}
		}

		//dd($result->fill($data)->update());

		if($result->fill($data)->update()) {
			return ['status' => 'Информация обновлена'];
		}

	}

		public function deleteArticle($id) {

		if(Gate::allows('destroy', new Article)) {
			abort(403);
		}
		$result = $this->one($id);
		$zzzz = public_path().'/assets/i/article/'.$result->img;
		File::delete($zzzz);
		$result->comments()->delete();

		if($result->delete()) {
			return ['status' => 'Информация удалена'];
		}

	}


}