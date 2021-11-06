<?php

namespace App\Http\Controllers\Admin;

use App\Models\Xatolar;
use Validator;
use App\Models\User;
use Gate;
use App\Mail\OrderShipped;
use App\Repositories\XatoRepository;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class XatolarController extends AdminController
{


    public function __construct(XatoRepository $c_rep) {

        parent::__construct();
        if(Gate::allows('VIEW_ADMIN_XATO')) {
            abort(403);
        }


        $this->c_rep = $c_rep;

        $this->template = config('settings.theme').'.admin.xato.xato';

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $this->title = 'Хатолар билан шилаш бўлими';


       $comments = $this->getXatolar();

        $counts = Xatolar::where('prev','0')->count();
        //dd($comments);
        if($counts==NULL){$counts=0;}
        if($comments==false){$comments=null;}
            //  dd($comments);
            $users = User::select()->get();
            $user = array();
        foreach($users as $user) {
                $username[$user->id] = $user->name;
        }

$this->content = view(config('settings.theme').'.admin.xato.xatos_content')->with(['comments'=>$comments,'counts'=>$counts])->render();
         return $this->renderOutput();
    }



    public function getXatolar()
    {
        return $this->c_rep->get('*',TRUE,TRUE,FALSE,TRUE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request);

    $data = $request->except('_token');
        //dd($data);
        $validator = Validator::make($data,[
            'ip' => 'string',
            'url' => 'string|required',
            'mis' => 'string|required',
            'comment' => 'string'
        ]);
         if($validator->fails()) {
           return redirect()->back()->with(['error'=>'Maydonchlarni tuldiring']);
        }

        $xato = new Xatolar($data);

        $xato->fill($data)->save();
        // $this->send();
        return redirect()->back()->with(['status'=>'Ma`lumot junatildi']);
        // return \Response::json(['status'=>'Saqlandi']);

        // exit();

    }

        public function send()
    {
        $emails = User::select('name','telemail')->where('telemail','<>',null)->get();
        //dd($emails);
        $objDemo = new \stdClass();
        $objDemo->demo_one = '..';
        $objDemo->demo_two = 'Yangi xabar';
        $objDemo->sender = '...';
        foreach($emails as $k=>$email){
        //dd($email->telemail);
        $objDemo->receiver = $email->name;
         Mail::to($email->telemail)->send(new OrderShipped($objDemo));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Xatolar  $xatolar
     * @return \Illuminate\Http\Response
     */
    public function show(Xatolar $xatolar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Xatolar  $xatolar
     * @return \Illuminate\Http\Response
     */
    public function edit(Xatolar $xatolar,$id)
    {



        if(!Gate::allows('edit', new Xatolar)) {
            abort(403);
        }

        $comment = $this->c_rep->one($id);
// dd($comment);
        $result = $this->c_rep->upKurish($id);

        $this->title = 'Реадактирование материала - '. $comment->name;

                $this->content = view(config('settings.theme').'.admin.xato.xato_create_content')->with(['comment' => $comment])->render();

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Xatolar  $xatolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Xatolar $xatolar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Xatolar  $xatolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xatolar $xatolar,$id)
    {
        if(!Gate::allows('destroy', new Xatolar)) {
            abort(403);
        }

        $result = $this->c_rep->deleteContact($id);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/xato')->with($result);
    }
}
