<?php

namespace App\Http\Controllers;

use App\FinanceRequest;
use Illuminate\Http\Request;

class FinanceRequestController extends Controller
{
    //hel
    public function index(){
        return view('finance');
    }

}
