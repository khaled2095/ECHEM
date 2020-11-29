<?php

use Illuminate\Database\Seeder;

class ProductAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_attributes')->delete();
        
        \DB::table('product_attributes')->insert(array (
            0 => 
            array (
                'created_at' => '2020-11-01 16:01:24',
                'id' => 1,
                'price' => 100.0,
                'product_id' => 1,
                'size' => 'S',
                'SKU' => 'SSS',
                'status' => 0,
                'updated_at' => '2020-11-01 16:01:24',
            ),
            1 => 
            array (
                'created_at' => '2020-11-01 16:01:00',
                'id' => 2,
                'price' => 200.0,
                'product_id' => 39,
                'size' => 'M',
                'SKU' => 'MMM',
                'status' => 1,
                'updated_at' => '2020-11-13 06:35:52',
            ),
            2 => 
            array (
                'created_at' => '2020-11-02 07:04:00',
                'id' => 3,
                'price' => 5999.0,
                'product_id' => 38,
                'size' => 'Medium',
                'SKU' => 'lol',
                'status' => 1,
                'updated_at' => '2020-11-09 17:54:29',
            ),
        ));
        
        
    }
}