<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ShopApiController;
use App\Http\Services\CategoryService;
use App\Http\Services\ProductService;
use App\Http\Services\ShopService;

class ShopController extends Controller
{
    public function index(){
        $shopList = ShopService::getAllShops(env('SHOP_FORM'));
        return view("Frontend.index",[
            'shops'=>$shopList
        ]);
    }
    public function singleShop($shopId){
        $shop = ShopService::getShop($shopId);
        $products = ProductService::getAllProducts($shop->stockFormId);
        $categories = CategoryService::getCategories($shop->shopCategoryFormId);
        $products = collect($products)->sortBy('productCategory');
        $productsByCategory = [];
        foreach($categories as $category){
            $productsByCategory[] = collect($products)->filter(function($product) use(&$category){
                
                return $product->productCategory == $category->categoryName;
            });
        }

        return view('Frontend.shop',[
            'shop' => $shop,
            'products'=>$products,
            'productsByCategory' => $productsByCategory,
            'categories'=> $categories
        ]);
    }
    public function category($shopId){
        $shop = ShopService::getShop($shopId);
        return CategoryService::getCategories($shop->shopCategoryFormId);
    }
}
