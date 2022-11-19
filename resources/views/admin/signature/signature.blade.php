@extends('layouts.admin_layout')

@section('title')
    Signature | Stamp
@endsection

@section('content')
    @php
        $path = asset('images/signatures/');
        $bcph_stamp = '';
        $hony_secretary = '';
        $prepared_by = '';
        $background_logo = '';

        if(@$signature) {
            $bcph_stamp = "<img src=".$path . '/' . $signature->bcph_stamp. " width='100px'>";
            $hony_secretary = "<img src=".$path . '/' . $signature->hony_secretary. " width='100px'>";
            $prepared_by = "<img src=".$path . '/' . $signature->prepared_by. " width='100px'>";
            $background_logo = "<img src=".$path . '/' . $signature->background_logo. " width='100px'>";
        }
    @endphp
    <div class="content-header">
    </div>

    <section class="content ">
        <div class="container-fluid">
            <div class="row">

                @include('validation_message.validation_message')

                <div class="col-sm-12">

                    <div class="card bg-white user-detail-wrap">

                        <div class="card-header  bg-white">

                            <h4 class="my-2">Signature | Stamp</h4>

                        </div>

                        <div class="card-body account-setting-wrap">

                            <div class="col-12">

                                <div class="row">

                                    <div class="container h-100">

                                        <div class="row h-100 justify-content-center align-items-center">

                                            @if(@$signature)
                                                <form class="" action="{{ route('admin.signature.update') }}"
                                                method="post" enctype="multipart/form-data">
                                                <input type="hidden" value="{{ isset($signature) ? $signature->id : 1 }}"
                                                    name="id">
                                            @else
                                                <form class="" action="{{ route('admin.signature.store') }}"
                                            method="post" enctype="multipart/form-data">
                                            @endif

                                                @csrf
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label>BCPH Stamp</label>
                                                        <input type="file" class="form-control" placeholder=""
                                                            name="bcph_stamp">
                                                        {!! $bcph_stamp !!}
                                                        <span class="error">{{ $errors->first('bcph_stamp') }}</span>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label>Hony Secretary</label>
                                                        <input type="file" class="form-control" placeholder=""
                                                            name="hony_secretary">
                                                            {!! $hony_secretary !!}
                                                        <span class="error">{{ $errors->first('hony_secretary') }}</span>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label>Card prepared by</label>
                                                        <input type="file" class="form-control" placeholder=""
                                                            name="prepared_by">
                                                            {!! $prepared_by !!}
                                                        <span class="error">{{ $errors->first('prepared_by') }}</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label>Background Logo</label>
                                                        <input type="file" class="form-control" placeholder=""
                                                            name="background_logo">
                                                            {!! $background_logo !!}
                                                        <span class="error">{{ $errors->first('background_logo') }}</span>
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
