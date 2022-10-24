@extends('layouts.front_layout')

@section('title')
    Enrolment Committee Form
@endsection

@section('style')
    <style type="text/css" media="print">
        /* @page {
            size: auto A4 portrait;
        } */

        @media print {
            footer {
                display: none;
                position: fixed;
                bottom: 0;
            }

            header {
                display: none;
                position: fixed;
                top: 0;
            }
        }
    </style>
@endsection

@section('content')
    <div class="main_padding application_form" id="printableArea">
        <div class="container  ">
            <div class="row ">
                <div class="col-md-12">
                    <div class="form_section border p-3 rounded-1">
                        <form method="get" action="{{ route('enrolmentAsAdvocate') }}" enctype="mutlipart/form-data"
                            id="step1-form">
                            <div class="form_heading">
                                <h3>Order of the Enrollment Committee</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-dark">The applicant Shri/Miss
                                        <strong>{{ auth::user()->applicant_name }}</strong> Son/daughter/wife of Shri
                                        <strong>{{ auth::user()->father_name }}</strong> be enrolled as an Advocate under
                                        the provisions of the Advocates Act, 1961.</p>

                                    <p class="text-center mb-3 text-dark">OR</p>

                                    <p class="text-dark">The applicant Shri/Miss
                                        <strong>{{ auth::user()->applicant_name }}</strong> Son/daughter/wife of Shri
                                        <strong>{{ auth::user()->father_name }}</strong> not entitled to be enrolled as an
                                        Advocate under the provisions of the Advocates Act, 1961, for the reasons given
                                        separately.</p>

                                    <div class="mt-4 mb-5">
                                        <table width="100%">
                                            <tr class="text-dark">
                                                <td><strong>CHAIRMAN</strong></td>
                                                <td><strong>Member</strong></td>
                                                <td><strong>Member</strong></td>
                                            </tr>
                                        </table>
                                        <p class="text-dark"><strong>ENROLMENT COMMITTEE</strong></p>

                                    </div>

                                    <div class="date">
                                        <label class="text-dark">Date :</label>
                                        <span class="text-dark"><strong></strong></span>
                                    </div>

                                </div>


                                <div class="horizontal_line mt-3 mb-3"></div>

                                <div class="form_heading">
                                    <h3>Identification Before The Secretary of Bar Council</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-dark">I know Shri <strong>{{ auth::user()->applicant_name }}</strong>
                                            personally and identify him/her.</p>
                                        <div class="date">
                                            <label class="text-dark">Date :</label>
                                            <span class="text-dark"><strong></strong></span>
                                        </div>
                                        <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                                        <p class="text-dark"><strong>{{ auth::user()->applicant_name }}</strong></p>
                                        <p class="text-dark"><strong>{{ auth()->user()->permanent_address }}</strong></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/ /
                                            Bar<br> Council of Pb. & Hry.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-5 mb-4">
                                        <div class="mt-3">
                                            <a href="javascript:void(0)" class="custom_btn print_btn print">Print</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col ">
                                        <div class=" margin_top_33">
                                            <a href="{{ route('certifyForm') }}" name=""
                                                class="custom_btn previous_btn_padding">Previous</a>
                                        </div>
                                    </div>
                                    <div class="col ">
                                        <div class="submit_btn">
                                            <input type="submit" name="" value="Next" class="float-end">
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script>
        $('.print').click(function() {

            var originalContent = $('body').html();
            var printArea = $('#printableArea').html();

            $('body').html(printArea);
            window.print();
            $('body').html(originalContent);
        });
    </script>
@endsection
