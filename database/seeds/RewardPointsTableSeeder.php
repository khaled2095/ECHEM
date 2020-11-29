<?php

use Illuminate\Database\Seeder;

class RewardPointsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reward_points')->delete();
        
        \DB::table('reward_points')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-19 16:40:46',
                'id' => 1,
                'point' => 99365,
                'updated_at' => '2020-10-19 16:40:46',
                'user_id' => 3,
            ),
            1 => 
            array (
                'created_at' => '2020-10-28 08:41:38',
                'id' => 2,
                'point' => 2810,
                'updated_at' => '2020-10-28 08:41:38',
                'user_id' => 6,
            ),
            2 => 
            array (
                'created_at' => '2020-10-29 15:07:35',
                'id' => 3,
                'point' => 0,
                'updated_at' => '2020-10-29 15:07:35',
                'user_id' => 4,
            ),
            3 => 
            array (
                'created_at' => '2020-11-02 07:08:10',
                'id' => 4,
                'point' => 0,
                'updated_at' => '2020-11-02 07:08:10',
                'user_id' => 5,
            ),
            4 => 
            array (
                'created_at' => '2020-11-02 07:54:29',
                'id' => 5,
                'point' => 300,
                'updated_at' => '2020-11-02 07:54:29',
                'user_id' => 8,
            ),
            5 => 
            array (
                'created_at' => '2020-11-02 08:49:36',
                'id' => 6,
                'point' => 600,
                'updated_at' => '2020-11-02 08:49:36',
                'user_id' => 9,
            ),
            6 => 
            array (
                'created_at' => '2020-11-02 09:34:08',
                'id' => 7,
                'point' => 300,
                'updated_at' => '2020-11-02 09:34:08',
                'user_id' => 10,
            ),
            7 => 
            array (
                'created_at' => '2020-11-02 18:30:05',
                'id' => 8,
                'point' => 0,
                'updated_at' => '2020-11-02 18:30:05',
                'user_id' => 11,
            ),
            8 => 
            array (
                'created_at' => '2020-11-07 18:34:04',
                'id' => 9,
                'point' => 310,
                'updated_at' => '2020-11-07 18:34:04',
                'user_id' => 12,
            ),
        ));
        
        
    }
}