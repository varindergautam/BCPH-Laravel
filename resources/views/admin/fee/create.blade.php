@extends('layouts.admin_layout')

@section('title')
    {{ isset($fee) ? 'Edit' : 'Create' }} Fee
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

                            <h4 class="my-2">{{ isset($fee) ? 'Edit' : 'Create' }} <span><a
                                        href="{{ route('admin.fee.list') }}" class="float-end btn btn-primary">List</a></span>
                            </h4>

                        </div>

                        <div class="card-body account-setting-wrap">

                            <div class="col-12">

                                <div class="row">

                                    <div class="container h-100">

                                        <div class="row h-100 justify-content-center align-items-center">

                                            @if (isset($fee))
                                                <form class="" action="{{ route('admin.fee.update') }}"
                                                    method="post">
                                                    <input type="hidden" value="{{ $fee->id }}" name="id">
                                                @else
                                                    <form class="" action="{{ route('admin.fee.store') }}"
                                                        method="post">
                                            @endif
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Enter Category" name="category"
                                                        value="{{ isset($fee) ? $fee->category : old('category') }}">
                                                    <span class="error">{{ $errors->first('category') }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Enter Basic Fees"
                                                        name="basic_fees"
                                                        value="{{ isset($fee) ? $fee->basic_fees : old('basic_fees') }}">
                                                    <span class="error">{{ $errors->first('basic_fees') }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Enter Bar Council Fees"
                                                        name="bar_council_fees"
                                                        value="{{ isset($fee) ? $fee->bar_council_fees : old('bar_council_fees') }}">
                                                    <span class="error">{{ $errors->first('bar_council_fees') }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Enter Building Fees"
                                                        name="building_fees"
                                                        value="{{ isset($fee) ? $fee->building_fees : old('building_fees') }}">
                                                    <span class="error">{{ $errors->first('building_fees') }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Enter Advocate Welfare Fees"
                                                        name="advocate_welfare_fees"
                                                        value="{{ isset($fee) ? $fee->advocate_welfare_fees : old('advocate_welfare_fees') }}">
                                                    <span
                                                        class="error">{{ $errors->first('advocate_welfare_fees') }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Enter Benevolent"
                                                        name="benevolent_fees"
                                                        value="{{ isset($fee) ? $fee->benevolent_fees : old('benevolent_fees') }}">
                                                    <span class="error">{{ $errors->first('benevolent_fees') }}</span>
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
