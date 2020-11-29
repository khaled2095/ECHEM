<?php

use Illuminate\Database\Seeder;

class GiftCardPurchasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gift_card_purchases')->delete();
        
        \DB::table('gift_card_purchases')->insert(array (
            0 => 
            array (
                'amount' => 17940.0,
                'card_id' => 6,
                'created_at' => '2020-10-20 14:38:15',
                'id' => 8,
                'is_spent' => 0,
                'purchas_done' => 1,
                'uid' => 'xyz-60',
                'updated_at' => '2020-10-20 14:38:15',
                'user_id' => 3,
            ),
            1 => 
            array (
                'amount' => 300.0,
                'card_id' => 5,
                'created_at' => '2020-10-20 14:38:19',
                'id' => 9,
                'is_spent' => 0,
                'purchas_done' => 1,
                'uid' => 'xyz-5',
                'updated_at' => '2020-10-20 14:38:19',
                'user_id' => 3,
            ),
            2 => 
            array (
                'amount' => 0.0,
                'card_id' => 4,
                'created_at' => '2020-10-20 14:39:05',
                'id' => 10,
                'is_spent' => 0,
                'purchas_done' => 1,
                'uid' => 'xyz',
                'updated_at' => '2020-10-20 14:39:05',
                'user_id' => 3,
            ),
            3 => 
            array (
                'amount' => 20000.0,
                'card_id' => 6,
                'created_at' => '2020-11-01 06:50:20',
                'id' => 11,
                'is_spent' => 0,
                'purchas_done' => 0,
                'uid' => 'xyz-60',
                'updated_at' => '2020-11-01 06:50:20',
                'user_id' => 3,
            ),
            4 => 
            array (
                'amount' => 200.0,
                'card_id' => 4,
                'created_at' => '2020-11-02 09:09:55',
                'id' => 12,
                'is_spent' => 0,
                'purchas_done' => 0,
                'uid' => 'xyz',
                'updated_at' => '2020-11-02 09:09:55',
                'user_id' => 3,
            ),
        ));
        
        
    }
}