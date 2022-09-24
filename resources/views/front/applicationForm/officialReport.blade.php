@extends('layouts.front_layout')

@section('title')
Affidavit Form
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="" enctype="mutlipart/form-data" id="official_report-form">
                        @csrf
                        <div class="form_heading">
                            <h3>Official Report</h3>
                        </div>
                        <div>
                            <h5 class="text-center">For Official Use only Scrutiny Report</h5>
                        </div>

                        <div class="mt-4">
                            <p class="text-dark">This file consists of pages .... to ..... which have been indexed
                                above and submitted on ........ I have checked the form, which is completed in all
                                respect or form is incomplete and short coming are lsited below.</p>
                        </div>

                        <div class="row text-dark">
                            <div class="col-6">
                                <input type="checkbox" name="study_gap" id="study_gap" value="1">
                                <label for="study_gap">Study Gap (Auto Calculate)</label><br>
                                <input type="checkbox" name="criminal_procedding" id="criminal_procedding" value="1">
                                <label for="criminal_procedding">Criminal Procedding</label><br>
                                <input type="checkbox" name="above_21_years" id="above_21_years" value="1">
                                <label for="above_21_years">Date of Admission above 21 years</label>
                               
                                

                            </div>
                            <div class="col-6">
                                <input type="checkbox" name="ex_service_men" id="ex_service_men" value="1">
                                <label for="ex_service_men">Ex-Service Men</label><br>
                                <input type="checkbox" name="foreign_law" id="foreign_law" value="1">
                                <label for="foreign_law">Foreign Law</label><br>
                            </div>
                        </div>

                        <input type="hidden" name="date_of_completion" value="{{ @$officialReport->date_of_completion ? @$officialReport->date_of_completion : date('d-m-Y') }}">

                        <div class="row mt-4">
                            <div class="col ">
                                <div class=" margin_top_33">
                                    <div class="submit_btn">
                                        <input type="submit" name="" value="Save" class="float-end">
                                    </div>
                                    {{-- <a href="application1.html" name="" class="custom_btn previous_btn_padding float-end">Save</a> --}}
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
            
            var url = baseUrl+'/saveOfficialReportForm';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });
    });
</script>
@endsection