<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\AffidavitFormRequest;
use App\Http\Requests\ApplicationFormRequest;
use App\Http\Requests\CertifyFormRequest;
use App\Http\Requests\DeclarationFormRequest;
use App\Http\Requests\DocumentUploadRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Models\AffidavitForm;
use App\Models\ApplicationForm;
use App\Models\CertifyForm;
use App\Models\DeclarationForm;
use App\Models\DocumentUpload;
use App\Models\Fee;
use App\Models\OfficialReport;
use App\Models\TatkaalFee;
use App\Models\Undertaking;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Auth;
use Validator;
use Session;

use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Models\College;
use App\Models\University;

class ApplicationFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * This function open a change password view file
     */
    public function changePassword() {
        return view('front.user.changePassword');
    }

    /**
     * This function use to update the password with UpdatePasswordRequest validation
     */
    public function updatePassword(UpdatePasswordRequest $request) {
        try {
            if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
                // throw new \Exception("Token is required.");
                // The passwords matches
                return response()->json(['message'=> 'Your current password does not matches with the password', 'status' => config('CommonStatus.INACTIVE')]);
            }
            //Change Password
            $user = Auth::user();
            $user->password = Hash::make($request->get('newpassword'));
            $user->save();

            return response()->json(['message'=> 'Password successfully changed!', 'status' => config('CommonStatus.ACTIVE')]);
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => false]);
            throw $th;
        }
    }
    /**
     * This function open a application form view file
     */
    public function applicationForm() {
        $data['fees'] = Fee::all();
        $data['applicationForm'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        $data['tatkaal'] = TatkaalFee::first();
        $data['universities'] = University::orderBy('name', 'ASC')->get();
        if(isset($data['applicationForm']->university_name)) {
            $data['colleges'] = College::where('university_id', $data['applicationForm']->university_name)->get();
        }
        return view('Front.applicationForm.applicationForm', $data);
    }

    /**
     * This function save a application form data
     */
    public function saveApplicationForm(ApplicationFormRequest $request) {
        try {
            $applicationFormData = ApplicationForm::where('user_id', Auth::user()->id)->first();
            if(!$applicationFormData){
                $applicationFormData = new ApplicationForm;
            }
            $applicationFormData->user_id = Auth::user()->id;
            $applicationFormData->university_name = $request->university_name;
            $applicationFormData->which_univeristy = $request->which_univeristy;
            $applicationFormData->which_univeristy_remarks = $request->which_univeristy_remarks;
            $applicationFormData->date_of_law_degree = $request->date_of_law_degree;
            $applicationFormData->plus_two_mark = $request->plus_two_mark;
            $applicationFormData->graduate_before_admission = $request->graduate_before_admission;
            $applicationFormData->college_university_name = $request->college_university_name;
            $applicationFormData->no_of_years = $request->no_of_years;
            $applicationFormData->college_pass_date = $request->college_pass_date;
            $applicationFormData->english_compulsory = $request->english_compulsory;
            $applicationFormData->law_college_name = $request->law_college_name;
            $applicationFormData->law_college_join_date = $request->law_college_join_date;
            $applicationFormData->law_college_duration_year = $request->law_college_duration_year;
            $applicationFormData->law_college_passed = $request->law_college_passed;
            $applicationFormData->name_of_degree_obtained = $request->name_of_degree_obtained;
            $applicationFormData->medium_instruction = $request->medium_instruction;
            $applicationFormData->private_study_duration_year = $request->private_study_duration_year;
            $applicationFormData->city_for_pratice_after_enrollment = $request->city_for_pratice_after_enrollment;
            $applicationFormData->appointment_holds = $request->appointment_holds;
            $applicationFormData->appointment_holds_remarks = $request->appointment_holds_remarks;
            $applicationFormData->business_or_profession = $request->business_or_profession;
            $applicationFormData->business_or_profession_remark = $request->business_or_profession_remark;
            $applicationFormData->criminal_court = $request->criminal_court;
            $applicationFormData->criminal_court_remark = $request->criminal_court_remark;
            $applicationFormData->criminal_proceeding_againest_applicant = $request->criminal_proceeding_againest_applicant;
            $applicationFormData->criminal_proceeding_againest_applicant_remark = $request->criminal_proceeding_againest_applicant_remark;
            $applicationFormData->suspension_type = $request->suspension_type;
            $applicationFormData->suspension_type_remark = $request->suspension_type_remark;
            $applicationFormData->declared_insolvent_type = $request->declared_insolvent_type;
            $applicationFormData->declared_insolvent_type_remark = $request->declared_insolvent_type_remark;
            $applicationFormData->already_apply_for_enrollment = $request->already_apply_for_enrollment;
            $applicationFormData->already_apply_for_enrollment_remark = $request->already_apply_for_enrollment_remark;
            $applicationFormData->date_of_completion = $request->date_of_completion;
            $applicationFormData->stream = $request->stream;
            $applicationFormData->save();

            if($applicationFormData) {
                return response()->json(['message'=>'Application form submitted successfully',
                'redirect' => route('declarationForm'),
                'status' => true]);
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * This function used to generate a order id for payment with ApplicationFormRequest validation
     */
    public function orderIdGenerate(ApplicationFormRequest $request) {
        try {
            Session::put('application_form_data', $request->all());
            $checkPayment = ApplicationForm::where('user_id', Auth::user()->id)->first();
            if($checkPayment) {
                // Session::put('application_form_data', $checkPayment);
                $checkPayment->user_id = Auth::user()->id;
                // $checkPayment->permanent_address = $request->permanent_address;
                $checkPayment->university_name = $request->university_name;
                $checkPayment->which_univeristy = $request->which_univeristy;
                $checkPayment->which_univeristy_remarks = $request->which_univeristy_remarks;
                $checkPayment->date_of_law_degree = $request->date_of_law_degree;
                $checkPayment->plus_two_mark = $request->plus_two_mark;
                $checkPayment->graduate_before_admission = $request->graduate_before_admission;
                $checkPayment->college_university_name = $request->college_university_name;
                $checkPayment->no_of_years = $request->no_of_years;
                $checkPayment->college_pass_date = $request->college_pass_date;
                $checkPayment->english_compulsory = $request->english_compulsory;
                // $checkPayment->correspondence_address = $request->correspondence_address;
                $checkPayment->law_college_name = $request->law_college_name;
                $checkPayment->law_college_join_date = $request->law_college_join_date;
                $checkPayment->law_college_duration_year = $request->law_college_duration_year;
                $checkPayment->law_college_passed = $request->law_college_passed;
                $checkPayment->name_of_degree_obtained = $request->name_of_degree_obtained;
                $checkPayment->medium_instruction = $request->medium_instruction;
                $checkPayment->private_study_duration_year = $request->private_study_duration_year;
                $checkPayment->city_for_pratice_after_enrollment = $request->city_for_pratice_after_enrollment;
                $checkPayment->appointment_holds = $request->appointment_holds;
                $checkPayment->appointment_holds_remarks = $request->appointment_holds_remarks;
                $checkPayment->business_or_profession = $request->business_or_profession;
                $checkPayment->business_or_profession_remark = $request->business_or_profession_remark;
                $checkPayment->criminal_court = $request->criminal_court;
                $checkPayment->criminal_court_remark = $request->criminal_court_remark;
                $checkPayment->criminal_proceeding_againest_applicant = $request->criminal_proceeding_againest_applicant;
                $checkPayment->criminal_proceeding_againest_applicant_remark = $request->criminal_proceeding_againest_applicant_remark;
                $checkPayment->suspension_type = $request->suspension_type;
                $checkPayment->suspension_type_remark = $request->suspension_type_remark;
                $checkPayment->declared_insolvent_type = $request->declared_insolvent_type;
                $checkPayment->declared_insolvent_type_remark = $request->declared_insolvent_type_remark;
                $checkPayment->already_apply_for_enrollment = $request->already_apply_for_enrollment;
                $checkPayment->already_apply_for_enrollment_remark = $request->already_apply_for_enrollment_remark;
                $checkPayment->total_pay = $request->total_pay;
                $checkPayment->razorpay_order_id = $checkPayment->razorpay_order_id;
                $checkPayment->razorpay_payment_id = $checkPayment->razorpay_payment_id;
                $checkPayment->razorpay_signature = $checkPayment->razorpay_signature;
                $checkPayment->payment_status = '1';
                $checkPayment->date_of_completion = $checkPayment->date_of_completion;
                $checkPayment->stream = $request->stream;
                $checkPayment->save();
                return response()->json(['message' => 'Already Pay',
                    'status' => true,
                    'data' => 2,
                    'link' => url('paysuccess?razorpay_payment_id=' .$checkPayment->razorpay_payment_id. "&razorpay_order_id=" . $checkPayment->razorpay_order_id)
                ]);
            }

            $item_number = \Str::random(4).time();
            $divideAmount = ($request->total_pay  / 2) * 100 ;

            $orderData = [
                'receipt'         => $item_number,
                'amount'          => ($request->total_pay) * 100, // 2000 rupees in paise
                // 'amount'          => 2000 * 100, // 2000 rupees in paise
                'currency'        => $this->displayCurrency,
                'transfers' => array(
                                array(
                                    'account' => 'acc_KGdBZE5CI4cPUO',
                                    'amount' => $divideAmount,
                                    'currency' => 'INR',
                                    'notes' => array(
                                                'branch' => 'Acme Corp Bangalore North',
                                                'name' => 'Gaurav Kumar'
                                                ),
                                    'linked_account_notes' => array('branch'),
                                    'on_hold' => 1,
                                    'on_hold_until' => 1671222870
                                ),
                                array(
                                    'account' => 'acc_KQYkgqXXp2SnKk',
                                    'amount' => $divideAmount,
                                    'currency' => 'INR',
                                    'notes' => array(
                                                'branch' => 'Acme Corp Bangalore South',
                                                'name' => 'Saurav Kumar'
                                            ),
                                    'linked_account_notes' => array('branch'),
                                    'on_hold' => 0
                                )
                            ),
                'payment_capture' => 1 // auto capture
            ];

            $razorpayOrder = $this->api->order->create($orderData);
            return response()->json(['order_id' => $razorpayOrder['id']]);
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
	}

    /**
     * This function used verify the payment and also save the application form data
     * * @param $request
     */
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
            // print_r($request->all());die;
            $applicationFormData = ApplicationForm::where('user_id', Auth::user()->id)->first();
            if(!$applicationFormData){
                $applicationFormData = new ApplicationForm;
            }
            $applicationFormData->user_id = Auth::user()->id;
            // $applicationFormData->permanent_address = $sessionApplicatonFormData->permanent_address;
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
            // $applicationFormData->correspondence_address = $sessionApplicatonFormData->correspondence_address;
            $applicationFormData->law_college_name = $sessionApplicatonFormData->law_college_name;
            $applicationFormData->law_college_join_date = $sessionApplicatonFormData->law_college_join_date;
            $applicationFormData->law_college_duration_year = $sessionApplicatonFormData->law_college_duration_year;
            $applicationFormData->law_college_passed = $sessionApplicatonFormData->law_college_passed;
            $applicationFormData->name_of_degree_obtained = $sessionApplicatonFormData->name_of_degree_obtained;
            $applicationFormData->medium_instruction = $sessionApplicatonFormData->medium_instruction;
            $applicationFormData->private_study_duration_year = $sessionApplicatonFormData->private_study_duration_year;
            $applicationFormData->city_for_pratice_after_enrollment = $sessionApplicatonFormData->city_for_pratice_after_enrollment;
            $applicationFormData->appointment_holds = $sessionApplicatonFormData->appointment_holds;
            $applicationFormData->appointment_holds_remarks = $sessionApplicatonFormData->appointment_holds_remarks;
            $applicationFormData->business_or_profession = $sessionApplicatonFormData->business_or_profession;
            $applicationFormData->business_or_profession_remark = $sessionApplicatonFormData->business_or_profession_remark;
            $applicationFormData->criminal_court = $sessionApplicatonFormData->criminal_court;
            $applicationFormData->criminal_court_remark = $sessionApplicatonFormData->criminal_court_remark;
            $applicationFormData->criminal_proceeding_againest_applicant = $sessionApplicatonFormData->criminal_proceeding_againest_applicant;
            $applicationFormData->criminal_proceeding_againest_applicant_remark = $sessionApplicatonFormData->criminal_proceeding_againest_applicant_remark;
            $applicationFormData->suspension_type = $sessionApplicatonFormData->suspension_type;
            $applicationFormData->suspension_type_remark = $sessionApplicatonFormData->suspension_type_remark;
            $applicationFormData->declared_insolvent_type = $sessionApplicatonFormData->declared_insolvent_type;
            $applicationFormData->declared_insolvent_type_remark = $sessionApplicatonFormData->declared_insolvent_type_remark;
            $applicationFormData->already_apply_for_enrollment = $sessionApplicatonFormData->already_apply_for_enrollment;
            $applicationFormData->already_apply_for_enrollment_remark = $sessionApplicatonFormData->already_apply_for_enrollment_remark;
            $applicationFormData->total_pay = $sessionApplicatonFormData->total_pay;
            $applicationFormData->razorpay_order_id = $request->razorpay_order_id ? $request->razorpay_order_id : $sessionApplicatonFormData->razorpay_order_id;
            $applicationFormData->razorpay_payment_id = $request->razorpay_payment_id ? $request->razorpay_payment_id : $sessionApplicatonFormData->razorpay_payment_id;
            $applicationFormData->razorpay_signature = $request->razorpay_signature ? $request->razorpay_signature : $applicationFormData->razorpay_signature;
            $applicationFormData->payment_status = '1';
            $applicationFormData->date_of_completion = $sessionApplicatonFormData->date_of_completion;
            $applicationFormData->stream = $sessionApplicatonFormData->stream;
            $applicationFormData->save();
            if($applicationFormData) {
                Session::forget('application_form_data');
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

    /**
     * This function used to open the payment success with payment detail
     */
    public function paymentDetail (Request $request, $orderId) {
        $data['payment_data'] = ApplicationForm::where('paytm_order_id', $orderId)->first();
        // $data['payment_data'] = ApplicationForm::where('razorpay_payment_id', $orderId)->first();
        $data['fees'] = Fee::all();
        return view('front.applicationForm.paySuccess', $data);
    }

    /**
     * This function used to open the delcaration form
     */
    public function declarationForm() {
        $data['payment_data'] = ApplicationForm::with('university', 'college')->where('user_id', Auth::user()->id)->first();
        $data['declaration_data'] = DeclarationForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.declarationForm', $data);
    }

    /**
     * This function used to save the delcaration form with DeclarationFormRequest validation
     */
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
            $declarationForm->date_of_completion = $request->date_of_completion;
            if($declarationForm->save()) {
                return response()->json(['message'=>'Declaration form submitted successfully', 'redirect' => route('undertaking'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function used to open the undertaking form
     */
    public function undertaking() {
        $data['undertaking'] = Undertaking::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.undertaking', $data);
    }

    /**
     * This function used to save the undertaking form
     */
    public function saveUndertakingForm(Request $request) {
        try {
            $undertaking = Undertaking::where('user_id', Auth::user()->id)->first();
            if(!$undertaking){
                $undertaking = new Undertaking;
            }
            $undertaking->user_id = Auth::user()->id;
            $undertaking->date_of_completion = $request->date_of_completion;
            if($undertaking->save()) {
                return response()->json(['message'=>'Undertaking form submit successfully', 'redirect' => route('affidavitForm'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function used to open the affidavit form
     */
    public function affidavitForm() {
        $data['affidavit_data'] = AffidavitForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.affidavitForm', $data);
    }

    /**
     * This function used to save the affidavit form with AffidavitFormRequest validation
     */
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
            $affidavitForm->date_of_completion = $request->date_of_completion;
            if($affidavitForm->save()) {
                return response()->json(['message'=>'Affidavit form submit successfully', 'redirect' => route('certifyForm'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function used to open the certify form
     */
    public function certifyForm() {
        $data['application_form'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        $data['certify_form'] = CertifyForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.certify', $data);
    }

    /**
     * This function used to save the certify form with CertifyFormRequest validation
     */
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
                return response()->json(['message'=>'Cerify form submit successfully', 'redirect' => route('enrolmentCommittteForm'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function used to open the enrolment committte form
     */
    public function enrolmentCommittteForm() {
        $data['application_form'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.enrolmentCommittteForm', $data);
    }

    /**
     * This function used to open the enrolment as advocate
     */
    public function enrolmentAsAdvocate() {
        return view('front.applicationForm.enrolmentAsAdvocate');
    }

    /**
     * This function used to open the identity card form
     */
    public function identityCard() {
        $data['application_form'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.identityCard', $data);
    }

    /**
     * This function used to open the document upload form
     */
    public function documentUpload() {
        $userId = Auth::user()->id;
        $documentUpload = new DocumentUpload($userId);
        // echo "<pre>";
        // print_r($documentUpload->userId);die;
        $data['documentUpload'] = $documentUpload->where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.documentUpload', $data);
    }

    /**
     * This function used to save the document upload form with DocumentUploadRequest validation
     */
    public function saveDocumentUpload(Request $request, DocumentUpload $document_upload) {
        try {
            $userId = auth()->user()->id;
            $document_upload->userId = $userId;
            if(empty($document_upload->checkField('provisional_certificate_of_llb'))){
                $provisional_certificate_of_llb_validation = 'required';
            } else {
                $provisional_certificate_of_llb_validation = 'nullable';
            }

            if(empty($document_upload->checkField('attendance_certificate'))){
                $attendance_certificate_validation = 'required';
            } else {
                $attendance_certificate_validation = 'nullable';
            }

            if(empty($document_upload->checkField('dmc_of_llb'))){
                $dmc_of_llb_validation = 'required';
            } else {
                $dmc_of_llb_validation = 'nullable';
            }

            if(empty($document_upload->checkField('matriculation_certificate'))){
                $matriculation_certificate_validation = 'required';
            } else {
                $matriculation_certificate_validation = 'nullable';
            }

            if(empty($document_upload->checkField('plus_two_certificate'))){
                $plus_two_certificate_validation = 'required';
            } else {
                $plus_two_certificate_validation = 'nullable';
            }
            if(empty($document_upload->checkField('all_dmc_certificate_of_llb'))){
                $all_dmc_certificate_of_llb_validation = 'required';
            } else {
                $all_dmc_certificate_of_llb_validation = 'nullable';
            }
            if(empty($document_upload->checkField('affidavit_of_law_degree'))){
                $affidavit_of_law_degree_validation = 'required';
            } else {
                $affidavit_of_law_degree_validation = 'nullable';
            }
            if(empty($document_upload->checkField('affidavit_of_stamp_duty'))){
                $affidavit_of_stamp_duty_validation = 'required';
            } else {
                $affidavit_of_stamp_duty_validation = 'nullable';
            }

            if(empty($document_upload->checkField('affidavit_of_aibe'))){
                $affidavit_of_aibe_validation = 'required';
            } else {
                $affidavit_of_aibe_validation = 'nullable';
            }
            if(empty($document_upload->checkField('service_certificate'))){
                $service_certificate_validation = 'required';
            } else {
                $service_certificate_validation = 'nullable';
            }
            if(empty($document_upload->checkField('document_of_column_12_13_14'))){
                $document_of_column_12_13_14_validation = 'required';
            } else {
                $document_of_column_12_13_14_validation = 'nullable';
            }

            if(empty($document_upload->checkField('gap_affidavit'))){
                $gap_affidavit_validation = 'required';
            } else {
                $gap_affidavit_validation = 'nullable';
            }
            if(empty($document_upload->checkField('additional_affidavit'))){
                $additional_affidavit_validation = 'required';
            } else {
                $additional_affidavit_validation = 'nullable';
            }
            if(empty($document_upload->checkField('any_other_infomation'))){
                $any_other_infomation_validation = 'required';
            } else {
                $any_other_infomation_validation = 'nullable';
            }

            $validator = Validator::make($request->all(), [
                'provisional_certificate_of_llb' => $provisional_certificate_of_llb_validation,
                'attendance_certificate' => $attendance_certificate_validation,
                'dmc_of_llb' => $dmc_of_llb_validation,
                'matriculation_certificate' => $matriculation_certificate_validation,
                'all_dmc_certificate_of_llb' => $all_dmc_certificate_of_llb_validation,
                'affidavit_of_law_degree' => $affidavit_of_law_degree_validation,
                'affidavit_of_stamp_duty' => $affidavit_of_stamp_duty_validation,
                'affidavit_of_aibe' => $affidavit_of_aibe_validation,
                'service_certificate' => $service_certificate_validation,
                'document_of_column_12_13_14' => $document_of_column_12_13_14_validation,
                'gap_affidavit' => $gap_affidavit_validation,
                'additional_affidavit' => $additional_affidavit_validation,
                'any_other_infomation' => $any_other_infomation_validation,
                'total_mark_of_plus_two' => 'required',
                'obtain_mark_of_plus_two' => 'required',
                'total_mark_of_gradutation' => 'required',
                'obtain_mark_of_gradutation' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['errors'=>$validator->getMessageBag()->toArray(), 'status' => false], 422);
            }

            $documentUpload = DocumentUpload::where('user_id', Auth::user()->id)->first();

            if(!$documentUpload){
                $documentUpload = new DocumentUpload(auth::user()->id);
            }

            if($request->file('provisional_certificate_of_llb')){
                $file = $request->file('provisional_certificate_of_llb');
                $provisional_certificate_of_llb = $this->uploadfile($file);
                $documentUpload->provisional_certificate_of_llb =  $provisional_certificate_of_llb;
            }

            if($request->file('attendance_certificate')){
                $file = $request->file('attendance_certificate');
                $attendance_certificate = $this->uploadfile($file);
                $documentUpload->attendance_certificate =  $attendance_certificate;
            }

            if($request->file('dmc_of_llb')){
                $file = $request->file('dmc_of_llb');
                $dmc_of_llb = $this->uploadfile($file);
                $documentUpload->dmc_of_llb =  $dmc_of_llb;
            }

            if($request->file('matriculation_certificate')){
                $file = $request->file('matriculation_certificate');
                $matriculation_certificate = $this->uploadfile($file);
                $documentUpload->matriculation_certificate =  $matriculation_certificate;
            }

            if($request->file('plus_two_certificate')){
                $file = $request->file('plus_two_certificate');
                $plus_two_certificate = $this->uploadfile($file);
                $documentUpload->plus_two_certificate =  $plus_two_certificate;
            }

            if($request->file('all_dmc_certificate_of_llb')){
                $file = $request->file('all_dmc_certificate_of_llb');
                $all_dmc_certificate_of_llb = $this->uploadfile($file);
                $documentUpload->all_dmc_certificate_of_llb =  $all_dmc_certificate_of_llb;
            }

            if($request->file('affidavit_of_law_degree')){
                $file = $request->file('affidavit_of_law_degree');
                $affidavit_of_law_degree = $this->uploadfile($file);
                $documentUpload->affidavit_of_law_degree =  $affidavit_of_law_degree;
            }

            if($request->file('affidavit_of_stamp_duty')){
                $file = $request->file('affidavit_of_stamp_duty');
                $affidavit_of_stamp_duty = $this->uploadfile($file);
                $documentUpload->affidavit_of_stamp_duty =  $affidavit_of_stamp_duty;
            }

            if($request->file('affidavit_of_aibe')){
                $file = $request->file('affidavit_of_aibe');
                $affidavit_of_aibe = $this->uploadfile($file);
                $documentUpload->affidavit_of_aibe =  $affidavit_of_aibe;
            }

            if($request->file('service_certificate')){
                $file = $request->file('service_certificate');
                $service_certificate = $this->uploadfile($file);
                $documentUpload->service_certificate =  $service_certificate;
            }

            if($request->file('document_of_column_12_13_14')){
                $file = $request->file('document_of_column_12_13_14');
                $document_of_column_12_13_14 = $this->uploadfile($file);
                $documentUpload->document_of_column_12_13_14 =  $document_of_column_12_13_14;
            }

            if($request->file('gap_affidavit')){
                $file = $request->file('gap_affidavit');
                $gap_affidavit = $this->uploadfile($file);
                $documentUpload->gap_affidavit =  $gap_affidavit;
            }

            if($request->file('additional_affidavit')){
                $file = $request->file('additional_affidavit');
                $additional_affidavit = $this->uploadfile($file);
                $documentUpload->additional_affidavit =  $additional_affidavit;
            }

            if($request->file('any_other_infomation')){
                $file = $request->file('any_other_infomation');
                $any_other_infomation = $this->uploadfile($file);
                $documentUpload->any_other_infomation =  $any_other_infomation;
            }

            $documentUpload->user_id = Auth::user()->id;
            $documentUpload->date_of_completion = $request->date_of_completion;
            $documentUpload->total_mark_of_plus_two = $request->total_mark_of_plus_two;
            $documentUpload->obtain_mark_of_plus_two = $request->obtain_mark_of_plus_two;
            $documentUpload->plus_two_percentage = $request->plus_two_percentage;
            $documentUpload->total_mark_of_gradutation = $request->total_mark_of_gradutation;
            $documentUpload->obtain_mark_of_gradutation = $request->obtain_mark_of_gradutation;
            $documentUpload->graduation_percentage = $request->graduation_percentage;
            if($documentUpload->save()) {
                return response()->json(['message'=>'Document upload successfully', 'redirect' => route('payment'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function used to move file into the storage path
     */
    public function uploadfile($file) {
        $fileName = md5(time()). '.' . $file->getClientOriginalExtension();
        $createFolder = public_path(). '/images/documentUploads/' . auth()->user()->id;
        if (! \File::exists($createFolder)) {
            \File::makeDirectory($createFolder, 0777, true);
        }
        $filePath = \Storage::disk('public')->path('documentUploads');
        $file->move($createFolder, $fileName);
        return $fileName;
    }

    /**
     * This function used to open the official report form
     */
    public function officialReportForm() {
        $data['officialReport'] = OfficialReport::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.officialReport', $data);
    }

    /**
     * This function used to save the official report form
     */
    public function saveOfficialReportForm(Request $request) {
        try {
            $officialReport = OfficialReport::where('user_id', Auth::user()->id)->first();
            if(!$officialReport){
                $officialReport = new OfficialReport;
            }
            $officialReport->user_id = Auth::user()->id;
            $officialReport->study_gap = $request->study_gap ? $request->study_gap : config('CommonStatus.INACTIVE');
            $officialReport->criminal_procedding = $request->criminal_procedding ? $request->criminal_procedding : config('CommonStatus.INACTIVE');
            $officialReport->above_21_years = $request->above_21_years ? $request->above_21_years : config('CommonStatus.INACTIVE');
            $officialReport->ex_service_men = $request->ex_service_men ? $request->ex_service_men : config('CommonStatus.INACTIVE');
            $officialReport->foreign_law = $request->foreign_law ? $request->foreign_law : config('CommonStatus.INACTIVE');
            $officialReport->date_of_completion = $request->date_of_completion;
            if($officialReport->save()) {
                return response()->json(['message'=>'Official report submit successfully', 'redirect' => route('officialReportForm'), 'status' => true]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function used to view offical order 1
     */
    public function officialOrder1() {
        try {
            return view('front.applicationForm.officialOrder1');
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function used to view offical order 2
     */
    public function officialOrder2() {
        try {
            return view('front.applicationForm.officialOrder2');
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function is used to open the printing page only
     */
    public function printPage() {
        $data['certify_form'] = CertifyForm::where('user_id', Auth::user()->id)->first();
        $data['application_form'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
        return view('front.applicationForm.printPage', $data);
    }

    /**
     * This function is used to open virtual tour of bcph
     */
    public function virtualTour() {
        return view('front.applicationForm.virtualTour');
    }

    /**
     * This function is used to get the fee detail of particular category
     */
    function getFeeDetail(Request $request) {
        try {
            return Fee::where('id', $request->categoryId)->first();
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    function payment() {
        try {
            $data['tatkaal'] = TatkaalFee::first();
            $data['applicationForm'] = ApplicationForm::where('user_id', Auth::user()->id)->first();
            return view('front.applicationForm.payment', $data);
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }

    /**
     * Payment with using paytm
    */
    public function pay(Request $request) {
        try {
            ApplicationForm::where('user_id', Auth::user()->id)->update([
                'total_pay' => $request->total_pay,
                'tatkaal_fees' => $request->tatkaal_fee,
                'paytm_order_id' => \Str::random(4).time(),
            ]);

            $applicationFormData = ApplicationForm::where('user_id', Auth::user()->id)->first();

            $payment = PaytmWallet::with('receive');
            $payment->prepare([
                'order' => $applicationFormData->paytm_order_id,
                'user' => auth()->user()->id,
                'mobile_number' => auth()->user()->mobile_number,
                'email' => auth()->user()->email, // your user email address)
                'amount' => $applicationFormData->total_pay, // amount will be paid in INR.
                'callback_url' => route('status') // callback URL
            ]);

            return $payment->receive();

            if($applicationFormData) {
                return response()->json(['message'=>'Application form submitted successfully',
                'redirect' => route('status'),
                'status' => true]);
            }

            return $payment->receive();


        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function testPaytm(Request $request)
    {
        $amount = 1500; //Amount to be paid

        $userData = [
            'name' => 'varinder', // Name of user
            'mobile' => 7508068170, //Mobile number of user
            'email' => 'varinder.slinfy@gmail.com', //Email of user
            'fee' => $amount,
            'order_id' => rand(1,1000) //Order id
        ];


        $payment = PaytmWallet::with('receive');

        $payment->prepare([
            'order' => $userData['order_id'],
            'user' => 1,
            'mobile_number' => $userData['mobile'],
            'email' => $userData['email'], // your user email address
            'amount' => $amount, // amount will be paid in INR.
            'callback_url' => route('status') // callback URL
        ]);
        return $payment->receive();  // initiate a new payment
    }

    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');

        $response = $transaction->response();

        $order_id = $transaction->getOrderId(); // return a order id
        $transaction->getTransactionId(); // return a transaction id

        // update the db data as per result from api call
        if ($transaction->isSuccessful()) {
            ApplicationForm::where('paytm_order_id', $order_id)->update(['paytm_status' => 1, 'paytm_transaction_id' => $transaction->getTransactionId()]);
            return redirect(route('paymentDetail', $order_id));

        } else if ($transaction->isFailed()) {
            ApplicationForm::where('paytm_order_id', $order_id)->update(['paytm_status' => 0, 'paytm_transaction_id' => $transaction->getTransactionId()]);
            return redirect(route('paymentDetail', $order_id));
        } else if ($transaction->isOpen()) {
            ApplicationForm::where('paytm_order_id', $order_id)->update(['paytm_status' => 2, 'paytm_transaction_id' => $transaction->getTransactionId()]);
            return redirect(route('paymentDetail', $order_id));
            // return redirect(route('applicationForm'))->with('message', "Your payment is processing.");
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        // $transaction->getOrderId(); // Get order id
    }

    /**
     * This function is used to get the colleges list based on university id
     */
    public function getCollegeList(Request $request) {
        try {
            return College::where('university_id', $request->universityId)->orderBy('name', 'ASC')->get();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


}
