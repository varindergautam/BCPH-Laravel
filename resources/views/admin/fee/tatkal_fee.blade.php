@extends('layouts.admin_layout')

@section('title')
    {{ isset($fee) ? 'Edit' : 'Create' }} Tatkaal Fee
@endsection

@section('content')
    <div class="content-header">
    </div>

    <section class="content ">
        <div class="container-fluid">
            <div class="row">

                {{-- @include('validation_message.validation_message') --}}

                <div class="col-sm-12">

                    <div class="card bg-white user-detail-wrap">

                        <div class="card-header  bg-white">

                            <h4 class="my-2">{{ isset($fee) ? 'Edit' : 'Create' }} 
                            </h4>

                        </div>

                        <div class="card-body account-setting-wrap">

                            <div class="col-12">

                                <div class="row">

                                    <div class="container h-100">

                                        <div class="row h-100 justify-content-center align-items-center">

                                    
                                                
                                                    <form class="" action="{{ route('admin.fee.tatkaalFeeStore') }}"
                                                        method="post">
                                                        <input type="hidden" value="{{ isset($fee) ? $fee->id : 1 }}" name="id">
                                     
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Enter Tatkaal Fee"
                                                        name="tatkaal_fee"
                                                        value="{{ isset($fee) ? $fee->tatkaal_fees : old('tatkaal_fee') }}">
                                                    <span class="error">{{ $errors->first('tatkaal_fee') }}</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="btn btn-primary" type="submit" style="width:100px">
                                                </div>
                                            </div>
                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
