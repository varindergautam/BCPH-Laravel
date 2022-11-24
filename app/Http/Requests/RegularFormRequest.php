<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegularFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'applicant_name'=> 'required',
            'father_name'=> 'required',
            'mobile_number' => 'required|unique:regulars,mobile_number',
            'email' => 'required|unique:regulars,email',
            'place_practice' => 'required',
            'profile_pic' => 'required',
            'sign' => 'required',
            'upload_enrolment' => 'required',
            'law_degree' => 'required',
            'cop_certificate' => 'required',
            'selection'=> 'required',
        ];
    }
}
