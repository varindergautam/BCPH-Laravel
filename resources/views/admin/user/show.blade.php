@extends('layouts.admin_layout')

@section('title', 'User Details')

@section('content')

    <div class="content-header">

    </div>

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                @include('validation_message.validation_message')

                <div class="col-sm-12">

                    <div class="card bg-white user-detail-wrap">

                        <div class="card-header  bg-white">

                            <h4 class="float-left">User Detail </h4>

                        </div>

                        <div class="card-body account-setting-wrap">

                            <div class="container h-100">

                                <div class="row h-100 justify-content-center align-items-center">

                                    <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td><span id=""></span>{{ $user->applicant_name }} </td>
                                        </tr>
                                        <tr>
                                            <th>Father Name</th>
                                            <td><span id=""></span>{{ $user->father_name }} </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><span id=""></span>{{ $user->email }} </td>
                                        </tr>
                                        <tr>
                                            <th>Phone No.</th>
                                            <td><span id=""></span>{{ $user->mobile_number }} </td>
                                        </tr>
                                        <tr>
                                            <th>Catgory</th>
                                            <td><span id=""></span>{{ $user->fee->category }} </td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td><span id=""></span>{{ $user->city }} </td>
                                        </tr>
                                        <tr>
                                            <th>State</th>
                                            <td><span id=""></span>{{ $user->state }} </td>
                                        </tr>
                                        <tr>
                                            <th>District</th>
                                            <td><span id=""></span>{{ $user->district }} </td>
                                        </tr>
                                        <tr>
                                            <th>Date of Birth</th>
                                            <td><span id=""></span>{{ $user->date_of_birth }} </td>
                                        </tr>
                                        <tr>
                                            <th>Adhaar No.</th>
                                            <td><span id=""></span>{{ $user->adhaarno }} </td>
                                        </tr>
                                        <tr>
                                            <th>Permanent Address</th>
                                            <td><span id=""></span>{{ $user->permanent_address }} </td>
                                        </tr>
                                        <tr>
                                            <th>Correspondence Address</th>
                                            <td><span id=""></span>{{ $user->correspondence_address }} </td>
                                        </tr>
                                    </tbody>
                            </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@stop

@section('scripts')
    <script>
        
    </script>
@stop
