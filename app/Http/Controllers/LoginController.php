<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    public function index() {

        return view('login');
    }


    public function auth(){
        return back()->withErrors([
            'message' => 'The email or password is incorrect, please try again',
        ]);
    }
}