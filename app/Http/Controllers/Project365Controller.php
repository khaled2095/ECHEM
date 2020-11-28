<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Post;

class Project365Controller extends Controller
{
    //
    public function index(Request $request){
        $data = Post::get();
        
        return view('project', ['posts' => $data]);
    }
    public function postssingle(Request $request){
        $data = DB::table('posts')->where('slug', request('slug'))->get();
        return view('post-single', ['data' => $data]);
    }

    public function post_by_cat(Request $request){
        $data = DB::table('posts')->where('post_cat_id', $request->id)->get();
        
        return view('project', ['posts' => $data]);
    }
}
