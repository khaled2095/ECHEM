<?php

use Illuminate\Database\Seeder;

class WholesalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wholesales')->delete();
        
        \DB::table('wholesales')->insert(array (
            0 => 
            array (
                'created_at' => '2020-11-02 09:38:00',
                'description' => 'IT product',
                'id' => 1,
                'is_active' => 1,
                'name' => 'IT Shop',
                'updated_at' => '2020-11-02 16:30:37',
                'user_id' => 10,
            ),
        ));
        
        
    }
}