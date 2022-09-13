<?php

namespace App\Http\Controllers;

use App\Http\Controllers\JotForm;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopApiController extends Controller
{
    public function getShops(){
        $api = new Jotform("221b59e90e66fbbc6b6b09cb2984e1de");
        $shopRows =  $api->getFormSubmissions("222212597595058");
        // return $shopRows;
        $shopList = [];
        foreach($shopRows as $shopRow){
            if($shopRow['status'] == "ACTIVE"){
                $shop = new Shop();
                // $shop->shopName = ;
                $shop->setShopId($shopRow['id']);
                $shop->setShopName($shopRow['answers'][8]['answer']);
                $shop->setStockFormId($shopRow['answers'][3]['answer']);
                $shop->setOrderFormId($shopRow['answers'][4]['answer']);
                $shopList[] = $shop;
            }
        }
        return $shopList;
    }
    public function getShopSingle($shopId){
        $api = new Jotform("221b59e90e66fbbc6b6b09cb2984e1de");
        $shopRows =  $api->getFormSubmissions("222212597595058");
        // return $shopRows;
        $shopList = [];
        foreach($shopRows as $shopRow){
            if($shopRow['status'] == "ACTIVE" && $shopRow['id'] == $shopId){
                $shop = new Shop();
                // $shop->shopName = ;
                $shop->setShopId($shopRow['id']);
                $shop->setShopName($shopRow['answers'][8]['answer']);
                $shop->setStockFormId($shopRow['answers'][3]['answer']);
                $shop->setOrderFormId($shopRow['answers'][4]['answer']);
                return $shop;
            }
        }

    }
    public function getShopStock($shopId){
        $api = new JotForm("221b59e90e66fbbc6b6b09cb2984e1de");
        $shop = $this->getShopSingle($shopId);
        // return $shop;
        $shoprows = $api->getFormSubmissions($shop['stockFormId']);
        // return $shoprows;
        $products = [];
        foreach($shoprows as $shoprow){
            if($shoprow['status'] == "ACTIVE"){
                $products[] = array(
                    "Product" => $shoprow['answers'][5]['answer'],
                    "Stock" => $shoprow['answers'][7]['answer'],
                    "Image" => $shoprow['answers'][14]['answer']
                );
            }
        } 
        return $products;
    }
}
