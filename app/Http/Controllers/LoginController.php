<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index() {
        $activeUp = "";
        $activeIn  = "";

        (request()->routeIs('log-up')) ? $activeUp="active" : $activeIn=  "active" ;

        return view('login', ["activeUp"=>$activeUp, "activeIn"=>$activeIn]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required",

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
            // return response()->json(["status" => "failed", "message" => "validation_error", "errors" => $validator->errors()]);
        }

        $emailExists = LoginModel::where("email", $request->email)->first();

        if (!is_null($emailExists)) {
            return back()->withErrors([
                'email' => 'The email already exists.',
            ]);
        }

        // Crear un nuevo registro en la tabla my_users
        LoginModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return back()->with([
            'success' => 'Successful registration',
        ]);

    }

    public function auth(){
        return back()->withErrors([
            'message' => 'The email or password is incorrect, please try again',
        ]);
    }
}
