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

Auth::routes();
Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(); 
Route::get('/', function () {
    return view('splash');
});
Route::get('/splash', function () {
    return view('splash1');
});
 
Route::get('/forgetpassword', function () {
    return view('auth.passwords.resetpassword');
});
 Route::get('/video', function () {
    return view('video');
});
 
 Route::get('/emailsent', function () {
    return view('auth.passwords.emailsent');
});
 Route::get('/successfullyupdated', function () {
    return view('auth.passwords.pwdupdated');
}); 

Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/updateprofile', 'HomeController@updateprofile')->name('updateprofile');


Route::post('/fpsendemail', 'Auth\ForgotPasswordController@sendemail')->name('fpsendemail');
Route::get('/resetpassword','Auth\ForgotPasswordController@verifyUser')->name('resetpassword');
Route::post('/updatepassword','Auth\ForgotPasswordController@updatepassword')->name('updatepassword');

Route::get('/meeting/{id}', 'HomeController@meeting')->name('meeting');
Route::get('/createmeeting', 'HomeController@create')->name('create');

//Route::get('meetup-conferencing/{meetup}','HomeController@joinMeetup');