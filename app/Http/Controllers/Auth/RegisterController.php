<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{

    public function register()
    {
        return view("Auth.Register");
    }

    public function postRegister(Request $request) {
        $password = $request->password;
        $username = $request->username;
        $email = $request->email;
        $shopName = $request->shopName;

        $response = Http::post("https://jotform-intern.herokuapp.com/Register.php",[
            "password" => $password,
            "username" => $username,
            "email" => $email,
            "shopName" => $shopName
        ]);

        $decodedResponse = json_decode($response);
        if ($decodedResponse->success)
        {
            session(['token' => $decodedResponse->data->userToken]);
            return $decodedResponse->message;
        }
        return $decodedResponse->message;
    }
}
