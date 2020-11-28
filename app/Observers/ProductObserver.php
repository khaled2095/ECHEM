<?php

namespace App\Observers;
use App\Product;
use Illuminate\Routing\Route;
use Toolkito\Larasap\SendTo;
use Illuminate\Support\Facades\DB;

class ProductObserver
{
    //
    public function sms($msg, $phone){
        $url = 'https://smspanellogin.com/api/bulkSmsApi';
        $data = array(
            'sender_id' => 103,
            'apiKey' => 'ZWNoZW1iZDplY2hlbWJkMjAyMA==',
            'mobileNo' => $phone,
            'message' => $msg,
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
    
    
    public function created(Product $product){

        SendTo::Facebook(
            'link',
            [
                'link' => 'http://' . request()->getHttpHost() . '/product' . '/' . $product->id,
                'message' => 'New product on our shop ' . $product->name
            ]
        );
    }
    
    public function updating(Product $product)
    {
        if($product->isDirty('stock')){
            // email has changed
            if($product->stock < $product->min_qty){
                
                
                if($product->shop_id){
                    $shop = DB::table('shops')->where('id', $product->shop_id)->first();
                    $shop_user = DB::table('users')->where('id', $shop->user_id)->first();
                    $this->sms('Your product with the name ' . $product->name. '  '.'low on stock. ' . 'Remaining stock is: '.$product->stock , $shop_user->phone);
                }
                
                if($product->wholesale_id){
                    $shop = DB::table('wholesales')->where('id', $product->wholesale_id)->first();
                    $shop_user = DB::table('users')->where('id', $shop->user_id)->first();
                    $this->sms('Your product with the name ' . $product->name. '  '.'low on stock. ' . 'Remaining stock is: '.$product->stock, $shop_user->phone);
                }
                else{
                    
                    $admin_phone = DB::table('users')->where('role_id', 1)->first();
                    $this->sms('Your product with the name ' . $product->name. '  '.'low on stock. ' . 'Remaining stock is: '.$product->stock, $admin_phone->phone);
                }
            }
        }
    }
}
