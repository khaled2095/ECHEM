<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'code' => '99k',
                'created_at' => NULL,
                'description' => '50 percent DISCOUNT',
                'id' => 1,
                'name' => 'ssale',
                'type' => 'discout',
                'updated_at' => NULL,
                'value' => '-50%',
            ),
        ));
        
        
    }
}