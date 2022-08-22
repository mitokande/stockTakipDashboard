<?php

namespace App\Http\Controllers\Stock;
use App\Models\User;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class StockController extends Controller
{
    public function stocks()
    {
       $response = Http::withHeaders([
            "Token" => '$2y$10$JBBHgUXzocbpK4796la23e8SjnpF9u1NDAHHnEhrBjua6c89Zu6Fa'
        ])->get('https://jotform-intern.herokuapp.com/Stock.php');
        $responseData = json_decode($response);
        return view("Stock.stocks")->with('stocks',$responseData->data);


    }
}
