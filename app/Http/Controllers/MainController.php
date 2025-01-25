<?php

namespace App\Http\Controllers;

use Dotenv\Parser\Value;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($value){
        return view("main", ["value" => $value]);
    }
}
