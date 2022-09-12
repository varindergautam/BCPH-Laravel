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

  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

  Route::controller(App\Http\Controllers\Front\UserController::class)
    // ->prefix('placements')
    // ->as('placements.')
    ->group(function () {
        Route::get('/', 'register')->name('register');
        Route::post('/storeRegister', 'storeRegister')->name('storeRegister');
        Route::get('/login', 'login')->name('login');
        Route::post('/loginUser', 'loginUser')->name('loginUser');
        Route::get('/testEmail', 'testEmail')->name('testEmail');
    });

  Route::group(['middleware' => ['auth']], function () {
    Route::controller(App\Http\Controllers\Front\ApplicationFormController::class)
    ->group(function () {
        Route::get('application-form', 'applicationForm')->name('applicationForm');
        Route::post('orderid-generate', 'orderIdGenerate')->name('orderIdGenerate');
        Route::get('paysuccess', 'paysuccess')->name('paysuccess');
    });
  });

