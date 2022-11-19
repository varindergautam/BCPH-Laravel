@extends('layouts.admin_layout')

@section('title', 'User Form')

@section('content')

    <style>
        .form_heading h3 {
            text-align: center;
        }

        .form-check-input {
            pointer-events: none;
            background-color: #e9ecef;
            border: none;
            margin-top: 5px;
        }

        .remove_border {
            border-left: 0px;
            border-top: 0px;
            border-right: 0px;
        }
    </style>

    <div class="content-header">
        @php
            $path = asset('images/documentUploads/' . $user->id);
        @endphp
    </div>

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                {{-- Application Form --}}
                <div class="col-md-12">
                    <div class="form_section border p-3 rounded-1">
                        <form method="post" action="" enctype="mutlipart/form-data" id="application-form">
                            <div class="form_heading">
                                <h3>Application Form</h3>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="applicant_name">1. Name of the applicant : In full as
                                        given in the Law</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="applicant_name" id="applicant_name"
                                        placeholder="Enter Name" value="{{ $user->applicant_name }}">
                                    <strong id="applicant_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="nationality">2. Nationality of the applicant</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" id="nationality" name="nationality"
                                        value="{{ $user->nationality }}">
                                    <strong id="nationality-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="category">2. (a) Category of the Applicant</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control form-select category" name="category" id="category">
                                        <option selected="" disabled="">Select Category</option>

                                        @forelse ($fees as $key => $fee)
                                            <option value="{{ $fee->id }}"
                                                {{ $user->category == $fee->id ? 'selected' : '' }}>{{ $fee->category }}
                                            </option>
                                        @empty
                                            <option>No Fee Found</option>
                                        @endforelse
                                    </select>
                                    <strong id="category-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="date_of_birth">3. Date of Birth</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                        placeholder="" value="{{ $user->date_of_birth }}">
                                    <strong id="date_of_birth-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="age">3. (a) Age</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control number" name="age" id="age"
                                        placeholder="Enter Age" value="{{ $user->age() }}">
                                    <strong id="age-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="father_name">4. Father's/Husband's name in full</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="father_name" id="father_name"
                                        placeholder="Enter Father/Husband Name" value="{{ $user->father_name }}">
                                    <strong id="father_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="permanent_address">5. Permanent address of the applicant,
                                        any change of address in future is to be intimated to the Bar Council at once (in
                                        Block Letter)</label>
                                </div>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="permanent_address" id="permanent_address" placeholder="Enter permanent address">{{ $user->permanent_address }}</textarea>
                                    <strong id="permanent_address-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="university_name">6. (a) Name of the University from
                                        which the applicant has obtained a degree in law: (Three or Five Years Law
                                        Course)</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="university_name" id="university_name">
                                        <option selected="" disabled="">Select University</option>
                                        <option value="1"
                                            {{ @$applicationForm->university_name == '1' ? 'selected' : '' }}>University - 1
                                        </option>
                                        <option value="2"
                                            {{ @$applicationForm->university_name == '2' ? 'selected' : '' }}>University -
                                            2</option>
                                        <option value="3"
                                            {{ @$applicationForm->university_name == '3' ? 'selected' : '' }}>University -
                                            3</option>
                                    </select>
                                    <strong id="university_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="which_univeristy">6. (b) Whether the application has
                                        passed Two Years Law Course (Academic degree) by Private Study, before admission to
                                        LLB. 3rd Year, if so, form which University?</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input which_univeristy" type="radio"
                                            name="which_univeristy" id="which_univeristy0" value="0"
                                            {{ @$applicationForm->which_univeristy == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark" for="which_univeristy0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input which_univeristy" type="radio"
                                            name="which_univeristy" id="which_univeristy1" value="1"
                                            {{ @$applicationForm->which_univeristy == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark" for="which_univeristy1">Yes</label>
                                    </div>

                                    @php
                                        if (@$applicationForm->which_univeristy == '1') {
                                            $which_university = 'display : block';
                                        } else {
                                            $which_university = 'display : none';
                                        }
                                    @endphp

                                    <textarea class="form-control" name="which_univeristy_remarks" id="which_univeristy_remarks"
                                        placeholder="Enter remarks" style="{{ $which_university }}">{{ @$applicationForm->which_univeristy_remarks }}</textarea>
                                    <strong id="which_univeristy_remarks-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="date_of_law_degree">7. Date on which the applicant
                                        obtained the law degree or provisional certificate in law or became a
                                        Barrister:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date_of_law_degree"
                                        id="date_of_law_degree" value="{{ @$applicationForm->date_of_law_degree }}">
                                    <strong id="date_of_law_degree-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="plus_two_mark">8. Whether the applicant passed 10+2
                                        Examination before admission to 5 year Law Course, give full particulars. (An
                                        attested copy to be enclosed), with percentage & Marks</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="plus_two_mark" id="plus_two_mark"
                                        placeholder="Enter 10+2 marks" value="{{ @$applicationForm->plus_two_mark }}">
                                    <strong id="plus_two_mark-error" class="error"></strong>
                                </div>
                            </div>

                            @php
                                if (@$applicationForm->graduate_before_admission == '1') {
                                    $graduate_before_admission = 'display : flex';
                                } else {
                                    $graduate_before_admission = 'display : none';
                                }
                            @endphp

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">8. (a) Whether the applicant was graduate
                                        before admission to the Law Course: Answer specifically "Yes or No," if yes give the
                                        following particulars of graduation with percentage & Marks</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input graduate_before_admission" type="radio"
                                            name="graduate_before_admission" id="graduate_before_admission0"
                                            value="0"
                                            {{ @$applicationForm->graduate_before_admission == '0' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark"
                                            for="graduate_before_admission0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input graduate_before_admission" type="radio"
                                            name="graduate_before_admission" id="graduate_before_admission1"
                                            value="1"
                                            {{ @$applicationForm->graduate_before_admission == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark"
                                            for="graduate_before_admission1">Yes</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 was_graduate" style="{{ $graduate_before_admission }}">
                                <div class="col-md-6">
                                    <label class="text-dark" for="college_university_name">(i) The name of the College and
                                        University at which he/she studied and from which he/she was sent up to the
                                        University for graduation.</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control 5_year" name="college_university_name"
                                        id="college_university_name" placeholder="Enter College and University name"
                                        value="{{ @$applicationForm->college_university_name }}" readonly>
                                    <strong id="college_university_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3 was_graduate" style="{{ $graduate_before_admission }}">
                                <div class="col-md-6">
                                    <label class="text-dark" for="no_of_years">(ii) The number of years for which he/she
                                        was required to study.</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control numeric-only 5_year" name="no_of_years"
                                        id="no_of_years" placeholder="Enter number of years"
                                        value="{{ @$applicationForm->no_of_years }}" readonly>
                                    <strong id="no_of_years-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3 was_graduate" style="{{ $graduate_before_admission }}">
                                <div class="col-md-6">
                                    <label class="text-dark" for="college_pass_date">(iii) The date on which he/she passes
                                        the examination and obtained his/her degree.</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control 5_year" name="college_pass_date"
                                        id="college_pass_date" placeholder="Enter college pass date"
                                        value="{{ @$applicationForm->college_pass_date }}" readonly>
                                    <strong id="college_pass_date-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3 was_graduate" style="{{ $graduate_before_admission }}">
                                <div class="col-md-6">
                                    <label class="text-dark" for="stream">(iv) The nature of the degree whether in Arts,
                                        Science, Commerce or other.</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control 5_year" name="stream" id="stream"
                                        placeholder="Enter stream" value="{{ @$applicationForm->stream }}" readonly>
                                    <strong id="stream-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="english_compulsory">(v) Whether English was one of the
                                        compulsory Subject.</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="english_compulsory"
                                            id="english_compulsory1" value="1"
                                            {{ @$applicationForm->english_compulsory == '1' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark" for="english_compulsory1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="english_compulsory"
                                            id="english_compulsory0" value="0"
                                            {{ @$applicationForm->english_compulsory == '0' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark" for="english_compulsory0">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="correspondence_address">Correspondence Address</label>
                                </div>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="correspondence_address" name="correspondence_address"
                                        placeholder="Enter correspondence address">{{ $user->correspondence_address }}</textarea>
                                    <strong id="correspondence_address-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="law_college_name">9. The name of the College at which
                                        the course of instructions in law was taken in LLB. Ist year and the name of the
                                        University from which the degree in law was obtained</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="law_college_name"
                                        name="law_college_name" placeholder="Enter law college name"
                                        value="{{ @$applicationForm->law_college_name }}">
                                    <strong id="law_college_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="law_college_join_date">(i) The month and the year in
                                        which he/she started/commenced the course of instruction in LLB. Ist year, i.e. date
                                        of joining of LL.B. course.</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" id="law_college_join_date"
                                        name="law_college_join_date" placeholder="Enter law college join date"
                                        value="{{ @$applicationForm->law_college_join_date }}">
                                    <strong id="law_college_join_date-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="law_college_duration_year">(ii) The duration of the
                                        course of instruction law. (whether 3 years or 5 years course)</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control form-select" name="law_college_duration_year"
                                        id="law_college_duration_year">
                                        <option selected="" disabled="">Select Duration</option>
                                        <option value="3 years"
                                            {{ @$applicationForm->law_college_duration_year == '3 years' ? 'selected' : '' }}>
                                            3 Years</option>
                                        <option value="5 years"
                                            {{ @$applicationForm->law_college_duration_year == '5 years' ? 'selected' : '' }}>
                                            5 Years</option>
                                    </select>
                                    <strong id="law_college_duration_year-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="law_college_passed">(iii) The date on which the
                                        examination passed/declared and the degree in law was taken/issued.</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" id="law_college_passed"
                                        name="law_college_passed" placeholder="Enter law college passed date"
                                        value="{{ @$applicationForm->law_college_passed }}">
                                    <strong id="law_college_passed-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="name_of_degree_obtained">(iv) The name of degree
                                        obtained. (Whether LL.B Professional OR Academic)</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="name_of_degree_obtained"
                                            id="name_of_degree_obtained1" value="Professional"
                                            {{ @$applicationForm->name_of_degree_obtained == 'Professional' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark"
                                            for="name_of_degree_obtained1">Professional</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="name_of_degree_obtained"
                                            id="name_of_degree_obtained0" value="Academic"
                                            {{ @$applicationForm->name_of_degree_obtained == 'Academic' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark"
                                            for="name_of_degree_obtained0">Academic</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="medium_instruction">(v) The medium of instructions in
                                        the law Course</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="medium_instruction"
                                            id="medium_instruction0" value="English"
                                            {{ @$applicationForm->medium_instruction == 'English' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark"
                                            for="medium_instruction0">English</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="medium_instruction"
                                            id="medium_instruction1" value="Hindi"
                                            {{ @$applicationForm->medium_instruction == 'Hindi' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark" for="medium_instruction1">Hindi</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="medium_instruction"
                                            id="medium_instruction2" value="Punjabi"
                                            {{ @$applicationForm->medium_instruction == 'Punjabi' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark"
                                            for="medium_instruction2">Punjabi</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="private_study_duration_year">(vi) Whether the law degree
                                        was taken by private Study OR by Regular Attendance at classes for 3 or 5 years as
                                        required under the Bar Council of India Rules</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control form-select" name="private_study_duration_year"
                                        id="private_study_duration_year">
                                        <option selected="" disabled="">Select Duration</option>
                                        <option value="3 years"
                                            {{ @$applicationForm->private_study_duration_year == '3 years' ? 'selected' : '' }}>
                                            3 Years</option>
                                        <option value="5 years"
                                            {{ @$applicationForm->private_study_duration_year == '5 years' ? 'selected' : '' }}>
                                            5 Years</option>
                                    </select>
                                    <strong id="private_study_duration_year-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="city_for_pratice_after_enrollment">10. Place and
                                        district where the applicant intends ordinarily to practice after enrollment within
                                        the jurisdiction of the Bar Council of Punjab & Haryana</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control form-select" name="city_for_pratice_after_enrollment"
                                        id="city_for_pratice_after_enrollment">
                                        <option selected="" disabled="">Select City</option>
                                        <option value="1"
                                            {{ @$applicationForm->city_for_pratice_after_enrollment == '1' ? 'selected' : '' }}>
                                            City - 1 </option>
                                        <option value="2"
                                            {{ @$applicationForm->city_for_pratice_after_enrollment == '2' ? 'selected' : '' }}>
                                            City - 2 </option>
                                        <option value="3"
                                            {{ @$applicationForm->city_for_pratice_after_enrollment == '3' ? 'selected' : '' }}>
                                            City - 3 </option>
                                    </select>
                                    <strong id="city_for_pratice_after_enrollment-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">11. Whether or not, the applicant holds or has
                                        ever held any appointment under Government, Local body, statutory authority or in
                                        any other concern if so, the nature of such appointment holds or held. Particulars
                                        of service, with date of joining & date of retirement be furnished.</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input appointment_holds" type="radio"
                                            name="appointment_holds" id="appointment_holds0" value="0"
                                            {{ @$applicationForm->appointment_holds == '0' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark" for="appointment_holds0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input appointment_holds" type="radio"
                                            name="appointment_holds" id="appointment_holds1" value="1"
                                            {{ @$applicationForm->appointment_holds == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark" for="appointment_holds1">Yes</label>
                                    </div>
                                    @php
                                        if (@$applicationForm->appointment_holds == '1') {
                                            $appointment_holds = 'display : block';
                                        } else {
                                            $appointment_holds = 'display : none';
                                        }
                                    @endphp
                                    <textarea class="form-control" name="appointment_holds_remarks" placeholder="Enter remarks"
                                        id="appointment_holds_remarks" style="{{ $appointment_holds }}">{{ @$applicationForm->appointment_holds_remarks }}</textarea>
                                    <strong id="appointment_holds_remarks-error" class="error"></strong>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">12. Whether or not, the applicant is engaged
                                        or, has ever been engaged in any trade, business or profession : If so the nature of
                                        such trade, business or profession and the place where it is or was carried on
                                        supported/attested copies of documents.</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input business_or_profession" type="radio"
                                            name="business_or_profession" id="business_or_profession0" value="0"
                                            {{ @$applicationForm->business_or_profession == '0' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark" for="business_or_profession0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input business_or_profession" type="radio"
                                            name="business_or_profession" id="business_or_profession1" value="1"
                                            {{ @$applicationForm->business_or_profession == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark"
                                            for="business_or_profession1">Yes</label>
                                    </div>
                                    @php
                                        if (@$applicationForm->business_or_profession == '1') {
                                            $business_or_profession = 'display : block';
                                        } else {
                                            $business_or_profession = 'display : none';
                                        }
                                    @endphp
                                    <textarea class="form-control" name="business_or_profession_remark" placeholder="Enter remarks"
                                        id="business_or_profession_remark" style="{{ $business_or_profession }}">{{ @$applicationForm->business_or_profession_remark }}</textarea>
                                    <strong id="business_or_profession_remark-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">13. (a) Whether the applicant has been
                                        convicted by the Criminal Court : If so full particulars of conviction with
                                        certified copy of final order and proof should be given to show that the conviction
                                        was not due to conduct rendering him unfit to be enrolled as an Advocate.</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input criminal_court" type="radio"
                                            name="criminal_court" id="criminal_court0" value="0"
                                            {{ @$applicationForm->criminal_court == '0' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark" for="criminal_court0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input criminal_court" type="radio"
                                            name="criminal_court" id="criminal_court1" value="1"
                                            {{ @$applicationForm->criminal_court == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark" for="criminal_court1">Yes</label>
                                    </div>
                                    @php
                                        if (@$applicationForm->criminal_court == '1') {
                                            $criminal_court = 'display : block';
                                        } else {
                                            $criminal_court = 'display : none';
                                        }
                                    @endphp
                                    <textarea class="form-control" name="criminal_court_remark" placeholder="Enter remarks" id="criminal_court_remark"
                                        style="{{ $criminal_court }}">{{ @$applicationForm->criminal_court_remark }}</textarea>
                                    <strong id="criminal_court_remark-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">13. (b) Whether there are any Criminal
                                        Proceedings pending against the applicant : If so, full particulars should be given
                                        as to the name
                                        of the Court, date and nature of proceedings. Attested copy of FIR, certified copy
                                        of Bail order if any should be attached.</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input criminal_proceeding_againest_applicant"
                                            type="radio" name="criminal_proceeding_againest_applicant"
                                            id="criminal_proceeding_againest_applicant0" value="0"
                                            {{ @$applicationForm->criminal_proceeding_againest_applicant == '0' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark"
                                            for="criminal_proceeding_againest_applicant0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input criminal_proceeding_againest_applicant"
                                            type="radio" name="criminal_proceeding_againest_applicant"
                                            id="criminal_proceeding_againest_applicant1" value="1"
                                            {{ @$applicationForm->criminal_proceeding_againest_applicant == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark"
                                            for="criminal_proceeding_againest_applicant1">Yes</label>
                                    </div>
                                    @php
                                        if (@$applicationForm->criminal_proceeding_againest_applicant == '1') {
                                            $criminal_proceeding_againest_applicant = 'display : block';
                                        } else {
                                            $criminal_proceeding_againest_applicant = 'display : none';
                                        }
                                    @endphp
                                    <textarea class="form-control" name="criminal_proceeding_againest_applicant_remark" placeholder="Enter remarks"
                                        id="criminal_proceeding_againest_applicant_remark" style="{{ $criminal_proceeding_againest_applicant }}">{{ @$applicationForm->criminal_proceeding_againest_applicant_remark }}</textarea>
                                    <strong id="criminal_proceeding_againest_applicant_remark-error"
                                        class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">14. Whether the applicant has been
                                        dismissed/terminated/retired/suspended/removed from Government Service, the service
                                        of any Local Body or other Statutory Authority or from any other service : If so,
                                        particulars and proof should be given to show that
                                        dismissal/termination/retirement/removal or suspension was not due to conduct
                                        rendering him unfit to be enrolled as an Advocate.</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input suspension_type" type="radio"
                                            name="suspension_type" id="suspension_type0" value="0"
                                            {{ @$applicationForm->suspension_type == '0' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark" for="suspension_type0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input suspension_type" type="radio"
                                            name="suspension_type" id="suspension_type1" value="1"
                                            {{ @$applicationForm->suspension_type == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark" for="suspension_type1">Yes</label>
                                    </div>
                                    @php
                                        if (@$applicationForm->suspension_type == '1') {
                                            $suspension_type = 'display : block';
                                        } else {
                                            $suspension_type = 'display : none';
                                        }
                                    @endphp
                                    <textarea class="form-control" name="suspension_type_remark" placeholder="Enter remarks" id="suspension_type_remark"
                                        style="{{ $suspension_type }}">{{ @$applicationForm->suspension_type_remark }}</textarea>
                                    <strong id="suspension_type_remark-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">15. Whether or not, the applicant has ever
                                        been declared insolvent : If so, whether the applicant has been discharged and full
                                        particulars and proof to show that his insolvency was due to misfortune or
                                        circumstances beyond his control.</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input declared_insolvent_type" type="radio"
                                            name="declared_insolvent_type" id="declared_insolvent_type0" value="0"
                                            {{ @$applicationForm->declared_insolvent_type == '0' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark"
                                            for="declared_insolvent_type0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input declared_insolvent_type" type="radio"
                                            name="declared_insolvent_type" id="declared_insolvent_type1" value="1"
                                            {{ @$applicationForm->declared_insolvent_type == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark"
                                            for="declared_insolvent_type1">Yes</label>
                                    </div>
                                    @php
                                        if (@$applicationForm->declared_insolvent_type == '1') {
                                            $declared_insolvent_type = 'display : block';
                                        } else {
                                            $declared_insolvent_type = 'display : none';
                                        }
                                    @endphp
                                    <textarea class="form-control" name="declared_insolvent_type_remark" placeholder="Enter remarks"
                                        id="declared_insolvent_type_remark" style="{{ $declared_insolvent_type }}">{{ @$applicationForm->declared_insolvent_type_remark }}</textarea>
                                    <strong id="declared_insolvent_type_remark-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">16. Whether the applicant has previously
                                        applied for enrollment as an Advocate to any High Court or Bar Council. If so, with
                                        what result? & certified copy of final order be produced.</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input already_apply_for_enrollment" type="radio"
                                            name="already_apply_for_enrollment" id="already_apply_for_enrollment0"
                                            value="0"
                                            {{ @$applicationForm->already_apply_for_enrollment == '0' ? 'checked' : (@$applicationForm ? '' : 'checked') }}>
                                        <label class="form-check-label text-dark"
                                            for="already_apply_for_enrollment0">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input already_apply_for_enrollment" type="radio"
                                            name="already_apply_for_enrollment" id="already_apply_for_enrollment1"
                                            value="1"
                                            {{ @$applicationForm->already_apply_for_enrollment == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark"
                                            for="already_apply_for_enrollment1">Yes</label>
                                    </div>
                                    @php
                                        if (@$applicationForm->already_apply_for_enrollment == '1') {
                                            $already_apply_for_enrollment = 'display : block';
                                        } else {
                                            $already_apply_for_enrollment = 'display : none';
                                        }
                                    @endphp
                                    <textarea class="form-control" name="already_apply_for_enrollment_remark" placeholder="Enter remarks"
                                        id="already_apply_for_enrollment_remark" style="{{ $already_apply_for_enrollment }}">{{ @$applicationForm->already_apply_for_enrollment_remark }}</textarea>
                                    <strong id="already_apply_for_enrollment_remark-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">17. Mode of payment of enrolment fee and
                                        particulars.</label>
                                </div>
                                <div class="col-md-6 text-dark">
                                    <p><label>Rs. <span
                                                    id="basic_fees">{{ isset($user->fee) ? $user->fee->basic_fees : 0 }}</span>/-</label> basic fees
                                        </p>
                                    
                                        <p><label>Rs. <span
                                                    id="bar_council_fees">{{ isset($user->fee) ? $user->fee->bar_council_fees : 0 }}</span>/-</label> bar council fees
                                        </p>
                                    
                                        <p><label>Rs. <span
                                                    id="building_fees">{{ isset($user->fee) ? $user->fee->building_fees : 0 }}</span>/-</label> building fees
                                        </p>
                                   
                                        <p><label>Rs. <span
                                                    id="advocate_welfare_fees">{{ isset($user->fee) ? $user->fee->advocate_welfare_fees : 0 }}</span>/-</label> advocate welfare fees
                                        </p>
                                    
                                        <p><label>Rs. <span
                                                    id="benevolent_fees">{{ isset($user->fee) ? $user->fee->benevolent_fees : 0 }}</span>/-</label> benevolent fees
                                        </p>
                                    
                                    <input type="hidden" name="total_pay" id="total_pay" value="{{ totalFees() }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <p class="text-dark">I {{ $user->applicant_name }} declare that the facts stated above are
                                    true to my knowledge and belief.</p>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark">Date of Completion:</label>
                                    <input type="hidden" name="date_of_completion"
                                        value="{{ @$applicationForm->date_of_completion ? @$applicationForm->date_of_completion : date('d-m-Y') }}">
                                    <span id="date_of_completion"
                                        class="text-dark">{{ @$applicationForm->date_of_completion ? @$applicationForm->date_of_completion : date('d-m-Y') }}</span>
                                </div>
                                <div class="col-md-6">
                                    <label class="text-dark">Signature of the applicant:</label>
                                    <span class="text-dark">{{ $user->applicant_name }}</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Pay Success --}}
                <div class="col-md-12 mt-2">
                    <div class="form_section border p-3 rounded-1">
                        <form method="get" action="{{ route('declarationForm') }}" enctype="mutlipart/form-data"
                            id="step1-form">
                            @csrf
                            <div class="form_heading">
                                <h3>Payment Confirmation</h3>
                            </div>

                            <div class="row text-center text-dark">
                                <ul style="width: auto; margin: 0 auto;">
                                    
                                    <li>
                                        <p><label>Rs. <span
                                                    id="basic_fees">{{ isset($user->fee) ? $user->fee->basic_fees : 0 }}</span>/-</label> basic fees
                                        </p>
                                    </li>
                                    <li>
                                        <p><label>Rs. <span
                                                    id="bar_council_fees">{{ isset($user->fee) ? $user->fee->bar_council_fees : 0 }}</span>/-</label> bar council fees
                                        </p>
                                    </li>
                                    <li>
                                        <p><label>Rs. <span
                                                    id="building_fees">{{ isset($user->fee) ? $user->fee->building_fees : 0 }}</span>/-</label> building fees
                                        </p>
                                    </li>
                                    <li>
                                        <p><label>Rs. <span
                                                    id="advocate_welfare_fees">{{ isset($user->fee) ? $user->fee->advocate_welfare_fees : 0 }}</span>/-</label> advocate welfare fees
                                        </p>
                                    </li>
                                    <li>
                                        <p><label>Rs. <span
                                                    id="benevolent_fees">{{ isset($user->fee) ? $user->fee->benevolent_fees : 0 }}</span>/-</label> benevolent fees
                                        </p>
                                    </li>
                                    @if(@$applicationForm->tatkaal_fees)
                                    <li>
                                        <p><label>Rs. <span
                                                    id="benevolent_fees">{{ $applicationForm->tatkaal_fees }}</span>/-</label> tatkaal fees
                                        </p>
                                    </li>
                                    @endif
                                </ul>
                                <div class="col-md-12 mb-2">Your payment 
                                    @if(@$applicationForm->total_pay)
                                    <strong>Rs.
                                        {{ $applicationForm->total_pay }}</strong> successfully done.
                                    @else
                                        not done yet.
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Declaration Form --}}
                <div class="col-md-12 mt-2">
                    <div class="form_section border p-3 rounded-1">
                        <form method="post" action="" enctype="mutlipart/form-data" id="declaration-form">
                            @csrf
                            <div class="form_heading">
                                <h3>DECLARATIONS</h3>
                            </div>
                            <div class="paragraph">
                                <p class="text-dark">I <strong>{{ $user->applicant_name }}</strong> declare that the facts
                                    stated below are true to my knowledge.</p>
                            </div>
                            <div class="listing text-dark">
                                <p class="text-dark">I further declare that :-</p>
                                <ul style="list-style-type: circle;">

                                    <li>I have completed 21 years of my age on OR before the date of this application.</li>
                                    <li>I am a citizen of India or a National of a country
                                        <strong>{{ $user->nationality }}</strong> where citizens of India, duly qualified,
                                        are permitted to practice in law.
                                    </li>
                                    <li>I am not in full or part time employment or service and I am not engaged in any
                                        trade business or profession except as follows. (Full particulars to be given here)
                                    </li>
                                    <li>My Name is not borne on the roll of any other State Bar Council in India.</li>
                                    <li>I will not, so long my name is on the roll of Bar Council of Punjab and Haryana,
                                        apply for enrolment to any other State Bar Council.</li>
                                    <li>I have obtained Law degree from <input type="text" name="law_university_name"
                                            placeholder="Enter university"
                                            value="{{ @$declaration_data->law_university_name }}"><strong
                                            id="law_university_name-error" class="error"></strong> University which has
                                        been recognised by the Bar Council of India u/s 24 (i)(c) (iii) of the Advocates Act
                                        1961 and the Law College <input type="text" name="law_college_name"
                                            placeholder="Enter college name"
                                            value="{{ @$declaration_data->law_college_name }}"><strong
                                            id="law_college_name-error" class="error"></strong> where I studied for
                                        three/five years is also recognised by the Bar Council of India for imparting Legal
                                        Education and is affiliated with <input type="text"
                                            placeholder="Enter affiliated university" name="law_affiliated_university"
                                            value="{{ @$declaration_data->law_affiliated_university }}"><strong
                                            id="law_affiliated_university-error" class="error"></strong> University.</li>
                                    <li>The statements made in this application are true to my own knowledge, information
                                        and belief.</li>
                                </ul>
                            </div>
                            <div class="row margin_top">
                                <div class="col-md-6">
                                    <label class="text-dark">Date :</label>
                                    <input type="hidden" name="date_of_completion"
                                        value="{{ @$declaration_data->date_of_completion ? @$declaration_data->date_of_completion : date('d-m-Y') }}">
                                    <span id="date_of_completion"
                                        class="text-dark">{{ @$declaration_data->date_of_completion ? @$declaration_data->date_of_completion : date('d-m-Y') }}</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-dark fw-bold">{{ $user->applicant_name }}</span>
                                    <p class="text-dark">Signature of Applicant</p>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

                {{-- Undertaking Form --}}
                <div class="col-md-12 mt-2">
                    <div class="form_section border p-3 rounded-1">
                        <form method="post" action="" enctype="mutlipart/form-data" id="step1-form">
                            <div class="form_heading">
                                <h3>UNDERTAKING</h3>
                            </div>

                            <div class="listing text-dark">
                                <p class="text-dark">I hereby declare and undertake that :-</p>
                                <ul style="list-style-type: circle;">

                                    <li>I shall abide by the canons of professional ethics and others rules laid down from
                                        time to time by the Bar Council of India and the Bar Council of Punjab & Haryana.
                                    </li>
                                    <li>If after my Admission as an Advocate I accept full or part-time service or
                                        employment or I am engaged in any trade, business or profession, I shall forthwith
                                        inform to the Bar Council or such service, employment or engagement and shall cease
                                        to practice as an Advocate forthwith and I shall surrender my Original Enrolment
                                        Certificate and Identity Card to the Bar Council along with my application for
                                        voluntarily suspension of practice.</li>
                                    <li>3I shall not accept any employment which in the opinion of the Bar Council, is
                                        derogatory to the status of an advocates.</li>
                                    <li>I shall notify any change in the place of my permanent residence/place of practice
                                        to the Bar Council within 90 days of such change.</li>
                                    <li>I undertake to produce original law degree awarded by the University before Bar
                                        Council, within one year from the date of my enrolment as an advocate </li>
                                </ul>
                            </div>
                            <div class="row margin_top">
                                <div class="col-md-6">
                                    <label class="text-dark">Date :</label>
                                    <input type="hidden" name="date_of_completion"
                                        value="{{ @$undertaking->date_of_completion ? @$undertaking->date_of_completion : date('d-m-Y') }}">
                                    <span id="date_of_completion"
                                        class="text-dark">{{ @$undertaking->date_of_completion ? @$undertaking->date_of_completion : date('d-m-Y') }}</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-dark fw-bold">{{ $user->applicant_name }}</span>
                                    <p class="text-dark">Signature of Applicant</p>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>

                <div class="col-md-12 mt-2">
                    <div class="form_section border p-3 rounded-1">
                        <form method="post" action="" enctype="mutlipart/form-data" id="affidavit-form">
                            @csrf
                            <div class="form_heading">
                                <h4 class="text-center">(To be attested by Notary/Oath Commissioner)</h4>
                                <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-dark">
                                    <p class=" text-center1 fw-normal">
                                        Affidavit of Shri/Ms. <strong>{{ $user->applicant_name }}</strong> son/
                                        daughter/wife of Shri <strong>{{ $user->father_name }}</strong> resident
                                        of <strong>{{ $user->state }}</strong> District
                                        <strong>{{ $user->district }}</strong>
                                    </p>

                                    <p class="">I, the above name deponent do hereby solemnly affirm and declare as
                                        under.</p>

                                    <ol type="i" class="">
                                        <li>
                                            <p> That I was born in India and I am a permanent resident of the Country, I was
                                                born at <input type="text" name="born" id="born"
                                                    placeholder="Enter" value="{{ @$affidavit_data->born }}"><strong
                                                    id="born-error" class="error"></strong> District <input
                                                    type="text" name="district_name" id="district_name"
                                                    placeholder="Enter district name"
                                                    value="{{ @$affidavit_data->district_name }}"> <strong
                                                    id="district_name-error" class="error"></strong> State
                                                <strong>{{ $user->state }}</strong>
                                            </p>
                                        </li>

                                        <li>
                                            <p>That my nationality is Indian and I am a citizen of India.</p>
                                        </li>
                                        <li>
                                            <p> That I have obtained my Bachelor of Laws Degree from the <input
                                                    type="text" name="bachelor_law_degree_college_name"
                                                    placeholder="Enter college name"
                                                    value="{{ @$affidavit_data->bachelor_law_degree_college_name }}"><strong
                                                    id="bachelor_law_degree_college_name-error" class="error"></strong>
                                            </p>
                                        </li>
                                    </ol>

                                    <p class="">University after undertaking a course of study in Law for a minimum
                                        period of three years, (after graduation) OR five years after 10+2 classes.</p>

                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-3 text-center text-left">
                                                <span class="fw-bolder ">{{ $user->applicant_name }}</span><br>
                                                <span class="fw-bold text-uppercase">Deponent</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-100 float-start">
                                        <p class="text-center fw-bold fs-4 mb-2">Verification</p>
                                        <p>I, above named deponent, do hereby solemnly affirm and declare that the statement
                                            of mine are true and correct to the best of my knowledge, no part thereof is
                                            false and nothing has been kept concealed therein</p>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-3 mt-2 ">
                                                    <label class="">Place : <input type="text" name="place_name"
                                                            id="place_name" placeholder="Enter place name"
                                                            value="{{ @$affidavit_data->place_name }}"></label>
                                                    <strong id="place_name-error" class="error"></strong>
                                                </p>
                                                <p>
                                                    <input type="hidden" name="date_of_completion"
                                                        value="{{ @$affidavit_data->date_of_completion ? @$affidavit_data->date_of_completion : date('d-m-Y') }}">
                                                    <label class="">Dated : <strong><span id="date_of_completion"
                                                                class="text-dark">{{ @$affidavit_data->date_of_completion ? @$affidavit_data->date_of_completion : date('d-m-Y') }}</span></strong>
                                                        <!-- <input type="text" name="place_name" id="place_name" placeholder="Date of Completion"> -->
                                                    </label>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-3 mb-3 text-center text-left">
                                                    <span class="fw-bolder ">{{ $user->applicant_name }}</span><br>
                                                    <span class="fw-bold text-uppercase">Deponent</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="horizontal_line mt-3 mb-3"></div>

                                <div class="form_heading">
                                    <!-- <h4 class="text-center">(To be attested by Notary/Oath Commissioner)</h4> -->
                                    <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                                </div>

                                <div class="col-md-12 text-dark">
                                    <p class=" text-center1 fw-normal">
                                        Affidavit of Shri/Ms. <strong>{{ $user->applicant_name }}</strong> son/
                                        daughter/wife of Shri <strong>{{ $user->father_name }}</strong> resident
                                        of <strong>{{ $user->state }}</strong> District
                                        <strong>{{ $user->district }}</strong>
                                    </p>

                                    <p class="">I, the above name deponent do hereby solemnly affirm and declare as
                                        under.</p>

                                    <ol type="i" start="4">
                                        <li>
                                            <p> That I was born at <input type="text" name="type_born_in_oath"
                                                    placeholder="Enter" value={{ @$affidavit_data->type_born_in_oath }}>
                                                <strong id="type_born_in_oath-error" class="error"></strong>which is now
                                                in West Pakistan and migrated to India in
                                                <strong>{{ $user->city }}</strong>.
                                            </p>
                                        </li>

                                        <li>
                                            <p>That I have been residing in the territory of India since the date of my
                                                migration.</p>
                                        </li>
                                        <li>
                                            <p>That my nationality is Indian and I am a citizen of India.</p>
                                        </li>
                                        <li>
                                            <p> That I have obtained my Bachelor of Laws Degree from <input type="text"
                                                    name="college_name_oath" placeholder="Enter college name"
                                                    id="college_name_oath"
                                                    value="{{ @$affidavit_data->college_name_oath }}"> <strong
                                                    id="college_name_oath-error" class="error"></strong>the University
                                                after undertaking a course of study in Law for a minimum period of three
                                                years, after graduation. </p>
                                        </li>
                                    </ol>

                                    <p class="">University after undertaking a course of study in Law for a minimum
                                        period of three years, (after graduation) OR five years after 10+2 classes.</p>

                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-3 text-center text-left">
                                                <span class="fw-bolder ">{{ $user->applicant_name }}</span><br>
                                                <span class="fw-bold text-uppercase">Deponent</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-100 float-start">
                                        <p class="text-center fw-bold fs-4 mb-2">Verification</p>
                                        <p>I, above named deponent, do hereby solemnly affirm and declare that the statement
                                            of mine are true and correct to the best of my knowledge, no part thereof is
                                            false and nothing has been kept concealed therein</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-3 mt-2 ">
                                                    <label class="">Place : <input type="text"
                                                            name="place_name_oath" id="place_name_oath"
                                                            placeholder="Enter place name"
                                                            value="{{ @$affidavit_data->place_name_oath }}"></label>
                                                    <strong id="place_name_oath-error" class="error"></strong>
                                                </p>
                                                <p>
                                                    <input type="hidden" name="date_of_completion"
                                                        value="{{ @$affidavit_data->date_of_completion ? @$affidavit_data->date_of_completion : date('d-m-Y') }}">
                                                    <label class="">Dated : <strong><span id="date_of_completion"
                                                                class="text-dark">{{ @$affidavit_data->date_of_completion ? @$affidavit_data->date_of_completion : date('d-m-Y') }}</span></strong>
                                                        <!-- <input type="text" name="place_name" id="place_name" placeholder="Date of Completion"> -->
                                                    </label>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-3 mb-3 text-center text-left">
                                                    <span class="fw-bolder ">{{ $user->applicant_name }}</span><br>
                                                    <span class="fw-bold text-uppercase">Deponent</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <div class="form_section border p-3 rounded-1">
                        <form method="post" action="" enctype="mutlipart/form-data" id="step1-form">
                            @csrf
                            <div class="form_heading">
                                <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-dark">I hereby certify that Shri/Miss
                                        <strong>{{ $user->applicant_name }}</strong> Son/daughter/wife
                                        of Shri <strong>{{ $user->father_name }}</strong> has been known to me personally
                                        for about <input type="text" name="years" id="years"
                                            placeholder="Enter year" value="{{ @$certify_form->years }}"> <strong
                                            id="years-error" class="error"></strong> years OR has been introduced to me
                                        by shri <input type="text" name="advocate_name" id="advocate_name"
                                            placeholder="Enter advocate name"
                                            value="{{ @$certify_form->advocate_name }}"> <strong
                                            id="advocate_name-error" class="error"></strong> Advocate, who is personally
                                        known to me.

                                    </p>
                                    <p class="text-dark">I believe him/here to be a person of good character and conduct
                                        and fit to be admitted as on Advocate on the roll of the Bar Council of Punjab &
                                        Haryana.</p>
                                    <p class="text-dark">I hereby also certify that I have ten year's standing at the Bar,
                                        as an Advocate, on this date. Dated the <input type="text" name="date"
                                            id="date" placeholder="Enter" value="{{ @$certify_form->date }}">
                                        <strong id="date-error" class="error"></strong> day of <input type="text"
                                            name="day" id="day" placeholder="Enter"
                                            value="{{ @$certify_form->day }}"> <strong id="day-error"
                                            class="error"></strong> 201

                                    </p>

                                    <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                                    <p class="text-dark">{{ $user->applicant_name }}</p>
                                    <p class="text-dark">{{ $user->permanent_address }}</p>
                                </div>

                                <div class="col-md-12">
                                    <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/ /
                                        Bar<br> Council of Pb. & Hry.</p>
                                </div>



                                <div class="horizontal_line mt-3 mb-3"></div>

                                <div class="form_heading">
                                    <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-dark">I hereby certify that Shri/Miss
                                            <strong>{{ $user->applicant_name }}</strong> Son/daughter/wife
                                            of Shri <strong>{{ $user->father_name }}</strong> has been known to me
                                            personally for about<input type="text" name="years_2" id="years_2"
                                                placeholder="Enter year" value="{{ @$certify_form->years_2 }}"> <strong
                                                id="years_2-error" class="error"></strong> years OR has been introduced
                                            to me by shri <input type="text" name="advocate_name_2"
                                                id="advocate_name_2" placeholder="Enter advocate name"
                                                value="{{ @$certify_form->advocate_name_2 }}"> <strong
                                                id="advocate_name_2-error" class="error"></strong> Advocate, who is
                                            personally known to me.

                                        </p>
                                        <p class="text-dark">I believe him/here to be a person of good character and
                                            conduct and fit to be admitted as on Advocate on the roll of the Bar Council of
                                            Punjab & Haryana.</p>
                                        <p class="text-dark">I hereby also certify that I have ten year's standing at the
                                            Bar, as an Advocate, on this date. Dated the <input type="text"
                                                name="date_2" id="date_2" placeholder="Enter"
                                                value="{{ @$certify_form->date_2 }}"> <strong id="date_2-error"
                                                class="error"></strong> day of <input type="text" name="day_2"
                                                id="day_2" placeholder="Enter" value="{{ @$certify_form->day_2 }}">
                                            <strong id="day_2-error" class="error"></strong> 202

                                        </p>

                                        <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                                        <p class="text-dark">{{ $user->applicant_name }}</p>
                                        <p class="text-dark">{{ $user->permanent_address }}</p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/ /
                                            Bar<br> Council of Pb. & Hry.</p>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <div class="form_section border p-3 rounded-1">
                    <form method="get" action="{{ route('enrolmentAsAdvocate') }}" enctype="mutlipart/form-data"
                        id="step1-form">
                        <div class="form_heading">
                            <h3>Order of the Enrollment Committee</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-dark">The applicant Shri/Miss <strong>{{ $user->applicant_name }}</strong>
                                    Son/daughter/wife of Shri <strong>{{ $user->father_name }}</strong> be enrolled as an
                                    Advocate under the provisions of the Advocates Act, 1961.</p>

                                <p class="text-center mb-3 text-dark">OR</p>

                                <p class="text-dark">The applicant Shri/Miss <strong>{{ $user->applicant_name }}</strong>
                                    Son/daughter/wife of Shri <strong>{{ $user->father_name }}</strong> not entitled to be
                                    enrolled as an Advocate under the provisions of the Advocates Act, 1961, for the reasons
                                    given separately.</p>

                                <div class="mt-4 mb-5">
                                    <table width="100%">
                                        <tr class="text-dark">
                                            <td><strong>CHAIRMAN</strong></td>
                                            <td><strong>Member</strong></td>
                                            <td><strong>Member</strong></td>
                                        </tr>
                                    </table>
                                    <p class="text-dark"><strong>ENROLMENT COMMITTEE</strong></p>

                                </div>

                                <div class="date">
                                    <label class="text-dark">Date :</label>
                                    <span class="text-dark"><strong></strong></span>
                                </div>

                            </div>


                            <div class="horizontal_line mt-3 mb-3"></div>

                            <div class="form_heading">
                                <h3>Identification Before The Secretary of Bar Council</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-dark">I know Shri <strong>{{ $user->applicant_name }}</strong>
                                        personally and identify him/her.</p>
                                    <div class="date">
                                        <label class="text-dark">Date :</label>
                                        <span class="text-dark"><strong></strong></span>
                                    </div>
                                    <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                                    <p class="text-dark"><strong>{{ $user->applicant_name }}</strong></p>
                                    <p class="text-dark"><strong>{{ $user->permanent_address }}</strong></p>
                                </div>

                                <div class="col-md-12">
                                    <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/ /
                                        Bar<br> Council of Pb. & Hry.</p>
                                </div>
                            </div>
                    </form>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <div class="form_section border p-3 rounded-1">
                    <form method="get" action="{{ route('identityCard') }}" enctype="mutlipart/form-data"
                        id="step1-form">
                        <div class="form_heading">
                            <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                        </div>

                        <div class="text-dark">
                            <p>
                                I, <strong>{{ $user->applicant_name }}</strong> son/daughter/wife of Shri
                                <strong>{{ $user->father_name }}</strong> resident of
                                <strong>{{ $user->state }}</strong> Distt. <strong>{{ $user->city }}</strong> do
                                hereby solemnly affirm and declare as under :-
                            </p>

                            <ol type="a">
                                <li>
                                    <p> I shall uphold the constitution and the laws.</p>
                                </li>

                                <li>
                                    <p> I shall faithfully discharge every obligations cast on me by the Advocates Act, 1961
                                        and the rules framed there under.</p>
                                </li>
                            </ol>

                            <table width="100%">
                                <tr>
                                    <td>
                                        <p><span><span class="fw-bold">Place</span> : Chandigrah</span></p>
                                        <p><span><span class="fw-bold">Dated</span> : </span></p>
                                    </td>
                                    <td>
                                        <p>{{ $user->applicant_name }}</p>
                                        <p class="fw-bold">Signature of the Deponent</p>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <p>Subscribed before me by the above named deponent</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span><span class="fw-bold">Dated</span> : </span></p>
                                    </td>
                                    <td>
                                        <p></p>
                                        <p class="fw-bold">Signature of the Chairman</p>
                                    </td>

                                </tr>
                            </table>
                        </div>

                        <div class="horizontal_line mt-3 mb-3"></div>

                        <div class="form_heading">
                            <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                        </div>

                        <div class="text-dark">
                            <div class="row">
                                <div class="col">
                                    <p class="text-center fw-bold">CERTIFICATE OF ENROLMENT</p>
                                    <p class="text-center fw-bold">AS</p>
                                    <p class="text-center fw-bold">ADVOCATE</p>
                                    <p class="text-center">Under the Advocates Act, 1961</p>
                                    <p class="text-center ">Number on the Roll / PH / ................ /201.....</p>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('images/profile_signs') .'/' . $user->profile_pic }}" width="100">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <p>This is to certify that Shri/Miss <strong>{{ $user->applicant_name }}</strong>
                                    son/daughter/wife of Shri <strong>{{ $user->father_name }}</strong> of District
                                    <strong>{{ $user->state }} </strong> has this day been admitted to be an Advocate of
                                    the Bar Council of Punjab & Haryana and that his/her name has been entered in the Roll
                                    of Advocates maintained by this Council under Section 17 of the Advocate Act, 1961 (Act
                                    No. 25 of the 1961).
                                </p>

                                <p>Given under my hand and the seal of the Bar Council, this .......... for
                                    office............... day of ............ for office.............. 201.....</p>


                            </div>

                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <p class="fw-bold mt-2"> Chairman <br>
                                        Bar Council of Punjab & Haryana <br>
                                        Chandigarh
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <div class="form_section border p-3 rounded-1">
                    <form method="get" action="{{ route('printPage') }}" enctype="mutlipart/form-data"
                        id="step1-form">
                        <div class="form_heading">
                            <h3>The Bar Council of Punjab & Haryana Chandigarh
                                <p style="font-size: 15px;">Law Bhawan, Dakshin Marg, Sector 37-A, Chandigarh, Phone
                                    : 0172-2688519</p>
                            </h3>

                        </div>
                        <div class="subheading text-center text-dark">
                            <h4 class="text-decoration-underline">Application for issue of Identity Card</h4>

                        </div>

                        <div class="row mt-4">
                            <div class="col mt-3">
                                <p class="text-dark">To</p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Secretary,
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bar Council of Punjab & Haryana
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chandigarh
                                </p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('images/profile_signs') .'/' . $user->profile_pic }}" class="" width="100">
                            </div>
                            <div class="col-md-12">
                                <p class="text-dark">Dear Sir,</p>
                                <p class="text-dark">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Kindly issue me an identity Card along with my Enrolment Certificate as an advocate of
                                    your Bar Council. Three Copies of my stamp size (3cm x 2.5 cm) Photograph duly attested
                                    duly attested by a Member Bar Council/Magistrate 1st Class are enclosed herewith, along
                                    with requisite fee of Rs.100/- (Rupees One Hundred only).</p>
                                <p class="mt-4 text-dark">My Particulars are as under</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of the applicant
                                    : <span class="fw-bold">{{ $user->applicant_name }}</span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Law Degree : (In
                                    Block
                                    Letters) <span class="fw-bold"></span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father's/Husband's
                                    Name:- <span class="fw-bold">{{ $user->father_name }}</span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth and
                                    Age:- <span class="fw-bold">{{ $user->date_of_birth }} and
                                        {{ $user->age() }}</span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Permanent Address:-
                                    <span class="fw-bold">{{ $user->permanent_address }}</span>
                                </p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile No:- <span
                                        class="fw-bold">{{ $user->mobile_number }}</span> </p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <p class="text-dark"><strong>Dishant Thakur</strong></p>
                                <p class="text-dark">Signature of Applicant</p>
                            </div>
                            <div class="col">
                                <p class="text-dark"><strong>For Office</strong></p>
                                <p class="text-dark">Hony. Secretary

                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="officialreport.html" enctype="mutlipart/form-data"
                        id="document-upload-form">
                        @csrf
                        <div class="form_heading">
                            <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                        </div>

                        <div class="text-dark">
                            <p>The required documents/copies should be attached as per index given below.</p>

                            <table width="100%" class="table upload_document">
                                <tr>
                                    <th>S. No.</th>
                                    <th>Description of Document</th>
                                    <th>Attached </th>
                                </tr>
                                <tr>
                                    <td width="8%">1.</td>
                                    <td width="80%">Original Provisional Certificate of L.L.B & Its Attested Copy or
                                        Two Attested Copies in case of original degree (See enclosure page No. 2)</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="provisional_certificate_of_llb" class="mb-1"> --}}
                                        @if (@$documentUpload->provisional_certificate_of_llb)
                                            <span><a href="{{ $path . '/' . $documentUpload->provisional_certificate_of_llb }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="provisional_certificate_of_llb-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">2.</td>
                                    <td width="80%">Original Attendance Certificate with 70% & Its Attested Copy (See
                                        enclosure page No. 2)</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="attendance_certificate" class="mb-1"> --}}
                                        @if (@$documentUpload->attendance_certificate)
                                            <span><a href="{{ $path . '/' . $documentUpload->attendance_certificate }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="attendance_certificate-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">3.</td>
                                    <td width="80%">Attested Copy of all DMC of L.L.B Three Year/Five Year (See
                                        enclosure page No. 2)</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="dmc_of_llb" class="mb-1"> --}}
                                        @if (@$documentUpload->dmc_of_llb)
                                            <span><a href="{{ $path . '/' . $documentUpload->dmc_of_llb }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="dmc_of_llb-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">4.</td>
                                    <td width="80%">Attested Copy of matriculation Certificate(DOB) (See enclosure page
                                        No. 2)</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="matriculation_certificate" class="mb-1"> --}}
                                        @if (@$documentUpload->matriculation_certificate)
                                            <span><a href="{{ $path . '/' . $documentUpload->matriculation_certificate }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="matriculation_certificate-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">5.</td>
                                    <td width="80%">Attested Copy of 10+2 Certificate, Calculated & write on copy DMC
                                        with Total Marks:-
                                        <span><input type="text" name="total_mark_of_plus_two"
                                                placeholder="Enter total marks" class="total_mark_of_plus_two"
                                                value="{{ @$documentUpload->total_mark_of_plus_two }}">
                                            <strong id="total_mark_of_plus_two-error" class="error"></strong>
                                        </span>,
                                        Obtain Marks:-
                                        <span><input type="text" name="obtain_mark_of_plus_two"
                                                placeholder="Enter obtain marks" class="obtain_mark_of_plus_two"
                                                value="{{ @$documentUpload->obtain_mark_of_plus_two }}">
                                            <strong id="obtain_mark_of_plus_two-error" class="error"></strong>
                                            <input type="hidden" name="plus_two_percentage" id="plus_two_percentage">
                                        </span> and <span
                                            class="plus_two_percentage"></span>{{ @$documentUpload->plus_two_percentage }}%
                                        auto Calculate.
                                    </td>
                                    <td width="12%">
                                        {{-- <input type="file" name="plus_two_certificate" class="mb-1"> --}}
                                        @if (@$documentUpload->plus_two_certificate)
                                            <span><a href="{{ $path . '/' . $documentUpload->plus_two_certificate }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="plus_two_certificate-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">6.</td>
                                    <td width="80%">Attested Copy of all DMC of Graduation Part I,II,III & degree
                                        Kindly Enter Total Marks:-
                                        <span>
                                            <input type="text" name="total_mark_of_gradutation"
                                                placeholder="Enter Graduation marks" class="total_mark_of_gradutation"
                                                value="{{ @$documentUpload->total_mark_of_gradutation }}">
                                            <strong id="total_mark_of_gradutation-error" class="error"></strong>
                                        </span>, Obtain Marks:-
                                        <span><input type="text" name="obtain_mark_of_gradutation"
                                                placeholder="Enter obtain marks" class="obtain_mark_of_gradutation"
                                                value="{{ @$documentUpload->obtain_mark_of_gradutation }}">
                                            <strong id="obtain_mark_of_gradutation-error" class="error"></strong>
                                            <input type="hidden" name="graduation_percentage"
                                                id="graduation_percentage">
                                        </span> and <span
                                            class="graduation_percentage"></span>{{ @$documentUpload->graduation_percentage }}%
                                        auto Calculate.
                                    </td>
                                    <td width="12%">
                                        {{-- <input type="file" name="all_dmc_certificate_of_llb" class="mb-1"> --}}
                                        @if (@$documentUpload->all_dmc_certificate_of_llb)
                                            <span><a href="{{ $path . '/' . $documentUpload->all_dmc_certificate_of_llb }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="all_dmc_certificate_of_llb-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">7.</td>
                                    <td width="80%">Affidavit of Law Degree as per formats (See enclosure page No. 2)
                                    </td>
                                    <td width="12%">
                                        {{-- <input type="file" name="affidavit_of_law_degree" class="mb-1"> --}}
                                        @if (@$documentUpload->affidavit_of_law_degree)
                                            <span><a href="{{ $path . '/' . $documentUpload->affidavit_of_law_degree }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="affidavit_of_law_degree-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">8.</td>
                                    <td width="80%">Affidavit of stamp duty as per formats (See enclosure page No. 2)
                                    </td>
                                    <td width="12%">
                                        {{-- <input type="file" name="affidavit_of_stamp_duty" class="mb-1"> --}}
                                        @if (@$documentUpload->affidavit_of_stamp_duty)
                                            <span><a href="{{ $path . '/' . $documentUpload->affidavit_of_stamp_duty }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="affidavit_of_stamp_duty-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">9.</td>
                                    <td width="80%">Affidavit of AIBE as per formats (See enclosure page No. 2)</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="affidavit_of_aibe" class="mb-1"> --}}
                                        @if (@$documentUpload->affidavit_of_aibe)
                                            <span><a href="{{ $path . '/' . $documentUpload->affidavit_of_aibe }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="affidavit_of_aibe-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">10.</td>
                                    <td width="80%">Service Certificate (Column No. 11)if any (See enclosure page No.
                                        2)</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="service_certificate" class="mb-1"> --}}
                                        @if (@$documentUpload->service_certificate)
                                            <span><a href="{{ $path . '/' . $documentUpload->service_certificate }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="service_certificate-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">11.</td>
                                    <td width="80%">Document relating to column No. 12,13(a),(b) and 14 if any (See
                                        enclosure page No. 2)</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="document_of_column_12_13_14" class="mb-1"> --}}
                                        @if (@$documentUpload->document_of_column_12_13_14)
                                            <span><a href="{{ $path . '/' . $documentUpload->document_of_column_12_13_14 }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="document_of_column_12_13_14-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">12.</td>
                                    <td width="80%">Gap Affidavit, Before joining L.L.B or after L.L.B. if any (See
                                        enclosure page No. 2)</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="gap_affidavit" class="mb-1"> --}}
                                        @if (@$documentUpload->gap_affidavit)
                                            <span><a href="{{ $path . '/' . $documentUpload->gap_affidavit }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="gap_affidavit-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">13.</td>
                                    <td width="80%">Additional affidavit or document if any & additional Qualification
                                    </td>
                                    <td width="12%">
                                        {{-- <input type="file" name="additional_affidavit" class="mb-1"> --}}
                                        @if (@$documentUpload->additional_affidavit)
                                            <span><a href="{{ $path . '/' . $documentUpload->additional_affidavit }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="additional_affidavit-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">14.</td>
                                    <td width="80%">Any other infomation</td>
                                    <td width="12%">
                                        {{-- <input type="file" name="any_other_infomation" class="mb-1"> --}}
                                        @if (@$documentUpload->any_other_infomation)
                                            <span><a href="{{ $path . '/' . $documentUpload->any_other_infomation }}"
                                                    class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="any_other_infomation-error" class="error"></strong>
                                    </td>
                                </tr>
                            </table>

                            <p><strong>Important Note</strong>:- The applicant is requested to fill the enrolment Form
                                neatly and all columns should be filled properly. Leaving any Column blank May cause delay
                                of disposal & enrolment case. Form should be submitted in person to avoid delay. (See
                                enclosure page No. 2)</p>

                            <p class="mt-2">I <strong>{{ $user->applicant_name }}</strong> declare that the facts
                                stated above are true to my knowledge and belief.</p>
                        </div>

                        <div class="row text-dark mt-3">
                            <div class="col-md-6">
                                <input type="hidden" name="date_of_completion"
                                    value="{{ @$documentUpload->date_of_completion ? @$documentUpload->date_of_completion : date('d-m-Y') }}">
                                <p>Dated: <span
                                        class="fw-bold">{{ @$documentUpload->date_of_completion ? @$documentUpload->date_of_completion : date('d-m-Y') }}</span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->applicant_name }}</p>
                                <p class="fw-bold">Signature of the applicant</p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection


@section('scripts')

    <script>
        $(document).ready(function() {
            $('.form-control').attr("disabled", true);
            $('input[type=text]').attr("disabled", true);
        });
    </script>

@endsection
