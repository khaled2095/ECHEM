<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function index(){
        $faqs = Faq::take(100)->get();
        return view('faq.faq', ['faqs' => $faqs]);
    }

    public function search(Request $request){
        $query = request('search');

        $faqs = Faq::where('question','LIKE',"%$query%")->paginate(10);

        return view('faq.search',['faqs' => $faqs]);
    }
}
