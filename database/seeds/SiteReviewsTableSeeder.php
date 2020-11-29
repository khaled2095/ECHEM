<?php

use Illuminate\Database\Seeder;

class SiteReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_reviews')->delete();
        
        \DB::table('site_reviews')->insert(array (
            0 => 
            array (
                'comment' => 'hejhfcjhas',
                'created_at' => '2020-10-30 22:00:53',
                'id' => 1,
                'updated_at' => '2020-10-30 22:00:53',
                'user_id' => 3,
            ),
            1 => 
            array (
                'comment' => 'hejhfcjhas',
                'created_at' => '2020-10-30 22:01:49',
                'id' => 2,
                'updated_at' => '2020-10-30 22:01:49',
                'user_id' => 3,
            ),
        ));
        
        
    }
}