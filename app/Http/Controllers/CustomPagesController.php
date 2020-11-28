<?php

namespace App\Http\Controllers;

use App\CustomPages;
use Illuminate\Http\Request;

class CustomPagesController extends Controller
{
    //
    public function index(Request $request){
        $data = CustomPages::where('id', request('id'))->first();
        
        return view('custom-page', ['data' => $data]);
    }
}
