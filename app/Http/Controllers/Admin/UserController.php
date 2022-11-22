<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AffidavitForm;
use App\Models\ApplicationForm;
use App\Models\CertifyForm;
use App\Models\DeclarationForm;
use App\Models\DocumentUpload;
use App\Models\Fee;
use App\Models\Signature;
use App\Models\Undertaking;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf; 
use Dompdf\Options;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\Mail;
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
                $users[$key]['id'] = $user->id;
                $users[$key]['applicant_name'] = $user->applicant_name;
                $users[$key]['email'] = $user->email;
                $users[$key]['mobile_number'] = $user->mobile_number;
                $users[$key]['category'] = $fee->category;
                $users[$key]['action'] = NULL;
                $users[$key]['show'] = route('admin.user.show', $user->id);
                $users[$key]['viewForm'] = route('admin.user.viewForm', $user->id);
                $users[$key]['verified_user'] = $user->verified;
                $users[$key]['verified_url'] = url('admin/user/verified/'. $user->id .'/'.$user->verified);
            }
        }

        return Datatables::of($users)
            // ->addColumn('checkbox', '<input type="checkbox" name="checkbox[]" class="delete_check" value="" id="delcheck_"'.$row['id'].'/>')            
            ->rawColumns(['Verification', 'action'])
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

    public function verify_user($userId, $verified) {
        try {
            $user = User::find($userId);
            $status = $verified;
            if ($user) {
                $user->verified = ($status == '0') ? '1' : '0';
       
                // $user->save();

                $data['user'] = $user;

                $data['signature'] = Signature::first();

                $options = new Options();
                $options->setIsRemoteEnabled(true);

                $dompdf = new Dompdf($options);

                $html = view('license_card.dom_pdf_card', $data);

                $dompdf->loadHtml($html); 
            
                // (Optional) Setup the paper size and orientation 
                $dompdf->setPaper('A4', 'portrait'); 
                
                // Render the HTML as PDF 
                $dompdf->render();

                // Output the generated PDF to Browser 
                $fileName = $user->applicant_name .'_' . $user->id . '.pdf';

                $path = Storage::disk('public')->path('license_card');
                // $dompdf->stream($path .'/'.$fileName, array("Attachment" => 1));
                $content = $dompdf->output();
                Storage::put('public/license_card/' . $fileName, $content);

                $filePAth = Storage::disk('local')->url('app/public/license_card/'.$fileName);

                $fullPath = url() . '/' . $filePAth;

                // $mail = Mail::send('mail', $data, function($message, $fullPath) {
                //     $message->to('varindergautam48@gmail.com', 'Tutorials Point')->subject
                //        ('Laravel Testing Mail with Attachment');
                //     $message->attach($fullPath);
                //     $message->from('varinder.slinfy@gmail.com','Virat Gandhi');
                //  });

                //  print_r($mail);

                Mail::send([], [],
                function ($message, $fullPath)  {
                    $message
                        ->from('noreplay@bervorapp.com', 'Bervor')
                        ->to('varinder.slinfy@gmail.com')
                        ->subject('test')
                        ->setBody('message', 'text/html');
                }); 

                 die();
    
                $result['status'] = 1;
                return response()->json($result, 200);
            } else {
                $result['status'] = 0;
                return response()->json($result, 200);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function testPdf () {
        try {
            TCPDF::reset();

            $data['signature'] = Signature::first();

            $options = new Options();
            $options->setIsRemoteEnabled(true);

            $dompdf = new Dompdf($options);

            // $html = view('license_card.license_card');
            $html = view('license_card.dom_pdf_card', $data);

            $dompdf->loadHtml($html); 
         
            // (Optional) Setup the paper size and orientation 
            $dompdf->setPaper('A4', 'portrait'); 
            
            // Render the HTML as PDF 
            $dompdf->render();

            // Output the generated PDF to Browser 
            $dompdf->stream("invoice", array("Attachment" => 0));

            die();

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
