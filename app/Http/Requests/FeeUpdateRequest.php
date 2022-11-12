<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class FeeUpdateRequest extends FormRequest
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
            // 'category' => 'required|unique:fees,category',
            'category' => ['required', Rule::unique('fees', 'category')->ignore($this->id)],
            'basic_fees' => 'required|numeric',
            'bar_council_fees' => 'required|numeric',
            'building_fees' => 'required|numeric',
            'advocate_welfare_fees' => 'required|numeric',
            'benevolent_fees' => 'required|numeric',
        ];
    }
}
