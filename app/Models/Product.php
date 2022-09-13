<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $productID;
    public $productName;
    public $productImage;
    public $productPrice;
    public $productBarcode;
    public $productCategory;
    public $productDate;
    public $productQuantity;
    public $productSellingAmount;

    public function setProductName($name){
        $this->attributes['productName'] = $name;
    }
    public function setProductImage($image){
        $this->attributes['productImage'] = $image;
    }
    public function setProductPrice($price)
    {
        $this->attributes['productPrice'] = $price;
    }
    public function setProductCategory($category)
    {
        $this->attributes['productCategory'] = $category;
    }
    public function setProductSellingAmount($sold)
    {
        $this->attributes['productSellingAmount'] = $sold;
    }




}
