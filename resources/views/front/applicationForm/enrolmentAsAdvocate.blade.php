@extends('layouts.front_layout')

@section('title')
Enrolment As Advocate Form
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="get" action="{{ route('identityCard') }}" enctype="mutlipart/form-data" id="step1-form">
                        <div class="form_heading">
                            <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                        </div>

                        <div class="text-dark">
                            <p>
                                I, <strong>{{ auth::user()->applicant_name }}</strong> son/daughter/wife of Shri  <strong>{{ auth::user()->father_name }}</strong> resident of  <strong>{{ auth::user()->state }}</strong> Distt. <strong>{{ auth::user()->city }}</strong> do hereby solemnly affirm and declare as under :-
                            </p>

                            <ol type="a">
                                <li>
                                    <p> I shall uphold the constitution and the laws.</p>
                                </li>

                                <li>
                                    <p> I shall faithfully discharge every obligations cast on me by the Advocates Act, 1961 and the rules framed there under.</p>
                                </li>
                            </ol>

                            <table width="100%">
                                <tr>
                                    <td>
                                        <p><span><span class="fw-bold">Place</span> : Chandigrah</span></p>
                                        <p><span><span class="fw-bold">Dated</span> : </span></p>
                                    </td>
                                    <td>
                                        <p>{{ auth::user()->applicant_name }}</p>
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
                                    <img src="{{ asset('images/profile_signs') .'/' . auth()->user()->profile_pic}}" width="100">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <p>This  is  to  certify  that  Shri/Miss <strong>{{ auth::user()->applicant_name }}</strong> son/daughter/wife of Shri <strong>{{ auth::user()->father_name }}</strong> of District <strong>{{ auth::user()->state }} </strong> has this day been admitted to be an Advocate of the Bar Council of Punjab & Haryana and that his/her name has been entered in the Roll of Advocates maintained by this Council under Section 17 of the Advocate Act, 1961 (Act No. 25 of the 1961).</p>

                                <p>Given under my hand and the seal of the Bar Council, this .......... for office............... day of ............ for office.............. 201.....</p>

                                
                            </div>

                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <p  class="fw-bold mt-2"> Chairman <br>
                                        Bar Council of Punjab & Haryana <br>
                                        Chandigarh
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                 <div class="col ">
                                    <div class=" margin_top_33">
                                        <a href="{{ route('enrolmentCommittteForm') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
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