@extends('layouts.front_layout')

@section('title')
Document Upload
@endsection

@section('content')
@php
$path = asset('images/documentUploads/'. auth()->user()->id);    
@endphp

<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="officialreport.html" enctype="mutlipart/form-data" id="document-upload-form">
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
                                    <td width="80%">L.L.B Original Provisional Certificate and its Two self attested Photocopies. 
                                        OR Two self attested photocopies in case of original L.L.B degree
                                        </td>
                                    <td width="12%">
                                        <input type="file" name="provisional_certificate_of_llb" class="mb-1">
                                        @if(@$documentUpload->provisional_certificate_of_llb)
                                        <span><a href="{{ $path . '/' .$documentUpload->provisional_certificate_of_llb}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="provisional_certificate_of_llb-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">2.</td>
                                    <td width="80%">Original Attendance Certificate with minimum 70 % attendance and its two self attested photocopies</td>
                                    <td width="12%">
                                        <input type="file" name="attendance_certificate" class="mb-1">
                                        @if(@$documentUpload->attendance_certificate)
                                        <span><a href="{{ $path . '/' .$documentUpload->attendance_certificate}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="attendance_certificate-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">3.</td>
                                    <td width="80%">Self attested photocopy of all DMC of LL.B. Three Year/Five Year</td>
                                    <td width="12%">
                                        <input type="file" name="dmc_of_llb" class="mb-1">
                                        @if(@$documentUpload->dmc_of_llb)
                                        <span><a href="{{ $path . '/' .$documentUpload->dmc_of_llb}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="dmc_of_llb-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">4.</td>
                                    <td width="80%">Self attested photocopy of Matriculation Certificate with (DOB)</td>
                                    <td width="12%">
                                        <input type="file" name="matriculation_certificate" class="mb-1">
                                        @if(@$documentUpload->matriculation_certificate)
                                        <span><a href="{{ $path . '/' .$documentUpload->matriculation_certificate}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="matriculation_certificate-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">5.</td>
                                    <td width="80%">Self attested photocopy of 10+2 Certificate, Also calculate percentage of marks with Total Marks:-
                                        <span><input type="text" name="total_mark_of_plus_two" placeholder="Enter total marks" class="total_mark_of_plus_two" value="{{ @$documentUpload->total_mark_of_plus_two }}">
                                            <strong id="total_mark_of_plus_two-error" class="error"></strong>
                                        </span>, 
                                        Obtain Marks:-
                                        <span><input type="text" name="obtain_mark_of_plus_two" placeholder="Enter obtain marks" class="obtain_mark_of_plus_two" value="{{ @$documentUpload->obtain_mark_of_plus_two }}">
                                            <strong id="obtain_mark_of_plus_two-error" class="error"></strong>
                                            <input type="hidden" name="plus_two_percentage" id="plus_two_percentage">
                                        </span> and <span class="plus_two_percentage"></span>{{ @$documentUpload->plus_two_percentage }}% auto Calculate.  </td>
                                    <td width="12%">
                                        <input type="file" name="plus_two_certificate" class="mb-1">
                                        @if(@$documentUpload->plus_two_certificate)
                                        <span><a href="{{ $path . '/' .$documentUpload->plus_two_certificate}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="plus_two_certificate-error" class="error"></strong>
                                    </td>                                    
                                </tr>
                                <tr>
                                    <td width="8%">6.</td>
                                    <td width="80%">Self attested photocopy of all DMC of Graduation and degree with Total Marks:- 
                                        <span>
                                            <input type="text" name="total_mark_of_gradutation" placeholder="Enter Graduation marks"  class="total_mark_of_gradutation" value="{{ @$documentUpload->total_mark_of_gradutation }}">
                                            <strong id="total_mark_of_gradutation-error" class="error"></strong>
                                        </span>, Obtain Marks:-
                                        <span><input type="text" name="obtain_mark_of_gradutation" placeholder="Enter obtain marks" class="obtain_mark_of_gradutation" value="{{ @$documentUpload->obtain_mark_of_gradutation }}">
                                            <strong id="obtain_mark_of_gradutation-error" class="error"></strong>
                                            <input type="hidden" name="graduation_percentage" id="graduation_percentage">
                                        </span> and <span class="graduation_percentage"></span>{{ @$documentUpload->graduation_percentage }}% auto Calculate.  </td>
                                    <td width="12%">
                                        <input type="file" name="all_dmc_certificate_of_llb" class="mb-1">
                                        @if(@$documentUpload->all_dmc_certificate_of_llb)
                                        <span><a href="{{ $path . '/' .$documentUpload->all_dmc_certificate_of_llb}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="all_dmc_certificate_of_llb-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">7.</td>
                                    <td width="80%">Affidavit of Law Degree</td>
                                    <td width="12%">
                                        <input type="file" name="affidavit_of_law_degree" class="mb-1">
                                        @if(@$documentUpload->affidavit_of_law_degree)
                                        <span><a href="{{ $path . '/' .$documentUpload->affidavit_of_law_degree}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="affidavit_of_law_degree-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">8.</td>
                                    <td width="80%">Affidavit of stamp duty</td>
                                    <td width="12%">
                                        <input type="file" name="affidavit_of_stamp_duty" class="mb-1">
                                        @if(@$documentUpload->affidavit_of_stamp_duty)
                                        <span><a href="{{ $path . '/' .$documentUpload->affidavit_of_stamp_duty}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="affidavit_of_stamp_duty-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">9.</td>
                                    <td width="80%">Affidavit of AIBE</td>
                                    <td width="12%">
                                        <input type="file" name="affidavit_of_aibe" class="mb-1">
                                        @if(@$documentUpload->affidavit_of_aibe)
                                        <span><a href="{{ $path . '/' .$documentUpload->affidavit_of_aibe}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="affidavit_of_aibe-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">10.</td>
                                    <td width="80%">Service Certificate (Column No.11,if any)</td>
                                    <td width="12%">
                                        <input type="file" name="service_certificate" class="mb-1">
                                        @if(@$documentUpload->service_certificate)
                                        <span><a href="{{ $path . '/' .$documentUpload->service_certificate}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="service_certificate-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">11.</td>
                                    <td width="80%">Documents relating to column No.12,13 (A) & (B and 14,if any)</td>
                                    <td width="12%">
                                        <input type="file" name="document_of_column_12_13_14" class="mb-1">
                                        @if(@$documentUpload->document_of_column_12_13_14)
                                        <span><a href="{{ $path . '/' .$documentUpload->document_of_column_12_13_14}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="document_of_column_12_13_14-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">12.</td>
                                    <td width="80%">Gap Affidavit, if any, before joining graduation/LL.B or after LL.B</td>
                                    <td width="12%">
                                        <input type="file" name="gap_affidavit" class="mb-1">
                                        @if(@$documentUpload->gap_affidavit)
                                        <span><a href="{{ $path . '/' .$documentUpload->gap_affidavit}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="gap_affidavit-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">13.</td>
                                    <td width="80%">Additional affidavit/ documents, if any</td>
                                    <td width="12%">
                                        <input type="file" name="additional_affidavit" class="mb-1">
                                        @if(@$documentUpload->additional_affidavit)
                                        <span><a href="{{ $path . '/' .$documentUpload->additional_affidavit}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="additional_affidavit-error" class="error"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="8%">14.</td>
                                    <td width="80%">Any other documents</td>
                                    <td width="12%">
                                        <input type="file" name="any_other_infomation" class="mb-1">
                                        @if(@$documentUpload->any_other_infomation)
                                        <span><a href="{{ $path . '/' .$documentUpload->any_other_infomation}}" class="view_document" target="_blank">View File</a></span>
                                        @endif
                                        <strong id="any_other_infomation-error" class="error"></strong>
                                    </td>
                                </tr>
                            </table>

                            <p><strong>Important Note</strong>:- The applicant is requested to fill the enrolment Form neatly and all columns should be filled properly. Leaving any Column blank May cause delay of disposal & enrolment case. Form should be submitted in person to avoid delay. (See enclosure page No. 2)</p>

                            <p class="mt-2">I <strong>{{ auth()->user()->applicant_name }}</strong> declare that the facts stated above are true to my knowledge and belief.</p>
                        </div>

                        <div class="row text-dark mt-3">
                            <div class="col-md-6">
                                <input type="hidden" name="date_of_completion" value="{{ @$documentUpload->date_of_completion ? @$documentUpload->date_of_completion : date('d-m-Y') }}">
                                <p>Dated: <span class="fw-bold">{{ @$documentUpload->date_of_completion ? @$documentUpload->date_of_completion : date('d-m-Y') }}</span></p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->applicant_name }}</p>
                                <p class="fw-bold">Signature of the applicant</p>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col ">
                                <div class=" margin_top_33">
                                    <a href="{{ route('identityCard') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="submit_btn">
                                    <input type="submit" name="" value="Submit" class="float-end">
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
            
            var url = baseUrl+'/saveDocumentUpload';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });

        $('.obtain_mark_of_plus_two').on('keyup', function () {
            var obtain_mark_of_plus_two = parseInt($(this).val());
            var total_mark_of_plus_two = parseInt($('.total_mark_of_plus_two').val());

            compareMarks(total_mark_of_plus_two, obtain_mark_of_plus_two);
         
            if(obtain_mark_of_plus_two != 0 && total_mark_of_plus_two != 0 && obtain_mark_of_plus_two <= total_mark_of_plus_two){
                var total_percentage = calculatePercentage(total_mark_of_plus_two, obtain_mark_of_plus_two);
                $('.plus_two_percentage').text(Math.round(total_percentage));
                $('#plus_two_percentage').val(Math.round(total_percentage));
            }
        });

        $('.obtain_mark_of_gradutation').on('keyup', function () {
            var obtain_mark_of_gradutation = parseInt($(this).val());
            var total_mark_of_gradutation = parseInt($('.total_mark_of_gradutation').val());

            compareMarks(total_mark_of_gradutation, obtain_mark_of_gradutation);

            if(obtain_mark_of_gradutation > total_mark_of_gradutation){
                alert(obtain_mark_of_gradutation + ' not be greater than ' + total_mark_of_gradutation);
            }
         
            if(obtain_mark_of_gradutation != 0 && total_mark_of_gradutation != 0 && obtain_mark_of_gradutation <= total_mark_of_gradutation){
                var total_percentage = calculatePercentage(total_mark_of_gradutation, obtain_mark_of_gradutation);
                $('.graduation_percentage').text(Math.round(total_percentage));
                $('#graduation_percentage').val(Math.round(total_percentage));
            }
        });
    });
</script>
@endsection