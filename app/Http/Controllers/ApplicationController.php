<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function home()
    {
        return view("welcome");
    }

    public function directLogin()
    {
        
    }
}
