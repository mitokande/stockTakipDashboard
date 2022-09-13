<?php 

namespace App\Http\Services;

use App\Http\Controllers\JotForm;
use App\Models\Category;

class CategoryService{


    public static function getCategories($categoryFormId){
        $categoryRows = JotformApiService::getSubmissions($categoryFormId);
        $categories = [];
        foreach($categoryRows as $categoryRow){
            if($categoryRow['status'] == "ACTIVE"){
                $category = new Category();
                $category->categoryName = $categoryRow['answers'][3]['answer'];
                $category->categoryDate = $categoryRow['created_at'];
                $categories[] = $category;
            }
        }
        return $categories;
    }
    public static function addCategory($categoryFormId,$categoryName){
        $category = array(
            "3" => $categoryName
        );
        JotformApiService::addSubmission($categoryFormId,$category);

    }
}


?>