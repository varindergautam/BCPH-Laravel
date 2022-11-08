<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class DocumentUploadRequest extends FormRequest
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
            // 'provisional_certificate_of_llb' => ['required', Rule::unique('posts', 'title')->ignore($this->post)],
            'provisional_certificate_of_llb' => 'exists',
            'attendance_certificate' => 'exists:attendance_certificate',
            // 'attendance_certificate' => 'required',
            // 'dmc_of_llb' => 'required',
            // 'matriculation_certificate' => 'required',
            // 'total_mark_of_plus_two' => 'required',
            // 'obtain_mark_of_tenth' => 'required',
            // 'plus_two_certificate' => 'required',
            // 'total_mark_of_gradutation' => 'required',
            // 'obtain_mark_of_gradutation' => 'required',
            // 'all_dmc_certificate_of_llb' => 'required',
            // 'affidavit_of_law_degree' => 'required',
            // 'affidavit_of_stamp_duty' => 'required',
            // 'affidavit_of_aibe' => 'required',
            // 'service_certificate' => 'required',
            // 'document_of_column_12_13_14' => 'required',
            // 'gap_affidavit' => 'required',
            // 'additional_affidavit' => 'required',
            // 'any_other_infomation' => 'required',
        ];
    }
}
