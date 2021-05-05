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

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Auth::routes();
Route::group(['middleware'=>'guest'],function () {
    Route::match(['get', 'post'],'login',['as'=>'login','uses'=>'LoginController@index']);
});
Route::group(['middleware'=>'auth'],function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'ProfileCOntroller@index')->name('profile');
        Route::post('/update', 'ProfileCOntroller@updateProfile')->name('update_profile');
    });
});
