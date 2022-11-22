<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceStoreRequest extends FormRequest
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
            'enrolment_no' => 'required|unique:insurances,enrolment_no',
            'mobile_no' => 'required|unique:insurances,mobile_no',
            'email_address' => 'required|unique:insurances,email_address',
            'selection'=> 'required',
        ];
    }
}
