<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Repositories\FileRepository;
use App\Repositories\MenusRepository;
use Illuminate\Http\Request;

class EmployeeController extends AdminController
{

    public function __construct(FileRepository $f_rep, MenusRepository $m_rep) {

        parent::__construct();

        $this->f_rep = $f_rep;
        $this->m_rep = $m_rep;

        $this->template = config('settings.theme').'.admin.employee.file';

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $this->title = 'Наша команда';

        $files = $this->getFiles();
     //dd($files);
$this->content = view(config('settings.theme').'.admin.employee.files_content')->with('files',$files)->render();


        return $this->renderOutput();

    }



    public function getFiles()
    {
    $counts = $this->f_rep->get('*',TRUE,TRUE,FALSE,TRUE);
        return $counts;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $this->title = 'Наша команда';
        $this->content = view(config('settings.theme').'.admin.employee.file_create_content')->render();
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
    $result = $this->f_rep->addFiles($request);
    // dd($result);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/employee')->with($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
    $this->title = 'Редактирование ссылки - '.$employee->name['ru'];
    $this->content = view(config('settings.theme').'.admin.employee.file_create_content')->with(['setname' => $employee])->render();
        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
    $result = $this->f_rep->updateFiles($request,$employee);
    // dd($result);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/employee')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
       $result = $this->f_rep->deleteFile($employee);

        if(is_array($result) && !empty($result['error'])) {
            return back()->with($result);
        }

        return redirect('/admins/employee')->with($result);
    }
}
