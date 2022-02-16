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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/reg', function () {
    return view('registration');
})->name('registration');
Route::post('/reg/submit/', 'RegistrationController@submit')->name('submit_new_user');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login/submit', 'LoginController@loginValidate' )->name('submit_login');
