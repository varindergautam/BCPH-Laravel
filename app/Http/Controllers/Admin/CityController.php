<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityStoreRequest;
use App\Http\Requests\CityUpdateRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return view('admin.city.list');
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    public function cityAjax(Request $request) {
        // if(1 != $request->ajax()){
        //     die('ok');
        // }

        $cities = City::get();
    
        if(count($cities) > 0) {
            foreach($cities as $key => $city) {
                $cities[$key]['sr_no'] = $key + 1;
                $cities[$key]['name'] = $city->name;
                $cities[$key]['action'] = NULL;
                $cities[$key]['edit'] = route('admin.city.edit', $city->id);
            }
        }

        return datatables()::of($cities)
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
        return view('admin.city.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityStoreRequest $request)
    {
        try {
            City::create($request->all());
            return redirect()->route('admin.city.list')->with('success', 'Created successfully');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['city'] =  City::findOrFail($id);
        return view('admin.city.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityUpdateRequest $request)
    {
        try {
            City::updateOrCreate(['id' => $request->id], [
                'name' => $request->name,
            ]);
            return redirect()->route('admin.city.list')->with('success', 'Updated Successfully');
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
