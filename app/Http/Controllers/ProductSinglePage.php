<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductSinglePage extends Controller
{
    //
    public function index(){
        $prodid = request('prodId');
        $product = Product::find($prodid);
        $searches = array('[', ']','"');
        $cover_img = str_replace($searches,'',$product->cover_img);
        $img = explode(",",$cover_img);
        return view('product-single', compact('product','img'));
    }
}
