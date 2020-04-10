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
        return view('depatment.index', compact('deps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depatment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $depatment = new Depatment;
        $depatment->company_id = 1;
        $depatment->name = $request->input('depatment_name');
        $depatment->post_number = $request->input('depatment_postnumber');
        $depatment->address = $request->input('depatment_address');
        $depatment->telnumber = $request->input('depatment_telnumber');
        $depatment->save();

        return redirect('depatment/index');//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depatment = Depatment::find($id);
        return view('depatment.show', compact('depatment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depatment = Depatment::find($id);
        return view('depatment.edit', compact('depatment'));
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
        $depatment = Depatment::find($id);

        $depatment->name = $request->input('depatment_name');
        $depatment->post_number = $request->input('depatment_postnumber');
        $depatment->address = $request->input('depatment_address');
        $depatment->telnumber = $request->input('depatment_telnumber');
        $depatment->save();
        
        return redirect('depatment/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depatment = Depatment::find($id);
        $depatment->delete();

        return redirect('depatment/index');
    }
}
