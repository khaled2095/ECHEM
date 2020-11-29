<?php

use Illuminate\Database\Seeder;

class SubOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_orders')->delete();
        
        
        
    }
}