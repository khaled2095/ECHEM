<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReviewsController extends Controller
{
    //
    public function make_review(Request $request){
        $review = new Reviews();

        $review->user_id = auth()->id();
        $review->product_id = request('prodId');
        $review->star = $request->input('star');
        $review->comment = $request->input('comment');
        $review->save();
        return Redirect::route('prod.single', [request('prodId')]);
    }

}
