<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\AffidavitFormRequest;
use App\Http\Requests\ApplicationFormRequest;
use App\Http\Requests\CertifyFormRequest;
use App\Http\Requests\DeclarationFormRequest;
use App\Models\AffidavitForm;
use App\Models\ApplicationForm;
use App\Models\CertifyForm;
use App\Models\DeclarationForm;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Auth;
use Validator;
use Session;

class ApplicationFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->displayCurrency = 'INR';
        $this->api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    }
    
    public function applicationForm() {
        $data['applicationForm'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        return view('Front.applicationForm.applicationForm', $data);
    }

    public function orderIdGenerate(ApplicationFormRequest $request) {
        try {

            $checkPayment = ApplicationForm::where('user_id', Auth::user()->id)->first();
            if($checkPayment) {
                Session::put('application_form_data', $checkPayment);
                return response()->json(['message' => 'Already Pay',
                        'status' => true,
                        'data' => 2,
                        'link' => url('paysuccess?razorpay_payment_id=' .$checkPayment->razorpay_payment_id. "&razorpay_order_id=" . $checkPayment->razorpay_order_id)
                    ]);
            }

            $item_number = \Str::random(4).time();
            $orderData = [
                'receipt'         => $item_number,
                'amount'          => ($request->total_pay) * 100, // 2000 rupees in paise
                // 'amount'          => 2000 * 100, // 2000 rupees in paise
                'currency'        => $this->displayCurrency,
                // 'transfers' => array(
                //                 array(
                //                     'account' => '111222333444555666',
                //                     'amount' => 1000,
                //                     'currency' => 'INR',
                //                     'notes' => array(
                //                                 'branch' => 'Acme Corp Bangalore North',
                //                                 'name' => 'Gaurav Kumar'
                //                                 ),
                //                     'linked_account_notes' => array('branch'),
                //                     'on_hold' => 1,
                //                     'on_hold_until' => 1671222870
                //                 ),
                //                 array(
                //                     'account' => '11122233344455566',
                //                     'amount' => 1000,
                //                     'currency' => 'INR',
                //                     'notes' => array(
                //                                 'branch' => 'Acme Corp Bangalore South',
                //                                 'name' => 'Saurav Kumar'
                //                             ),
                //                     'linked_account_notes' => array('branch'),
                //                     'on_hold' => 0
                //                 )
                //             ),
                'payment_capture' => 1 // auto capture
            ];
            Session::put('application_form_data', $request->all());
            $razorpayOrder = $this->api->order->create($orderData);
            return response()->json(['order_id' => $razorpayOrder['id']]);
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }		
	}

    public function paysuccess(Request $request) {
        try{
            if($request->razorpay_signature)
            {
                $attributes = array(
                    'razorpay_order_id' => $request->razorpay_order_id,
                    'razorpay_payment_id' => $request->razorpay_payment_id,
                    'razorpay_signature' => $request->razorpay_signature
                );
                $this->api->utility->verifyPaymentSignature($attributes);
            }

            $sessionApplicatonFormData = (object)Session::get('application_form_data');

            $applicationFormData = ApplicationForm::where('user_id', Auth::user()->id)->first();
            if(!$applicationFormData){
                $applicationFormData = new ApplicationForm;
            }
            
            $applicationFormData->user_id = Auth::user()->id;
            $applicationFormData->permanent_address = $sessionApplicatonFormData->permanent_address;
            $applicationFormData->university_name = $sessionApplicatonFormData->university_name;
            $applicationFormData->which_univeristy = $sessionApplicatonFormData->which_univeristy;
            $applicationFormData->which_univeristy_remarks = $sessionApplicatonFormData->which_univeristy_remarks;
            $applicationFormData->date_of_law_degree = $sessionApplicatonFormData->date_of_law_degree;
            $applicationFormData->plus_two_mark = $sessionApplicatonFormData->plus_two_mark;
            $applicationFormData->graduate_before_admission = $sessionApplicatonFormData->graduate_before_admission;
            $applicationFormData->college_university_name = $sessionApplicatonFormData->college_university_name;
            $applicationFormData->no_of_years = $sessionApplicatonFormData->no_of_years;
            $applicationFormData->college_pass_date = $sessionApplicatonFormData->college_pass_date;
            $applicationFormData->english_compulsory = $sessionApplicatonFormData->english_compulsory;
            $applicationFormData->correspondence_address = $sessionApplicatonFormData->correspondence_address;
            $applicationFormData->law_college_name = $sessionApplicatonFormData->law_college_name;
            $applicationFormData->law_college_join_date = $sessionApplicatonFormData->law_college_join_date;
            $applicationFormData->law_college_duration_year = $sessionApplicatonFormData->law_college_duration_year;
            $applicationFormData->law_college_passed = $sessionApplicatonFormData->law_college_passed;
            $applicationFormData->name_of_degree_obtained = $sessionApplicatonFormData->name_of_degree_obtained;
            $applicationFormData->medium_instruction = $sessionApplicatonFormData->medium_instruction;
            $applicationFormData->private_study_duration_year = $sessionApplicatonFormData->private_study_duration_year;
            $applicationFormData->city_for_pratice_after_enrollment = $sessionApplicatonFormData->city_for_pratice_after_enrollment;
            $applicationFormData->appointment_holds = $sessionApplicatonFormData->appointment_holds;
            $applicationFormData->business_or_profession = $sessionApplicatonFormData->business_or_profession;
            $applicationFormData->criminal_proceeding_againest_applicant = $sessionApplicatonFormData->criminal_proceeding_againest_applicant;
            $applicationFormData->suspension_type = $sessionApplicatonFormData->suspension_type;
            $applicationFormData->declared_insolvent_type = $sessionApplicatonFormData->declared_insolvent_type;
            $applicationFormData->already_apply_for_enrollment = $sessionApplicatonFormData->already_apply_for_enrollment;
            $applicationFormData->total_pay = $sessionApplicatonFormData->total_pay;
            $applicationFormData->razorpay_order_id = $request->razorpay_order_id ? $request->razorpay_order_id : $sessionApplicatonFormData->razorpay_order_id;
            $applicationFormData->razorpay_payment_id = $request->razorpay_payment_id ? $request->razorpay_payment_id : $sessionApplicatonFormData->razorpay_payment_id;
            $applicationFormData->razorpay_signature = $request->razorpay_signature ? $request->razorpay_signature : $sessionApplicatonFormData->razorpay_signature;
            $applicationFormData->payment_status = 1;
            $applicationFormData->save();
            if($applicationFormData) {
                Session::forget('cart');
                return redirect()->route('paymentDetail', $request->razorpay_payment_id);
                return response()->json(['message'=>'Application form submitted successfully',
                'redirect' => route('paymentDetail', $request->razorpay_payment_id),
                'status' => true]);
            }
        }
        catch(SignatureVerificationError $e){
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => false]);
            throw $th;
        }
    }

    public function paymentDetail (Request $request, $razorPayId) {
        $data['payment_data'] = ApplicationForm::where('razorpay_payment_id', $razorPayId)->first();
        return view('front.applicationForm.paySuccess', $data);
    }

    public function declarationForm() {
        $data['payment_data'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        $data['declaration_data'] = DeclarationForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.declarationForm', $data);
    }

    public function saveDeclarationForm(DeclarationFormRequest $request) {
        try {
            $declarationForm = DeclarationForm::where('user_id', Auth::user()->id)->first();
            if(!$declarationForm){
                $declarationForm = new DeclarationForm;
            }
            $declarationForm->user_id = Auth::user()->id;
            $declarationForm->law_college_name = $request->law_college_name;
            $declarationForm->law_university_name = $request->law_university_name;
            $declarationForm->law_affiliated_university = $request->law_affiliated_university;
            if($declarationForm->save()) {
                return response()->json(['message'=>'Success', 'redirect' => route('undertaking'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    public function undertaking() {
        return view('front.applicationForm.undertaking');
    }

    public function affidavitForm() {
        $data['affidavit_data'] = AffidavitForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.affidavitForm', $data);
    }

    public function saveAffidavitForm(AffidavitFormRequest $request) {
        try {
            $affidavitForm = AffidavitForm::where('user_id', Auth::user()->id)->first();
            if(!$affidavitForm){
                $affidavitForm = new AffidavitForm;
            }
            $affidavitForm->user_id = Auth::user()->id;
            $affidavitForm->born = $request->born;
            $affidavitForm->district_name = $request->district_name;
            $affidavitForm->bachelor_law_degree_college_name = $request->bachelor_law_degree_college_name;
            $affidavitForm->place_name = $request->place_name;
            $affidavitForm->type_born_in_oath = $request->type_born_in_oath;
            $affidavitForm->college_name_oath = $request->college_name_oath;
            $affidavitForm->place_name_oath = $request->place_name_oath;
            if($affidavitForm->save()) {
                return response()->json(['message'=>'Success', 'redirect' => route('certifyForm'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    public function certifyForm() {
        $data['application_form'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        $data['certify_form'] = CertifyForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.certify', $data);
    }

    public function saveCertifyForm(CertifyFormRequest $request) {
        try {
            $certifyForm = CertifyForm::where('user_id', Auth::user()->id)->first();
            if(!$certifyForm){
                $certifyForm = new CertifyForm;
            }
            $certifyForm->user_id = Auth::user()->id;
            $certifyForm->years = $request->years;
            $certifyForm->advocate_name = $request->advocate_name;
            $certifyForm->date = $request->date;
            $certifyForm->day = $request->day;
            $certifyForm->years_2 = $request->years_2;
            $certifyForm->advocate_name_2 = $request->advocate_name_2;
            $certifyForm->date_2 = $request->date_2;
            $certifyForm->day_2 = $request->day_2;
            if($certifyForm->save()) {
                return response()->json(['message'=>'Success', 'redirect' => route('enrolmentCommittteForm'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    public function enrolmentCommittteForm() {
        $data['application_form'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.enrolmentCommittteForm', $data);
    }

    public function enrolmentAsAdvocate() {
        return view('front.applicationForm.enrolmentAsAdvocate');
    }

    public function identityCard() {
        $data['application_form'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.identityCard', $data);
    }

    public function documentUpload() {
        return view('front.applicationForm.documentUpload');
    }
}
