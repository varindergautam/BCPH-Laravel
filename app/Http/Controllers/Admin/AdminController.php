<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * This function use to login the user with LoginRequest validation
     */
    public function loginAdmin(LoginRequest $request) {
        try {
            $credentials = $request->except(['_token']);
            if (Auth::attempt($credentials)) {
                if(auth()->user()->user_type == config('userTypes.admin'))
                {
                    return redirect()->route('admin.dashboard');
                }
                else {
                    return redirect()->route('admin.login');
                }
            }
            else{
                return back()->with('error', 'Credential not matched');
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    

    public function updateAdminPassword(Request $request)
    {
        $data = $request->post();
        //print_r($data);die();
        $rules = [
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password|min:8',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->with('error', 'Insufficient data to update.');
        }

        $user = User::find(1);
        //print_r($user->password);die;

        if (!Hash::check($data['old_password'], $user->password)) {
            return back()
                ->with('error', 'The specified password does not match the database password');
        } else {
            $userData = User::find(1);
            $userData['password'] = bcrypt($data['new_password']);
            $userData->save();
            return back()->with('success', 'Your password changed successfully.');
        }
    }
}
