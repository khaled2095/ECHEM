<?php

use Illuminate\Database\Seeder;

class VideoCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('video_categories')->delete();
        
        \DB::table('video_categories')->insert(array (
            0 => 
            array (
                'created_at' => '2020-11-01 15:08:00',
                'description' => 'Products & Technical Videos',
                'id' => 1,
                'name' => 'Tutorials',
                'parent' => NULL,
                'updated_at' => '2020-11-14 18:20:43',
            ),
            1 => 
            array (
                'created_at' => '2020-11-01 15:08:38',
                'description' => 'TEST DESCRIPTION',
                'id' => 2,
                'name' => 'South Tech',
                'parent' => 1,
                'updated_at' => '2020-11-01 15:08:38',
            ),
        ));
        
        
    }
}