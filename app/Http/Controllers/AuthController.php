<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("login");
    }

    public function loginSubmit(Request $request){

        // Form Validation

        $request->validate(
            [
                "text_username" => "required",
                "text_password" => "required"
            ]
        );

        // get user input

        $request->input("text_username");
        $request->input("text_password");


        echo "OK";
    }

    public function logout(){
        echo "Logout";
    }
}
