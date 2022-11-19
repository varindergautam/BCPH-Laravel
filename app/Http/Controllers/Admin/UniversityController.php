<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UniversityStoreRequest;
use App\Http\Requests\UniversityUpdateRequest;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return view('admin.university.list');
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    public function universityAjax(Request $request) {
        // if(1 != $request->ajax()){
        //     die('ok');
        // }

        $universitys = University::orderBy('id', 'desc')->get();
    
        if(count($universitys) > 0) {
            foreach($universitys as $key => $university) {
                
                $universitys[$key]['sr_no'] = $key + 1;
                $universitys[$key]['name'] = $university->name;
                $universitys[$key]['email'] = $university->email;
                $universitys[$key]['action'] = NULL;
                $universitys[$key]['edit'] = route('admin.university.edit', $university->id);
            }
        }

        return datatables()::of($universitys)
            // ->addColumn('checkbox', '<input type="checkbox" name="checkbox[]" class="delete_check" value="" id="delcheck_"'.$row['id'].'/>')            
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.university.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UniversityStoreRequest $request)
    {
        try {
            University::create($request->all());
            return redirect()->route('admin.university.list')->with('success', 'Created successfully');
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['university'] =  University::findOrFail($id);
        return view('admin.university.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UniversityUpdateRequest $request)
    {
        try {
            University::updateOrCreate(['id' => $request->id], [
                'name' => $request->name,
                'email' => $request->email,
            ]);
            return redirect()->route('admin.university.list')->with('success', 'Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
