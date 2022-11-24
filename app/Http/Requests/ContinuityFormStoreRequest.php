<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContinuityFormStoreRequest extends FormRequest
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
            'place_practice'=> 'required',
            'mobile_number' => 'required|unique:continuities,mobile_no',
            'email' => 'required|unique:continuities,email_address',
            'application' => 'required',

            'profile_pic' => 'required',
            'sign' => 'required',
            'upload_enrolment' => 'required',
            'law_degree' => 'required',
            'cop_certificate' => 'required',
            'selection'=> 'required',
        ];
    }
}
