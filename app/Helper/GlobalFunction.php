<?php

use Illuminate\Support\Facades\Auth;
use App\Models\ApplicationForm;

function totalFees() {
    if(Auth::check() && auth()->user()->fee) {
        return auth()->user()->fee->basic_fees + auth()->user()->fee->bar_council_fees + auth()->user()->fee->building_fees;
    }

    return false;
}

function uploadfile($file, $path) {
    $fileName = md5((string)\Str::uuid()). '.' . $file->getClientOriginalExtension();
    $createFolder = public_path(). '/' .$path;
    if (! \File::exists($createFolder)) {
        \File::makeDirectory($createFolder, 0777, true);
    }
    $file->move($createFolder, $fileName);
    return $fileName;
}

function paymentConfirmaton() {
    try {
        $payment = ApplicationForm::where('user_id', auth()->user()->id)
        ->where('paytm_status', '1')
        ->first();

        if($payment) {
            return true;
        }

        return false;
        
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
}