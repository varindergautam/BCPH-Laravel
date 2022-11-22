@extends('layouts.front_layout')

@section('title')
Affidavit Form
@endsection

@section('content')
<div class="main_padding verification_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
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
                                    Affidavit of Shri/Ms. <strong>{{ auth::user()->applicant_name }}</strong> son/
                                    daughter/wife of Shri <strong>{{ auth::user()->father_name }}</strong> resident
                                    of <strong>{{ auth::user()->state }}</strong> District <strong>{{ auth::user()->district }}</strong>
                                </p>

                                <p class="">I, the above name deponent do hereby solemnly affirm and declare as under.</p>

                                <ol type="i" class="">
                                    <li>
                                        <p>	That I was born in India and I am a permanent resident of the Country, I was born at <input type="text" name="born" id="born" placeholder="Enter" value="{{ @$affidavit_data->born }}"><strong id="born-error" class="error"></strong> District <input type="text" name="district_name" id="district_name" placeholder="Enter district name" value="{{ @$affidavit_data->district_name }}"> <strong id="district_name-error" class="error"></strong> State <strong>{{ auth::user()->state }}</strong></p>
                                    </li>

                                    <li>
                                        <p>That my nationality is Indian and I am a citizen of India.</p>
                                    </li>
                                    <li>
                                        <p>	That I have obtained my Bachelor of Laws Degree from the <input type="text" name="bachelor_law_degree_college_name" placeholder="Enter college name" value="{{ @$affidavit_data->bachelor_law_degree_college_name }}"><strong id="bachelor_law_degree_college_name-error" class="error"></strong> </p>
                                    </li>
                                </ol>

                                <p class="">University after undertaking a course of study in Law for a minimum period of three years, (after graduation) OR five years after 10+2 classes.</p>

                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="mt-3 mb-3 text-center text-left">
                                            <span class="fw-bolder ">{{ auth()->user()->applicant_name }}</span><br>
                                            <span class="fw-bold text-uppercase">Deponent</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 float-start">
                                    <p class="text-center fw-bold fs-4 mb-2">Verification</p>
                                    <p>I, above named deponent, do hereby solemnly affirm and declare that the statement of mine are true and correct to the best of my knowledge, no part thereof is false and nothing has been kept concealed therein</p>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-3 mt-2 ">
                                                <label class="">Place : <input type="text" name="place_name" id="place_name" placeholder="Enter place name" value="{{ @$affidavit_data->place_name }}"></label>
                                                <strong id="place_name-error" class="error"></strong>
                                            </p>
                                            <p>
                                                <input type="hidden" name="date_of_completion" value="{{ @$affidavit_data->date_of_completion ? @$affidavit_data->date_of_completion : date('d-m-Y') }}">
                                                <label class="">Dated : <strong><span id="date_of_completion" class="text-dark">{{ @$affidavit_data->date_of_completion ? @$affidavit_data->date_of_completion : date('d-m-Y') }}</span></strong>
                                                    <!-- <input type="text" name="place_name" id="place_name" placeholder="Date of Completion"> -->
                                                </label>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-3 text-center text-left">
                                                <span class="fw-bolder ">{{ auth()->user()->applicant_name }}</span><br>
                                                <span class="fw-bold text-uppercase">Deponent</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="horizontal_line mt-3 mb-3"></div>

                            <div class="form_heading">
                                <!-- <h4 class="text-center">(To be attested by Notary/Oath Commissioner)</h4> -->
                                <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                            </div>

                            <div class="col-md-12 text-dark">
                                <p class=" text-center1 fw-normal">
                                    Affidavit of Shri/Ms. <strong>{{ auth::user()->applicant_name }}</strong> son/
                                    daughter/wife of Shri <strong>{{ auth::user()->father_name }}</strong> resident
                                    of <strong>{{ auth::user()->state }}</strong> District <strong>{{ auth::user()->district }}</strong>
                                </p>

                                <p class="">I, the above name deponent do hereby solemnly affirm and declare as under.</p>

                                <ol type="i" start="4">
                                    <li>
                                        <p>	That I was born at <input type="text" name="type_born_in_oath" placeholder="Enter" value={{ @$affidavit_data->type_born_in_oath }}> <strong id="type_born_in_oath-error" class="error"></strong>which is now in West Pakistan and migrated to India in <strong>{{ auth::user()->city }}</strong>. </p>
                                    </li>

                                    <li>
                                        <p>That I have been residing in the territory of India since the date of my migration.</p>
                                    </li>
                                    <li>
                                        <p>That my nationality is Indian and I am a citizen of India.</p>
                                    </li>
                                    <li>
                                        <p>	That I have obtained my Bachelor of Laws Degree from <input type="text" name="college_name_oath" placeholder="Enter college name" id="college_name_oath" value="{{ @$affidavit_data->college_name_oath }}"> <strong id="college_name_oath-error" class="error"></strong>the University after undertaking a course of study in Law for a minimum period of three years, after graduation. </p>
                                    </li>
                                </ol>

                                <p class="">University after undertaking a course of study in Law for a minimum period of three years, (after graduation) OR five years after 10+2 classes.</p>

                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="mt-3 mb-3 text-center text-left">
                                            <span class="fw-bolder ">{{ Auth::user()->applicant_name }}</span><br>
                                            <span class="fw-bold text-uppercase">Deponent</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 float-start">
                                    <p class="text-center fw-bold fs-4 mb-2">Verification</p>
                                    <p>I, above named deponent, do hereby solemnly affirm and declare that the statement of mine are true and correct to the best of my knowledge, no part thereof is false and nothing has been kept concealed therein</p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-3 mt-2 ">
                                                <label class="">Place : <input type="text" name="place_name_oath" id="place_name_oath" placeholder="Enter place name" value="{{ @$affidavit_data->place_name_oath }}"></label>
                                                <strong id="place_name_oath-error" class="error"></strong>
                                            </p>
                                            <p>
                                                <input type="hidden" name="date_of_completion" value="{{ @$affidavit_data->date_of_completion ? @$affidavit_data->date_of_completion : date('d-m-Y') }}">
                                                <label class="">Dated : <strong><span id="date_of_completion" class="text-dark">{{ @$affidavit_data->date_of_completion ? @$affidavit_data->date_of_completion : date('d-m-Y') }}</span></strong>
                                                    <!-- <input type="text" name="place_name" id="place_name" placeholder="Date of Completion"> -->
                                                </label>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-3 mb-3 text-center text-left">
                                                <span class="fw-bolder ">{{ Auth::user()->applicant_name }}</span><br>
                                                <span class="fw-bold text-uppercase">Deponent</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                 <div class="col ">
                                    <div class=" margin_top_33">
                                        <a href="{{ route('undertaking') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="submit_btn">
                                        <input type="submit" name="" value="Next" class="float-end">
                                    </div>
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
<script>
    jQuery(document).ready(function(){
        $('form').on('submit', function (e) {
            e.preventDefault();
            
            var url = baseUrl+'/saveAffidavitForm';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });
    });
</script>
@endsection