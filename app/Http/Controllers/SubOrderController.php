<?php

namespace App\Http\Controllers;

use App\SubOrder;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubOrderController extends Controller
{
    public function pay2()
    {

        $order_item = DB::table('sub_order_items')->where('id', request('id'))->first();

        $tr = new Transaction();

        $tr->sub_order_id = $order_item->sub_order_id;
        $tr->transaction_id = uniqid('trans-'.$order_item->sub_order_id);
        $tr->amount_paid = $order_item->price;
        $tr->commission = ($order_item->product_commission / 100) * $order_item->price;
        $tr->status = DB::table('sub_orders')->where('id',$order_item->sub_order_id)->first()->status;
        $tr->sub_order_item_id = $order_item->id;

        $tr->save();

        return redirect()->to('/admin/transactions')->withMessage('Transaction Created');
    }
}
