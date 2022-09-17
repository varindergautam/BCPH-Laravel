<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\UserRegisterMail;
use Illuminate\Http\Request;
use Response;
use Validator;
use Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function registerValidation($request) {
        $validator = Validator::make($request->all(), [
            'applicant_name' => 'required|string|max:50',
            'email' => 'required|email|unique:users',
        ]);

        if ($validator->fails()) { 
            return response()->json(['errors'=>$validator->getMessageBag()->toArray(), 'status' => config('CommonStatus.INACTIVE')]);
        }
    }
    public function register() {
        return view('front.user.register');
    }

    function getToken()
    {
        $length = 8;
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
        }

        return $token;
    }

    public function generate_random_number($digits = 8) {
        srand((double) microtime() * 10000000);
        $input = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
        $random_generator = "";
        for ($i = 1; $i <= $digits; $i++) {
            if (rand(1, 2) == 1) {
                $rand_index = array_rand($input);
                $random_generator .=$input[$rand_index];
            } else {
                $random_generator .=rand(1, 9);
            }
        }
        return $random_generator;
    }

    public function storeRegister(RegisterRequest $request) {
        try {
            $user = new User;
            $user->applicant_name = $request->applicant_name;
            $user->father_name = $request->father_name;
            $user->email = $request->email;
            $user->mobile_number = $request->mobile_number;
            $user->category = $request->category;
            $user->nationality = $request->nationality;
            $user->country = $request->country;
            $user->state = $request->state;
            $user->city = $request->city;
            $user->district = $request->district;
            $user->date_of_birth = $request->date_of_birth;
            $user->adhaarno = $request->adhaarno;

            $mailData['name'] = $request->applicant_name;
            $mailData['password'] = $this->generate_random_number();
            $mailData['email'] = $request->email;

            $user->password = Hash::make($mailData['password']);
            $user->save();

            if($user) {
                Mail::to($request->email)->send(new UserRegisterMail($mailData));
                return response()->json(['message'=>'You have successfull registered, now you can login..', 'status' => true]);
            }

        } catch (\Throwable $th) {
            print_r($th->getMessage());die('hhhhh');
            throw $th;
        }
    }

    public function login() {
        return view('front.user.login');
    }

    public function loginUser(LoginRequest $request) {
        try {
            $credentials = $request->except(['_token']);
            if (Auth::attempt($credentials)) {
                return response()->json(['message'=>'You have successfull login', 
                'redirect' => route('applicationForm'),
                'status' => true]);
            }
            else{
                return response()->json(['message'=>'No user found', 'status' => false]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => false]);
            throw $th;
        }
    }

    public function changePassword() {
        return view('front.user.changePassword');
    }

    public function testEmail()
    {
        Mail::send([], [],
            function ($message)  {
                $message
                    ->from('noreplay@bervorapp.com', 'Bervor')
                    ->to('varinder.slinfy@gmail.com')
                    ->subject('test')
                    ->setBody('message', 'text/html');
            });  
    }
}
