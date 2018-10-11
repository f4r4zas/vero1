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
Route::post('password-reset', 'Auth\LoginController@passwordReset')->name('passwordReset');

Route::post('/get_city', 'common_functions\LocationData@USCities');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::post('/get-pricing', 'Pricing@calculatePricing');

Route::get("/reset-password",'customPasswordReset@sendEmail');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', 'Commons@faq')->name('home');
Route::get('/how-it-works', 'Commons@how')->name('home');
Route::get('/about-us', 'Commons@about');
Route::get('/coverage', 'Commons@coverage');
Route::get('/service', 'Commons@service');
Route::get('/terms', 'Commons@terms');
Route::get('/help', 'Commons@help');
Route::get('/pricing', 'Commons@pricing');
Route::get('/insurace', 'Commons@insurance');

Route::get('/privacy', 'Commons@privacy');
Route::get('/career', 'Commons@career');
Route::get('/partner', 'Commons@partner');


/* ====================================== ADMIN ====================================== */

Route::prefix('admin')->group(function(){

	Route::get('/', 'admin\Pages@index');

	Route::get('/users', 'admin\Pages@users');

	Route::get('/pages', 'admin\Pages@pages')->name("admin.pages");

	Route::get('/createPage', 'admin\Pages@createPage')->name("admin.create");

	Route::post('/insertPage', 'admin\Pages@pageInsert')->name("insert-page");

	Route::post('/removePage', 'admin\Pages@pageRemove')->name("remove-page");

	Route::post('/editPage', 'admin\Pages@pageUpdateView')->name("edit-page");

	Route::post('/updatePage', 'admin\Pages@pageUpdate')->name("update-page");

});

Route::get('/{page}', 'Commons@dynamicPages');