<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IDCardStoreRequest extends FormRequest
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
            'address'=> 'required',
            'practice_place' => 'required',
            'mobile_no' => 'required|unique:id_cards,mobile_no',
            'phone_no' => 'required|unique:id_cards,phone_no',
            'email_address' => 'required|unique:id_cards,email_address',
            'issue_date' => 'required',
            'member_association'=> 'required',
            'enrolment_date' => 'required',
            'enrolment_number' => 'required|unique:id_cards,enrolment_number',
            'enrolment_year' => 'required',
            'identity_card_no' => 'required|unique:id_cards,card_number',
            'sign' => 'required',
            'profile_pic' => 'required',
            'selection'=> 'required',
        ];
    }
}
