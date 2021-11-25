<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use Gate;
use Image;
use Menu;
use Config;
use Validator;


class GalleryController extends AdminController
{

   public function __construct(GalleryRepository $g_rep) {

        parent::__construct();

        $this->g_rep = $g_rep;

        $this->template = config('settings.theme').'.admin.gallery.gallery';

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

        $gallerys = $this->getGallerys();
        // dd($gallerys);
        $this->title = 'Фото галерея';
        $this->content = view(config('settings.theme').'.admin.gallery.gallerys_content')
        ->with('gallerys',$gallerys)->render();

        return $this->renderOutput();
    }


    public function getGallerys()
    {
        $counts = $this->g_rep->get('*',TRUE,TRUE,FALSE,TRUE);
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
        $this->content = view(config('settings.theme').'.admin.gallery.gallery_create_content')->render();
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

                $result = $this->g_rep->addFiles($request);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/gallery')->with($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
    $this->title = 'Реадактирование материала - '. $gallery->name['name']['ru'];

$this->content = view(config('settings.theme').'.admin.gallery.gallery_create_content')->with(['gallery' => $gallery])->render();

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
       $result = $this->g_rep->updateGallery($request, $gallery);
        if(is_array($result) && !empty($result['error'])) {
            //dd($result);

            return back()->with($result);
        }
        return redirect('/admins/gallery')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     //  dd($id);

        $result = $this->g_rep->deleteFile($id);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/gallery')->with($result);

    }
}
