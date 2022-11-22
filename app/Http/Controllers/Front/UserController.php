<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Mail\UserRegisterMail;
use App\Models\Fee;
use Illuminate\Http\Request;
use Response;
use Validator;
use Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

use function PHPUnit\Framework\throwException;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * This function generate a random number for 8 character
     */
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

    /**
     * This function open register form
     */
    public function register() {
        $data['fees'] = Fee::all();
        return view('front.user.register', $data);
    }

    /**
     * This function save register form data with RegisterRequest validation
     */
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
            $user->permanent_address = $request->permanent_address;
            $user->correspondence_address = $request->correspondence_address;

            if($request->file('profile_pic')){
                $profile = $request->file('profile_pic');
                $profile_pic = $this->uploadfile($profile);
                $user->profile_pic =  $profile_pic;
            }

            if($request->file('sign')){
                $sign = $request->file('sign');
                $sign_img = $this->uploadfile($sign);
                $user->sign =  $sign_img;
            }

            $mailData['name'] = $request->applicant_name;
            $mailData['password'] = $this->generate_random_number();
            $mailData['email'] = $request->email;
            $mailData['mobile_number'] = $request->mobile_number;
            $mailData['mail_type'] = 'create';

            $this->sendSms($mailData);
           
            $user->password = Hash::make($mailData['password']);
            $user->save();

            if($user) {
                $this->sendSms($mailData);
                Mail::to($request->email)->send(new UserRegisterMail($mailData));
                return response()->json(['message'=>'You have successfull registered, now you can login..', 'redirect' => route('login'), 'status' => true]);
            }

        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    public function uploadfile($file) {
        $fileName = md5((string)\Str::uuid()). '.' . $file->getClientOriginalExtension();
        $createFolder = public_path(). '/images/profile_signs';
        if (! \File::exists($createFolder)) {
            \File::makeDirectory($createFolder, 0777, true);
        }
        $file->move($createFolder, $fileName);
        return $fileName;
    }

    /**
     * This function open login form
     */
    public function login() {
        return view('front.user.login');
    }

    /**
     * This function use to login the user with LoginRequest validation
     */
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
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function open forgot password form
     */
    public function forgotPassword() {
        return view('front.user.forgotPassword');
    }

    /**
     * This function use to send new password to user on mail with LoginRequest validation
     */
    public function mailForgotPassword (ForgotPasswordRequest $request) {
        try {
            $email = $request->email;
            $user = User::where('email', $email)->first();
            if($user) {
                $mailData['name'] = $user->applicant_name;
                $mailData['password'] = $this->generate_random_number();
                $mailData['email'] = $user->email;
                $mailData['mail_type'] = 'forgot';
                $user->password = Hash::make($mailData['password']);

                if($user->save()) {
                    Mail::to($user->email)->send(new UserRegisterMail($mailData));
                    return response()->json(['message'=>'New password will send to mail, please check.', 'status' => true]);
                }
            }
            else{
                return response()->json(['message'=>'No user found', 'status' => false]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message'=> json_encode($th->getMessage()), 'status' => config('CommonStatus.INACTIVE')]);
            throw $th;
        }
    }

    /**
     * This function used for testing purpose of mail
     */
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

    public function sendSms($userDetails) {
        try {
            // $userDetails['email']  = 'varinder2gmail.com';
        // $userDetails['password']  = 'varinder2gmail.com';

        $url = 'https://login.yourbulksms.com/api/sendhttp.php?authkey=2326AD0y9UmRXx5a75457f&mobiles='.$userDetails['mobile_number'].'&message=Dear Applicant, Your registration ID is {'.$userDetails['email'].'} and the password is {'.$userDetails['password'].'}. Kindly log in to your account after completing the enrolment form and paying the registration fees. Team Bar Council of Punjab %26 Haryana&sender=BARCNL&route=4&country=91&DLT_TE_ID= 1707166695141110243';

        $client = new \GuzzleHttp\Client(['verify' => false,
            'base_uri' => 'https://login.yourbulksms.com/api'
        ]);
        // $client->setDefaultOption(['verify' => false,
            // 'base_uri' => 'https://login.yourbulksms.com/api'
        // ]);
        $response =  $client->request('GET', $url, []);
        if ($response->getStatusCode() == '200') {
            // $recordCreated = json_decode($response->getBody());
            return true;
        } else {
            return true;
        }


        } catch (\GuzzleHttp\Exception\RequestException $requestError) {
            return $requestError;
            return $requestJson = json_decode($requestError->getResponse()->getBody()->getContents(), true);
            \Illuminate\Support\Facades\Log::error($requestJson);
        }

    }
}
