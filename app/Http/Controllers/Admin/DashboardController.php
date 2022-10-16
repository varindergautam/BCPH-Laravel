<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $data['total_users'] = User::where('user_type', config('userTypes.user'))->count();
        $data['total_fee_category'] = Fee::count();
        return view('admin.dashboard.dashboard', $data);
    }
}
