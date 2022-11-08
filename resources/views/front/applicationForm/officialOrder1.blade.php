@extends('layouts.front_layout')

@section('title')
Official Order - 1
@endsection

@section('content')
<div class="main_padding application_form">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-12">
                <div class="form_section border p-3 rounded-1">
                    <form method="post" action="application2.html" enctype="mutlipart/form-data" id="step1-form">
                        <div class="form_heading">
                            <h3>Official Order - 1</h3>
                        </div>

                        <div class="row text-dark">
                            <div class="col-md-12">
                                <p>Application of Mr./Ms. <strong>{{ auth()->user()->applicant_name }}</strong> for enrollment as an advocate in Form <strong> 202</strong>-B</p>
                               <p>The applicant Mr./Ms. <strong>{{ auth()->user()->applicant_name }}</strong> has passed his/her (LL.B professional)(Three/five year law course) ABC University as a result of the examination held in .......</p>
                                <p><strong>'A'</strong>&nbsp;&nbsp;&nbsp;&nbsp;It is for consideration whether he/she may be enrolled as an advance on the strength of the provisional certificate of L.L.B., as he/she has not produced the original law degree, awarded by the university. But has produced provisional certificate of L.L.B, issued to him/her by the University. However, the applicant has also filled an undertaking by way of affidavit to the effect that he/she would produce the original law degree within one year from the date of enrollment as an Advocate.</p>
                                <div class="mt-3">
                                    
                                 <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;Attendance certificate from Law College has be produced  with application from and the same appears to be in order.</strong></p>
                                </div>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;He/she passed LL.B (final) in the academic year 2022 and therefore, He/she is required to pass AIBE in term of resolution dated 26.08.2012 of the Bar Council of India, within two years from the date of enrolment. In this regard, the applicant has also filed an undertaking by way of affidavit. </p>
                        
                            </div>
                    
                    
                        </div>
                        <div class="row mt-5 text-dark">
                            <div class="col-md-12">
                                <p><strong>'B'</strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong>The appicant applied today and wants to get enrolled on priority basis in terms of resolution dt. 06.03.2019, of Bar Council. However, he has to deposit Rs. 4000/-(four thousand only).</strong></p>
                               <p><u><strong>Verification Report:-</strong></u>&nbsp;&nbsp;&nbsp;&nbsp;In view of the instructions of BCI contained in letter No. B CI:D:529/2017 dated 28.01.2017, verification letters Will be sent to Board/University respectively.</p>
                               <p><strong>
                                In view or the instructions mentioned above, the committee may pass any appropriate orders with regard to the Provisional Enrolment for a period of two years, if agreed to 'A’, 'B', & C ' above, an order of his/her enrolment may kindly be passed on page 8 of the file below.
                                </strong>
                                </p>
                        
                            </div>
                    
                    
                        </div>



                        <div class="row mt-5 text-dark">
                            <div class="col">
                            <p><strong>(Gurtej Singh Grewal)</strong></p>
                            <p><strong>Hony. Secretary</strong></p>
                            </div>
                            <div class="col">
                                <p><strong>Superintendent</strong></p>
                            </div>
                
                        </div>

                        <div class="row mt-4 text-dark">
                            <div class="col">
                                <p><strong>Sh. lekh Raj Sharma, Chairman(EC)</strong></p>
                            </div>
                            <div class="col">
                                <p><strong>Addl. Secretary</strong></p>
                            </div>
                        </div>
                        <div class="row mt-4 text-dark">
                            <div class="col-md-12">
                                <p><strong>Sh. Raj kumar Chauhaan, Member</strong></p>
                            </div>

                        </div>
                        <div class="row mt-4 text-dark">
                            <div class="col-md-12">
                                <p><strong>Sh. Ajay Chaudhary, Member</strong></p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col ">
                               <div class=" margin_top_33">
                                   <a href="officialreport.html" name="" class="custom_btn previous_btn_padding">Previous</a>
                               </div>
                           </div>
                           <div class="col ">
                              <div class=" margin_top_33">
                                <a href="" name="" class="custom_btn previous_btn_padding float-end">upload</a>
                              </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col ">
                               <div class=" margin_top_33">
                                   <a href="" name="" class="custom_btn previous_btn_padding">Print</a>
                               </div>
                           </div>
                           <div class="col ">
                              <div class=" margin_top_33">
                                <a href="application2.html" name="" class="custom_btn previous_btn_padding float-end">Save</a>
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
    
</script>
@endsection