@extends('layouts.front_layout')

@section('title')
Payment Success
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="get" action="{{ route('declarationForm') }}" enctype="mutlipart/form-data" id="step1-form">
                        @csrf
                        <div class="form_heading">
                            <h3>Payment Confirmation</h3>
                        </div>

                        <div class="row text-center1 text-dark">
                            <ul style="width: auto1; margin: 0 auto; list-style-type: none" >
                                <li>
                                    <p><label>Rs. <span
                                                id="basic_fees">{{ auth()->user()->fee->basic_fees }}</span>/-</label> basic fees
                                    </p>
                                </li>
                                <li>
                                    <p><label>Rs. <span
                                                id="bar_council_fees">{{ auth()->user()->fee->bar_council_fees }}</span>/-</label> bar council fees
                                    </p>
                                </li>
                                <li>
                                    <p><label>Rs. <span
                                                id="building_fees">{{ auth()->user()->fee->building_fees }}</span>/-</label> building fees
                                    </p>
                                </li>
                                <li>
                                    <p><label>Rs. <span
                                                id="advocate_welfare_fees">{{ auth()->user()->fee->advocate_welfare_fees }}</span>/-</label> advocate welfare fees
                                    </p>
                                </li>
                                <li>
                                    <p><label>Rs. <span
                                                id="benevolent_fees">{{ auth()->user()->fee->benevolent_fees }}</span>/-</label> benevolent fees
                                    </p>
                                </li>
                                @if(@$payment_data->tatkaal_fee)
                                <li>
                                    <p><label>Rs. <span
                                                id="benevolent_fees">{{ $payment_data->tatkaal_fee }}</span>/-</label> tatkaal fees
                                    </p>
                                </li>
                                @endif
                            </ul>
                            <div class="col-md-12 mb-2">Your total payment <strong>Rs. {{ $payment_data->total_pay }}</strong> successfully done.</div>
                        </div>


                        <div class="row">
                           <div class="col ">
                              <div class=" margin_top_33">
                                <a href="{{ route('payment') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
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
@endsection