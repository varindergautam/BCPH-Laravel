<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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
        return view('Front.applicationForm.applicationForm');
    }

    public function orderIdGenerate(Request $request) {
        try {
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
        $razorpayOrder = $this->api->order->create($orderData);
        return response()->json(['order_id' => $razorpayOrder['id']]);
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => false]);
            throw $th;
        }
		
		}

    public function paysuccess(Request $request) {
        try{
            $attributes = array(
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            );
            $this->api->utility->verifyPaymentSignature($attributes);
        }
        catch(SignatureVerificationError $e){
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => false]);
            throw $th;
        }
    }
}
