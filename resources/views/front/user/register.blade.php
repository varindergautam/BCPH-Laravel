@extends('layouts.front_layout')

@section('title')
    Registeration Form
@endsection


@section('content')
    <div class="main_padding application_form">
        <div class="container  ">
            <div class="row ">
                <div class="col-md-12">
                    <div class="form_section border p-3 rounded-1">
                        <form method="post" action="" enctype="mutlipart/form-data" id="register-form">
                            @csrf
                            <div class="form_heading">
                                <img src="{{ asset('front/images/logo.png') }}" class="mx-auto d-block mb-2">
                                <h3>Enrolment Registration Form</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="applicant_name">Name of the Applicant</label>
                                    <input type="text" class="form-control" name="applicant_name" id="applicant_name"
                                        placeholder="Enter Name">
                                    <strong id="applicant_name-error" class="error"></strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="father_name">Name of Father's/Husband's </label>
                                    <input type="text" class="form-control" name="father_name" id="father_name"
                                        placeholder="Enter Father/Husband Name">
                                    <strong id="father_name-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="email">E-Mail ID </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Enter Email">
                                    <strong id="email-error" class="error"></strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="numeric-only text-dark" for="mobile_number">Mobile No. </label>
                                    <input type="text" class="form-control number" name="mobile_number"
                                        id="mobile_number" placeholder="Enter Number">
                                    <strong id="mobile_number-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="category">Category (General/BC/SC)</label>
                                    <select class="form-control form-select" name="category" id="category">
                                        <option selected="" disabled="">Select Category</option>
                                        @forelse ($fees as $key => $fee)
                                            <option value="{{ $fee->id }}">{{ $fee->category }}</option>
                                        @empty
                                            <option>No Fee Found</option>
                                        @endforelse
                                    </select>
                                    <strong id="category-error" class="error"></strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="nationality">Nationality</label>
                                    <input class="form-control" name="nationality" id="nationality" value="India" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="country">Country</label>
                                    <input class="form-control" name="nationality" id="country" value="India" readonly>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="state">State </label>
                                    <input type="text" class="form-control" name="state" id="state"
                                        placeholder="Enter state Name">
                                    <strong id="state-error" class="error"></strong>
                                </div>
                            </div>


                            <div class="row ">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="country">City</label>
                                    <input type="text" class="form-control" name="city" id="city"
                                        placeholder="Enter City Name">
                                    <strong id="city-error" class="error"></strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="state">District </label>
                                    <input type="text" class="form-control" name="district" id="district"
                                        placeholder="Enter District Name">
                                    <strong id="district-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="date_of_birth">Date of Birth</label>
                                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                        placeholder="">
                                    <strong id="date_of_birth-error" class="error"></strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="adhaarno">Adhaar No. </label>
                                    <input type="text" class="form-control" name="adhaarno" id="adhaarno"
                                        placeholder="Enter Adhaar No.">
                                    <strong id="adhaarno-error" class="error"></strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="permanent_address">Permanent Address</label>
                                    <textarea class="form-control" name="permanent_address" id="permanent_address"
                                        placeholder="Enter Permanent Address"></textarea>
                                    <strong id="permanent_address-error" class="error"></strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="correspondence_address">Correspondence Address</label>
                                    <textarea class="form-control" name="correspondence_address" id="correspondence_address"
                                        placeholder="Enter Correspondence Address"></textarea>
                                    <strong id="correspondence_address-error" class="error"></strong>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="permanent_address">Upload Profile Pic</label>
                                    <input type="file" name="profile_pic" id="profile_pic" class="form-control image">
                                    <img src="" id="profile_img" class="profile_img" style="display: none; width : 100px; margin-top : 5px;">
                                    <strong id="profile_pic-error" class="error"></strong>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label class="text-dark" for="correspondence_address">Upload Sign</label>
                                    <input type="file" name="sign" id="sign" class="form-control image">
                                    <img src="" id="sign_img" class="sign_img" style="display: none; width : 100px; margin-top : 5px;">
                                    <strong id="sign-error" class="error"></strong>
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class="col ">
                                    <div class=" margin_top_33">
                                        <a href="{{ url('login') }}" name=""
                                            class="custom_btn previous_btn_padding">Login</a>
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="submit_btn">
                                        <input type="submit" name="" value="Register" class="float-end">
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
        jQuery(document).ready(function() {
            $('form').on('submit', function(e) {
                e.preventDefault();

                var url = baseUrl + '/storeRegister';
                var method = $(this).attr('method');
                var formData = new FormData(this);

                postAjax(url, method, formData)
            });
        });

        function readProfileURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile_img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        jQuery("#profile_pic").change(function () {
            $('#profile_img').show();
            readProfileURL(this);
        });


        function readSignURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#sign_img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        jQuery("#sign").change(function () {
            $('#sign_img').show();
            readSignURL(this);
        });
    </script>
@endsection
