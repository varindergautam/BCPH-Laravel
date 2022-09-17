@extends('layouts.front_layout')

@section('title')
Declaration Form
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
     <div class="row ">
      <div class="col-md-12">
       <div class="form_section border p-3 rounded-1">
          <form method="post" action="" enctype="mutlipart/form-data" id="declaration-form">
            @csrf  
            <div class="form_heading">
                  <h3>DECLARATIONS</h3>
              </div>
              <div class="paragraph">
                  <p class="text-dark">I <strong>{{ auth::user()->applicant_name }}</strong> declare that the facts stated below are true to my knowledge.</p>
              </div>
              <div class="listing text-dark">
                  <p class="text-dark">I further declare that :-</p>
                  <ul style="list-style-type: circle;">
  
                      <li>I have completed 21 years of my age on OR before the date of this application.</li>
                      <li>I am a citizen of India or a National of a country <strong>{{ auth::user()->nationality }}</strong> where citizens of India, duly qualified, are permitted to practice in law.</li>
                      <li>I am not in full or part time employment or service and I am not engaged in any  trade  business  or  profession  except  as  follows.  (Full  particulars  to be given here)</li>
                      <li>My Name is not borne on the roll of any other State Bar Council in India.</li>
                      <li>I will not, so long my name is on the roll of Bar Council of Punjab and Haryana, apply for enrolment to any other State Bar Council.</li>
                      <li>I have obtained Law degree from <input type="text remove_border_input" name="law_university_name" placeholder="Enter university" value="{{ @$declaration_data->law_university_name }}"><strong id="law_university_name-error" class="error"></strong> University which has been recognised by the Bar Council of India u/s 24 (i)(c) (iii) of the Advocates Act 1961 and the Law College <input type="text" name="law_college_name" placeholder="Enter college name" value="{{ @$declaration_data->law_college_name }}"><strong id="law_college_name-error" class="error"></strong> where I studied for three/five years is also recognised by the Bar Council of India for imparting Legal Education and is affiliated with <input type="text" placeholder="Enter affiliated university" name="law_affiliated_university" value="{{ @$declaration_data->law_affiliated_university }}"><strong id="law_affiliated_university-error" class="error"></strong> University.</li>
                      <li>The  statements  made  in  this  application  are  true  to  my  own  knowledge, information and belief.</li>
                  </ul>
              </div>
              <div class="row margin_top">
                  <div class="col-md-6">
                      <label class="text-dark">Date :</label>
                      <span class="text-dark">03-09-2022</span>
                  </div>
                  <div class="col-md-6">
                      <span class="text-dark fw-bold">Dishant Thakur</span>
                      <p class="text-dark">Signature of Applicant</p>
                  </div>
              </div>
              <div class="row">
                     <div class="col ">
                        <div class=" margin_top_33">
                            <a href="{{ route('paymentDetail', $payment_data->razorpay_payment_id) }}" name="" class="custom_btn previous_btn_padding">Previous</a>
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
@endsection

@section('script')
<script>
    jQuery(document).ready(function(){
        $('form').on('submit', function (e) {
            e.preventDefault();
            
            var url = baseUrl+'/saveDeclarationForm';
            var method = $(this).attr('method');
            var formData = new FormData(this);

            postAjax(url, method, formData)
        });
    });
</script>
@endsection