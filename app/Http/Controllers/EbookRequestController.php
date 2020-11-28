<?php

namespace App\Http\Controllers;

use App\EbookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EbookRequestController extends Controller
{
    //
    public function index()
    {
        # code...

        $ebook = new EbookRequest();
        $ebook->name = request('name');
        $ebook->email = request('email');
        $ebook->ebook_title = request('ebook_title');
        $ebook->save();

        return Redirect::to('/home');
    }
}
