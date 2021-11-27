<?php

namespace App\Http\Controllers\Admin;

use App\Models\Requ;
use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Gate;
use Image;
use Menu;
use Config;
use Validator;
use Excel;
use App\Exports\RequExport;


class RequController extends AdminController
{

       public function __construct(MenusRepository $m_rep) {

        parent::__construct();

        $this->m_rep = $m_rep;

        $this->template = config('settings.theme').'.admin.requ.requ';

    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

 

        $requs = Requ::orderBy('created_at', 'desc')->paginate(10);
        $this->title = 'Заявоки';
        $this->content = view(config('settings.theme').'.admin.requ.requs_content')->with('requs',$requs)->render();

        return $this->renderOutput();
    }




    public function exportExcelCSV($slug) 
    {

        return Excel::download(new RequExport, 'users.'.$slug);
    }





    public function destroy($id)
    {
          $result = Requ::where('id',$id)->delete();

        if($result!=0) {
            return back()->with('status' , 'Информация удалена');
        }else{
        return redirect('/admins/requ')->with('error' , 'Информация не удалена');
        }

    }




        public function edit(Requ $requ)
    {
        // dd($requ);
    if(empty($requ)){
        return ['error'=>'Файл не найден'];
    }


        $result = $requ->increment('prev');

        $this->title = 'Реадактирование материала - '. $requ->name;

                $this->content = view(config('settings.theme').'.admin.requ.requ_create_content')->with(['comment' => $requ])->render();

        return $this->renderOutput();
    }
}
