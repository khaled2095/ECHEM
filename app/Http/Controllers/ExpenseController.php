<?php

namespace App\Http\Controllers;

use App\FinanceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ExpenseController extends Controller
{
    
    public function index(Request $request){
        $expense = DB::table('expenses')->where('id', request('id'))->first();
        $pdf = PDF::loadView('memo', ['data' => $expense]);
        return $pdf->download('memo.pdf');
    }
    public function index2(Request $request){
        $expense = DB::table('expense_management')->where('id', request('id'))->first();
        $pdf = PDF::loadView('memo2', ['data' => $expense]);
        return $pdf->download('memo.pdf');
    }
}