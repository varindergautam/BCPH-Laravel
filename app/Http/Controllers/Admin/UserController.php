<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AffidavitForm;
use App\Models\ApplicationForm;
use App\Models\CertifyForm;
use App\Models\DeclarationForm;
use App\Models\DocumentUpload;
use App\Models\Fee;
use App\Models\Undertaking;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use PhpOffice\PhpSpreadsheet\Writer\Pdf;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\Storage;

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

    public function viewForm($id){
        $data['fees'] = Fee::all();
        $data['user'] = User::find($id);
        $data['applicationForm'] = ApplicationForm::where('user_id', $id)->first();
        $data['declaration_data'] = DeclarationForm::where('user_id', $id)->first();
        $data['undertaking'] = Undertaking::where('user_id', $id)->first();
        $data['affidavit_data'] = AffidavitForm::where('user_id', $id)->first();
        $data['certify_form'] = CertifyForm::where('user_id', $id)->first();
        $data['documentUpload'] = DocumentUpload::where('user_id', $id)->first();
        return view('admin.user.user_form', $data);
    }

    public function testPdf () {
        try {
            TCPDF::reset();
            // TCPDF::SetFont('aealarabiya', '', 12);

            $html = view('license_card.license_card');

            TCPDF::SetTitle("Card");
            $tagvs = array('p' => array(0 => array('h' => 0, 'n' => 0), 1 => array('h' => 0, 'n' => 0)));
            TCPDF::setHtmlVSpace($tagvs);
            TCPDF::AddPage();
            TCPDF::writeHTML($html, true, false, true, false, '');
            $path = Storage::disk('public')->path('license_card');

            $fileName = 'test.pdf';

            TCPDF::Output($path.'/'.$fileName,'I');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
