<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IdCard;
use Illuminate\Http\Request;

class IdCardController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            return view('admin.id_card.list');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function id_cardAjax(Request $request) {
        // if(1 != $request->ajax()){
        //     die('ok');
        // }

        $id_cards = IdCard::orderBy('id', 'DESC')->get();

        if(count($id_cards) > 0) {
            foreach($id_cards as $key => $id_card) {

                $path = 'images/id_card';

                $id_cards[$key]['sr_no'] = $key + 1;
                $id_cards[$key]['applicant_name'] = $id_card->applicant_name;
                $id_cards[$key]['father_name'] = $id_card->father_name;
                $id_cards[$key]['res_address'] = $id_card->res_address;
                $id_cards[$key]['place_of_practice'] = $id_card->place_of_practice;
                $id_cards[$key]['mobile_no'] = $id_card->mobile_no;
                $id_cards[$key]['phone_no'] = $id_card->phone_no;
                $id_cards[$key]['email_address'] = $id_card->email_address;
                $id_cards[$key]['issue_date'] = $id_card->issue_date;
                $id_cards[$key]['member_association'] = $id_card->member_association;
                $id_cards[$key]['enrolment_date'] = $id_card->enrolment_date;
                $id_cards[$key]['enrolment_number'] = $id_card->enrolment_number;
                $id_cards[$key]['enrolment_year'] = $id_card->enrolment_year;
                $id_cards[$key]['profile_pic'] = url('/') . '/' .$path . '/' .$id_card->profile_pic;
                $id_cards[$key]['sign'] = url('/') . '/' .$path . '/' .$id_card->sign;
                $id_cards[$key]['card_number'] = $id_card->card_number;
                // $id_cards[$key]['residence_certificate'] = url('/') . '/' .$path . '/' .$id_card->residence_certificate;
                $id_cards[$key]['form_status'] = $id_card->form_status;
                $id_cards[$key]['remarks'] = $id_card->remarks;
                $id_cards[$key]['remarks_url'] = route('admin.id_card.remark', $id_card->id);
                $id_cards[$key]['action'] = NULL;
            }
        }

        return datatables()::of($id_cards)
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
