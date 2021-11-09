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

        if(!Gate::allows('VIEW_ADMIN_ARTICLES')) {
            abort(403);
        }      

        $requs = Requ::paginate(15);
        $this->title = 'Дубликат заявок';
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

        if(is_array($result) && !empty($result['error'])) {
            return back()->with('status' , 'Информация удалена');
        }
        return redirect('/admins/requ')->with($result);

    }
}
