@extends('layouts.front_layout')

@section('title')
Change Password
@endsection

@section('content')
<div class="main_padding registeration_main_section">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="" enctype="mutlipart/form-data" id="change-password">
                        @csrf
                        <div class="form_heading">
                            <img src="{{ asset('front/images/logo.png') }}" class="mx-auto d-block mb-2">
                            <h3>Change Password</h3>
                        </div>
                        <div class="mb-3 mt-3">
                            <h4 for="old_password" class="form-label w-100">Old Password</h4>
                            <input type="password" class="form-control" id="old_password" placeholder="Enter old password" name="old_password">
                            <strong id="old_password-error" class="error"></strong>
                        </div>
                        
                        <div class="mb-3">
                            <h4 for="new_password" class="form-label w-100">New Password</h4>
                            <input type="password" name="new_password" class="form-control" placeholder="Enter new password" id="new_password">
                            <strong id="new_password-error" class="error"></strong>
                        </div>

                        <div class="mb-3">
                            <h4 for="confirm_password" class="form-label w-100">Confirm Password</h4>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Enter confirm password" id="confirm_password">
                            <strong id="confirm_password-error" class="error"></strong>
                        </div>

                        <div class="row">
                        <div class="col ">
                            <div class=" margin_top_33 mt-0">
                                <input type="submit" value="Update" class=" custom_btn previous_btn_padding">
                                <!-- <span class=" fw-bold text-dark">&nbsp;&nbsp;&nbsp; OR</span> -->
                            </div>
                        </div>
                        {{-- <div class="col ">
                            <div class="submit_btn margin_top_0">
                                <a href="{{ url('/') }}" name="" class="custom_btn previous_btn_padding float-end margin_top_0">Register</a>
                            </div>
                        </div> --}}
                        <div class="col-md-12 mt-3">
                                {{-- <a href="{{ route('forgotPassword') }}" class="text-dark fw-bold">Forgot Password</a> --}}
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
            
            var url = baseUrl+'/updatePassword';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });
    });
</script>
@endsection