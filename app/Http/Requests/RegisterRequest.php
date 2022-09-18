<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'applicant_name' => 'required',
            'father_name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile_number' => 'required|digits:10|unique:users',
            'mobile_number' => 'required|unique:users',
            'category' => 'required',
            // 'nationality' => 'required',
            // 'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'district' => 'required',
            'date_of_birth' => 'required',
            'adhaarno' => 'required|digits:12',
            'adhaarno' => 'required|',
            'permanent_address' => 'required|',
            'correspondence_address' => 'required|',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    // public function messages()
    // {
    //     return [
    //         'email.required' => 'Email is required!',
    //     ];
    // }
}
