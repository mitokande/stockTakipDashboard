<?php 

namespace App\Http\Services;

use App\Models\Shop;
use App\Models\User;

class AuthService{
    public static function Login($request){
        $userRows = JotformApiService::getSubmissions(env("SHOP_FORM"));
        foreach($userRows as $userRow){
            if($userRow['status'] == "ACTIVE"){
                if($userRow['answers'][5]['answer'] == $request->username && password_verify($request->password,$userRow["answers"][6]["answer"])){
                    $user = new User();
                    $user->shopId = $userRow["answers"][7]["answer"];
                    session(['token' => $userRow["answers"][9]["answer"]]);
                    $user->shopName = $userRow["answers"][8]["answer"];
                    // $tokenExpiry = $userRow["answers"][11]["answer"];
                    $user->stockFormId = $userRow["answers"][3]["answer"];
                    $user->orderFormId = $userRow["answers"][4]["answer"];
                    $user->shopCategory = $userRow["answers"][12]["answer"];
                    $user->shopCategoryFormId = $userRow["answers"][13]["answer"];
                    $user->shopImage = $userRow['answers'][14]['answer'];
                    session(['user'=> serialize($user)]);
                    
                    return true;
                }
            }
        }
        
        return false;
        // 
    }
    public static function Token($request){
        $userToken = password_hash("JOTFORM_VERY_VERY_SECRET_KEY".$request->email,PASSWORD_BCRYPT);
        $expiry = Date('Y-m-d h:i:s', strtotime('+14 days'));
        return [$userToken,$expiry];
    }
    public static function Register($request){
        $userRows = JotformApiService::getSubmissions(env("SHOP_FORM"));
        foreach($userRows as $userRow){
            if($userRow['status'] == "ACTIVE"){
                if($userRow["answers"][5]["answer"] == $request->username || $userRow["answers"][7]["answer"] == $request->email){
                  return false;
                }
            }
        }
        $tokenItem = AuthService::Token($request);
        $image = ImageUploadService::store($request);
        $response = JotformApiService::addSubmission(env("SHOP_FORM"),[
            "5" => $request->username,
            "6" => password_hash($request->password,PASSWORD_BCRYPT),
            "7" => $request->email,
            "8" => $request->shopName,
            "9" => $tokenItem[0],
            "11" => $tokenItem[1],
            "12" => $request->shopCategory,
            "14" => $image
        ]);
        $forms = AuthService::RegisterShopForms($response);
        $shop = new Shop();
        $shop->shopId = $response['submissionID'];
        $shop->shopName = $request->shopName;
        $shop->stockFormId = $forms[0];
        $shop->orderFormId = $forms[1];
        $shop->shopCategory = $request->shopCategory;
        $shop->shopCategoryFormId = $forms[2];
        $shop->shopImage = $image;
        session(['token' => $tokenItem[0]]);
        session(['user'=> serialize($shop)]);
        return true;
    }

    public static function RegisterShopForms($response){
        $stockFormId = JotformApiService::cloneForm(env("STOCK_FORM"))['id'];
        $orderFormId = JotformApiService::cloneForm(env("ORDER_FORM"))['id'];
        $shopCategoryFormId = JotformApiService::cloneForm(env("SHOP_CATEGORY_FORM"))['id'];
        JotformApiService::editSubmission($response['submissionID'],array(
            "3" => $stockFormId,
            "4" => $orderFormId,
            "13" => $shopCategoryFormId
        ));
        return [$stockFormId,$orderFormId,$shopCategoryFormId];
    }
}