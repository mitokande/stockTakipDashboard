<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\ImageUploadService;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $user = unserialize(session('user'));
        $stocks = ProductService::getAllProducts($user->stockFormId);
        $orders = ProductService::getAllProducts($user->orderFormId);
        return view('Dashboard.dashboard',[
            'user' =>unserialize(session('user')),
            'stocks' => $stocks,
            'orders' => $orders
        ]);
    }

    public function createStock(Request $request){
        // $response = Http::withBody(json_encode([array('barcode' =>$request->barcode)]), 'application/json')->post('http://localhost/stok/stockTakip/Barcode.php', []);
        //8690793010052
        $product = ProductService::getProductByBarcode($request->barcode);

        $user = unserialize(session('user'));
        return view('Dashboard.addStock',[
            'user' => $user,
            'product' => $product,
            'categories' => CategoryService::getCategories($user->shopCategoryFormId)
        ]);
    }public function createOrder(Request $request){
        //$response = Http::withBody(json_encode([array('barcode' =>$request->barcode)]), 'application/json')->post('http://localhost/stok/stockTakip/Barcode.php', []);
        //8690793010052
        $product = ProductService::getProductByBarcode($request->barcode);
       
        $user = unserialize(session('user'));
        return view('Dashboard.addOrder',[
            'user' => $user,
            'product' => $product,
            'categories' => CategoryService::getCategories($user->shopCategoryFormId)
        ]);
    }
    public function addStock(Request $request){
      
        ProductService::addProductStock($request);
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
        $user = unserialize(session('user'));
        $stocks = ProductService::getAllProducts($user->stockFormId);
        return view("Dashboard.listStocks",[
            'user' =>$user,
            'stocks' => $stocks
            ]);
    }
    public function addOrder(Request $request){
        ProductService::addProductOrder($request);

        return redirect('/listorders');
        return view('Dashboard.addStock',[
            'user' =>unserialize(session('user')),
        ]);
    }
    public function listOrders(){
        $user = unserialize(session('user'));
        $orders = ProductService::getAllProducts($user->orderFormId);
        return view("Dashboard.listOrders",[
            'user' =>$user,
            'orders' => $orders
            ]);
    }

    public function addBarcode(){
        return view("Dashboard.addBarcode",[
            'user' =>unserialize(session('user')),
        ]);
    }
    public function uploadBarcode(Request $request){
        
        ProductService::addProductToBarcodeDatabase($request);
        // $path = $request->image->store('images');
            return redirect('/addbarcode');
    }
    public function logout(){
        session()->forget('token');
        return redirect('/');
    }

    public function addCategory(){
        return view('Dashboard.addCategory',[
            'user' =>unserialize(session('user')),
        ]);
    }
    public function addCategoryPost(Request $request){
        $categoryName = $request->name;
        $user = unserialize(session('user'));
        CategoryService::addCategory($user->shopCategoryFormId,$categoryName);
        return redirect('/listcategories');
    }
    public function listCategories(){
        $user = unserialize(session('user'));
        
        return view("Dashboard.listCategories",[
            'user' =>$user,
            'categories' => CategoryService::getCategories($user->shopCategoryFormId)
        ]);
    }
    public function delete(Request $request){
        ProductService::deleteProduct($request->id);
        return redirect('/dashboard');
    }
}
