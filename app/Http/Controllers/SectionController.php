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
        dd($sections);
        //return view('section.index', compact('sections'));
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

        return view('section.create', compact('off_names'));
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
        $Section = new Section;
        $Section->office_id = $office['id'];
        $Section->name = $request->input('dep_name');
        $Section->save();

        return redirect('section/index');//
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
        return view('section.show', compact('dep'));
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

        $dep_row = Section::find($id);
        $dep_view = [
            'id' => $dep_row->id,
            'office_name' => $dep_row->office->name,
            'dep_name' => $dep_row->name,
        ];
        return $dep_view;
    }
}
