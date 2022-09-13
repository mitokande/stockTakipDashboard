<?php 

namespace App\Http\Services;

use App\Models\Shop;
use App\Http\Services\JotformApiService;
class ShopService{

    public static function getShop($shopSubmissionId) : Shop{

        $shopRow = JotformApiService::getSubmissionSingle($shopSubmissionId);
        $shop = new Shop();
        $shop->shopId =  $shopRow['id'];
        $shop->shopName = $shopRow['answers'][8]['answer'];
        $shop->stockFormId =  $shopRow['answers'][3]['answer'];
        $shop->orderFormId =  $shopRow['answers'][4]['answer'];
        $shop->shopCategory = $shopRow['answers'][12]['answer'];
        $shop->shopCategoryFormId = $shopRow['answers'][13]['answer'];
        $shop->shopImage = $shopRow['answers'][14]['answer'];
        return $shop;
    }
    public static function getAllShops($shopFormId){
        $shops = []; 
        $shopRows = JotformApiService::getSubmissions($shopFormId);
        foreach($shopRows as $shopRow){
            if($shopRow['status'] == "ACTIVE"){
                $shop = new Shop();
                $shop->setShopId($shopRow['id']);
                $shop->setShopName($shopRow['answers'][8]['answer']);
                $shop->setStockFormId($shopRow['answers'][3]['answer']);
                $shop->setOrderFormId($shopRow['answers'][4]['answer']);
                $shop->setShopCategory($shopRow['answers'][12]['answer']);
                $shop->shopImage = $shopRow['answers'][14]['answer'];
                $shop->shopCategoryFormId = $shopRow['answers'][13]['answer'];
                $shops[] = $shop;
            }
        }

        return $shops;
    }


}

?>