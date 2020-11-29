<?php

use Illuminate\Database\Seeder;

class GiftCardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gift_cards')->delete();
        
        \DB::table('gift_cards')->insert(array (
            0 => 
            array (
                'amount' => 200.0,
                'created_at' => NULL,
                'id' => 4,
                'name' => '200 BDT',
                'uid' => 'xyz',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'amount' => 300.0,
                'created_at' => NULL,
                'id' => 5,
                'name' => '300 BDT',
                'uid' => 'xyz-5',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'amount' => 20000.0,
                'created_at' => NULL,
                'id' => 6,
                'name' => '20000 BDT',
                'uid' => 'xyz-60',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}