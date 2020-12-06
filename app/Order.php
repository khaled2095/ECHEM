<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items', 'order_id', 'product_id')->withPivot('quantity', 'price', 'size', 'product_commission');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function subOrders()
    {
        return $this->hasMany(SubOrder::class);
    }

    public function sms($number, $msg){


        $url = 'https://smspanellogin.com/api/bulkSmsApi';
        $data = array(
            'sender_id' => 103,
            'apiKey' => 'ZWNoZW1iZDplY2hlbWJkMjAyMA==',
            'mobileNo' => $number,
            'message' => $msg
        );

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $output = curl_exec($curl);
        curl_close($curl);

    }

    public function generateSubOrders()
    {
        $orderItems = $this->items;

        foreach($orderItems->groupBy('shop_id') as $shopId => $products){
            if ($shopId)
            {

                $shop = Shop::find($shopId);
                // $role = DB::table('user_roles')->where('user_id', $shop->user_id)->first();
                $suborder = $this->subOrders()->create([
                    'order_id' => $this->id,
                    'seller_id' => $shop->user_id,
                    'grand_total' => $products->sum('pivot.price'),
                    'item_count' => $products->count(),

                ]);
                $msg = 'Order has been placed to you shop please check dashboard';
                $user = DB::table('users')->where('id', $shop->user_id)->get()[0];
                $this->sms($user->phone, $msg);
                foreach ($products as $product) {
                    $order = DB::table('order_items')->where('product_id', $product->id)->where('order_id', $this->id)->get();
                    $size = 'None';
                    if($order[0]->size != 'None'){
                        $size = $order[0]->size;
                    }
                    $suborder->items()->attach($product->id, ['price' => $product->pivot->price, 'quantity' => $product->pivot->quantity, 'size' => $size, 'product_commission' => $product->pivot->product_commission]);
                }
            }

        }

        foreach($orderItems->groupBy('wholesale_id') as $wholesale => $products)
        {
            if ($wholesale) {
                $shop = Wholesale::find($wholesale);
                $role = DB::table('user_roles')->where('user_id', $shop->user_id)->get();

                // if($role->count() > 1)
                // {
                //     $role = DB::table('user_roles')->where('user_id', $shop->user_id)->get()[1];
                // }
                // else
                // {
                //     $role = DB::table('user_roles')->where('user_id', $shop->user_id)->get()[0];
                // }

                $suborder = $this->subOrders()->create([
                    'order_id' => $this->id,
                    'seller_id' => $shop->user_id,
                    'grand_total' => $products->sum('pivot.price'),
                    'item_count' => $products->count(),

                ]);
                $msg = 'Order has been placed to you shop please check dashboard';
                $user = DB::table('users')->where('id', $shop->user_id)->get()[0];
                $this->sms($user->phone, $msg);
                foreach ($products as $product) {
                    $order = DB::table('order_items')->where('product_id', $product->id)->where('order_id', $this->id)->get();
                    $size = 'None';
                    if($order[0]->size != 'None'){
                        $size = $order[0]->size;
                    }
                    $suborder->items()->attach($product->id, ['price' => $product->pivot->price, 'quantity' => $product->pivot->quantity, 'size' => $size, 'product_commission' => $product->pivot->product_commission]);
                }
            }

        }

    }
}
