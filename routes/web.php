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
$nc = "App\Http\Controllers\\";// Namespace del controller

// Route::get('/', function () {
//     return view('login');
// });

// Route::view('/log-in', 'login');
// Route::view('/log-up', 'login')->name("log-up");

Route::get("/", $nc."LoginController@index");


Route::controller($nc.LoginController::class)->group( function(){
    Route::get('/log-in', "index")->name("log-in");
    Route::get('/log-up', "index")->name("log-up");
    Route::post('/log-in', "auth");

});
