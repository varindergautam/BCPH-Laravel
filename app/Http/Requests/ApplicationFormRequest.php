<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
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
            'university_name' => 'required',
            'which_univeristy' => 'required',
            'date_of_law_degree' => 'required',
            'plus_two_mark' => 'required',
            // 'college_university_name' => 'required',
            // 'no_of_years' => 'required',
            // 'college_pass_date' => 'required',
            // 'stream' => 'required',
            'law_college_name' => 'required',
            'law_college_join_date' => 'required',
            'law_college_duration_year' => 'required',
            'law_college_passed' => 'required',
            'private_study_duration_year' => 'required',
            'city_for_pratice_after_enrollment' => 'required',
            'plus_two_name_of_board' => 'required',
            'plus_two_date_of_certificate' => 'required',
            'graduation_degree_college_name' => 'required',
            'graduation_degree_university_name' => 'required',
            'graduation_degree_session_period' => 'required',
            'graduation_degree_date_of_graduation' => 'required',
            'graduation_degree_marks' => 'required',
            'graduation_degree_course_name' => 'required',
            'law_college_completion_date' => 'required',
            'law_college_issuance_date' => 'required',
        ];
    }
}
