<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\OtziviRepository;
use App\Models\Otzivi;
use Arr;

class OtziviController extends AdminController
{

    public function __construct(OtziviRepository $o_t) {

        parent::__construct();

        $this->o_t = $o_t;

        $this->template = config('settings.theme').'.admin.otziv.otziv';

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // 
        $otzivi = $this->setful();

        $this->title = 'Отзывы от клиентов';
        $this->content = view(config('settings.theme').'.admin.otziv.otzivi_content')->with('otzivi',$otzivi)->render();

        return $this->renderOutput();
    }



   public function setful()
    {
      $setname = Otzivi::paginate(3);
      return $setname;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

  
        $this->title = 'Новый отзывы от клиентов';

        

        $this->content = view(config('settings.theme').'.admin.otziv.otziv_create_content')->render();

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

        $result = $this->o_t->addOtziv($request);
        // dd($result);


        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        // dd($result);
        return  redirect('/admins/otziv')->with($result);
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
    public function edit(Otzivi $otzivi,$id)
    {


        $result = $this->o_t->one($id);

        $this->title = 'Редактирование ссылки - '.$result->name;

    

        $this->content = view(config('settings.theme').'.admin.otziv.otziv_create_content')->with(['otzivi' => $result])->render();

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Otzivi $otzivi,$id)
    {


       $result = $this->o_t->updateOtziv($request,$otzivi,$id);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/otziv')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->o_t->deleteOtziv($id);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/otziv')->with($result);
    }
}
