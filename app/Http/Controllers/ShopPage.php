<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopPage extends Controller
{
    //
    public function index(){
        $products = Product::take(1000)->get();

        return view('product.shop', ['products' => $products]);
    }
}
