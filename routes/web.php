<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;


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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();
Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
    Route::get('/', 'HomeController@index')->name('home');

    //controller per gli utenti autentificati
    Route::resource("posts","PostController");
});


    //rotta generica
    Route::get("{any?}", function(){
        return view("guests.home");
    })->where("any",".*");

