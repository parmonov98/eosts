<?php
namespace App\Repositories;

use App\Models\Comment;
use App\Models\Article;
use App\Models\Product;
use App\Models\User;
use Gate;
use Config;

class CommentRepository extends Repositor {

	public function __construct(Comment $comment){
		$this->model = $comment;
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
		$result->update(['prev' => 0]);
	}

	public function upKurish2($id) {
		$result = $this->one($id);
		$result->update(['prev' => 1]);
	}

		public function updateIzox($request, $id) {

		if(!Gate::allows('destroy', $this->model)) {
			abort(403);
		}

		$result = $this->one($id);
		$data = $request->only('heddin');

		if(empty($data)) {
			return ['error'=>'Ma\'lumot yo\'q'];
		}

		if($result->fill($data)->update()) {
			return ['status'=>'Izox ko\'rib chiqilsi'];
		}

	}


	public function deleteComment($id) {
		if(!Gate::allows('destroy', $this->model)) {
			abort(403);
		}
		$result = $this->one($id);

		if($result->delete()) {
			return ['status'=>'Izox uchirildi'];
		}
	}

}