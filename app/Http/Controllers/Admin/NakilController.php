<?php

namespace App\Http\Controllers\Admin;

use App\Models\OnasNaKl;
use App\Repositories\NakilRepository;
use Illuminate\Http\Request;
use Gate;
use Arr;
use Image;
use Menu;
use Config;
use Validator;


class NakilController extends AdminController
{

   public function __construct(NakilRepository $g_rep) {

        parent::__construct();

        $this->g_rep = $g_rep;

        $this->template = config('settings.theme').'.admin.nakil.nakil';

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
        $this->title = 'Наши клиенты';
        $setname = OnasNaKl::paginate(12);

         $articles = view(config('settings.theme').'.admin.nakil.nakils_content',compact('setname'));
           $this->vars = Arr::add($this->vars,'content',$articles);

        return $this->renderOutput(); 

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $this->title = 'Наши клиенты';
        $this->content = view(config('settings.theme').'.admin.nakil.nakil_create_content')->render();
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

        $result = $this->g_rep->addKil($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/nakil')->with($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nakil  $nakil
     * @return \Illuminate\Http\Response
     */
    public function show(OnasNaKl $nakil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nakil  $nakil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = $this->g_rep->one($id);
  
    $this->title = 'Реадактирование - '. $result->name;

$this->content = view(config('settings.theme').'.admin.nakil.nakil_create_content')->with(['result' => $result])->render();

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nakil  $nakil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $result = $this->g_rep->updateKil($request, $id);
        if(is_array($result) && !empty($result['error'])) {
            //dd($result);

            return back()->with($result);
        }
        return redirect('/admins/nakil')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nakil  $nakil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     //  dd($id);

        $result = $this->g_rep->deleteKil($id);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/nakil')->with($result);

    }
}
