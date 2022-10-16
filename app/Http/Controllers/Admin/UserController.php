<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    public function list() {
        return view('admin.user.list');
    }

    public function userAjax(Request $request) {
        // if(1 != $request->ajax()){
        //     die('ok');
        // }

        $users = User::where('user_type', config('userTypes.user'))->get();
    
        if(count($users) > 0) {
            foreach($users as $key => $user) {
                $fee = Fee::where('id', $user->category)->first();
                $users[$key]['sr_no'] = $key + 1;
                $users[$key]['applicant_name'] = $user->applicant_name;
                $users[$key]['email'] = $user->email;
                $users[$key]['mobile_number'] = $user->mobile_number;
                $users[$key]['category'] = $fee->category;
                $users[$key]['action'] = NULL;
                $users[$key]['show'] = route('admin.user.show', $user->id);
                $users[$key]['viewForm'] = route('admin.user.viewForm', $user->id);
            }
        }

        return Datatables::of($users)
            // ->addColumn('checkbox', '<input type="checkbox" name="checkbox[]" class="delete_check" value="" id="delcheck_"'.$row['id'].'/>')            
            ->rawColumns(['action'])
            ->make(true);
    }

    public function show($id ){
        $data['user'] = User::with('fee')->find($id);
        return view('admin.user.show', $data);
    }

    public function viewForm(){
        die('view form');
    }
}
