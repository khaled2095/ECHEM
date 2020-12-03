<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::latest()->take(12)->get()->toArray();
        $top = Product::where('top_product', 1)->get()->toArray();
        $categories = Category::whereNull('parent_id')->get();
        $posts = DB::table('posts')->orderBy('created_at', 'asc')->get()->toArray();

        //$prod = Product::latest()->take(3)->get()->toArray();
        //dd($categories);

        return view('home', ['recent' =>  $product, 'top' => $top, 'categories' => $categories, 'posts' => $posts]);
    }
}
