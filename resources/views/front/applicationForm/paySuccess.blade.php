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

                        <div class="row text-center text-dark">
                            <ul style="width: auto; margin: 0 auto;">
                                <li><p>Rs. 9200/-</p></li>
                                <li><p>Rs. 1200/-</p></li>
                                <li><p>Rs. 1000/-</p></li>
                            </ul>
                            <div class="col-md-12 mb-2">Your payment <strong>Rs. {{ $payment_data->total_pay }}</strong> successfully done.</div>
                        </div>


                        <div class="row">
                           <div class="col ">
                              <div class=" margin_top_33">
                                  <a href="{{ route('applicationForm') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
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