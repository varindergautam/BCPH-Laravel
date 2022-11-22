<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            return view('admin.insurance.list');
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    public function insuranceAjax(Request $request) {
        // if(1 != $request->ajax()){
        //     die('ok');
        // }

        $insurances = Insurance::orderBy('id', 'DESC')->get();
    
        if(count($insurances) > 0) {
            foreach($insurances as $key => $insurance) {
                
                if($insurance->fund_type == 'punjab_adovate_welfare_fund') {
                    $fund_Type = 'Punjab Adovates Welfare Fund';
                }
                elseif($insurance->fund_type == 'haryana_adovate_welfare_fund') {
                    $fund_Type = 'Haryana Adovates Welfare Fund';
                }
                elseif($insurance->fund_type == 'chandigarh_adovate_welfare_fund') {
                    $fund_Type = 'Chandigarh Adovates Welfare Fund';
                }else {
                    $fund_Type = 'Benevolent Fund Scheme';
                }

                $path = 'images/insurance';

                $insurances[$key]['sr_no'] = $key + 1;
                $insurances[$key]['fund_type'] = $fund_Type;
                $insurances[$key]['applicant_name'] = $insurance->applicant_name;
                $insurances[$key]['father_name'] = $insurance->father_name;
                $insurances[$key]['residence_name'] = $insurance->residence_name;
                $insurances[$key]['nominee_name'] = $insurance->nominee_name;
                $insurances[$key]['enrolment_no'] = $insurance->enrolment_no;
                $insurances[$key]['enrolment_year'] = $insurance->enrolment_year;
                $insurances[$key]['date_of_birth'] = $insurance->date_of_birth;
                $insurances[$key]['age'] = $insurance->age;
                $insurances[$key]['enrolment_date'] = $insurance->enrolment_date;
                $insurances[$key]['mobile_no'] = $insurance->mobile_no;
                $insurances[$key]['email_address'] = $insurance->email_address;
                $insurances[$key]['bar_association'] = $insurance->bar_association;
                $insurances[$key]['profile_pic'] = url('/') . '/' .$path . '/' .$insurance->profile_pic;
                $insurances[$key]['sign'] = url('/') . '/' .$path . '/' .$insurance->sign;
                $insurances[$key]['enrolment_certificate'] = url('/') . '/' .$path . '/' .$insurance->enrolment_certificate;
                $insurances[$key]['residence_certificate'] = url('/') . '/' .$path . '/' .$insurance->residence_certificate;
                $insurances[$key]['form_status'] = $insurance->form_status;
                $insurances[$key]['remarks'] = $insurance->remarks;
                $insurances[$key]['remarks_url'] = route('admin.insurance.remark', $insurance->id);
                $insurances[$key]['action'] = NULL;
            }
        }

        return datatables()::of($insurances)
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
