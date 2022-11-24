
@extends('layouts.front_layout')

@section('title')
    Regular Form
@endsection

@section('content')


<div class="main_padding application_form">
    <div class="container">
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
                    <form method="post" action="{{ route('regular.store') }}" enctype="multipart/form-data" id="register-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{asset('front/images/logo.png')}}" width="120px" height="120px">
                            </div>
                            <div class="col-md-9 me-">
                                <p class="spacing text-center"><ins>Application for issue of Regular Enrolment Certificate
                                </ins></p>
                                                            <h2 class="spacing text-center">BAR COUNCIL OF PUNJAB & HARYANA</h2>
                                                            <p class="spacing text-center">Law Bhawan, Dakshin Marg, Sector 37-A, Chandigarh</p>
                                                            <p class="spacing text-center">Law Address: barcouncil37@yahoo.in, lawbhawan37@gmail.com,
                                                                Website: bcph.co.in</p>
                                                            <p class="spacing text-center">Phone: 0172-2688519, Mob.: 81950-17269</p>


                            </div>
                        </div>
                        <hr class="horizontal_line">


                        <div class="form_heading">
                            <h3 class="text-center"><ins>Apply for Regular Enrolment Certificate</ins></h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6  mb-3">
                                <label class="text-dark" for="applicant_name">Name of the Applicant</label>
                                <input type="text" class="form-control" name="applicant_name" id="applicant_name"
                                    placeholder="Enter Applicant Name" value="{{ old('applicant_name')}}">
                                    <strong class="error">{{$errors->first('applicant_name')}}</strong>

                            </div>
                            <div class="col-md-6  mb-3">
                                <label class="text-dark" for="father_name">Name of Father's/Husband's </label>
                                <input type="text" class="form-control" name="father_name" id="father_name"
                                    placeholder="Enter Father/Husband Name" value="{{ old('father_name')}}">
                                    <strong class="error">{{$errors->first('father_name')}}</strong>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6  mb-3">
                                <label class="text-dark" for="place_practice">Place of Practice </label>
                                <input type="res_address" class="form-control" name="place_practice" id="place_practice"
                                    placeholder="Enter place of practice" value="{{ old('place_practice')}}">
                                    <strong class="error">{{$errors->first('place_practice')}}</strong>

                            </div>
                            <div class="col-md-6  mb-3">
                                <label class="text-dark" for="mobile_number">Mobile No.</label>
                                <input type="text" class="form-control" name="mobile_number"
                                    id="mobile_number" placeholder="Enter Mobile No." value="{{ old('mobile_number')}}">
                                    <strong class="error">{{$errors->first('mobile_number')}}</strong>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6  mb-3">
                                <label class="text-dark" for="email">Email</label>
                                <input class="form-control" name="email" id="email"
                                    placeholder="Enter email" value="{{ old('email')}}">
                                    <strong class="error">{{$errors->first('email')}}</strong>
                            </div>

                            <div class="col-md-6  mb-3">

                                    <label class="text-dark" for="permanent_address">Upload passport size photo</label>
                                    <input type="file" name="profile_pic" id="profile_pic"
                                        class="form-control image">
                                    <strong class="error">{{$errors->first('profile_pic')}}</strong>

                                    <img src="" id="profile_img" class="profile_img"
                                        style="display: none; width : 100px; margin-top : 5px;">


                            </div>
                        </div>


                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="upload_sign">Upload Sign</label>
                                    <input type="file" name="sign" id="sign" class="form-control image">
                                    <strong class="error">{{$errors->first('sign')}}</strong>
                                    <img src="" id="sign_img" class="sign_img"
                                        style="display: none; width : 100px; margin-top : 5px;">

                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="upload_enrolment">Upload Enrolment Certificate</label>
                                    <input type="file" name="upload_enrolment" id="upload_enrolment" class="form-control image">
                                    <strong class="error">{{$errors->first('upload_enrolment')}}</strong>
                                </div>
                            </div>


                            <div class="row ">
                                <div class="col-md-6  mb-3">
                                     <label class="text-dark" for="law_degree">LLB Degree</label>
                                    <input type="file" name="law_degree" id="law_degree" class="form-control image">
                                    <strong class="error">{{$errors->first('law_degree')}}</strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="cop_certificate">Upload COP/Certificate of practice</label>
                                    <input type="file" name="cop_certificate" id="cop_certificate" class="form-control image">
                                    <strong class="error">{{$errors->first('cop_certificate')}}</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-4" style="font-size: 18px;">
                                    <div class="form-check">
                                        <input type="checkbox" name="selection" class="form-check-input" id="certify">
                                        <label for="certify">I certify that the informations furnished by me, as given above are correct and true to
                                        my knowledge and nothing has been concealed therein.
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 mt-5 me-5">
                                    <button class="btn_style float-end" type="submit" name="submit_form">Submit</button>


                                </div>
                            </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
