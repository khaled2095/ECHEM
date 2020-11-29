<?php

use Illuminate\Database\Seeder;

class HomeVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_videos')->delete();
        
        \DB::table('home_videos')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-31 17:46:08',
                'id' => 4,
                'updated_at' => '2020-10-31 17:46:08',
                'url' => 'https://www.youtube.com/embed/bC_czAL24zY',
            ),
            1 => 
            array (
                'created_at' => '2020-10-31 17:46:19',
                'id' => 5,
                'updated_at' => '2020-10-31 17:46:19',
                'url' => 'https://www.youtube.com/embed/bC_czAL24zY',
            ),
        ));
        
        
    }
}