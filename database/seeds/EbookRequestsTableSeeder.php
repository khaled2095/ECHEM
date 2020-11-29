<?php

use Illuminate\Database\Seeder;

class EbookRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ebook_requests')->delete();
        
        \DB::table('ebook_requests')->insert(array (
            0 => 
            array (
                'created_at' => '2020-11-01 15:34:49',
                'ebook_title' => 'abs',
                'email' => 'abir2jamilur30@gmail.com',
                'id' => 1,
                'name' => 'Jamilur rahman',
                'updated_at' => '2020-11-01 15:34:49',
            ),
        ));
        
        
    }
}