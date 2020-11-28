<?php

namespace App\Http\Controllers;

use App\SiteReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SiteReviewController extends Controller
{
    //

    public function index()
    {
        # code...
        $reviews = SiteReview::take(5)->get();

        return view('site-review', ['reviews' => $reviews]);
    }
    public function store()
    {
        # code...
        $review = new SiteReview();
        $review->user_id = auth()->id();
        $review->comment = request('comment');
        $review->save();
        return Redirect::to('site-reviews');
    }
    
}
