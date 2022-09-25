<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Hellocontroller extends Controller
{
    public function __construct()
    {
    echo auth()->user()->id;
    }


    public function hello(){
        return view('hello');
    }
}
