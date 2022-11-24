<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Regular;
use Illuminate\Http\Request;

class RegularFromControlar extends Controller
{
    //
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            return view('admin.regular.list');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function regularAjax(Request $request) {
        // if(1 != $request->ajax()){
        //     die('ok');
        // }

        $regulars = Regular::orderBy('id', 'DESC')->get();

        if(count($regulars) > 0) {
            foreach($regulars as $key => $regular) {

                $path = 'images/regular';

                $regulars[$key]['sr_no'] = $key + 1;
                $regulars[$key]['applicant_name'] = $regular->applicant_name;
                $regulars[$key]['father_name'] = $regular->father_name;
                $regulars[$key]['place_practice'] = $regular->place_practice;
                $regulars[$key]['mobile_number'] = $regular->mobile_number;
                $regulars[$key]['email'] = $regular->email;
                $regulars[$key]['profile_pic'] = url('/') . '/' .$path . '/' .$regular->profile_pic;
                $regulars[$key]['sign'] = url('/') . '/' .$path . '/' .$regular->sign;
                $regulars[$key]['cop_certificate'] = url('/') . '/' .$path . '/' .$regular->cop_certificate;
                $regulars[$key]['upload_enrolment'] = url('/') . '/' .$path . '/' .$regular->upload_enrolment;
                $regulars[$key]['law_degree'] = url('/') . '/' .$path . '/' .$regular->law_degree;
                $regulars[$key]['remarks'] = $regular->remarks;
                $regulars[$key]['remarks_url'] = route('admin.id_card.remark', $regular->id);
                $regulars[$key]['action'] = NULL;
            }
        }

        return datatables()::of($regulars)
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
