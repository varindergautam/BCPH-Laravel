@extends('layouts.front_layout')

@section('title')
Payment
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="{{ route('pay') }}" enctype="mutlipart/form-data" id="application-form">
                        @csrf
                        <div class="form_heading">
                            <h3>Payment</h3>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="text-dark" for="">Mode of payment of enrolment fee and
                                    particulars.</label>
                            </div>
                            <div class="col-md-6 text-dark">
                                <p><label>Rs. <span
                                            id="basic_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->basic_fees : 0 }}</span>/-</label>
                                </p>
                                <p><label>Rs. <span
                                            id="bar_council_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->bar_council_fees : 0 }}</span>/-</label>
                                </p>
                                <p><label>Rs. <span
                                            id="building_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->building_fees : 0 }}</span>/-</label>
                                </p>
                                <p><label>Rs. <span
                                            id="advocate_welfare_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->advocate_welfare_fees : 0 }}</span>/-</label>
                                </p>
                                <p><label>Rs. <span
                                            id="benevolent_fees">{{ isset(auth()->user()->fee) ? auth()->user()->fee->benevolent_fees : 0 }}</span>/-</label>
                                </p>
                                <input type="hidden" name="total_pay" id="total_pay" value="{{ totalFees() }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="text-dark" for=""><span><input type="checkbox" name="tatkaal"
                                            id="tatkaal" class="tatkaal"
                                            {{ @$applicationForm->tatkaal_fees ? 'checked' : '' }}></span>
                                    <span for="tatkaal">Tatkaal</span></label>
                            </div>
                            <div class="col-md-6 text-dark">
                                <input type="hidden" name="tatkaal_fee" class="tatkaal_fee">
                                @php
                                    $tatkaal_display = isset($applicationForm->tatkaal_fees) ? 'display: block' : 'display: none';
                                @endphp
                                <p id="tatkaal_fees" data-tatkaal_fee="{{ isset($tatkaal->tatkaal_fees) ? $tatkaal->tatkaal_fees : 0 }}"
                                    style="{{ $tatkaal_display }}"><label>Rs. {{ isset($tatkaal->tatkaal_fees) ? $tatkaal->tatkaal_fees : 0 }}</label>
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <p class="text-dark">I {{ auth()->user()->applicant_name }} declare that the facts stated
                                above are true to my knowledge and belief.</p>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="text-dark">Date of Completion:</label>
                                <input type="hidden" name="date_of_completion"
                                    value="{{ @$applicationForm->date_of_completion ? @$applicationForm->date_of_completion : date('d-m-Y') }}">
                                <span id="date_of_completion"
                                    class="text-dark">{{ @$applicationForm->date_of_completion ? @$applicationForm->date_of_completion : date('d-m-Y') }}</span>
                            </div>
                            <div class="col-md-6">
                                <label class="text-dark">Signature of the applicant:</label>
                                <span class="text-dark">{{ auth()->user()->applicant_name }}</span>
                            </div>
                        </div>

                        <div class="row">
                            {{-- <div class="col ">
                          <div class=" margin_top_33">
                              <a href="table.html" name="" class="custom_btn previous_btn_padding">Previous</a>
                          </div>
                      </div> --}}
                            <div class="col ">
                                <div class="submit_btn">
                                    @php
                                        $checkPayment = paymentConfirmaton();
                                    @endphp
                                    @if($checkPayment)
                                    <a href="{{ route('paymentDetail', @$applicationForm->paytm_order_id) }}" name="" class="custom_btn previous_btn_padding float-end">Next</a>
                                    @else
                                    <input type="submit" name="" value="Next" class="float-end">

                                    @endif
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
        $('.tatkaal').click(function() {
                var tatkaal_fees = $('#tatkaal_fees').data('tatkaal_fee');
                var total_pay = $('#total_pay').val();

                if ($("#tatkaal").is(':checked')) {
                    $('#tatkaal_fees').show();
                    var grand_total_pay = parseInt(tatkaal_fees) + parseInt(total_pay);
                    $('#total_pay').val(grand_total_pay);
                    $('.tatkaal_fee').val(tatkaal_fees);
                } else {
                    $('#tatkaal_fees').hide();
                    var grand_total_pay = parseInt(total_pay) - parseInt(tatkaal_fees);
                    $('#total_pay').val(grand_total_pay);
                    $('.tatkaal_fee').val(null);
                }
            });
    </script>
@endsection
