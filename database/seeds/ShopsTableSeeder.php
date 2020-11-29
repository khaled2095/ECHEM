<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-12 10:46:00',
                'description' => 'Perfumes',
                'id' => 1,
                'is_active' => 1,
                'name' => 'absolute niche',
                'rating' => NULL,
                'updated_at' => '2020-10-12 10:50:06',
                'user_id' => 4,
            ),
            1 => 
            array (
                'created_at' => '2020-10-12 10:47:00',
                'description' => 'Paintings',
                'id' => 2,
                'is_active' => 1,
                'name' => 'ec',
                'rating' => NULL,
                'updated_at' => '2020-10-29 14:40:54',
                'user_id' => 5,
            ),
            2 => 
            array (
                'created_at' => '2020-11-02 08:44:00',
                'description' => 'Shop',
                'id' => 3,
                'is_active' => 1,
                'name' => 'coxs',
                'rating' => NULL,
                'updated_at' => '2020-11-02 08:47:05',
                'user_id' => 8,
            ),
            3 => 
            array (
                'created_at' => '2020-11-07 18:28:00',
                'description' => 'Printing Chemical',
                'id' => 4,
                'is_active' => 1,
                'name' => 'M R Printing',
                'rating' => NULL,
                'updated_at' => '2020-11-09 15:38:02',
                'user_id' => 12,
            ),
        ));
        
        
    }
}