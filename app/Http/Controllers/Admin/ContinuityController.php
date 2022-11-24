<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Continuity;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Continue_;

class ContinuityController extends Controller
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
            return view('admin.continuity.list');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function continuityAjax(Request $request) {
        // if(1 != $request->ajax()){
        //     die('ok');
        // }

        $continuities = Continuity::orderBy('id', 'DESC')->get();

        if(count($continuities) > 0) {
            foreach($continuities as $key => $continuity) {

                $path = 'images/continuity';

                $continuities[$key]['sr_no'] = $key + 1;
                $continuities[$key]['applicant_name'] = $continuity->applicant_name;
                $continuities[$key]['father_name'] = $continuity->father_name;
                $continuities[$key]['place_of_practice'] = $continuity->place_of_practice;
                $continuities[$key]['mobile_no'] = $continuity->mobile_no;
                $continuities[$key]['email_address'] = $continuity->email_address;
                $continuities[$key]['profile_pic'] = url('/') . '/' .$path . '/' .$continuity->profile_pic;
                $continuities[$key]['sign'] = url('/') . '/' .$path . '/' .$continuity->sign;
                $continuities[$key]['card_number'] = url('/') . '/' .$path . '/' .$continuity->enrolment_certificate;
                $continuities[$key]['upload_application'] = url('/') . '/' .$path . '/' .$continuity->upload_application;
                $continuities[$key]['enrolment_certificate'] = url('/') . '/' .$path . '/' .$continuity->enrolment_certificate;
                $continuities[$key]['lllb_degree'] = url('/') . '/' .$path . '/' .$continuity->lllb_degree;
                $continuities[$key]['certificate_of_practice'] = url('/') . '/' .$path . '/' .$continuity->certificate_of_practice;
                $continuities[$key]['remarks'] = $continuity->remarks;
                $continuities[$key]['remarks_url'] = route('admin.continuity.remark', $continuity->id);
                $continuities[$key]['action'] = NULL;
            }
        }

        return datatables()::of($continuities)
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
