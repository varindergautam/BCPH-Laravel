@extends('layouts.front_layout')

@section('title')
    Application Form
@endsection

@section('content')
    <div class="main_padding application_form">
        <div class="container  ">
            <div class="row ">
                <div class="col-md-12">
                    <div class="form_section border p-3 rounded-1">
                        <form method="post" action="{{ route('saveApplicationForm') }}" enctype="mutlipart/form-data" id="application-form">
                            @csrf
                            <div class="form_heading">
                                <h3>Application Form</h3>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="applicant_name">1. Name of the applicant : As in the Law Degree
                                        </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="applicant_name" id="applicant_name"
                                        placeholder="Enter Name" value="{{ Auth::user()->applicant_name }}">
                                    <strong id="applicant_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="nationality">2. Nationality of the applicant</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" id="nationality" name="nationality"
                                        value="{{ Auth::user()->nationality }}">
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
                                                {{ auth()->user()->category == $fee->id ? 'selected' : '' }}>
                                                {{ $fee->category }}</option>
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
                                        placeholder="" value="{{ Auth::user()->date_of_birth }}">
                                    <strong id="date_of_birth-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="age">3. (a) Age</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control number" name="age" id="age"
                                        placeholder="Enter Age" value="{{ Auth::user()->age() }}">
                                    <strong id="age-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="father_name">4. Father's/Husband's name</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="father_name" id="father_name"
                                        placeholder="Enter Father/Husband Name" value="{{ Auth::user()->father_name }}">
                                    <strong id="father_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="permanent_address">5. Permanent address of the applicant
                                       </label>
                                </div>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="permanent_address" id="permanent_address" placeholder="Enter permanent address">{{ auth()->user()->permanent_address }}</textarea>
                                    <strong id="permanent_address-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="university_name">6. (a) Name of the University of LL.B Course
                                     </label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control university form-select" name="university_name" id="university_name">
                                        <option selected="" disabled="">Select University</option>
                                        @forelse ($universities as $university)
                                            <option value="{{ $university->id }}"
                                                {{ @$applicationForm->university_name == $university->id ? 'selected' : '' }}>
                                                {{ $university->name }}</option>
                                        @empty
                                            <option value="">No data</option>
                                        @endforelse
                                    </select>
                                    <strong id="university_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="which_univeristy">6. (b) If the applicant has passed Two Years L.L.B Course through correspondence only, it’s particular.

                                    </label>
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
                                    <label class="text-dark" for="date_of_law_degree">7. Date on which the applicant obtained the law degree or provisional certificate in law:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date_of_law_degree"
                                        id="date_of_law_degree" value="{{ @$applicationForm->date_of_law_degree }}">
                                    <strong id="date_of_law_degree-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="text-dark" for="plus_two_mark">8. In case of 5 year Law course, give details of 10+2 Examination, </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="text-dark">a) Name of Board</label>
                                    
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="plus_two_name_of_board" id="plus_two_name_of_board"
                                        placeholder="Enter name of board" value="{{ @$applicationForm->plus_two_name_of_board }}">
                                    <strong id="plus_two_name_of_board-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark">b) Date of certificate</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control " name="plus_two_date_of_certificate" id="plus_two_date_of_certificate"
                                        placeholder="Enter date of certificate" value="{{ @$applicationForm->plus_two_date_of_certificate }}">
                                    <strong id="plus_two_date_of_certificate-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark">c) Percentage of marks</label>
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
                                    <label class="text-dark" for="">8. (A)  In case of 3 year LL.B Course, give details of Graduation Degree, </label>
                                </div>
                                {{-- <div class="col-md-6">
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
                                </div> --}}
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">a)  Name and place of College </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="graduation_degree_college_name" id="graduation_degree_college_name"
                                        placeholder="Enter Name and place of College" value="{{ @$applicationForm->graduation_degree_college_name }}">
                                    <strong id="graduation_degree_college_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">b) Name and place of University </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="graduation_degree_university_name" id="graduation_degree_university_name"
                                        placeholder="Enter Name and place of University" value="{{ @$applicationForm->graduation_degree_university_name }}">
                                    <strong id="graduation_degree_university_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">c) Sessions/Period of Graduation</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="graduation_degree_session_period" id="graduation_degree_session_period"
                                        placeholder="Enter Sessions/Period of Graduation" value="{{ @$applicationForm->graduation_degree_session_period }}">
                                    <strong id="graduation_degree_session_period-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">d) Date of Graduation Degree</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="graduation_degree_date_of_graduation" id="graduation_degree_date_of_graduation"
                                        placeholder="Enter Date of Graduation Degree" value="{{ @$applicationForm->graduation_degree_date_of_graduation }}">
                                    <strong id="graduation_degree_date_of_graduation-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">e) Percentage of marks in Graduation</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="graduation_degree_marks" id="graduation_degree_marks"
                                        placeholder="Enter Percentage of marks in Graduation" value="{{ @$applicationForm->graduation_degree_marks }}">
                                    <strong id="graduation_degree_marks-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">f) Name/Nature of Graduation course</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="graduation_degree_course_name" id="graduation_degree_course_name"
                                        placeholder="Enter Name/Nature of Graduation course" value="{{ @$applicationForm->graduation_degree_course_name }}">
                                    <strong id="graduation_degree_course_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="text-dark" for="">8 (B) In case, admission in LL.B Three Year Course <br>
                                        Is based upon Post Graduation degree give details of    such post Graduation like a column 8(A) (with original duly signed and stamp certificate from the concerned college/university to the effect that admission in LL.B Course was based upon Post Graduation
                                        </label>
                                </div>
                                {{-- <div class="col-md-6">
                                    <input type="text" class="form-control " name="graduation_degree_course_name" id="graduation_degree_course_name"
                                        placeholder="Enter Name/Nature of Graduation course" value="{{ @$applicationForm->graduation_degree_course_name }}">
                                    <strong id="graduation_degree_course_name-error" class="error"></strong>
                                </div> --}}
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

                            {{-- <div class="row mb-3">
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
                            </div> --}}

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="correspondence_address">Correspondence Address</label>
                                </div>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="correspondence_address" name="correspondence_address"
                                        placeholder="Enter correspondence address">{{ auth()->user()->correspondence_address }}</textarea>
                                    <strong id="correspondence_address-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="llb_university_name">9. Name and Place of University which issued LL.B Degree
                                     </label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control university form-select" name="llb_university_name" id="llb_university_name">
                                        <option selected="" disabled="">Select University</option>
                                        @forelse ($universities as $university)
                                            <option value="{{ $university->id }}"
                                                {{ @$applicationForm->llb_university_name == $university->id ? 'selected' : '' }}>
                                                {{ $university->name }}</option>
                                        @empty
                                            <option value="">No data</option>
                                        @endforelse
                                    </select>
                                    <strong id="llb_university_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="law_college_name">9. (a) Name and Place of LL.B College</label>
                                </div>
                                <div class="col-md-6">
                                    {{-- <input type="text" class="form-control" id="law_college_name"
                                        name="law_college_name" placeholder="Enter law college name"
                                        value="{{ @$applicationForm->law_college_name }}"> --}}
                                        <select name="law_college_name" class="form-control form-select" id="law_college_name">
                                        <option selected="" disabled="">Select College</option>
                                        @if(@$colleges)
                                            @foreach ($colleges as $college)
                                        <option value="{{ $college->id }}" {{ $college->id == $applicationForm->law_college_name ? 'selected' : '' }}>{{$college->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <strong id="law_college_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="law_college_join_date">(i) Date/Month of Admission in LL.B Course</label>
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
                                    <label class="text-dark" for="law_college_completion_date">(ii) Date/Month of Completion of LL.B Course</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" id="law_college_completion_date"
                                        name="law_college_completion_date" placeholder="Enter law college completion date"
                                        value="{{ @$applicationForm->law_college_completion_date }}">
                                    <strong id="law_college_completion_date-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="law_college_duration_year">(iii) Duration of LL.B Course (3 or 5 Year)</label>
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
                                    <label class="text-dark" for="law_college_passed">(iv)	Date of issuance of LL.B Provisional Certificate/Degree </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" id="law_college_issuance_date"
                                        name="law_college_issuance_date" placeholder="Enter law college issuance date"
                                        value="{{ @$applicationForm->law_college_issuance_date }}">
                                    <strong id="law_college_issuance_date-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="law_college_passed">(v) Date/Month of LL.B Final Year Examination.</label>
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
                                    <label class="text-dark" for="name_of_degree_obtained">(vi)	The Name/Nature of Professional LL.B degree)</label>
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
                                    <label class="text-dark" for="medium_instruction">(vii)	The medium of instructions in the law Course</label>
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
                                    <label class="text-dark" for="private_study_duration_year">(viii)	State as to LLB Course is done by private Study or by attending regular classes</label>
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
                                    <label class="text-dark" for="city_for_pratice_after_enrollment">10. Place and District of practice after Enrolment within the jurisdiction of the Bar Council of Punjab & Haryana</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control form-select" name="city_for_pratice_after_enrollment"
                                        id="city_for_pratice_after_enrollment">
                                        <option selected="" disabled="">Select City</option>

                                        @forelse ($cities as $city)
                                            <option value="{{$city->id}}"
                                            {{ @$applicationForm->city_for_pratice_after_enrollment == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                        @empty
                                        <option value="">No City found</option>
                                        @endforelse

                                        {{-- <option value="1"
                                            {{ @$applicationForm->city_for_pratice_after_enrollment == '1' ? 'selected' : '' }}>
                                            City - 1 </option>
                                        <option value="2"
                                            {{ @$applicationForm->city_for_pratice_after_enrollment == '2' ? 'selected' : '' }}>
                                            City - 2 </option>
                                        <option value="3"
                                            {{ @$applicationForm->city_for_pratice_after_enrollment == '3' ? 'selected' : '' }}>
                                            City - 3 </option> --}}
                                    </select>
                                    <strong id="city_for_pratice_after_enrollment-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">11. Whether or not, the applicant holds or ever held any appointment under Government, Local body, statutory authority or in any other concern if so, the nature of such appointment. Particulars of service, with date ofjoining & date of retirement. (attached necessary proof with duly issued character certificate in original from HOD).</label>
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
                                    <label class="text-dark" for="">13. (a) Whether the applicant has been convicted by a Criminal Court: If so full particulars of conviction with certified copy of final order.</label>
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
                                    <label class="text-dark" for="">13. (b) Whether any Criminal Proceedings pending against the applicant: If so, its full particulars as to the name of the Court, date and nature of proceedings. Attached attested copy of FIR, certified copy of Bail order if any.</label>
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
                                    <label class="text-dark" for="">14. Whether the applicant has been dismissed/ terminated/suspended/removed from the  Service of Govt., Local Body, other Statutory Authority or from any other service :If so, give its particulars to show that dismissal/ termination/removal or suspension was not due to conduct rendering him unfit to be enrolled as an Advocate (also attach  the order of such dismissal etc.)</label>
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
                                    <label class="text-dark" for="">16.	Whether the applicant has previously applied for Enrolment as an Advocate to any High Court or Bar Council. If so, with what result? Also attached certified copy of final order</label>
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

                            {{-- <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for="">17. Mode of payment of enrolment fee and
                                        particulars.</label>
                                </div>
                                <div class="col-md-6 text-dark">
                                    <p><label>Rs. <span
                                                id="basic_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->basic_fees : 0 }}</span>/-</label>
                                    </p>
                                    <p><label>Rs. <span
                                                id="bar_council_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->bar_council_fees : 0 }}</span>/-</label>
                                    </p>
                                    <p><label>Rs. <span
                                                id="building_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->building_fees : 0 }}</span>/-</label>
                                    </p>
                                    <p><label>Rs. <span
                                                id="advocate_welfare_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->advocate_welfare_fees : 0 }}</span>/-</label>
                                    </p>
                                    <p><label>Rs. <span
                                                id="benevolent_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->benevolent_fees : 0 }}</span>/-</label>
                                    </p>
                                    <input type="hidden" name="total_pay" id="total_pay" value="{{ totalFees() }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="text-dark" for=""><span><input type="checkbox" name="tatkaal"
                                                id="tatkaal" class="tatkaal"
                                                {{ @$applicationForm->tatkaal_fees ? 'checked' : '' }}></span>
                                        <span for="tatkaal">Tatkaal</span></label>
                                </div>
                                <div class="col-md-6 text-dark">
                                    <input type="hidden" name="tatkaal_fee" class="tatkaal_fee">
                                    @php
                                        $tatkaal_display = isset($applicationForm->tatkaal_fees) ? 'display: block' : 'display: none';
                                    @endphp
                                    <p id="tatkaal_fees" data-tatkaal_fee="{{ isset($tatkaal->tatkaal_fees) ? $tatkaal->tatkaal_fees : 0 }}"
                                        style="{{ $tatkaal_display }}"><label>Rs. {{ isset($tatkaal->tatkaal_fees) ? $tatkaal->tatkaal_fees : 0 }}</label>
                                    </p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <p class="text-dark">I {{ auth()->user()->applicant_name }} declare that the facts stated
                                    above are true to my knowledge and belief.</p>
                            </div> --}}

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
                                    <span class="text-dark">{{ auth()->user()->applicant_name }}</span>
                                </div>
                            </div>

                            <div class="row">
                                {{-- <div class="col ">
                              <div class=" margin_top_33">
                                  <a href="table.html" name="" class="custom_btn previous_btn_padding">Previous</a>
                              </div>
                          </div> --}}
                                <div class="col ">
                                    <div class="submit_btn">
                                        <input type="submit" name="" value="Next" class="float-end">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        jQuery(document).ready(function() {
            $('form').on('submit', function(e) {
                e.preventDefault();

                var url = baseUrl + '/saveApplicationForm';
                var method = $(this).attr('method');
                var formData = new FormData(this);

                postAjax(url, method, formData)
            });
            $('form').on('submit1', function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var url = "{{ route('orderIdGenerate') }}";
                var formData = new FormData(this);

                $.ajax({
                    type: "post",
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    data: formData,
                    beforeSend: function() {
                        $(".error").text("");
                        $('.loader').show();
                    },
                    success: function(data) {
                        console.log(data)

                        if (data.data != 2) {
                            var order_id = '';
                            if (data.order_id) {
                                order_id = data.order_id;
                            }

                            var totalAmount = 1123;

                            var options = {
                                "key": "{{ env('RAZORPAY_KEY') }}",
                                "amount": $('#total_pay').val(),
                                "currency": "INR",
                                "name": "Varinder",
                                "description": "remarks",
                                "image": "{{ asset('front/images/logo.png') }}",
                                "order_id": order_id,
                                "handler": function(response) {
                                    // console.log(response.razorpay_signature);
                                    $('#razorpay_payment_id').val(response
                                        .razorpay_payment_id);
                                    $('#razorpay_order_id').val(response
                                        .razorpay_order_id);
                                    $('#razorpay_signature').val(response
                                        .razorpay_signature);
                                    window.location.href = baseUrl +
                                        '/paysuccess?razorpay_payment_id=' + response
                                        .razorpay_payment_id + '&amount=' +
                                        totalAmount + "&razorpay_signature=" + response
                                        .razorpay_signature + "&razorpay_order_id=" +
                                        response.razorpay_order_id;
                                    // $('#application-form').submit();
                                },
                                "prefill": {
                                    "name": "{{ auth()->user()->applicant_name }}",
                                    "email": "{{ auth()->user()->email }}",
                                    "contact": "{{ auth()->user()->mobile_number }}"
                                },
                                "notes": {
                                    "address": "Razorpay Corporate Office"
                                },
                                "theme": {
                                    "color": "#3399cc"
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.on('payment.failed', function(response) {
                                console.log(response)
                            });

                            rzp1.open();
                        } else {
                            window.location.href = data.link;
                        }

                    },
                    error: function(data) {
                        var errors = $.parseJSON(data.responseText);
                        printErrorMsg(errors);
                    },
                    complete: function() {
                        setTimeout(function() {
                            $(".loader").fadeOut();
                        }, 1000);
                    }

                });

            });

            $(document).on('change', '.category', function(e) {
                var categoryId = $(this).val();
                console.log(categoryId)
                $.ajax({
                    type: "get",
                    url: baseUrl + '/getFeeDetail/',
                    categoryId,
                    data: {
                        'categoryId': categoryId
                    },
                    success: function(data) {
                        $('#basic_fees').html(data.basic_fees);
                        $('#bar_council_fees').html(data.bar_council_fees);
                        $('#building_fees').html(data.building_fees);
                        $('#advocate_welfare_fees').html(data.advocate_welfare_fees);
                        $('#benevolent_fees').html(data.benevolent_fees);

                        var totalPay = parseInt(data.basic_fees) + parseInt(data
                            .bar_council_fees) + parseInt(data.building_fees) + parseInt(
                            data.advocate_welfare_fees) + parseInt(data.benevolent_fees);

                        $('#total_pay').val(totalPay);
                    }
                });
            });

            $(document).on('change', '.university', function(e) {
                var universityId = $(this).val();
                $.ajax({
                    type: "get",
                    url: baseUrl + '/getCollegeList/',
                    universityId,
                    data: {
                        'universityId': universityId
                    },
                    success: function(data) {
                        var op = '';
                        op += '<option selected="" disabled="">Select College</option>';
                        if(data.length != 0) {
                            data.forEach(element => {
                                op += '<option value = ' +  element.id + '> ' +  element.name + '</option>';

                            });
                        }

                        $('#law_college_name').html(op);

                    }
                });
            });
        });
    </script>
@endsection
