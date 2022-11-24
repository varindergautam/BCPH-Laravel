<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegularFormRequest;
use App\Models\Regular;
use Illuminate\Http\Request;

class RegularFromControlar extends Controller
{
    //

    public function create(){
        return view('front.regularForm.regular');

    }
    public function store(RegularFormRequest $request){
        try{
            $regular = new Regular();
            $path = 'images/regular';

            if($request->file('profile_pic')){
                $profile = $request->file('profile_pic');
                $profile_pic = uploadfile($profile, $path);
                $regular->profile_pic = $profile_pic;
            }
            if($request->file('sign')){
                $sign = $request->file('sign');
                $sign_pic = uploadfile($sign, $path);
                $regular->sign =  $sign_pic;
            }

            if($request->file('upload_enrolment')){
                $upload_enrolment = $request->file('upload_enrolment');
                $upload_enrolment_pic = uploadfile($upload_enrolment, $path);
                $regular->upload_enrolment =  $upload_enrolment_pic;
            }

            if($request->file('law_degree')){
                $law_degree = $request->file('law_degree');
                $law_degree_pic = uploadfile($law_degree, $path);
                $regular->law_degree =  $law_degree_pic;
            }

            if($request->file('cop_certificate')){
                $cop_certificate = $request->file('cop_certificate');
                $cop_certificate_pic = uploadfile($cop_certificate, $path);
                $regular->cop_certificate =  $cop_certificate_pic;
            }
           

            $regular->applicant_name = $request->applicant_name;
            $regular->father_name = $request->father_name;
            $regular->place_practice = $request->place_practice;
            $regular->mobile_number = $request->mobile_number;
            $regular->email = $request->email;
            

            if($regular->save()){
                session()->flash('success', 'Success');
                return redirect()->route('regular.create');
            }



        } catch (\Throwable $th){
            return $th-> getMessage();
        }
    }
}
