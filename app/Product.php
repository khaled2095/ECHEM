<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public function p(){

    //     return $this->hasMany(Wishlist::class, 'product_id');
    // }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
    
    public function wholesaleShop()
    {
        return $this->belongsTo(Wholesale::class, 'wholesale_id');
    }
    public function reviews(){
        return $this->hasMany(Reviews::class, 'product_id');
    }
    public function productAtt(){
        return $this->hasMany(ProductAttribute::class, 'product_id');
    }
}
