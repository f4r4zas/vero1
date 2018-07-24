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
    return view('welcome');
});

Route::get('/driver-register', 'Registration@index');
Route::get('/driver-register/{id}', 'Registration@index');

Route::post('/driver-register', 'Registration@registrationStep1');
Route::get('/basic-mail', 'Registration@basic_email');

/*Route::post('/driver-register', 'Registration@registrationStep1');
Route::post('/driver-register/2', 'Registration@registrationStep2');
Route::post('/driver-register/3', 'Registration@registrationStep3');*/

/*Route::post('/driver-register/{id}', function ($id) {
    echo "worked";
    return 'User '.$id;
});*/

Route::post('/driver-register/2', 'Registration@registrationStep2');
Route::post('/driver-register/3', 'Registration@registrationStep3');

/*Route::get('/driver-register/2', 'Registration@index');
Route::post('/driver-register/2', 'Registration@registrationStep1');*/


Route::get('/login','Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@doLogin');

Route::post('/get_city', 'common_functions\LocationData@USCities');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', 'Common@faq')->name('home');
Route::get('/how-it-works', 'Common@how')->name('home');
Route::get('/coverage', 'Common@coverage');