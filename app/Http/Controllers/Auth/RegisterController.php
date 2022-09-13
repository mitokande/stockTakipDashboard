<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{

    public function register()
    {
        return view("Auth.register");
    }

    public function postRegister(Request $request) {
        $response = AuthService::Register($request);
        
        if ($response)
        {
            return redirect('/dashboard');
        }
        return 'Username or email already on use<a href="/register">Turn back</a>';
    }
}
