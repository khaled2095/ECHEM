<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2020-10-11 08:06:38',
            ),
        ));
        
        
    }
}