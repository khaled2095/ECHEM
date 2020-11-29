<?php

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 1,
                'order_id' => 1,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 2,
                'order_id' => 2,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 3,
                'order_id' => 3,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 4,
                'order_id' => 4,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 5,
                'order_id' => 5,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 6,
                'order_id' => 6,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 7,
                'order_id' => 7,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 8,
                'order_id' => 8,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 9,
                'order_id' => 9,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 10,
                'order_id' => 10,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 11,
                'order_id' => 11,
                'price' => 200.0,
                'product_id' => 39,
                'quantity' => 1,
                'size' => ' M',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'delivered_at' => NULL,
                'id' => 12,
                'order_id' => 12,
                'price' => 45000.0,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'None',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}