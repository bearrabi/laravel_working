<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Office;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep_all = Department::all();

        $deps = array();
        foreach($dep_all as $dep){
            $deps[] = array(
                            'dep_id' => $dep->id,
                            'office_name' =>  $dep->office->name,
                            'dep_name' => $dep->name
                            );
        }

        //dd($deps);
        return view('department.index', compact('deps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department;
        $department->company_id = 1;
        $department->name = $request->input('department_name');
        $department->post_number = $request->input('department_postnumber');
        $department->address = $request->input('department_address');
        $department->telnumber = $request->input('department_telnumber');
        $department->save();

        return redirect('department/index');//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dep = $this->GetSingleIdData($id);
        return view('department.show', compact('dep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dep = $this->GetSingleIdData($id);
        return view('department.edit', compact('dep'));
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
        $department = Department::find($id);

        $department->name = $request->input('department_name');
        $department->post_number = $request->input('department_postnumber');
        $department->address = $request->input('department_address');
        $department->telnumber = $request->input('department_telnumber');
        $department->save();
        
        return redirect('department/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();

        return redirect('department/index');
    }
    
    
    //１行文のデータを取得して、viewに渡す形式に変換する
    private function GetSingleIdData($id){

        $dep_row = Department::find($id);
        $dep_view = [
            'id' => $dep_row->id,
            'office_name' => $dep_row->office->name,
            'dep_name' => $dep_row->name,
        ];
        return $dep_view;
    }
}
