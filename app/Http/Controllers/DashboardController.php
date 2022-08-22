<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    //
    public function index(){
        
        $response = Http::withHeaders([
            'Token' => session('token'),
        ])->post('https://jotform-intern.herokuapp.com/Stock.php', []);
        
        return view('dashboard.dashboard',[
            'user' =>unserialize(session('user')),
            'stocks' => json_decode($response)
        ]);
        
    }

    public function createStock(Request $request){
        $response = Http::withBody(json_encode([array('barcode' =>$request->barcode)]), 'application/json')->post('https://jotform-intern.herokuapp.com/Barcode.php', []);
        //8690793010052
        return view('dashboard.addStock',[
            'user' =>unserialize(session('user')),
            'barcode' => json_decode($response)
        ]);
    }
    public function addStock(Request $request){
        $response = Http::withHeaders([
            'Token' => session('token'),
        ])->withBody(json_encode([array(
            'urunAdi' =>$request->name,
            'barcode' =>$request->barcode,
            'fiyat' =>$request->price,
            'stok' =>$request->stock
        )]), 'application/json')->post('https://jotform-intern.herokuapp.com/Stock.php', []);
        return $response;
        return view('dashboard.addStock',[
            'user' =>unserialize(session('user')),
        ]);
    }

    public function checkBarcode(){
        return view('dashboard.checkBarcode',[
            'user' =>unserialize(session('user')),
        ]);
    }
}