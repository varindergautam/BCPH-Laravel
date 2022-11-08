@extends('layouts.front_layout')

@section('title')
Identity Card
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="get" action="{{ route('printPage') }}" enctype="mutlipart/form-data" id="step1-form">
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

                        <div class="row">
                             <div class="col ">
                                <div class=" margin_top_33">
                                    <a href="{{ route('enrolmentAsAdvocate') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
                                </div>
                            </div>
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