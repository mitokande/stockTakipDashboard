<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        $password = $request->password;
        $username = $request->username;

        $response = Http::post('https://jotform-intern.herokuapp.com/Login.php',[
            "username"=> $username,
            "password"=> $password
        ]);
        $responseData = json_decode($response);
        if ($responseData->success)
        {
            session(['token' => $responseData->data->userToken]);
            return $responseData->message;
        }
      return $responseData->message;
    }
}
