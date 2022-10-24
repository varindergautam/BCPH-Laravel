@extends('layouts.front_layout')

@section('title')
Print Data
@endsection

@section('content')

@section('style')
<style>
    @media print
    {    
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
</style>
@endsection

<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <div class="form_heading">
                        <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-dark">I hereby certify that Shri/Miss <strong>{{ auth::user()->applicant_name }}</strong> Son/daughter/wife 
                                of  Shri <strong>{{ auth::user()->father_name }}</strong> has been known to me personally for about {{ @$certify_form->years }} years OR has been introduced to me by shri {{ @$certify_form->advocate_name }} Advocate, who is personally known to me.
                                
                            </p>
                            <p class="text-dark">I believe him/here to be a person of good character and conduct and fit to be admitted as on Advocate on the roll of the Bar Council of Punjab & Haryana.</p>
                            <p class="text-dark">I hereby also certify that I have ten year's standing at the Bar, as an Advocate, on this date. Dated the {{ @$certify_form->date }}  day of {{ @$certify_form->day }} 201

                            </p>

                            <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                            <p class="text-dark">{{ auth::user()->applicant_name }}</p>
                            <p class="text-dark">{{ auth()->user()->permanent_address }}</p>
                        </div>

                        <div class="col-md-12">
                            <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/             / Bar<br> Council of Pb. & Hry.</p>
                        </div>

                        <div class="horizontal_line mt-3 mb-3"></div>

                        <div class="form_heading">
                            <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-dark">I hereby certify that Shri/Miss <strong>{{ auth::user()->applicant_name }}</strong> Son/daughter/wife 
                                    of Shri <strong>{{ auth::user()->father_name }}</strong> has been known to me personally for about {{ @$certify_form->years_2 }} years OR has been introduced to me by shri {{ @$certify_form->advocate_name_2 }} Advocate, who is personally known to me.
                                    
                                </p>
                                <p class="text-dark">I believe him/here to be a person of good character and conduct and fit to be admitted as on Advocate on the roll of the Bar Council of Punjab & Haryana.</p>
                                <p class="text-dark">I hereby also certify that I have ten year's standing at the Bar, as an Advocate, on this date. Dated the {{ @$certify_form->date_2 }}  day of {{ @$certify_form->day_2 }} 202

                                </p>

                                <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                                <p class="text-dark">{{ auth::user()->applicant_name }}</p>
                                <p class="text-dark">{{ auth()->user()->permanent_address }}</p>
                            </div>

                            <div class="col-md-12">
                                <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/             / Bar<br> Council of Pb. & Hry.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="form_section border p-3 rounded-1">
                    <div class="form_heading">
                        <h3>Order of the Enrollment Committee</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-dark">The   applicant   Shri/Miss <strong>{{ auth::user()->applicant_name }}</strong> Son/daughter/wife  of  Shri <strong>{{ auth::user()->father_name }}</strong> be enrolled as an Advocate under the provisions of the Advocates Act, 1961.</p>

                            <p class="text-center mb-3 text-dark">OR</p>

                            <p class="text-dark">The   applicant   Shri/Miss <strong>{{ auth::user()->applicant_name }}</strong> Son/daughter/wife of Shri <strong>{{ auth::user()->father_name }}</strong> not entitled to be enrolled as an Advocate under the provisions of the Advocates Act, 1961, for the reasons given separately.</p>

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
                                <p class="text-dark">I know Shri <strong>{{ auth::user()->applicant_name }}</strong> personally and identify him/her.</p>
                                <div class="date">
                                    <label class="text-dark">Date :</label>
                                    <span class="text-dark"><strong></strong></span>
                                </div>
                                <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                                <p class="text-dark"><strong>{{ auth::user()->applicant_name }}</strong></p>
                                <p class="text-dark"><strong>{{ auth()->user()->permanent_address }}</strong></p>
                            </div>

                            <div class="col-md-12">
                                <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/             / Bar<br> Council of Pb. & Hry.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="form_section border p-3 rounded-1">
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
                                    <img src="{{ asset('front/images/dummy-image.jpg')}}" width="100">
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
                        </div>
                </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="form_section border p-3 rounded-1">
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
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Secretary, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bar Council of Punjab & Haryana <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chandigarh</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('front/images/dummy-image.jpg')}}" class="" width="100">
                            </div>
                            <div class="col-md-12">
                                <p class="text-dark">Dear Sir,</p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kindly issue me an identity Card along with my Enrolment Certificate as an advocate of your Bar Council. Three Copies of my stamp size (3cm x 2.5 cm) Photograph duly attested duly attested by a Member Bar Council/Magistrate 1st Class are enclosed herewith, along with requisite fee of  Rs.100/- (Rupees One Hundred only).</p>
                                <p class="mt-4 text-dark">My Particulars are as under</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of the applicant : <span class="fw-bold">{{ auth::user()->applicant_name }}</span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Law Degree : (In Block Letters) <span class="fw-bold"></span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father's/Husband's Name:- <span class="fw-bold">{{ Auth::user()->father_name }}</span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth and Age:- <span class="fw-bold">{{ auth::user()->date_of_birth }} and {{ auth::user()->age() }}</span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Permanent Address:- <span class="fw-bold">{{ auth()->user()->permanent_address }}</span></p>
                                <p class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile No:- <span class="fw-bold">{{ Auth::user()->mobile_number }}</span> </p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col"><p class="text-dark"><strong>Dishant Thakur</strong></p><p class="text-dark">Signature of Applicant</p></div>
                            <div class="col"><p class="text-dark"><strong>For Office</strong></p><p class="text-dark">Hony. Secretary

                            </p></div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row d-print-none">
            <div class="col mt-5 mb-3">
                <div class="mt-3">
                    <a href="javascript:void(0)" class="custom_btn print_btn print">Print</a>
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <div class=" margin_top_33">
                        <a href="{{ route('identityCard') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
                    </div>
                </div>
                <div class="col ">
                    <div class="submit_btn text-end">
                        {{-- <input type="submit" name="" value="Next" class="float-end"> --}}
                        <a href="{{ route('documentUpload') }}" name="" class="custom_btn previous_btn_padding">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    jQuery(document).ready(function(){
        $('.print').click(function(){
            // var originalContent = $('body').html();
            var printArea = $('#printableArea').html();

            $('body').html(printArea);
            window.print(printArea);
            // $('body').html(originalContent);
        });

        $('form').on('submit', function (e) {
            e.preventDefault();
            
            var url = baseUrl+'/saveDocumentUpload';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });
    });
</script>
@endsection