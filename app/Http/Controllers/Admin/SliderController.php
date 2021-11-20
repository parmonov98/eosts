<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Repositories\SlidersRepository;
use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Gate;
use Image;
use Menu;
use Config;
use Validator;


class SliderController extends AdminController
{

       public function __construct(SlidersRepository $s_rep, MenusRepository $m_rep) {

        parent::__construct();

        $this->s_rep = $s_rep;
        $this->m_rep = $m_rep;

        $this->template = config('settings.theme').'.admin.sliders.slider';

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

        $sliders = $this->getSliders();
        $this->title = 'Фото для слайдов';
        $this->content = view(config('settings.theme').'.admin.sliders.sliders_content')->with('sliders',$sliders)->render();

        return $this->renderOutput();
    }


    public function getSliders()
    {
        $counts = $this->s_rep->get('*',TRUE,TRUE,FALSE,TRUE);
        return $counts;
      }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $this->title = 'Yangi rasm kiritish';
        $this->content = view(config('settings.theme').'.admin.sliders.slider_create_content')->render();
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

                $result = $this->s_rep->addFiles($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/slider')->with($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
    $this->title = 'Редактирование ссылки - '.$slider->name['name']['ru'];
    $this->content = view(config('settings.theme').'.admin.sliders.slider_create_content')->with(['slider' => $slider])->render();
        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {

       $result = $this->s_rep->updateSliders($request,$slider);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/slider')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     //  dd($id);

        $result = $this->s_rep->deleteFile($id);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/slider')->with($result);

    }
}
