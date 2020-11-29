<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'answer' => 'test answer',
                'created_at' => '2020-10-31 13:05:25',
                'id' => 1,
                'question' => 'test question',
                'updated_at' => '2020-10-31 13:05:25',
            ),
        ));
        
        
    }
}