<?php 

namespace App\Http\Services;

use App\Http\Services\JotformApiService;
use App\Models\Product;

class ProductService{

    public static function getAllProducts($stockFormId){
        
        $productRows = JotformApiService::getSubmissions($stockFormId);
        $products = [];
        foreach($productRows as $productRow){
            if($productRow['status'] == "ACTIVE"){
                $product = new Product();
                $product->productID = $productRow['id'];
                $product->productName = $productRow['answers'][5]['answer'];
                $product->productImage = $productRow['answers'][14]['answer'];
                $product->productCategory = $productRow['answers'][16]['answer'];
                $product->productPrice = $productRow['answers'][8]['answer'];
                $product->productBarcode = $productRow['answers'][6]['answer'];
                $product->productQuantity = $productRow['answers'][7]['answer'];
                $product->productDate = $productRow['created_at'];
                $products[] = $product;
            }
        }
        return $products;
    }

    public static function getProduct($submissionId){
        $productRow = JotformApiService::getSubmissionSingle($submissionId);
        $product = new Product();
        $product->ID = $productRow['id'];
        $product->productName = $productRow['answers'][5]['answer'];
        $product->productImage = $productRow['answers'][14]['answer'];
        $product->productCategory = $productRow['answers'][16]['answer'];
        $product->productPrice = $productRow['answers'][8]['answer'];
        $product->productBarcode = $productRow['answers'][6]['answer'];
        $product->productQuantity = $productRow['answers'][7]['answer'];
        $product->productDate = $productRow['created_at'];

    }
    public static function getProductByBarcode($barcode){
        $user = unserialize(session('user'));
        $productRows = JotformApiService::getSubmissions(env("BARCODE_FORM"));
        foreach($productRows as $productRow){
            if($productRow['status'] == "ACTIVE" && $productRow['answers'][4]['answer'] == $barcode){
                $product = new Product();
                $product->productName = $productRow['answers'][3]['answer'];
                $product->productImage = $productRow['answers'][9]['answer'];
                $product->productPrice = $productRow['answers'][8]['answer'];
                $product->productBarcode = $productRow['answers'][4]['answer'];
                $product->productDate = $productRow['created_at'];
                return $product;
            }
        }
    }
    public static function getStockByBarcode($barcode){
        $user = unserialize(session('user'));
        $productRows = JotformApiService::getSubmissions($user->stockFormId);
        foreach($productRows as $productRow){
            if($productRow['status'] == "ACTIVE"){
                if($productRow['answers'][6]['answer'] == $barcode){
                    $product = new Product();
                    $product->productID = $productRow['id'];
                    $product->productName = $productRow['answers'][5]['answer'];
                    $product->productImage = $productRow['answers'][14]['answer'];
                    $product->productCategory = $productRow['answers'][16]['answer'];
                    $product->productPrice = $productRow['answers'][8]['answer'];
                    $product->productBarcode = $productRow['answers'][6]['answer'];
                    $product->productQuantity = $productRow['answers'][7]['answer'];
                    $product->productDate = $productRow['created_at'];
                    return $product;
                }
            }
        }
    }
    public static function addProductToBarcodeDatabase($request){
        $productSubmission = array(
            "3" => $request->name,
            "4" => $request->barcode,
            "8" => $request->price,
            "9" => ImageUploadService::store($request)
        );
        return JotformApiService::addSubmission(env("BARCODE_FORM"),$productSubmission);
    }

    public static function addProductOrder($request){
        $user = unserialize(session('user'));
        $product = ProductService::getStockByBarcode($request->barcode);
        if($product != null){
            $stockVal = intval($product->productQuantity) - intval($request->stock);
            $submission = array(
                "7" => $stockVal
            );
            JotformApiService::editSubmission($product->productID,$submission);
        }
        $product = ProductService::getProductByBarcode($request->barcode);
        $productImage = $product->productImage;
        $productSubmission = array(
            "5" => $request->name,
            "6" =>$request->barcode,
            "8" =>$request->price,
            "7" =>$request->stock,
            "13" => $user->email,
            "14" => $productImage,
            "15" => $user->shopName,
            "16" => $request->category
        );
        
        return JotformApiService::addSubmission($user->orderFormId,$productSubmission);
    }

    public static function addProductStock($request){
        $user = unserialize(session('user'));
        $product = ProductService::getStockByBarcode($request->barcode);
        if($product != null){
            $stockVal = intval($product->productQuantity) + intval($request->stock);
            $submission = array(
                "7" => $stockVal
            );
            return JotformApiService::editSubmission($product->productID,$submission);      
        }
        $product = ProductService::getProductByBarcode($request->barcode);
        $productImage = $product->productImage;
        $productSubmission = array(
            "5" => $request->name,
            "6" =>$request->barcode,
            "8" =>$request->price,
            "7" =>$request->stock,
            "13" => $user->email,
            "14" => $productImage,
            "15" => $user->shopName,
            "16" => $request->category
        );
        
        JotformApiService::addSubmission($user->stockFormId,$productSubmission);
    }
    public static function deleteProduct($submissionId){
        return JotformApiService::deleteSubmission($submissionId);
    }
}



?>