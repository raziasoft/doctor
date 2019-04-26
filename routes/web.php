<?php

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
    return view('auth.login');
});

Auth::routes();
Route::group(['prefix' => 'dashboard'], function(){
Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/allpatient/active_category/{id}', 'Backend\AllpatientController@active_category')->name('allpatient');

Route::get('/allpatient/unactive_category/{id}', 'Backend\AllpatientController@unactive_category')->name('allpatient');

Route::get('/allpatient', 'Backend\AllpatientController@index')->name('allpatient');
Route::resource('/fees','Backend\FeesController');
Route::resource('/prescription','Backend\PrescriptionController');
Route::resource('/addpatient','Backend\AddpatientController');
Route::resource('/venue','Backend\VenueController');
Route::resource('/blood','Backend\BloodController');
Route::resource('/mail','Backend\MailController');
Route::resource('/sms','Backend\SmsController');
});

