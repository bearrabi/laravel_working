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
        return view('department.index', compact('deps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //officesテーブルから全ての情報を取得
        $offices = Office::all();
        
        //viewに渡すオフィス名の作成
        $off_names = array();
        foreach($offices as $office){ $off_names[] = $office->name;  }

        return view('department.create', compact('off_names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //viewから取得したoffice_nameからoffice_idを検索して格納
        $office = Office::where('name',$request->input('office_name'))->first();

        //officesテーブルへ挿入
        $department = new Department;
        $department->office_id = $office['id'];
        $department->name = $request->input('dep_name');
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
         //viewから取得したoffice_nameからoffice_idを検索して格納
         $office = Office::where('name',$request->input('office_name'))->first();
 
         //officesテーブルへ挿入
         $department = Department::find($id);
         $department->office_id = $office->id;
         $department->name = $request->input('dep_name');
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
