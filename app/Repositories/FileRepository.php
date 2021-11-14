<?php
namespace App\Repositories;

use App\Models\Employee;
use App\User;
use Gate;
use Image;
use Input;
use Validator;
use Redirect;
use Config;
use Storage;
use File;
use Mail;

class FileRepository extends Repositor {

	public function __construct(Employee $employee){
		$this->model = $employee;
	}

	public function one($id,$attr = array()){
		$result = $this->model->where('id',$id)->first();
		return $result;
	}

	public function img($id,$attr = array()){
		$result = $this->model->where('img',$id)->first();
		return $result;
	}

public function addFiles($request){

		$data = $request->except('_token','file');

        $request->validate([
        'file' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        $fileModel = new Employee;

        if($request->file()) {

        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);

            $fileModel->prof = $data['prof'];
            $fileModel->name = $data['name'];
            $fileModel->img =  $fileName;
            $fileModel->save();

			return ['status' => 'File has been uploaded.'];

        }

}






public function updateFiles($request,$employee){

		$data = $request->except('_token','file');

        $request->validate([
        'file' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($request->file()) {

		$img = public_path('/uploads/').$employee->img;File::delete($img);

        $data['img'] = $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);

            $employee->update($data);

			return ['status' => 'File has been uploaded.'];

        }

}






	public function deleteFile($employee) {


		$img = public_path('/uploads/').$employee->img;File::delete($img);
			if($employee->delete()) {
				return ['status' => 'Удалено.'];
			}
	}



}