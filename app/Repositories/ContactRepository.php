<?php
namespace App\Repositories;

use App\Models\Contact;
use Gate;
use Image;
use Config;
use File;
use App\Models\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class ContactRepository extends Repositor {

	public function __construct(Contact $contacts){
		$this->model = $contacts;
	}



	public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		if(empty($result)) {
			$result = ['status'=>'Izox mavjud emas'];
		}
		return $result;
	}

	public function upKurish($id) {
		$result = $this->one($id);
		$data['prev'] = 1;
		$result->fill($data)->update();
	}

		public function addContact($request) {

		$data = $request->except('_token');

		if(empty($data)) {
			return array('error' => 'Ma`lumot yo`q');
		}

				$this->model->fill($data);

				if($request->user()->articles()->save($this->model)) {
							$this->send();
					return ['status' => 'Ma`lumot qushildi'];
				}

			}

			    public function send()
    {
		$emails = User::select('name','telemail')->get();
		//dd($emails);
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Habar';
        $objDemo->demo_two = 'Yangi habar';
        $objDemo->sender = '...';
		foreach($emails as $k=>$email){
        $objDemo->receiver = $email->name;
         Mail::to($email)->send(new DemoEmail($objDemo));
		}
    }

	public function deleteContact($id) {
		if(Gate::denies('destroy', $this->model)) {
			abort(403);
		}
		$result = $this->one($id);

		if(isset($result) && $result->delete()) {
			return ['status'=>'Xabar uchirildi'];
		}else{
			return ['error'=>'Xabar uchirilmadi'];
		}
	}


}