<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsuranceStoreRequest;
use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function create() {
        return view('front.insuranceForm.applyInsurance');
    }

    public function store(InsuranceStoreRequest $request) {
        try {
            $insurance = new Insurance();
            $path = 'images/insurance';
            if($request->file('profile_pic')){
                $profile = $request->file('profile_pic');
                $profile_pic = uploadfile($profile, $path);
                $insurance->profile_pic =  $profile_pic;
            }

            if($request->file('sign')){
                $sign = $request->file('sign');
                $sign_pic = uploadfile($sign, $path);
                $insurance->sign =  $sign_pic;
            }

            if($request->file('enrolment_certificate')){
                $enrolment_certificate = $request->file('enrolment_certificate');
                $enrolment_certificate_pic = uploadfile($enrolment_certificate, $path);
                $insurance->enrolment_certificate =  $enrolment_certificate_pic;
            }

            if($request->file('residence_certificate')){
                $residence_certificate = $request->file('residence_certificate');
                $residence_certificate_pic = uploadfile($residence_certificate, $path);
                $insurance->residence_certificate =  $residence_certificate_pic;
            }
            
            $insurance->fund_type = $request->fund_type;
            $insurance->applicant_name = $request->applicant_name;
            $insurance->father_name = $request->father_name;
            $insurance->residence_name = $request->address;
            $insurance->nominee_name = $request->nominee_name;
            $insurance->enrolment_no = $request->enrolment_no;
            $insurance->enrolment_year = $request->enrolment_year;
            $insurance->date_of_birth = $request->birth_date;
            $insurance->age = $request->age;
            $insurance->enrolment_date = $request->enrolment_date;
            $insurance->mobile_no = $request->mobile_no;
            $insurance->email_address = $request->email_address;
            $insurance->bar_association = $request->bar_association;
            $insurance->remarks = $request->remarks;

            if($insurance->save()) {
                return redirect()->route('insurance.create')->with('success', 'Success');
            }
        
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
}
