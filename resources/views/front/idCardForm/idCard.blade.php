@extends('layouts.front_layout')

@section('title')
    IDCard Form
@endsection

@section('content')
    {{--  remove extra class application_form --}}

    <div class="main_padding mb-3 application_form">
        <div class="container">
            <div class="row ">

                <div class="col-md-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <div class="form_section border p-3 rounded-1">
                        <form method="post" enctype="multipart/form-data" action="{{ route('id_card.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('front/images/logo.png') }}" width="120px" height="120px">
                                </div>
                                <div class="col-md-9 me-">
                                    <p class="spacing text-center"><ins>Application for issue of Duplicate/Renewal Identity/
                                            Card</ins></p>
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
                                <h3 class="text-center"><ins>Apply for Identity Card</ins></h3>
                            </div>

                            <div class="row mt-5">
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
                                    <label class="text-dark" for="member_association">Are you a Member of any Bar
                                        Association
                                        if so, give its name</label>
                                    <input type="text" class="form-control" name="member_association"
                                        id="member_association" placeholder="Enter name"
                                        value="{{ old('member_association') }}">
                                    <strong class="error">{{ $errors->first('member_association') }}</strong>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="enrolment_number">Enrolment No.</label>
                                    <input class="form-control" name="enrolment_number" id="enrolment_number"
                                        placeholder="Enter Enrolment No." value="{{ old('enrolment_number') }}">
                                    <strong class="error">{{ $errors->first('enrolment_number') }}</strong>
                                </div>

                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="enrolment_year">Enrolment year</label>
                                    <input class="form-control" name="enrolment_year" id="enrolment_year"
                                        placeholder="Enter Enrolment year" value="{{ old('enrolment_year') }}">
                                    <strong class="error">{{ $errors->first('enrolment_year') }}</strong>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="enrolment_date">Enter Enrolment Date</label>
                                    <input type="date" class="form-control" name="enrolment_date" id="enrolment_date"
                                        placeholder="" value="{{ old('enrolment_date') }}">
                                    <strong class="error">{{ $errors->first('enrolment_date') }}</strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="identity_card_no">Identity Card No.</label>
                                    <input type="text" class="form-control" name="identity_card_no"
                                        id="identity_card_no" placeholder="Enter Identity Card No"
                                        value="{{ old('identity_card_no') }}">
                                    <strong class="error">{{ $errors->first('identity_card_no') }}</strong>
                                </div>
                            </div>


                            <div class="row ">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="issue_date">Date of Issue</label>
                                    <input type="date" class="form-control" name="issue_date" id="issue_date"
                                        placeholder="" value="{{ old('issue_date') }}">
                                    <strong class="error">{{ $errors->first('issue_date') }}</strong>

                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="phone_no">Phone No. </label>
                                    <input type="text" class="form-control" name="phone_no" id="phone_no"
                                        placeholder="Enter Phone No." value="{{ old('phone_no') }}">
                                    <strong class="error">{{ $errors->first('phone_no') }}</strong>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="mobile_no">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile_no" id="mobile_no"
                                        placeholder="Enter Mobile No." value="{{ old('mobile_no') }}">
                                    <strong class="error">{{ $errors->first('mobile_no') }}</strong>

                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="email_address">Email Address</label>
                                    <input type="text" class="form-control" name="email_address" id="email_address"
                                        placeholder="Enter Email Address" value="{{ old('email_address') }}">
                                    <strong class="error">{{ $errors->first('email_address') }}</strong>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12  mb-3">
                                    <label class="text-dark" for="practice_place">Place of Practice</label>
                                    <input type="text" class="form-control" name="practice_place" id="practice_place"
                                        placeholder="Enter Place of Practice" value="{{ old('practice_place') }}">
                                    <strong class="error">{{ $errors->first('practice_place') }}</strong>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="profile_pic">Upload passport size pic</label>
                                    <input type="file" name="profile_pic" id="profile_pic"
                                        class="form-control image">
                                    <strong class="error">{{ $errors->first('profile_pic') }}</strong>
                                    {{-- <img src="" id="profile_img" class="profile_img"
                                            style="display: none; width : 100px; margi n-top : 5px;"> --}}
                                    <strong id="profile_pic-error" class="error"></strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="sign">Upload Sign</label>
                                    <input type="file" name="sign" id="sign" class="form-control image">
                                    <strong class="error">{{ $errors->first('sign') }}</strong>
                                    {{-- <img src="" id="sign_img" class="sign_img"
                                            style="display: none; width : 100px; margin-top : 5px;"> --}}
                                    <strong id="sign-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-4" style="font-size: 18px;">
                                    <div class="form-check">
                                        <input type="checkbox" name="selection" class="form-check-input" id="checked">
                                        <label for="checked">I certify that the informations furnished by me, as given
                                            above are correct
                                            and true to
                                            my knowledge and nothing has been concealed therein.
                                        </label>
                                        <strong class="error"
                                            style="font-size: 13px;">{{ $errors->first('selection') }}</strong>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
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
@endsection
