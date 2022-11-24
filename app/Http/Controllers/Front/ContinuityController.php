<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContinuityFormStoreRequest;
use App\Models\Continuity;
use Illuminate\Http\Request;

class ContinuityController extends Controller
{
    public function create(){
        return view('front.continuityForm.continuity');
    }

    public function store(ContinuityFormStoreRequest $request) {
        try {
            $continuity = new Continuity();
            $path = 'images/continuity';

            if($request->file('application')){
                $application = $request->file('application');
                $application_pic = uploadfile($application, $path);
                $continuity->upload_application =  $application_pic;
            }

            if($request->file('sign')){
                $sign = $request->file('sign');
                $sign_pic = uploadfile($sign, $path);
                $continuity->sign =  $sign_pic;
            }

            if($request->file('upload_enrolment')){
                $enrolment_certificate = $request->file('upload_enrolment');
                $enrolment_certificate_pic = uploadfile($enrolment_certificate, $path);
                $continuity->enrolment_certificate =  $enrolment_certificate_pic;
            }

            if($request->file('law_degree')){
                $law_degree = $request->file('law_degree');
                $law_degree_pic = uploadfile($law_degree, $path);
                $continuity->lllb_degree =  $law_degree_pic;
            }

            if($request->file('cop_certificate')){
                $cop_certificate = $request->file('cop_certificate');
                $cop_certificate_pic = uploadfile($cop_certificate, $path);
                $continuity->certificate_of_practice =  $cop_certificate_pic;
            }

            if($request->file('profile_pic')){
                $profile_ = $request->file('profile_pic');
                $profile_pic = uploadfile($profile_, $path);
                $continuity->profile_pic =  $profile_pic;
            }
            
            $continuity->applicant_name = $request->applicant_name;
            $continuity->father_name = $request->father_name;
            $continuity->residence_name = $request->address;
            $continuity->place_of_practice = $request->place_practice;
            $continuity->mobile_no = $request->mobile_no;
            $continuity->email_address = $request->email;

            if($continuity->save()) {
                session()->flash('success', 'Success');
                return redirect()->route('continuity.create');
            }
        
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
