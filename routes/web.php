<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'login' => false,
  ]);

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

  Route::controller(App\Http\Controllers\Front\UserController::class)
    // ->prefix('placements')
    // ->as('placements.')
    ->group(function () {
        Route::get('/', 'register')->name('register');
        Route::post('/storeRegister', 'storeRegister')->name('storeRegister');
        
        Route::get('/login', 'login')->name('login');
        Route::post('/loginUser', 'loginUser')->name('loginUser');

        Route::get('/forgot-password', 'forgotPassword')->name('forgotPassword');
        Route::post('/mailForgotPassword', 'mailForgotPassword')->name('mailForgotPassword');

        Route::get('/testEmail', 'testEmail')->name('testEmail');
    });

  Route::group(['middleware' => ['auth']], function () {

    // Route::controller(App\Http\Controllers\Front\UserController::class)
    // ->group(function () {
    //     Route::get('/change-password', 'changePassword')->name('changePassword');
    //     Route::post('/updatePassword', 'updatePassword')->name('updatePassword');
    // });

    Route::controller(App\Http\Controllers\Front\ApplicationFormController::class)
    ->group(function () {
      Route::get('/change-password', 'changePassword')->name('changePassword');
        Route::post('/updatePassword', 'updatePassword')->name('updatePassword');

        Route::get('/application-form', 'applicationForm')->name('applicationForm');
        Route::post('/orderid-generate', 'orderIdGenerate')->name('orderIdGenerate');
        Route::get('/paysuccess', 'paysuccess')->name('paysuccess');
        Route::get('/payment-detail/{id}', 'paymentDetail')->name('paymentDetail');
        
        Route::get('declaration-form', 'declarationForm')->name('declarationForm');
        Route::post('saveDeclarationForm', 'saveDeclarationForm')->name('saveDeclarationForm');

        Route::get('/undertaking', 'undertaking')->name('undertaking');
        Route::post('/saveUndertakingForm', 'saveUndertakingForm')->name('saveUndertakingForm');

        Route::get('/affidavit-form', 'affidavitForm')->name('affidavitForm');
        Route::post('saveAffidavitForm', 'saveAffidavitForm')->name('saveAffidavitForm');

        Route::get('/certify', 'certifyForm')->name('certifyForm');
        Route::post('/saveCertifyForm', 'saveCertifyForm')->name('saveCertifyForm');

        Route::get('/enrolment-committte-form', 'enrolmentCommittteForm')->name('enrolmentCommittteForm');

        Route::get('/enrolment-advocate', 'enrolmentAsAdvocate')->name('enrolmentAsAdvocate');

        Route::get('/identity-card', 'identityCard')->name('identityCard');

        Route::get('/document-upload', 'documentUpload')->name('documentUpload');
        Route::post('/saveDocumentUpload', 'saveDocumentUpload')->name('saveDocumentUpload');
    });
  });

