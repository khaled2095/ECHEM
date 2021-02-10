<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = null;
        
        if($categoryId)
        {
            $category = Category::find($categoryId);
            $categoryName = $category->name;
            
            //$products = $category->products;
            $products = $category->allProducts();

        }
        else
        {
            $products = Product::take(1000)->get();
        }
        
        $categories = Category::whereNull('parent_id')->get();
        $cat = DB::table('categories')->where('id', request('category_id'))->get();
        return view('product.index', compact('products', 'categoryName', 'categories', 'cat', 'category'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name','LIKE',"%$query%")->paginate(10);

        return view('product.catalog',compact('products'));
    }

    public function by_attr(Request $request){
        $attrId = request('id');
        $categoryName = null;
        $attr = ProductAttribute::where('id', $request->id)->first();
        $all_attr = ProductAttribute::where('size', $attr->size)->orWhere('price', $attr->price)->get();
        if($attr)
        {
            $category = null;
            $products = array();
            
            foreach($all_attr as $at){
                $data = Product::where('id', $at->product_id)->first();
                if(!empty($data)){
                    
                    array_push($products,  $data);
                }
            }
        }
        else
        {
            $products = Product::take(1000)->get();
        }
        
        $categories = Category::whereNull('parent_id')->get();
        $cat = DB::table('categories')->where('id', request('category_id'))->get();
        return view('product.index', compact('products', 'categoryName', 'categories', 'cat', 'category'));
    }

}
