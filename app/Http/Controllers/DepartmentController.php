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
        $department = new department;
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
        $department = department::find($id);
        $dep = [
                'id' => $id,
                'office_name' => $department->office->name,
                'dep_name' => $department->name
        ];
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
        $department = department::find($id);
        return view('department.edit', compact('department'));
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
        $department = department::find($id);

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
        $department = department::find($id);
        $department->delete();

        return redirect('department/index');
    }
}
