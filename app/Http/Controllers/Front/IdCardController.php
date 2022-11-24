<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\IDCardStoreRequest;
use App\Models\IdCard;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class IdCardController extends Controller
{
    public function create(){
        return view('front.idCardForm.idCard');
    }

    public function store(IDCardStoreRequest $request){
        try{
            $id_card = new IdCard();
            $path = 'images/id_card';

            if($request->file('profile_pic')){
                $profile = $request->file('profile_pic');
                $profile_pic = uploadfile($profile, $path);
                $id_card->profile_pic = $profile_pic;
            }
      
            if($request->file('sign')){
                $sign = $request->file('sign');
                $sign_pic = uploadfile($sign, $path);
                $id_card->sign =  $sign_pic;
            }

            $id_card->applicant_name = $request->applicant_name;
            $id_card->father_name = $request->father_name;
            $id_card->res_address = $request->address;
            $id_card->place_of_practice = $request->practice_place;
            $id_card->mobile_no = $request->mobile_no;
            $id_card->phone_no = $request->phone_no;
            $id_card->email_address = $request->email_address;
            $id_card->issue_date = $request->issue_date;
            $id_card->member_association = $request->member_association;
            $id_card->enrolment_date = $request->enrolment_date;
            $id_card->enrolment_number = $request->enrolment_number;
            $id_card->enrolment_year = $request->enrolment_year;
            $id_card->card_number = $request->identity_card_no;

            if($id_card->save()){
                session()->flash('success', 'Success'); 
                return redirect()->route('id_card.create')->with('success','Success');
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
