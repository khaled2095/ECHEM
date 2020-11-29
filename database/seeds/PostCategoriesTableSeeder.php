<?php

use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_categories')->delete();
        
        \DB::table('post_categories')->insert(array (
            0 => 
            array (
                'created_at' => '2020-11-12 06:07:50',
                'id' => 1,
                'name' => 'Plastisol Printing',
                'updated_at' => '2020-11-12 06:07:50',
            ),
            1 => 
            array (
                'created_at' => '2020-11-12 06:08:09',
                'id' => 2,
                'name' => 'Water Based Printing',
                'updated_at' => '2020-11-12 06:08:09',
            ),
        ));
        
        
    }
}