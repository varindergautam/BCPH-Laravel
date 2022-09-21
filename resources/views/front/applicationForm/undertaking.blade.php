@extends('layouts.front_layout')

@section('title')
Undertaking
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="" enctype="mutlipart/form-data" id="step1-form">
                        <div class="form_heading">
                            <h3>UNDERTAKING</h3>
                        </div>

                        <div class="listing text-dark">
                            <p class="text-dark">I hereby declare and undertake that :-</p>
                            <ul style="list-style-type: circle;">

                                <li>I shall abide by the canons of professional ethics and others rules laid down from time to time by the Bar Council of India and the Bar Council of Punjab & Haryana.</li>
                                <li>If after my Admission as an Advocate I accept full or part-time service or employment or I am engaged in any trade, business or profession, I shall forthwith inform to the Bar Council or such service, employment or engagement and shall cease to practice as an Advocate forthwith and I shall surrender my Original Enrolment Certificate and Identity Card to the Bar Council along with my application for voluntarily suspension of practice.</li>
                                <li>3I  shall  not  accept  any  employment  which  in  the  opinion  of  the  Bar  Council,  is derogatory to the status of an advocates.</li>
                                <li>I shall notify any change in the place of my permanent residence/place of practice to the Bar Council within 90 days of such change.</li>
                                <li>I undertake to produce original law degree awarded by the University before Bar Council, within one year from the date of my enrolment as an advocate </li>
                            </ul>
                        </div>
                        <div class="row margin_top">
                            <div class="col-md-6">
                                <label class="text-dark">Date :</label>
                                <input type="hidden" name="date_of_completion" value="{{ @$undertaking->date_of_completion ? @$undertaking->date_of_completion : date('d-m-Y') }}">
                                <span id="date_of_completion" class="text-dark">{{ @$undertaking->date_of_completion ? @$undertaking->date_of_completion : date('d-m-Y') }}</span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark fw-bold">Dishant Thakur</span>
                                <p class="text-dark">Signature of Applicant</p>
                            </div>
                        </div>
                        <div class="row">
                               <div class="col ">
                                  <div class=" margin_top_33">
                                      <a href="{{ route('declarationForm') }}" name="" class="custom_btn previous_btn_padding">Previous</a>
                                  </div>
                              </div>
                              <div class="col ">
                                  <div class="submit_btn">
                                      <input type="submit" name="" value="Next" class="float-end">
                                  </div>
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
            
            var url = baseUrl+'/saveUndertakingForm';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });
    });

</script>
@endsection