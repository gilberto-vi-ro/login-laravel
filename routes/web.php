<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
// $nc = "App\Http\Controllers\\";// Namespace del controller

// Route::get('/', function () {
//     return view('login');
// });

// Route::view('/log-in', 'login');
// Route::view('/log-up', 'login')->name("log-up");

Route::get("/", [LoginController::class, "index"]);


Route::controller(LoginController::class)->group( function(){
    Route::get('/log-in', "index")->name("log-in");
    Route::get('/log-up', "index")->name("log-up");
    Route::post('/log-in', "auth");

    // Route::get("profiles", "index");
    // Route::get("profile-step/{id}", "step");
    // Route::post("profile-create", "create");
    // Route::get("profile-show/{id}", "show");
    // Route::put("profile-update", "update");
    // Route::post("profile-updateImg", "updateImg");
    // Route::get("profile-users/{url}", "getImgUsers");
    // Route::delete("profile-destroy/{id}", "destroy");
});


Route::controller(HomeController::class)->group( function(){
    Route::get('/home', "index")->name("home");

});

Route::controller(AdminController::class)->group( function(){
    Route::get('/homeAdmin', "index")->name("homeAdmin");

});
