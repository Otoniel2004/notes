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
            //rules
            [
                "text_username" => "required|email",
                "text_password" => "required|min:6|max:16"
            ],
            // error messages 
            [
                "text_username.required" => "Fill in the field above",
                "text_username.email" => "Enter with an email",
                "text_password.required" => "Enter password",
                "text_password.min" => "Minimum size of :min characters",
                "text_password.max" => "maximum size of :max characters"

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
