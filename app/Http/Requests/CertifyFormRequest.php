<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertifyFormRequest extends FormRequest
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
            'years' => 'required',
            'advocate_name' => 'required',
            'date' => 'required',
            'day' => 'required',
            'years_2' => 'required',
            'advocate_name_2' => 'required',
            'date_2' => 'required',
            'day_2' => 'required',
        ];
    }
}
