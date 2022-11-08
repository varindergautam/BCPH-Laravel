@extends('layouts.admin_layout')

@section('title')
    {{ isset($university) ? 'Edit' : 'Create' }} University
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

                            <h4 class="my-2">{{ isset($university) ? 'Edit' : 'Create' }} <span><a
                                        href="{{ route('admin.university.list') }}" class="float-end btn btn-primary">List</a></span>
                            </h4>

                        </div>

                        <div class="card-body account-setting-wrap">

                            <div class="col-12">

                                <div class="row">

                                    <div class="container h-100">

                                        <div class="row h-100 justify-content-center align-items-center">

                                            @if (isset($university))
                                                <form class="" action="{{ route('admin.university.update') }}"
                                                    method="post">
                                                    <input type="hidden" value="{{ $university->id }}" name="id">
                                                @else
                                                    <form class="" action="{{ route('admin.university.store') }}"
                                                        method="post">
                                            @endif
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Enter Name" name="name"
                                                        value="{{ isset($university) ? $university->name : old('name') }}">
                                                    <span class="error">{{ $errors->first('name') }}</span>
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
