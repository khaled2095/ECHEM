<?php

namespace App\Observers;

use App\Mail\ShopActivated;
use App\Shop;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ShopObserver
{
    /**
     * Handle the shop "created" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "updated" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function updated(Shop $shop)
    {
        // dd($shop->is_active, $shop->getOriginal('is_active'));
        if($shop->getOriginal('is_active') == 'false' && $shop->is_active == true)
        {
            //dd('shop is acive');
            //send mail to customer
            //Mail::to($shop->owner)->send(new ShopActivated($shop));
            $user = DB::table('users')->where('id', $shop->user_id)->get()[0];

            $url = 'https://smspanellogin.com/api/bulkSmsApi';
            $data = array(
                'sender_id' => 103,
                'apiKey' => 'ZWNoZW1iZDplY2hlbWJkMjAyMA==',
                'mobileNo' => $user->phone,
                'message' => 'Your shop has been activated'	
            );

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);     
            $output = curl_exec($curl);
            curl_close($curl);

            //change role from customer to seller
            //Will uncomment after voyager or admin is complete
            $shop->owner->setRole('seller');
        }
        else
        {
            //dd('shop is inactive')
        }

        //check if active column is changed from inactive to active


            //send mail to customer

            //change role from customer to seller
    }

    /**
     * Handle the shop "deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "restored" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function restored(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "force deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function forceDeleted(Shop $shop)
    {
        //
    }
}
