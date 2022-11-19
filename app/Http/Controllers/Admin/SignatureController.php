<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignatureRequest;
use App\Models\Signature;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function create() {
        $data['signature'] = Signature::first();
        return view('admin.signature.signature', $data);
    }

    public function uploadfile($file) {
        $fileName = md5((string)\Str::uuid()). '.' . $file->getClientOriginalExtension();
        $createFolder = public_path(). '/images/signatures';
        if (! \File::exists($createFolder)) {
            \File::makeDirectory($createFolder, 0777, true);
        }
        $file->move($createFolder, $fileName);
        return $fileName;
    }

    public function store(SignatureRequest $request) {
        try {
            $signature = new Signature();
            if($request->file('bcph_stamp')){
                $image = $request->file('bcph_stamp');
                $bcph_stamp = $this->uploadfile($image);
                $signature->bcph_stamp =  $bcph_stamp;
            }

            if($request->file('hony_secretary')){
                $image = $request->file('hony_secretary');
                $hony_secretary = $this->uploadfile($image);
                $signature->hony_secretary =  $hony_secretary;
            }

            if($request->file('prepared_by')){
                $image = $request->file('prepared_by');
                $prepared_by = $this->uploadfile($image);
                $signature->prepared_by =  $prepared_by;
            }

            if($request->file('background_logo')){
                $image = $request->file('background_logo');
                $background_logo = $this->uploadfile($image);
                $signature->background_logo =  $background_logo;
            }

            $signature->save();
            return redirect()->route('admin.signature.create')->with('success', 'Successfully');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request) {
        try {
            $signature = Signature::find($request->id);
            if($request->file('bcph_stamp')){
                $image = $request->file('bcph_stamp');
                $bcph_stamp = $this->uploadfile($image);
                $signature->bcph_stamp =  $bcph_stamp;
            }

            if($request->file('hony_secretary')){
                $image = $request->file('hony_secretary');
                $hony_secretary = $this->uploadfile($image);
                $signature->hony_secretary =  $hony_secretary;
            }

            if($request->file('prepared_by')){
                $image = $request->file('prepared_by');
                $prepared_by = $this->uploadfile($image);
                $signature->prepared_by =  $prepared_by;
            }

            if($request->file('background_logo')){
                $image = $request->file('background_logo');
                $background_logo = $this->uploadfile($image);
                $signature->background_logo =  $background_logo;
            }

            $signature->save();
            return redirect()->route('admin.signature.create')->with('success', 'Updated Successfully');

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
