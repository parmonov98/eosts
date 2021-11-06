<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;


use App\Repositories\PermissionsRepository;
use App\Repositories\RolesRepository;
use App\Models\Permission;

use Gate;

class PermissionsController extends AdminController
{
   // protected $per_rep;
   // protected $rol_rep;
    
    protected $per_rep;
    protected $rol_rep;
    
    public function __construct(PermissionsRepository $per_rep, RolesRepository $rol_rep)
    {
        parent::__construct();
        if(Gate::allows('EDIT_USERS')) {
			abort(403);
		}
		
        
        $this->per_rep = $per_rep;
        $this->rol_rep = $rol_rep;
        
        $this->template = config('settings.theme').'.admin.permission.permissions';
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


	public function index()
    {
      if(Gate::denies('change', new Permission)) {
			abort(403);
		}
        
        $this->title = "Менеджер прав пользователей";
        
        $roles = $this->getRoles();
        $priv = $this->getPermissions();
        
        $this->content = view(config('settings.theme').'.admin.permission.permissions_content',compact('roles','priv'));      
        
        return $this->renderOutput();
    }


    

    public function getRoles()
    {
        $roles = $this->rol_rep->get();        
        return $roles;
    }	
	
    public function getPermissions()
    {
        $permissions = $this->per_rep->get();        
        return $permissions;
    }	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        // dd($request);
        //
		$result = $this->per_rep->changePermissions($request);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return back()->with($result);
    }
	
	


  
}
