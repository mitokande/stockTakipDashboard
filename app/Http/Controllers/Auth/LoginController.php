<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use MongoDB\Driver\Session;

class LoginController extends Controller
{

    public function login()
    {
        return view('Auth.login');
    }

    public function postLogin(Request $request)
    {
        $hasLoggedIn = AuthService::Login($request);
        
        if ($hasLoggedIn)
        {
            return redirect('/dashboard');
        }
      return $hasLoggedIn;
    }
}
