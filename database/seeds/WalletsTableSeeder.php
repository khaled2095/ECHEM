<?php

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wallets')->delete();
        
        \DB::table('wallets')->insert(array (
            0 => 
            array (
                'amount' => 34381.05,
                'amount_spend' => 6400.0,
                'created_at' => '2020-10-19 15:39:49',
                'id' => 1,
                'updated_at' => '2020-10-19 15:39:49',
                'user_id' => 3,
            ),
            1 => 
            array (
                'amount' => 12391.1,
                'amount_spend' => 6900.0,
                'created_at' => '2020-10-28 08:41:38',
                'id' => 2,
                'updated_at' => '2020-10-28 08:41:38',
                'user_id' => 6,
            ),
            2 => 
            array (
                'amount' => 0.0,
                'amount_spend' => 0.0,
                'created_at' => '2020-10-29 15:07:35',
                'id' => 3,
                'updated_at' => '2020-10-29 15:07:35',
                'user_id' => 4,
            ),
            3 => 
            array (
                'amount' => 0.0,
                'amount_spend' => 0.0,
                'created_at' => '2020-11-02 07:08:10',
                'id' => 4,
                'updated_at' => '2020-11-02 07:08:10',
                'user_id' => 5,
            ),
            4 => 
            array (
                'amount' => 600.0,
                'amount_spend' => 9400.0,
                'created_at' => '2020-11-02 07:54:29',
                'id' => 5,
                'updated_at' => '2020-11-02 07:54:29',
                'user_id' => 8,
            ),
            5 => 
            array (
                'amount' => 0.0,
                'amount_spend' => 0.0,
                'created_at' => '2020-11-02 08:49:36',
                'id' => 6,
                'updated_at' => '2020-11-02 08:49:36',
                'user_id' => 9,
            ),
            6 => 
            array (
                'amount' => 1100.0,
                'amount_spend' => 0.0,
                'created_at' => '2020-11-02 09:34:08',
                'id' => 7,
                'updated_at' => '2020-11-02 09:34:08',
                'user_id' => 10,
            ),
            7 => 
            array (
                'amount' => 1000.0,
                'amount_spend' => 9000.0,
                'created_at' => '2020-11-02 18:30:05',
                'id' => 8,
                'updated_at' => '2020-11-02 18:30:05',
                'user_id' => 11,
            ),
            8 => 
            array (
                'amount' => 19250.0,
                'amount_spend' => 0.0,
                'created_at' => '2020-11-07 18:34:04',
                'id' => 9,
                'updated_at' => '2020-11-07 18:34:04',
                'user_id' => 12,
            ),
        ));
        
        
    }
}