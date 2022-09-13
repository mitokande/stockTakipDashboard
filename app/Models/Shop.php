<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public $shopId;
    public $email;
    public $shopName;
    public $stockFormId;
    public $orderFormId;
    public $shopCategory;
    public $shopCategoryFormId;
    public $shopImage;


    public function setShopId($Id){
        $this->attributes['shopId'] = $Id;
    }
    public function setShopName($name){
        $this->attributes['shopName'] = $name;
    }
    public function setStockFormId($form){
        $this->attributes['stockFormId'] = $form;
    }
    public function setOrderFormId($form){
        $this->attributes['orderFormId'] = $form;
    }
    public function setShopCategory($category){
        $this->attributes['shopCategory'] = $category;
    }
}
