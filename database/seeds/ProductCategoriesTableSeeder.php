<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'category_id' => 6,
                'created_at' => NULL,
                'id' => 4,
                'product_id' => 2,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'category_id' => 6,
                'created_at' => NULL,
                'id' => 5,
                'product_id' => 3,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'category_id' => 48,
                'created_at' => NULL,
                'id' => 6,
                'product_id' => 6,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'category_id' => 49,
                'created_at' => NULL,
                'id' => 7,
                'product_id' => 6,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'category_id' => 7,
                'created_at' => NULL,
                'id' => 8,
                'product_id' => 16,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'category_id' => 7,
                'created_at' => NULL,
                'id' => 9,
                'product_id' => 18,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 10,
                'product_id' => 18,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'category_id' => 9,
                'created_at' => NULL,
                'id' => 11,
                'product_id' => 19,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'category_id' => 8,
                'created_at' => NULL,
                'id' => 12,
                'product_id' => 20,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'category_id' => 7,
                'created_at' => NULL,
                'id' => 13,
                'product_id' => 21,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'category_id' => 62,
                'created_at' => NULL,
                'id' => 14,
                'product_id' => 38,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'category_id' => 16,
                'created_at' => NULL,
                'id' => 15,
                'product_id' => 39,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'category_id' => 60,
                'created_at' => NULL,
                'id' => 16,
                'product_id' => 39,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 17,
                'product_id' => 40,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'category_id' => 48,
                'created_at' => NULL,
                'id' => 18,
                'product_id' => 40,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 19,
                'product_id' => 41,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'category_id' => 48,
                'created_at' => NULL,
                'id' => 20,
                'product_id' => 41,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 21,
                'product_id' => 42,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'category_id' => 48,
                'created_at' => NULL,
                'id' => 22,
                'product_id' => 42,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'category_id' => 16,
                'created_at' => NULL,
                'id' => 23,
                'product_id' => 46,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'category_id' => 60,
                'created_at' => NULL,
                'id' => 24,
                'product_id' => 46,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 25,
                'product_id' => 47,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'category_id' => 12,
                'created_at' => NULL,
                'id' => 26,
                'product_id' => 47,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 27,
                'product_id' => 48,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'category_id' => 12,
                'created_at' => NULL,
                'id' => 28,
                'product_id' => 48,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 29,
                'product_id' => 49,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'category_id' => 12,
                'created_at' => NULL,
                'id' => 30,
                'product_id' => 49,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 31,
                'product_id' => 50,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'category_id' => 12,
                'created_at' => NULL,
                'id' => 32,
                'product_id' => 50,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 33,
                'product_id' => 51,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 34,
                'product_id' => 52,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'category_id' => 12,
                'created_at' => NULL,
                'id' => 35,
                'product_id' => 52,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 36,
                'product_id' => 53,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'category_id' => 12,
                'created_at' => NULL,
                'id' => 37,
                'product_id' => 53,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 38,
                'product_id' => 54,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'category_id' => 12,
                'created_at' => NULL,
                'id' => 39,
                'product_id' => 54,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 40,
                'product_id' => 55,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'category_id' => 14,
                'created_at' => NULL,
                'id' => 41,
                'product_id' => 55,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'category_id' => 11,
                'created_at' => NULL,
                'id' => 42,
                'product_id' => 56,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'category_id' => 16,
                'created_at' => NULL,
                'id' => 43,
                'product_id' => 57,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'category_id' => 60,
                'created_at' => NULL,
                'id' => 44,
                'product_id' => 57,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'category_id' => 16,
                'created_at' => NULL,
                'id' => 45,
                'product_id' => 58,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'category_id' => 60,
                'created_at' => NULL,
                'id' => 46,
                'product_id' => 58,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'category_id' => 7,
                'created_at' => NULL,
                'id' => 47,
                'product_id' => 59,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'category_id' => 16,
                'created_at' => NULL,
                'id' => 48,
                'product_id' => 59,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'category_id' => 60,
                'created_at' => NULL,
                'id' => 49,
                'product_id' => 59,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}