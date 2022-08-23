<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    //
    public function index(){
        $stockResponse = Http::withHeaders([
            'Token' => session('token'),
        ])->post('https://jotform-intern.herokuapp.com/Stock.php', []);

        $orderResponse = Http::withHeaders([
            'Token' => session('token'),
        ])->post('https://jotform-intern.herokuapp.com/Order.php', []);
        $stockResponse = json_decode($stockResponse);
        $orderResponse = json_decode($orderResponse);
        if($stockResponse->success){
            return view('Dashboard.dashboard',[
                'user' =>unserialize(session('user')),
                'stocks' => $stockResponse,
                'orders' => $orderResponse
            ]);
        }
        
        
    }

    public function createStock(Request $request){
        $response = Http::withBody(json_encode([array('barcode' =>$request->barcode)]), 'application/json')->post('https://jotform-intern.herokuapp.com/Barcode.php', []);
        //8690793010052
        return view('Dashboard.addStock',[
            'user' =>unserialize(session('user')),
            'barcode' => json_decode($response)
        ]);
    }public function createOrder(Request $request){
        $response = Http::withBody(json_encode([array('barcode' =>$request->barcode)]), 'application/json')->post('https://jotform-intern.herokuapp.com/Barcode.php', []);
        //8690793010052
        return view('Dashboard.addOrder',[
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
        return redirect('/liststocks');
        return view('Dashboard.addStock',[
            'user' =>unserialize(session('user')),
        ]);
    }

    public function checkBarcode(Request $request){
        $type = $request->add;
        return view('Dashboard.checkBarcode',[
            'user' =>unserialize(session('user')),
            'type' => $type
        ]);
    }

    public function listStocks(){
        $response = Http::withHeaders([
            "Token" => session('token')
        ])->get('https://jotform-intern.herokuapp.com/Stock.php');
        return view("Dashboard.listStocks",[
            'user' =>unserialize(session('user')),
            'stocks' => json_decode($response)
            ]);
    }
    public function addOrder(Request $request){
        $response = Http::withHeaders([
            'Token' => session('token'),
        ])->withBody(json_encode([array(
            'urunAdi' =>$request->name,
            'barcode' =>$request->barcode,
            'fiyat' =>$request->price,
            'adet' =>$request->stock
        )]), 'application/json')->post('https://jotform-intern.herokuapp.com/Order.php', []);
        return redirect('/listorders');
        return view('Dashboard.addStock',[
            'user' =>unserialize(session('user')),
        ]);
    }
    public function listOrders(){
        $response = Http::withHeaders([
            "Token" => session('token')
        ])->get('https://jotform-intern.herokuapp.com/Order.php');
        return view("Dashboard.listOrders",[
            'user' =>unserialize(session('user')),
            'orders' => json_decode($response)
            ]);
    }
    public function logout(){
        session()->forget('token');
        return redirect('/');
    }
}
