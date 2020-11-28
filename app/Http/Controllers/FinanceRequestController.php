<?php

namespace App\Http\Controllers;

use App\FinanceRequest;
use Illuminate\Http\Request;

class FinanceRequestController extends Controller
{
    //
    public function index(){
        return view('finance');
    }
    public function store(){
        $finreq = new FinanceRequest();
        $finreq->amount = request('amount');
        $finreq->first_name = request('first_name');
        $finreq->last_name = request('last_name');
        $finreq->email = request('email');
        $finreq->business_name = request('business_name');
        $finreq->address = request('address');
        $finreq->detail = request('detail');
        $finreq->save();
        return redirect()->route('home');
    }
}
