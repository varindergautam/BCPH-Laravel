@extends('layouts.front_layout')

@section('title')
    Insurance Form
@endsection

@section('content')
    <div class="main_padding  mb-3">
        <div class="container  ">
            <div class="row ">
                <div class="col-md-12">
                    @if (Session::has('success'))
                        <div class="alert  alert-success">

                            {{-- <button type="button" class="close float-right" data-dismiss="alert" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button> --}}

                            {{ Session::get('success') }}

                        </div>
                    @endif
                    <div class="form_section border p-3 rounded-1">
                        <form method="post"  enctype="multipart/form-data" action="{{ route('insurance.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('front/images/logo.png') }}" width="120px" height="120px">
                                </div>
                                <div class="col-md-9">
                                    <p class="spacing text-center"><ins>Application for Insurance
                                        </ins></p>
                                    <h2 class="spacing text-center">BAR COUNCIL OF PUNJAB & HARYANA</h2>
                                    <p class="spacing text-center">Law Bhawan, Dakshin Marg, Sector 37-A, Chandigarh</p>
                                    <p class="spacing text-center">Law Address: barcouncil37@yahoo.in,
                                        lawbhawan37@gmail.com,
                                        Website: bcph.co.in</p>
                                    <p class="spacing text-center">Phone: 0172-2688519, Mob.: 81950-17269</p>


                                </div>
                            </div>


                            <hr>
                            <div class="form_heading">
                                <h3 class="text-center"><ins>Apply for Insurance</ins></h3>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-12  mb-3">
                                    <label class="text-dark">Select Fund</label>
                                    <select class="form-control form-select" id="" name="fund_type">
                                        <option disabled selected>Select Fund Type</option>
                                        <option value="punjab_adovate_welfare_fund">Punjab Adovates Welfare Fund</option>
                                        <option value="haryana_adovate_welfare_fund">Haryana Adovates Welfare Fund</option>
                                        <option value="chandigarh_adovate_welfare_fund">Chandigarh Adovates Welfare Fund</option>
                                        <option value="benevolent_fund_scheme">Benevolent Fund Scheme</option>
                                    </select>
                                    <strong class="error">{{ $errors->first('applicant_name') }}</strong>

                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="applicant_name">Name of the Applicant</label>
                                    <input type="text" class="form-control" name="applicant_name" id="applicant_name"
                                        placeholder="Enter Applicant Name" value="{{ old('applicant_name') }}">
                                    <strong class="error">{{ $errors->first('applicant_name') }}</strong>

                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="father_name">Name of Father's/Husband's </label>
                                    <input type="text" class="form-control" name="father_name" id="father_name"
                                        placeholder="Enter Father/Husband Name" value="{{ old('father_name') }}">
                                    <strong class="error">{{ $errors->first('father_name') }}</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="address">Resi Address </label>
                                    <input type="res_address" class="form-control" name="address" id="address"
                                        placeholder="Enter Address" value="{{ old('address') }}">
                                        <strong class="error">{{ $errors->first('address') }}</strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="nominee_name">Name of Nominee/Relation</label>
                                    <input type="text" class="form-control" name="nominee_name" id="nominee_name"
                                        placeholder="Enter Nominee name" value="{{ old('nominee_name') }}">
                                        <strong class="error">{{ $errors->first('nominee_name') }}</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="enrolment_no">Enrolment No.</label>
                                    <input class="form-control" name="enrolment_no" id="enrolment_no"
                                        placeholder="Enter Enrolment No." value="{{ old('enrolment_no') }}">
                                    <strong class="error">{{ $errors->first('enrolment_no') }}</strong>
                                </div>

                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="enrolment_year">Enrolment year</label>
                                    <input class="form-control" name="enrolment_year" id="enrolment_year"
                                        placeholder="Enter Enrolment year" value="{{ old('enrolment_year') }}">
                                        <strong class="error">{{ $errors->first('enrolment_year') }}</strong>
                                    
                                </div>


                                <div class="row">
                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="birth_date">Date of Birth</label>
                                        <input type="date" class="form-control" name="birth_date" id="birth_date"
                                            placeholder="" value="{{ old('birth_date') }}">
                                        <strong class="error">{{ $errors->first('birth_date') }}</strong>

                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="age">Age of Applicant</label>
                                        <input type="text" class="form-control" name="age" id="age"
                                            placeholder="Enter Age" value="{{ old('age') }}">
                                            <strong class="error">{{ $errors->first('age') }}</strong>
                                    </div>
                                </div>


                                <div class="row ">
                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="enrolment_date">Enrolment Date</label>
                                        <input type="date" class="form-control" name="enrolment_date" id="enrolment_date"
                                            placeholder="" value="{{ old('enrolment_date') }}">
                                            <strong class="error">{{ $errors->first('enrolment_date') }}</strong>

                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="mobile_no">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobile_no" id="mobile_no"
                                            placeholder="Enter Mobile No." value="{{ old('mobile_no') }}">
                                            <strong class="error">{{ $errors->first('mobile_no') }}</strong>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="email_address">Email Address</label>
                                        <input type="text" class="form-control" name="email_address"
                                            id="email_address" placeholder="Enter Email Address"  value="{{ old('email_address') }}">
                                            <strong class="error">{{ $errors->first('email_address') }}</strong>

                                    </div>

                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="bar_association">Bar Association/Station</label>
                                        <input type="text" class="form-control" name="bar_association"
                                            id="bar_association" placeholder="Enter Bar Association"  value="{{ old('bar_association') }}">
                                            <strong class="error">{{ $errors->first('bar_association') }}</strong>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="profile_pic">Upload passport size
                                            pic</label>
                                        <input type="file" name="profile_pic" id="profile_pic"
                                            class="form-control image">
                                            <strong class="error">{{ $errors->first('profile_pic') }}</strong>
                                        <img src="" id="profile_img" class="profile_img"
                                            style="display: none; width : 100px; margin-top : 5px;">
                                        <strong id="profile_pic-error" class="error"></strong>
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="correspondence_address">Upload Sign</label>
                                        <input type="file" name="sign" id="sign" class="form-control image">
                                        <strong class="error">{{ $errors->first('sign') }}</strong>
                                        <img src="" id="sign_img" class="sign_img"
                                            style="display: none; width : 100px; margin-top : 5px;">
                                        <strong id="sign-error" class="error"></strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="enrolment_certificate">Enrolment Certificate</label>
                                        <input type="file" name="enrolment_certificate" id="enrolment_certificate"
                                            class="form-control image">
                                            <strong class="error">{{ $errors->first('enrolment_certificate') }}</strong>
                                        {{-- <img src="" id="profile_img" class="profile_img"
                                            style="display: none; width : 100px; margin-top : 5px;"> --}}
                                        <strong id="enrolment_certificate-error" class="error"></strong>
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label class="text-dark" for="residence_certificate">Residence Proof</label>
                                        <input type="file" name="residence_certificate" id="residence_certificate" class="form-control image">
                                        <strong class="error">{{ $errors->first('residence_certificate') }}</strong>
                                        <img src="" id="residence_certificate_img" class="residence_certificate_img"
                                            style="display: none; width : 100px; margin-top : 5px;">
                                        <strong id="residence_certificate-error" class="error"></strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mt-4" style="font-size: 18px;" id="">
                                        <div class="form-check">
                                            <input type="checkbox" name="selection" class="form-check-input" id="certify">
                                            <label class="form-check-label" for="certify">I certify that the informations furnished by me, as given above are
                                                correct and true to
                                                my knowledge and nothing has been concealed therein.
                                            </label>
                                            <strong class="error" style="font-size: 13px;">{{ $errors->first('selection') }}</strong>
                                        </div>
                                    </div>
                                </div>


                                <div class="row ">
                                    <div class="col mt-5 me-5 submit_btn">
                                        <input type="submit" name="" value="Submit" class="btn_style float-end">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
