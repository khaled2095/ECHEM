<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'display_name' => 'Administrator',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            1 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'display_name' => 'Normal User',
                'id' => 2,
                'name' => 'user',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            2 => 
            array (
                'created_at' => '2020-10-12 07:51:03',
                'display_name' => 'Seller',
                'id' => 3,
                'name' => 'seller',
                'updated_at' => '2020-10-12 07:51:03',
            ),
            3 => 
            array (
                'created_at' => NULL,
                'display_name' => 'Wholesale Seller',
                'id' => 4,
                'name' => 'wholesale-seller',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => '2020-11-16 19:32:41',
                'display_name' => 'Super Admin',
                'id' => 5,
                'name' => 'super-admin',
                'updated_at' => '2020-11-16 19:36:37',
            ),
        ));
        
        
    }
}