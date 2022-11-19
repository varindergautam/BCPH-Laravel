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
    // 'login' => false,
  ]);

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

  Route::get('/virtual-tour', 'App\Http\Controllers\Front\ApplicationFormController@virtualTour')->name('virtualTour');

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
        Route::get('/testSms', 'testSms')->name('testSms');
       
    });

    // Route::get('/testPaytm', 'App\Http\Controllers\Front\ApplicationFormController@testPaytm')->name('testPaytm');
    // Route::post('/status', 'App\Http\Controllers\Front\ApplicationFormController@paymentCallback')->name('status');


    Route::controller(App\Http\Controllers\Admin\AdminController::class)
    // ->prefix('admin')
    ->as('admin.')
    ->group(function () {
      Route::get('/admin_login', 'login')->name('login');
      Route::post('/loginAdmin', 'loginAdmin')->name('loginAdmin');
    });

  Route::group(['middleware' => ['auth']], function () {

    Route::controller(App\Http\Controllers\Front\ApplicationFormController::class)
    ->group(function () {
      Route::get('/change-password', 'changePassword')->name('changePassword');
        Route::post('/updatePassword', 'updatePassword')->name('updatePassword');
        
        Route::get('/application-form', 'applicationForm')->name('applicationForm');
        Route::post('/saveApplicationForm', 'saveApplicationForm')->name('saveApplicationForm');


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

        Route::get('/official-report', 'officialReportForm')->name('officialReportForm');
        Route::post('/saveOfficialReportForm', 'saveOfficialReportForm')->name('saveOfficialReportForm');

        Route::get('/official-order-1', 'officialOrder1')->name('officialOrder1');
        Route::get('/official-order-2', 'officialOrder2')->name('officialOrder2');

        Route::get('/print-data', 'printPage')->name('printPage');

        Route::get('/getFeeDetail', 'getFeeDetail')->name('getFeeDetail');

        Route::get('payment', 'payment')->name('payment');
        Route::post('/pay', 'pay')->name('pay');
        // Route::post('/status', 'paymentCallback')->name('status');

        Route::get('/getCollegeList', 'getCollegeList')->name('getCollegeList');
    });

    Route::post('/status', 'App\Http\Controllers\Front\ApplicationFormController@paymentCallback')->name('status');

    Route::group(['middleware' => ['userAuthenticate'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

      Route::controller(App\Http\Controllers\Admin\DashboardController::class)
      ->prefix('dashboard')
      ->group(function () {
        Route::get('/', 'dashboard')->name('dashboard');
      });

      Route::controller(App\Http\Controllers\Admin\FeeController::class)
      ->prefix('fee')
      ->as('fee.')
      ->group(function () {
        Route::get('/', 'index')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');

        Route::get('tatkaal', 'tatkaalFee')->name('tatkaalFee');
        Route::post('tatkaalFeeStore', 'tatkaalFeeStore')->name('tatkaalFeeStore');
      });

      Route::controller(App\Http\Controllers\Admin\UserController::class)
      ->prefix('user')
      ->as('user.')
      ->group(function () {
        Route::get('/', 'list')->name('list');
        Route::get('/userAjax', 'userAjax')->name('userAjax');
        Route::get('/view/{id}', 'show')->name('show');
        Route::get('/viewForm/{id}', 'viewForm')->name('viewForm');

        Route::get('/testPdf', 'testPdf')->name('testPdf');

      });

      Route::controller(App\Http\Controllers\Admin\CollegeController::class)
      ->prefix('college')
      ->as('college.')
      ->group(function () {
        Route::get('/', 'index')->name('list');
        Route::get('/collegeAjax', 'collegeAjax')->name('collegeAjax');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
      });

      Route::controller(App\Http\Controllers\Admin\UniversityController::class)
      ->prefix('university')
      ->as('university.')
      ->group(function () {
        Route::get('/', 'index')->name('list');
        Route::get('/universityAjax', 'universityAjax')->name('universityAjax');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
      });

      Route::controller(App\Http\Controllers\Admin\CityController::class)
      ->prefix('city')
      ->as('city.')
      ->group(function () {
        Route::get('/', 'index')->name('list');
        Route::get('/cityAjax', 'cityAjax')->name('cityAjax');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
      });

      Route::controller(App\Http\Controllers\Admin\SignatureController::class)
      ->prefix('signature')
      ->as('signature.')
      ->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
      });
    });
  });

  

