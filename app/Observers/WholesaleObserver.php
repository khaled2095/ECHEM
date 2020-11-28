<?php

namespace App\Observers;

use App\Mail\WholesaleActivated;
use App\Wholesale;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WholesaleObserver
{
    /**
     * Handle the wholesale "created" event.
     *
     * @param  \App\Wholesale  $wholesale
     * @return void
     */
    public function created(Wholesale $wholesale)
    {
        //
    }

    /**
     * Handle the wholesale "updated" event.
     *
     * @param  \App\Wholesale  $wholesale
     * @return void
     */
    public function updated(Wholesale $wholesale)
    {
        // dd($shop->is_active, $shop->getOriginal('is_active'));
        if($wholesale->getOriginal('is_active') == 'false' && $wholesale->is_active == true)
        {
            //dd('shop is acive');
            //send mail to customer
            //Mail::to($wholesale->wholeSaleOwner)->send(new WholesaleActivated($wholesale));
            $user = DB::table('users')->where('id', $wholesale->user_id)->get()[0];

            $url = 'https://smspanellogin.com/api/bulkSmsApi';
            $data = array(
                'sender_id' => 103,
                'apiKey' => 'ZWNoZW1iZDplY2hlbWJkMjAyMA==',
                'mobileNo' => $user->phone,
                'message' => 'Your wholesale account has been activated'	
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
            $wholesale->wholeSaleOwner->setRole('wholesale-seller');
        }
        else
        {
            //dd('shop is inactive')
            $wholesale->wholeSaleOwner->setRole('user');
        }

        //check if active column is changed from inactive to active


            //send mail to customer

            //change role from customer to seller
    }

    /**
     * Handle the wholesale "deleted" event.
     *
     * @param  \App\Wholesale  $wholesale
     * @return void
     */
    public function deleted(Wholesale $wholesale)
    {
        //
    }

    /**
     * Handle the wholesale "restored" event.
     *
     * @param  \App\Wholesale  $wholesale
     * @return void
     */
    public function restored(Wholesale $wholesale)
    {
        //
    }

    /**
     * Handle the wholesale "force deleted" event.
     *
     * @param  \App\Wholesale  $wholesale
     * @return void
     */
    public function forceDeleted(Wholesale $wholesale)
    {
        //
    }
}
