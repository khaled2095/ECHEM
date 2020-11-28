<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\SubOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InventoryController extends Controller
{
    public function index()
    {
        $this_year_orders = DB::table('orders')->whereYear('created_at', '=', date('Y'))->get();
        
        $this_month_orders = DB::table('orders')->whereMonth('created_at', '=', date('m'))->get();
        
        $order_today = DB::table('orders')->whereDay('created_at', '=', date('d'))->get();
        
        $total_item = 0;
        $pending = 0;
        $profit_m = 0;
        $profit_y = 0;
        
        $orders = DB::table('orders')->get();
        foreach($orders as $ord){
            if($ord->is_paid){
                $total_item = $total_item + $ord->item_count;
            }
            if($ord->status === 'pending' || $ord->status === 'processing'){
                $pending = $pending + 1;
            }
        }
        
        foreach($this_month_orders as $ord){
            if($ord->is_paid){
                $ord_item  = DB::table('order_items')->where('order_id', $ord->id)->get();
                foreach($ord_item as $it){
                    $prod = DB::table('products')->where('id', $it->product_id)->first();
                    $profit_m = $profit_m + $prod->price - $prod->buying_price;
                }
            }
        }
        foreach($this_year_orders as $ord){
            if($ord->is_paid){
                $ord_item  = DB::table('order_items')->where('order_id', $ord->id)->get();
                foreach($ord_item as $it){
                    $prod = DB::table('products')->where('id', $it->product_id)->first();
                    $profit_y = $profit_y + $prod->price - $prod->buying_price;
                }
            }
        }
        $exp_m = DB::table('expenses')->whereMonth('created_at', '=', date('m'))->sum('amount');
        $exp_y = DB::table('expenses')->whereYear('created_at', '=', date('Y'))->sum('amount');
        $rev_m = $profit_m - $exp_m;
        $rev_y = $profit_y - $exp_y;
        
        return view('inventory.index', [
                'order_by_month' => $this_month_orders,
                'order_today' => $order_today,
                'this_year_orders' =>$this_year_orders,
                'pending' => $pending,
                'item' => $total_item,
                'month_profit' => $profit_m,
                'year_profit' => $profit_y,
                'exp_year' => $exp_y,
                'exp_month' => $exp_m,
                'rev_m' => $rev_m,
                'rev_y' => $rev_y
            ]);
    }
}
