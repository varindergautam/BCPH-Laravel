@extends('layouts.front_layout')

@section('title')
Login Form
@endsection

@section('content')
<div class="main_padding registeration_main_section">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="" enctype="mutlipart/form-data" id="registeration-form">
                        @csrf
                        <div class="form_heading">
                            <img src="{{ asset('front/images/logo.png') }}" class="mx-auto d-block mb-2">
                            <h3>Login Now</h3>
                        </div>
                        <div class="mb-3 mt-3">
                            <h4 for="email" class="form-label w-100">Email</h4>
                            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
                            <strong id="email-error" class="error"></strong>
                        </div>
                        
                        <div class="mb-3">
                            <h4 for="password" class="form-label w-100">Password</h4>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" id="password">
                            <strong id="password-error" class="error"></strong>
                        </div>

                        <div class="row">
                        <div class="col ">
                            <div class=" margin_top_33 mt-0">
                                <input type="submit" value="Login" class=" custom_btn previous_btn_padding">
                                <!-- <span class=" fw-bold text-dark">&nbsp;&nbsp;&nbsp; OR</span> -->
                            </div>
                        </div>
                        <div class="col ">
                            <div class="submit_btn margin_top_0">
                                <a href="{{ url('/') }}" name="" class="custom_btn previous_btn_padding float-end margin_top_0">Register</a>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                                <a href="{{ route('forgotPassword') }}" class="text-dark fw-bold">Forgot Password</a>
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
            
            var url = baseUrl+'/loginUser';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });
    });
</script>
@endsection