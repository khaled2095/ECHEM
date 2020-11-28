<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    //
    public function attributes(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
