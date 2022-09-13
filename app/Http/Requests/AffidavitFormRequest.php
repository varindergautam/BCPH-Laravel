<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AffidavitFormRequest extends FormRequest
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
            'born' => 'required',
            'district_name' => 'required',
            'bachelor_law_degree_college_name' => 'required',
            'place_name' => 'required',
            'type_born_in_oath' => 'required',
            'college_name_oath' => 'required',
            'place_name_oath' => 'required',
        ];
    }
}
