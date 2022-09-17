@extends('layouts.front_layout')

@section('title')
Document Upload
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="officialreport.html" enctype="mutlipart/form-data" id="document-upload-form">
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
                                    <td width="80%">Original Provisional Certificate of L.L.B & Its Attested Copy or Two Attested Copies in case of original degree (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="provisional_certificate_of_llb"></td>
                                </tr>
                                <tr>
                                    <td width="8%">2.</td>
                                    <td width="80%">Original Attendance Certificate with 70% &  Its Attested Copy (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="attendance_certificate"></td>
                                </tr>
                                <tr>
                                    <td width="8%">3.</td>
                                    <td width="80%">Attested Copy of all DMC of L.L.B Three Year/Five Year (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="dmc_of_llb"></td>
                                </tr>
                                <tr>
                                    <td width="8%">4.</td>
                                    <td width="80%">Attested Copy of matriculation Certificate(DOB) (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="matriculation_certificate"></td>
                                </tr>
                                <tr>
                                    <td width="8%">5.</td>
                                    <td width="80%">Attested Copy of 10+2 Certificate, Calculated & write on copy DMC with Total Marks:-<span><input type="text" name="total_mark_of_plus_two" placeholder="Enter total marks"></span>, Obtain Marks:-<span><input type="text" name="obtain_mark_of_tenth" placeholder="Enter obtain marks"></span> and % auto Calculate.  </td>
                                    <td width="12%"><input type="file" name="plus_two_certificate"></td>
                                </tr>
                                <tr>
                                    <td width="8%">6.</td>
                                    <td width="80%">Attested Copy of  all DMC of Graduation Part I,II,III & degree Kindly Enter Total Marks:- <span><input type="text" name="total_mark_of_gradutation" placeholder="Enter Graduation marks"></span>, Obtain Marks:-<span><input type="text" name="obtain_mark_of_gradutation" placeholder="Enter obtain marks"></span> and % auto Calculate.  </td>
                                    <td width="12%"><input type="file" name="all_dmc_certificate_of_llb"></td>
                                </tr>
                                <tr>
                                    <td width="8%">7.</td>
                                    <td width="80%">Affidavit of Law Degree  as per formats (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="affidavit_of_law_degree"></td>
                                </tr>
                                <tr>
                                    <td width="8%">8.</td>
                                    <td width="80%">Affidavit of stamp duty  as per formats (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="affidavit_of_stamp_duty"></td>
                                </tr>
                                <tr>
                                    <td width="8%">9.</td>
                                    <td width="80%">Affidavit of AIBE  as per formats (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="affidavit_of_aibe"></td>
                                </tr>
                                <tr>
                                    <td width="8%">10.</td>
                                    <td width="80%">Service Certificate (Column No. 11)if any (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="service_certificate"></td>
                                </tr>
                                <tr>
                                    <td width="8%">11.</td>
                                    <td width="80%">Document relating to column No. 12,13(a),(b) and 14 if any (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="document_of_column_12_13_14"></td>
                                </tr>
                                <tr>
                                    <td width="8%">12.</td>
                                    <td width="80%">Gap Affidavit, Before joining L.L.B or after L.L.B. if any (See enclosure page No. 2)</td>
                                    <td width="12%"><input type="file" name="gap_affidavit"></td>
                                </tr>
                                <tr>
                                    <td width="8%">13.</td>
                                    <td width="80%">Additional affidavit or document if any & additional Qualification</td>
                                    <td width="12%"><input type="file" name="additional_affidavit"></td>
                                </tr>
                                <tr>
                                    <td width="8%">14.</td>
                                    <td width="80%">Any other infomation</td>
                                    <td width="12%"><input type="file" name="any_other_infomation"></td>
                                </tr>
                            </table>

                            <p><strong>Important Note</strong>:- The applicant is requested to fill the enrolment Form neatly and all columns should be filled properly. Leaving any Column blank May cause delay of disposal & enrolment case. Form should be submitted in person to avoid delay. (See enclosure page No. 2)</p>

                            <p class="mt-2">I <strong>Dishant Thakur</strong> declare that the facts stated above are true to my knowledge and belief.</p>
                        </div>

                        <div class="row text-dark mt-3">
                            <div class="col-md-6">
                                <p>Dated: <span class="fw-bold">03-09-2022</span></p>
                            </div>
                            <div class="col-md-6">
                                <p>Dishant Thakur</p>
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