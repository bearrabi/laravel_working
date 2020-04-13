<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Department;
use App\Models\Office;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sec_all = Section::all();

        $sections = array();
        foreach($sec_all as $sec){
            $sections[] = array(
                            'sec_id' => $sec->id,
                            'office_name' =>  $sec->department->office->name,
                            'dep_name' => $sec->department->name,
                            'sec_name' => $sec->name
                            );
        }
        return view('section.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //officesテーブルから全ての情報を取得
        $sections = Section::all();
        
        //viewに渡す事業所名
        $offices = Office::all();
        $off_names = array();
        foreach($offices as $office){ $off_names[] = $office->name;  }

        //viewに渡す部名の作成
        $departments = Department::all();
        $dep_names = array();
        foreach($departments as $dep){  
            if( !in_array($dep->name, $dep_names)){
                $dep_names[] = $dep->name;  
            }
        }
        return view('section.create', compact('off_names', 'dep_names'));
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
        
        $department = Department::where('name',$request->input('dep_name'))
                                ->where('office_id', $office->id)
                                ->first();

        
        //officesテーブルへ挿入
        $section = new Section;
        $section->department_id = $department->id;
        $section->name = $request->input('sec_name');
        $section->save();
        
        //dd($section);
        return redirect('section/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sec = $this->GetSingleIdData($id);
        return view('section.show', compact('sec'));
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
        return view('section.edit', compact('dep'));
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
         $Section = Section::find($id);
         $Section->office_id = $office->id;
         $Section->name = $request->input('dep_name');
         $Section->save();
 
         return redirect('section/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Section = Section::find($id);
        $Section->delete();

        return redirect('section/index');
    }
    

    //１行文のデータを取得して、viewに渡す形式に変換する
    private function GetSingleIdData($id){

        $sec_row = Section::find($id);
        $sec_view = [
            'id' => $sec_row->id,
            'office_name' => $sec_row->department->office->name,
            'dep_name' => $sec_row->department->name,
            'sec_name' => $sec_row->name
        ];
        return $sec_view;
    }
}
