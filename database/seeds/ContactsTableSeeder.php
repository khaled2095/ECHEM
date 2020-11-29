<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-30 21:32:24',
                'email' => 'abir2jamilur30@gmail.com',
                'id' => 1,
                'msg' => 'hefjhkj',
                'name' => 'Jamilur rahman',
                'updated_at' => '2020-10-30 21:32:24',
            ),
            1 => 
            array (
                'created_at' => '2020-11-08 05:19:13',
                'email' => 'w98ib6x@goposts.site',
                'id' => 2,
                'msg' => 'Hi, here on the forum guys advised a cool Dating site, be sure to register - you will not REGRET it [url=https://bit.ly/384HTnk]https://bit.ly/384HTnk[/url]',
                'name' => 'Lloydfrits',
                'updated_at' => '2020-11-08 05:19:13',
            ),
        ));
        
        
    }
}