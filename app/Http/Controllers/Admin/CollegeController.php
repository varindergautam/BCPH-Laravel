<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CollegeStoreRequest;
use App\Http\Requests\CollegeUpdateRequest;
use App\Models\College;
use App\Models\University;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index() {
        try {
            return view('admin.college.list');
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    public function collegeAjax(Request $request) {
        // if(1 != $request->ajax()){
        //     die('ok');
        // }

        $colleges = College::with('university')->get();
    
        if(count($colleges) > 0) {
            foreach($colleges as $key => $college) {
                
                $colleges[$key]['sr_no'] = $key + 1;
                // $colleges[$key]['university_name'] = $college->university->name;
                $colleges[$key]['name'] = $college->name;
                $colleges[$key]['action'] = NULL;
                $colleges[$key]['edit'] = route('admin.college.edit', $college->id);
            }
        }

        return datatables()::of($colleges)
            // ->addColumn('checkbox', '<input type="checkbox" name="checkbox[]" class="delete_check" value="" id="delcheck_"'.$row['id'].'/>')            
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create() {
        $data['universities'] = University::get();
        return view('admin.college.create', $data);
    }

    public function store (CollegeStoreRequest $request) {
        try {
            $college = new College();
            $college->university_id = $request->university;
            $college->name = $request->name;
            $college->save();
            return redirect()->route('admin.college.list')->with('success', 'Created successfully');
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    public function edit($id)
    {
        $data['college'] =  College::findOrFail($id);
        $data['universities'] = University::get();
        return view('admin.college.create', $data);
    }

    public function update(CollegeUpdateRequest $request)
    {
        try {
            $college = College::find($request->id);
            $college->university_id = $request->university;
            $college->name = $request->name;
            $college->save();
            return redirect()->route('admin.college.list')->with('success', 'Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
