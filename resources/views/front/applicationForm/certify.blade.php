@extends('layouts.front_layout')

@section('title')
Certify Form
@endsection

@section('content')
<div class="main_padding application_form certify" id="printableArea">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="" enctype="mutlipart/form-data" id="step1-form">
                        @csrf
                        <div class="form_heading">
                            <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-dark">I hereby certify that Shri/Miss <strong>{{ auth::user()->applicant_name }}</strong> Son/daughter/wife 
                                    of  Shri <strong>{{ auth::user()->father_name }}</strong> has been known to me personally for about <input type="text" name="years" id="years" placeholder="Enter year"> <strong id="years-error" class="error"></strong> years OR has been introduced to me by shri <input type="text" name="advocate_name" id="advocate_name" placeholder="Enter advocate name"> <strong id="advocate_name-error" class="error"></strong> Advocate, who is personally known to me.
                                    
                                </p>
                                <p class="text-dark">I believe him/here to be a person of good character and conduct and fit to be admitted as on Advocate on the roll of the Bar Council of Punjab & Haryana.</p>
                                <p class="text-dark">I hereby also certify that I have ten year's standing at the Bar, as an Advocate, on this date. Dated the <input type="text" name="date" id="date" placeholder="Enter"> <strong id="date-error" class="error"></strong>  day of <input type="text" name="day" id="day" placeholder="Enter"> <strong id="day-error" class="error"></strong> 201

                                </p>

                                <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                                <p class="text-dark">{{ auth::user()->applicant_name }}</p>
                                <p class="text-dark">{{ auth()->user()->permanent_address }}</p>
                            </div>

                            <div class="col-md-12">
                                <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/             / Bar<br> Council of Pb. & Hry.</p>
                            </div>



                            <div class="horizontal_line mt-3 mb-3"></div>

                            <div class="form_heading">
                                <h3>The Bar Council of Punjab & Haryana Chandigarh</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-dark">I hereby certify that Shri/Miss <strong>{{ auth::user()->applicant_name }}</strong> Son/daughter/wife 
                                        of Shri <strong>{{ auth::user()->father_name }}</strong> has been known to me personally for about<input type="text" name="years_2" id="years_2" placeholder="Enter year"> <strong id="years_2-error" class="error"></strong> years OR has been introduced to me by shri <input type="text" name="advocate_name_2" id="advocate_name_2" placeholder="Enter advocate name"> <strong id="advocate_name_2-error" class="error"></strong> Advocate, who is personally known to me.
                                        
                                    </p>
                                    <p class="text-dark">I believe him/here to be a person of good character and conduct and fit to be admitted as on Advocate on the roll of the Bar Council of Punjab & Haryana.</p>
                                    <p class="text-dark">I hereby also certify that I have ten year's standing at the Bar, as an Advocate, on this date. Dated the <input type="text" name="date_2" id="date_2" placeholder="Enter"> <strong id="date_2-error" class="error"></strong>  day of  <input type="text" name="day_2" id="day_2" placeholder="Enter"> <strong id="day_2-error" class="error"></strong>  202

                                    </p>

                                    <p class="text-dark"><strong>Name & Address of Advocate:</strong></p>
                                    <p class="text-dark">{{ auth::user()->applicant_name }}</p>
                                    <p class="text-dark">{{ auth()->user()->permanent_address }}</p>
                                </div>

                                <div class="col-md-12">
                                    <p class="text-dark float-end">Signature of the Advocate No.<br> On the Roll P/             / Bar<br> Council of Pb. & Hry.</p>
                                </div>

                            </div>

                            <div class="row">
                                 <div class="col mt-5 mb-3">
                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="custom_btn print_btn print">Print</a>
                                    </div>
                            </div>
                            <div class="row">
                                 <div class="col ">
                                    <div class=" margin_top_33">
                                        <a href="{{ route('affidavitForm') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
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

@section('script')
<script>
    jQuery(document).ready(function(){
        $('form').on('submit', function (e) {
            e.preventDefault();
            
            var url = baseUrl+'/saveCertifyForm';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });
    });

    $('.print').click(function(){

    var originalContent = $('body').html();
    var printArea = $('#printableArea').html();

    $('body').html(printArea);
    window.print();
    $('body').html(originalContent);
    });
</script>
@endsection