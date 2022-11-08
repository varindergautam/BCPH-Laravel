<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeeStoreRequest extends FormRequest
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
            'category' => 'required|unique:fees,category',
            'basic_fees' => 'required|numeric',
            'bar_council_fees' => 'required|numeric',
            'building_fees' => 'required|numeric',
            'advocate_welfare_fees' => 'required|numeric',
            'benevolent_fees' => 'required|numeric',
        ];
    }
}
