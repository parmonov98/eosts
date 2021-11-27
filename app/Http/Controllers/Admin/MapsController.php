<?php

namespace App\Http\Controllers\Admin;

use App\Models\Maps;
use App\Repositories\MapsRepository;
use Illuminate\Http\Request;
use Gate;
use Arr;
use Image;
use Menu;
use Config;
use Validator;


class MapsController extends AdminController
{

   public function __construct(MapsRepository $m_rep) {

        parent::__construct();

        $this->m_rep = $m_rep;

        $this->template = config('settings.theme').'.admin.maps.map';

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
        $this->title = 'Google карта';
        $maps = Maps::paginate(12);

         $articles = view(config('settings.theme').'.admin.maps.maps_content',compact('maps'));
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
       $this->title = 'Google карта';
        $this->content = view(config('settings.theme').'.admin.maps.map_create_content')->render();
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

        $result = $this->m_rep->addMap($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/maps')->with($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nakil  $nakil
     * @return \Illuminate\Http\Response
     */
    public function show(Maps $maps)
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
        $result = $this->m_rep->one($id);
    
    $this->title = 'Реадактирование - '. $result->title['ru'];

$this->content = view(config('settings.theme').'.admin.maps.map_create_content')->with(['result' => $result])->render();

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
       $result = $this->m_rep->updateMap($request, $id);
        if(is_array($result) && !empty($result['error'])) {
            //dd($result);

            return back()->with($result);
        }
        return redirect('/admins/maps')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nakil  $nakil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $result = $this->m_rep->deleteMap($id);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/maps')->with($result);

    }
}
