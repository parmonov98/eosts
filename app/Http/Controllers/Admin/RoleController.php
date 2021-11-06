<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Gate;
Use App\Models\Role;
use App\Repositories\UsersRepository;
use App\Repositories\RolesRepository;

class RoleController extends AdminController
{
	protected $us_rep;
    protected $rol_rep;


    public function __construct(RolesRepository $rol_rep, UsersRepository $us_rep) {
        parent::__construct();
        
        if (Gate::allows('EDIT_USERS')) {
            abort(403);
        }

        $this->us_rep = $us_rep;
        $this->rol_rep = $rol_rep;

        $this->template = config('settings.theme').'.admin.roles.roles';
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*
	 public function index()
    {
	 if(Gate::denies('EDIT_USERS')) {
			return redirect('/'); 
		}		 
         $name =  Role::all('id','name');   
         //dd($name);       
        return view(config('settings.theme').'.admin.roles.roles',compact('name'));
    }
	*/
    public function index()
    {
        //
        $name = $this->rol_rep->get('*',TRUE,TRUE,FALSE,FALSE);;

        $this->content = view(config('settings.theme').'.admin.roles.index',compact(['name']));
        
        return $this->renderOutput();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		if(!Gate::denies('save', new User)) {
			abort(403);
		}
		 $this->content = view(config('settings.theme').'.admin.roles.create');
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
       
        $data = $request->except('_token');
        $str = mb_strtolower($data['name']);
       
		if(!Gate::denies('save', new User)) {
			return redirect('/'); 
		}
		request()->validate([
            'name' => 'required'            
        ]);
		
		$editor = Role::create(['name' => $request['name']]);

		return redirect('/admins/roles')->with('success','Saqlandi');
	
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
    public function edit($id)
    {
       if(Gate::denies('edit', new User))  {
			return redirect('/'); 
		}
		$roles = Role::select('name','id')->find($id); 
       //	dd($roles);
       $this->content = view(config('settings.theme').'.admin.roles.edit',compact('roles'));
	           return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required',
        ]);              
        $data = $request->except('_token','_method');
        $str = mb_strtolower($data['name']);
     
        
        if(Gate::denies('edit', new User)) {
			return redirect('/'); 
		}

	Role::find($data['id'])->update(['name' => $data['name']]);
			
      return redirect('/admins/roles')->with('success','O`zgartirildi!');
                        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd(Role::find($id));
       if(!Gate::denies('destroy', new User)){
			return redirect('/'); 
		}
        Role::find($id)->delete();
        return redirect()->route('roles.index')
                        ->with('success','O`chirildi');
    }
}
