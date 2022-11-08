<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeeStoreRequest;
use App\Http\Requests\FeeUpdateRequest;
use App\Http\Requests\TatkaalFeeRequest;
use App\Models\Fee;
use App\Models\TatkaalFee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['fees'] = Fee::get();
        return view('admin.fee.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeeStoreRequest $request)
    {
        try {
            Fee::create($request->all());
            return redirect()->route('admin.fee.list')->with('success', 'Created successfully');
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
        $data['fee'] =  Fee::findOrFail($id);
        return view('admin.fee.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeeUpdateRequest $request)
    {
        try {
            Fee::updateOrCreate(['id' => $request->id], [
                'category' => $request->category,
                'basic_fees' => $request->basic_fees,
                'bar_council_fees' => $request->bar_council_fees,
                'building_fees' => $request->building_fees,
                'advocate_welfare_fees' => $request->advocate_welfare_fees,
                'benevolent_fees' => $request->benevolent_fees,
            ]);
            return redirect()->route('admin.fee.list')->with('success', 'Updated Successfully');
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

    public function tatkaalFee() {
        $data['fee'] = TatkaalFee::first();
        return view('admin.fee.tatkal_fee', $data);
    }

    public function tatkaalFeeStore(TatkaalFeeRequest $request) {
        try {
            TatkaalFee::updateOrCreate(['id' => $request->id],
            ['tatkaal_fees' => $request->tatkaal_fee]
        );
        return redirect()->route('admin.fee.tatkaalFee')->with('success', 'Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
