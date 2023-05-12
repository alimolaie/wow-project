<?php
use Illuminate\Support\Facades\Auth;
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
Route::get('/register-player', 'PlayerController@registerForm')->name('register.player');
Route::get('player/dashboard', 'PlayerController@dashboard')->name('player.dashboard');

Route::get('/login-player', function () {
    return view('web.login-player');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test-auth-player', function (){
    if (Auth::guard("player")->check()==true)
        echo "true";
    else
        echo "false";
})->name('test.auth.player');
Route::post('/player-signup', 'PlayerController@registerAction')->name('player.signup');

Route::get('/send-mail-list', 'EmailController@listSendEmail')->name('list.send.email');
Route::get('/send-mail-details/{id}', 'EmailController@showDetailsSend')->name('list.send.email.details');
Route::post('/send-mail', 'EmailController@sendMail')->name('send.mail');
Route::post('/dropzone-upload', 'AttchmentController@store')->name('dropzone.upload');
Route::post('/dropzone-delete', 'AttchmentController@delete')->name('dropzone.delete');
Route::get('/logout-user',function (){
    Auth::logout();
})->name('logout.user');
//user
Route::resource('/user', 'UserController');
Route::resource('/realm', 'RelamController');
Route::resource('/player', 'PlayerController');
Route::post('/user-login', 'UserController@loginAction')->name('user.login');
Route::post('/player-login', 'PlayerController@loginAction')->name('player.login');
Route::get('/gold-calculator',function (){
    return view('gold.gold-calculator');
});

