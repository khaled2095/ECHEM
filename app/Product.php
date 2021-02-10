<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected static function booted()
    {
        static::saving(function($product){

            // dd(request('size'), request('color'), request('sku'), request('price'));
            //dd(json_encode(array(, request('color'), request('price'), request('sku'))));

            $size = request('size');
            $color = request('color');
            $price = request('pricexx');
            $sk = request('sku');
            $attr = array();
            //dd(json_encode(array($size, $price, $color, $sk)));
            foreach ($size as $key => $value) {
                # code...
                $val = array(
                    'size' => $size[$key],
                    'color' => $color[$key],
                    'sku' => $sk[$key],
                    'price' => $price[$key]
                );
                array_push($attr, $val);
            }

            $product->product_attributes = json_encode($attr);

            // foreach($attr as $key => $i)
            // {
            //     $x = new ProductAttribute();
            //     $x->product_id = $product->id;
            //     $x->size = $size[$key];
            //     $x->price = $price[$key];
            //     $x->SKU = $sk[$key];
            //     $x->status = 1;
            //     $x->save();
            // }
            //$product->save();

        });

        static::updating(function($product){

            $size = request('size');
            $color = request('color');
            $price = request('pricexx');
            $sk = request('sku');
            $attr = array();
            //dd(json_encode(array($size, $price, $color, $sk)));
            foreach ($size as $key => $value) {
                # code...
                $val = array(
                    'size' => $size[$key],
                    'color' => $color[$key],
                    'sku' => $sk[$key],
                    'price' => $price[$key]
                );
                array_push($attr, $val);
            }

            $product->product_attributes = json_encode($attr);
            // //$product->save();
            // foreach($attr as $key => $i)
            // {
            //     $x = new ProductAttribute();
            //     $x->product_id = $product->id;
            //     $x->size = $size[$key];
            //     $x->price = $price[$key];
            //     $x->SKU = $sk[$key];
            //     $x->status = 1;
            //     $x->save();
            // }

        });
    }


    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function wholesaleShop()
    {
        return $this->belongsTo(Wholesale::class, 'wholesale_id');
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'product_id');
    }

    public function productAtt()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id');
    }

}
