<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2020-10-11 08:06:38',
            ),
            1 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2020-10-11 08:06:38',
            ),
            2 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2020-10-11 08:06:38',
            ),
            3 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2020-10-11 08:06:38',
            ),
            4 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2020-10-11 08:06:38',
            ),
            5 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            6 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            7 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            8 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            9 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            10 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            11 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            12 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            13 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            14 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            15 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            16 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            17 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            18 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            19 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            20 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            21 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            22 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            23 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            24 => 
            array (
                'created_at' => '2020-10-11 08:06:38',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-10-11 08:06:38',
            ),
            25 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            26 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            27 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            28 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            29 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            30 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            31 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            32 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            33 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            34 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            35 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            36 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            37 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            38 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            39 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'updated_at' => '2020-10-11 08:06:39',
            ),
            40 => 
            array (
                'created_at' => '2020-10-11 08:06:39',
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'updated_at' => '2020-10-11 08:06:39',
            ),
            41 => 
            array (
                'created_at' => '2020-10-11 08:13:53',
                'id' => 42,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-10-11 08:13:53',
            ),
            42 => 
            array (
                'created_at' => '2020-10-11 08:13:53',
                'id' => 43,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-10-11 08:13:53',
            ),
            43 => 
            array (
                'created_at' => '2020-10-11 08:13:53',
                'id' => 44,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-10-11 08:13:53',
            ),
            44 => 
            array (
                'created_at' => '2020-10-11 08:13:53',
                'id' => 45,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-10-11 08:13:53',
            ),
            45 => 
            array (
                'created_at' => '2020-10-11 08:13:53',
                'id' => 46,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-10-11 08:13:53',
            ),
            46 => 
            array (
                'created_at' => '2020-10-12 06:18:19',
                'id' => 47,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-10-12 06:18:19',
            ),
            47 => 
            array (
                'created_at' => '2020-10-12 06:18:19',
                'id' => 48,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-10-12 06:18:19',
            ),
            48 => 
            array (
                'created_at' => '2020-10-12 06:18:19',
                'id' => 49,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-10-12 06:18:19',
            ),
            49 => 
            array (
                'created_at' => '2020-10-12 06:18:19',
                'id' => 50,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-10-12 06:18:19',
            ),
            50 => 
            array (
                'created_at' => '2020-10-12 06:18:19',
                'id' => 51,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-10-12 06:18:19',
            ),
            51 => 
            array (
                'created_at' => '2020-10-12 09:02:30',
                'id' => 52,
                'key' => 'browse_products',
                'table_name' => 'products',
                'updated_at' => '2020-10-12 09:02:30',
            ),
            52 => 
            array (
                'created_at' => '2020-10-12 09:02:30',
                'id' => 53,
                'key' => 'read_products',
                'table_name' => 'products',
                'updated_at' => '2020-10-12 09:02:30',
            ),
            53 => 
            array (
                'created_at' => '2020-10-12 09:02:30',
                'id' => 54,
                'key' => 'edit_products',
                'table_name' => 'products',
                'updated_at' => '2020-10-12 09:02:30',
            ),
            54 => 
            array (
                'created_at' => '2020-10-12 09:02:30',
                'id' => 55,
                'key' => 'add_products',
                'table_name' => 'products',
                'updated_at' => '2020-10-12 09:02:30',
            ),
            55 => 
            array (
                'created_at' => '2020-10-12 09:02:30',
                'id' => 56,
                'key' => 'delete_products',
                'table_name' => 'products',
                'updated_at' => '2020-10-12 09:02:30',
            ),
            56 => 
            array (
                'created_at' => '2020-10-14 14:44:03',
                'id' => 57,
                'key' => 'browse_coupons',
                'table_name' => 'coupons',
                'updated_at' => '2020-10-14 14:44:03',
            ),
            57 => 
            array (
                'created_at' => '2020-10-14 14:44:03',
                'id' => 58,
                'key' => 'read_coupons',
                'table_name' => 'coupons',
                'updated_at' => '2020-10-14 14:44:03',
            ),
            58 => 
            array (
                'created_at' => '2020-10-14 14:44:03',
                'id' => 59,
                'key' => 'edit_coupons',
                'table_name' => 'coupons',
                'updated_at' => '2020-10-14 14:44:03',
            ),
            59 => 
            array (
                'created_at' => '2020-10-14 14:44:03',
                'id' => 60,
                'key' => 'add_coupons',
                'table_name' => 'coupons',
                'updated_at' => '2020-10-14 14:44:03',
            ),
            60 => 
            array (
                'created_at' => '2020-10-14 14:44:03',
                'id' => 61,
                'key' => 'delete_coupons',
                'table_name' => 'coupons',
                'updated_at' => '2020-10-14 14:44:03',
            ),
            61 => 
            array (
                'created_at' => '2020-10-15 16:39:04',
                'id' => 62,
                'key' => 'browse_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2020-10-15 16:39:04',
            ),
            62 => 
            array (
                'created_at' => '2020-10-15 16:39:04',
                'id' => 63,
                'key' => 'read_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2020-10-15 16:39:04',
            ),
            63 => 
            array (
                'created_at' => '2020-10-15 16:39:04',
                'id' => 64,
                'key' => 'edit_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2020-10-15 16:39:04',
            ),
            64 => 
            array (
                'created_at' => '2020-10-15 16:39:04',
                'id' => 65,
                'key' => 'add_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2020-10-15 16:39:04',
            ),
            65 => 
            array (
                'created_at' => '2020-10-15 16:39:04',
                'id' => 66,
                'key' => 'delete_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2020-10-15 16:39:04',
            ),
            66 => 
            array (
                'created_at' => '2020-10-15 16:40:36',
                'id' => 67,
                'key' => 'browse_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2020-10-15 16:40:36',
            ),
            67 => 
            array (
                'created_at' => '2020-10-15 16:40:36',
                'id' => 68,
                'key' => 'read_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2020-10-15 16:40:36',
            ),
            68 => 
            array (
                'created_at' => '2020-10-15 16:40:36',
                'id' => 69,
                'key' => 'edit_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2020-10-15 16:40:36',
            ),
            69 => 
            array (
                'created_at' => '2020-10-15 16:40:36',
                'id' => 70,
                'key' => 'add_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2020-10-15 16:40:36',
            ),
            70 => 
            array (
                'created_at' => '2020-10-15 16:40:36',
                'id' => 71,
                'key' => 'delete_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2020-10-15 16:40:36',
            ),
            71 => 
            array (
                'created_at' => '2020-10-31 08:16:37',
                'id' => 87,
                'key' => 'browse_custom_pages',
                'table_name' => 'custom_pages',
                'updated_at' => '2020-10-31 08:16:37',
            ),
            72 => 
            array (
                'created_at' => '2020-10-31 08:16:37',
                'id' => 88,
                'key' => 'read_custom_pages',
                'table_name' => 'custom_pages',
                'updated_at' => '2020-10-31 08:16:37',
            ),
            73 => 
            array (
                'created_at' => '2020-10-31 08:16:37',
                'id' => 89,
                'key' => 'edit_custom_pages',
                'table_name' => 'custom_pages',
                'updated_at' => '2020-10-31 08:16:37',
            ),
            74 => 
            array (
                'created_at' => '2020-10-31 08:16:37',
                'id' => 90,
                'key' => 'add_custom_pages',
                'table_name' => 'custom_pages',
                'updated_at' => '2020-10-31 08:16:37',
            ),
            75 => 
            array (
                'created_at' => '2020-10-31 08:16:37',
                'id' => 91,
                'key' => 'delete_custom_pages',
                'table_name' => 'custom_pages',
                'updated_at' => '2020-10-31 08:16:37',
            ),
            76 => 
            array (
                'created_at' => '2020-10-31 11:20:37',
                'id' => 92,
                'key' => 'browse_home_videos',
                'table_name' => 'home_videos',
                'updated_at' => '2020-10-31 11:20:37',
            ),
            77 => 
            array (
                'created_at' => '2020-10-31 11:20:37',
                'id' => 93,
                'key' => 'read_home_videos',
                'table_name' => 'home_videos',
                'updated_at' => '2020-10-31 11:20:37',
            ),
            78 => 
            array (
                'created_at' => '2020-10-31 11:20:37',
                'id' => 94,
                'key' => 'edit_home_videos',
                'table_name' => 'home_videos',
                'updated_at' => '2020-10-31 11:20:37',
            ),
            79 => 
            array (
                'created_at' => '2020-10-31 11:20:37',
                'id' => 95,
                'key' => 'add_home_videos',
                'table_name' => 'home_videos',
                'updated_at' => '2020-10-31 11:20:37',
            ),
            80 => 
            array (
                'created_at' => '2020-10-31 11:20:37',
                'id' => 96,
                'key' => 'delete_home_videos',
                'table_name' => 'home_videos',
                'updated_at' => '2020-10-31 11:20:37',
            ),
            81 => 
            array (
                'created_at' => '2020-10-31 12:49:37',
                'id' => 102,
                'key' => 'browse_contacts',
                'table_name' => 'contacts',
                'updated_at' => '2020-10-31 12:49:37',
            ),
            82 => 
            array (
                'created_at' => '2020-10-31 12:49:37',
                'id' => 103,
                'key' => 'read_contacts',
                'table_name' => 'contacts',
                'updated_at' => '2020-10-31 12:49:37',
            ),
            83 => 
            array (
                'created_at' => '2020-10-31 12:49:37',
                'id' => 104,
                'key' => 'edit_contacts',
                'table_name' => 'contacts',
                'updated_at' => '2020-10-31 12:49:37',
            ),
            84 => 
            array (
                'created_at' => '2020-10-31 12:49:37',
                'id' => 105,
                'key' => 'add_contacts',
                'table_name' => 'contacts',
                'updated_at' => '2020-10-31 12:49:37',
            ),
            85 => 
            array (
                'created_at' => '2020-10-31 12:49:37',
                'id' => 106,
                'key' => 'delete_contacts',
                'table_name' => 'contacts',
                'updated_at' => '2020-10-31 12:49:37',
            ),
            86 => 
            array (
                'created_at' => '2020-10-31 13:03:21',
                'id' => 112,
                'key' => 'browse_faqs',
                'table_name' => 'faqs',
                'updated_at' => '2020-10-31 13:03:21',
            ),
            87 => 
            array (
                'created_at' => '2020-10-31 13:03:21',
                'id' => 113,
                'key' => 'read_faqs',
                'table_name' => 'faqs',
                'updated_at' => '2020-10-31 13:03:21',
            ),
            88 => 
            array (
                'created_at' => '2020-10-31 13:03:21',
                'id' => 114,
                'key' => 'edit_faqs',
                'table_name' => 'faqs',
                'updated_at' => '2020-10-31 13:03:21',
            ),
            89 => 
            array (
                'created_at' => '2020-10-31 13:03:21',
                'id' => 115,
                'key' => 'add_faqs',
                'table_name' => 'faqs',
                'updated_at' => '2020-10-31 13:03:21',
            ),
            90 => 
            array (
                'created_at' => '2020-10-31 13:03:21',
                'id' => 116,
                'key' => 'delete_faqs',
                'table_name' => 'faqs',
                'updated_at' => '2020-10-31 13:03:21',
            ),
            91 => 
            array (
                'created_at' => '2020-10-31 17:08:30',
                'id' => 117,
                'key' => 'browse_wholesales',
                'table_name' => 'wholesales',
                'updated_at' => '2020-10-31 17:08:30',
            ),
            92 => 
            array (
                'created_at' => '2020-10-31 17:08:30',
                'id' => 118,
                'key' => 'read_wholesales',
                'table_name' => 'wholesales',
                'updated_at' => '2020-10-31 17:08:30',
            ),
            93 => 
            array (
                'created_at' => '2020-10-31 17:08:30',
                'id' => 119,
                'key' => 'edit_wholesales',
                'table_name' => 'wholesales',
                'updated_at' => '2020-10-31 17:08:30',
            ),
            94 => 
            array (
                'created_at' => '2020-10-31 17:08:30',
                'id' => 120,
                'key' => 'add_wholesales',
                'table_name' => 'wholesales',
                'updated_at' => '2020-10-31 17:08:30',
            ),
            95 => 
            array (
                'created_at' => '2020-10-31 17:08:30',
                'id' => 121,
                'key' => 'delete_wholesales',
                'table_name' => 'wholesales',
                'updated_at' => '2020-10-31 17:08:30',
            ),
            96 => 
            array (
                'created_at' => '2020-11-01 14:23:14',
                'id' => 122,
                'key' => 'browse_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2020-11-01 14:23:14',
            ),
            97 => 
            array (
                'created_at' => '2020-11-01 14:23:14',
                'id' => 123,
                'key' => 'read_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2020-11-01 14:23:14',
            ),
            98 => 
            array (
                'created_at' => '2020-11-01 14:23:14',
                'id' => 124,
                'key' => 'edit_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2020-11-01 14:23:14',
            ),
            99 => 
            array (
                'created_at' => '2020-11-01 14:23:14',
                'id' => 125,
                'key' => 'add_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2020-11-01 14:23:14',
            ),
            100 => 
            array (
                'created_at' => '2020-11-01 14:23:14',
                'id' => 126,
                'key' => 'delete_product_attributes',
                'table_name' => 'product_attributes',
                'updated_at' => '2020-11-01 14:23:14',
            ),
            101 => 
            array (
                'created_at' => '2020-11-01 14:35:57',
                'id' => 127,
                'key' => 'browse_videos',
                'table_name' => 'videos',
                'updated_at' => '2020-11-01 14:35:57',
            ),
            102 => 
            array (
                'created_at' => '2020-11-01 14:35:57',
                'id' => 128,
                'key' => 'read_videos',
                'table_name' => 'videos',
                'updated_at' => '2020-11-01 14:35:57',
            ),
            103 => 
            array (
                'created_at' => '2020-11-01 14:35:57',
                'id' => 129,
                'key' => 'edit_videos',
                'table_name' => 'videos',
                'updated_at' => '2020-11-01 14:35:57',
            ),
            104 => 
            array (
                'created_at' => '2020-11-01 14:35:57',
                'id' => 130,
                'key' => 'add_videos',
                'table_name' => 'videos',
                'updated_at' => '2020-11-01 14:35:57',
            ),
            105 => 
            array (
                'created_at' => '2020-11-01 14:35:57',
                'id' => 131,
                'key' => 'delete_videos',
                'table_name' => 'videos',
                'updated_at' => '2020-11-01 14:35:57',
            ),
            106 => 
            array (
                'created_at' => '2020-11-01 14:36:30',
                'id' => 132,
                'key' => 'browse_video_categories',
                'table_name' => 'video_categories',
                'updated_at' => '2020-11-01 14:36:30',
            ),
            107 => 
            array (
                'created_at' => '2020-11-01 14:36:30',
                'id' => 133,
                'key' => 'read_video_categories',
                'table_name' => 'video_categories',
                'updated_at' => '2020-11-01 14:36:30',
            ),
            108 => 
            array (
                'created_at' => '2020-11-01 14:36:30',
                'id' => 134,
                'key' => 'edit_video_categories',
                'table_name' => 'video_categories',
                'updated_at' => '2020-11-01 14:36:30',
            ),
            109 => 
            array (
                'created_at' => '2020-11-01 14:36:30',
                'id' => 135,
                'key' => 'add_video_categories',
                'table_name' => 'video_categories',
                'updated_at' => '2020-11-01 14:36:30',
            ),
            110 => 
            array (
                'created_at' => '2020-11-01 14:36:30',
                'id' => 136,
                'key' => 'delete_video_categories',
                'table_name' => 'video_categories',
                'updated_at' => '2020-11-01 14:36:30',
            ),
            111 => 
            array (
                'created_at' => '2020-11-01 15:23:35',
                'id' => 137,
                'key' => 'browse_ebook_requests',
                'table_name' => 'ebook_requests',
                'updated_at' => '2020-11-01 15:23:35',
            ),
            112 => 
            array (
                'created_at' => '2020-11-01 15:23:35',
                'id' => 138,
                'key' => 'read_ebook_requests',
                'table_name' => 'ebook_requests',
                'updated_at' => '2020-11-01 15:23:35',
            ),
            113 => 
            array (
                'created_at' => '2020-11-01 15:23:35',
                'id' => 139,
                'key' => 'edit_ebook_requests',
                'table_name' => 'ebook_requests',
                'updated_at' => '2020-11-01 15:23:35',
            ),
            114 => 
            array (
                'created_at' => '2020-11-01 15:23:35',
                'id' => 140,
                'key' => 'add_ebook_requests',
                'table_name' => 'ebook_requests',
                'updated_at' => '2020-11-01 15:23:35',
            ),
            115 => 
            array (
                'created_at' => '2020-11-01 15:23:35',
                'id' => 141,
                'key' => 'delete_ebook_requests',
                'table_name' => 'ebook_requests',
                'updated_at' => '2020-11-01 15:23:35',
            ),
            116 => 
            array (
                'created_at' => '2020-11-02 06:48:43',
                'id' => 142,
                'key' => 'browse_wallets',
                'table_name' => 'wallets',
                'updated_at' => '2020-11-02 06:48:43',
            ),
            117 => 
            array (
                'created_at' => '2020-11-02 06:48:43',
                'id' => 143,
                'key' => 'read_wallets',
                'table_name' => 'wallets',
                'updated_at' => '2020-11-02 06:48:43',
            ),
            118 => 
            array (
                'created_at' => '2020-11-02 06:48:43',
                'id' => 144,
                'key' => 'edit_wallets',
                'table_name' => 'wallets',
                'updated_at' => '2020-11-02 06:48:43',
            ),
            119 => 
            array (
                'created_at' => '2020-11-02 06:48:43',
                'id' => 145,
                'key' => 'add_wallets',
                'table_name' => 'wallets',
                'updated_at' => '2020-11-02 06:48:43',
            ),
            120 => 
            array (
                'created_at' => '2020-11-02 06:48:43',
                'id' => 146,
                'key' => 'delete_wallets',
                'table_name' => 'wallets',
                'updated_at' => '2020-11-02 06:48:43',
            ),
            121 => 
            array (
                'created_at' => '2020-11-02 06:50:39',
                'id' => 147,
                'key' => 'browse_reward_points',
                'table_name' => 'reward_points',
                'updated_at' => '2020-11-02 06:50:39',
            ),
            122 => 
            array (
                'created_at' => '2020-11-02 06:50:39',
                'id' => 148,
                'key' => 'read_reward_points',
                'table_name' => 'reward_points',
                'updated_at' => '2020-11-02 06:50:39',
            ),
            123 => 
            array (
                'created_at' => '2020-11-02 06:50:39',
                'id' => 149,
                'key' => 'edit_reward_points',
                'table_name' => 'reward_points',
                'updated_at' => '2020-11-02 06:50:39',
            ),
            124 => 
            array (
                'created_at' => '2020-11-02 06:50:39',
                'id' => 150,
                'key' => 'add_reward_points',
                'table_name' => 'reward_points',
                'updated_at' => '2020-11-02 06:50:39',
            ),
            125 => 
            array (
                'created_at' => '2020-11-02 06:50:39',
                'id' => 151,
                'key' => 'delete_reward_points',
                'table_name' => 'reward_points',
                'updated_at' => '2020-11-02 06:50:39',
            ),
            126 => 
            array (
                'created_at' => '2020-11-02 06:52:49',
                'id' => 152,
                'key' => 'browse_gift_card_purchases',
                'table_name' => 'gift_card_purchases',
                'updated_at' => '2020-11-02 06:52:49',
            ),
            127 => 
            array (
                'created_at' => '2020-11-02 06:52:49',
                'id' => 153,
                'key' => 'read_gift_card_purchases',
                'table_name' => 'gift_card_purchases',
                'updated_at' => '2020-11-02 06:52:49',
            ),
            128 => 
            array (
                'created_at' => '2020-11-02 06:52:49',
                'id' => 154,
                'key' => 'edit_gift_card_purchases',
                'table_name' => 'gift_card_purchases',
                'updated_at' => '2020-11-02 06:52:49',
            ),
            129 => 
            array (
                'created_at' => '2020-11-02 06:52:49',
                'id' => 155,
                'key' => 'add_gift_card_purchases',
                'table_name' => 'gift_card_purchases',
                'updated_at' => '2020-11-02 06:52:49',
            ),
            130 => 
            array (
                'created_at' => '2020-11-02 06:52:49',
                'id' => 156,
                'key' => 'delete_gift_card_purchases',
                'table_name' => 'gift_card_purchases',
                'updated_at' => '2020-11-02 06:52:49',
            ),
            131 => 
            array (
                'created_at' => '2020-11-02 06:57:45',
                'id' => 157,
                'key' => 'browse_gift_cards',
                'table_name' => 'gift_cards',
                'updated_at' => '2020-11-02 06:57:45',
            ),
            132 => 
            array (
                'created_at' => '2020-11-02 06:57:45',
                'id' => 158,
                'key' => 'read_gift_cards',
                'table_name' => 'gift_cards',
                'updated_at' => '2020-11-02 06:57:45',
            ),
            133 => 
            array (
                'created_at' => '2020-11-02 06:57:45',
                'id' => 159,
                'key' => 'edit_gift_cards',
                'table_name' => 'gift_cards',
                'updated_at' => '2020-11-02 06:57:45',
            ),
            134 => 
            array (
                'created_at' => '2020-11-02 06:57:45',
                'id' => 160,
                'key' => 'add_gift_cards',
                'table_name' => 'gift_cards',
                'updated_at' => '2020-11-02 06:57:45',
            ),
            135 => 
            array (
                'created_at' => '2020-11-02 06:57:45',
                'id' => 161,
                'key' => 'delete_gift_cards',
                'table_name' => 'gift_cards',
                'updated_at' => '2020-11-02 06:57:45',
            ),
            136 => 
            array (
                'created_at' => '2020-11-02 06:58:31',
                'id' => 162,
                'key' => 'browse_site_reviews',
                'table_name' => 'site_reviews',
                'updated_at' => '2020-11-02 06:58:31',
            ),
            137 => 
            array (
                'created_at' => '2020-11-02 06:58:31',
                'id' => 163,
                'key' => 'read_site_reviews',
                'table_name' => 'site_reviews',
                'updated_at' => '2020-11-02 06:58:31',
            ),
            138 => 
            array (
                'created_at' => '2020-11-02 06:58:31',
                'id' => 164,
                'key' => 'edit_site_reviews',
                'table_name' => 'site_reviews',
                'updated_at' => '2020-11-02 06:58:31',
            ),
            139 => 
            array (
                'created_at' => '2020-11-02 06:58:31',
                'id' => 165,
                'key' => 'add_site_reviews',
                'table_name' => 'site_reviews',
                'updated_at' => '2020-11-02 06:58:31',
            ),
            140 => 
            array (
                'created_at' => '2020-11-02 06:58:31',
                'id' => 166,
                'key' => 'delete_site_reviews',
                'table_name' => 'site_reviews',
                'updated_at' => '2020-11-02 06:58:31',
            ),
            141 => 
            array (
                'created_at' => '2020-11-12 06:05:07',
                'id' => 167,
                'key' => 'browse_post_categories',
                'table_name' => 'post_categories',
                'updated_at' => '2020-11-12 06:05:07',
            ),
            142 => 
            array (
                'created_at' => '2020-11-12 06:05:07',
                'id' => 168,
                'key' => 'read_post_categories',
                'table_name' => 'post_categories',
                'updated_at' => '2020-11-12 06:05:07',
            ),
            143 => 
            array (
                'created_at' => '2020-11-12 06:05:07',
                'id' => 169,
                'key' => 'edit_post_categories',
                'table_name' => 'post_categories',
                'updated_at' => '2020-11-12 06:05:07',
            ),
            144 => 
            array (
                'created_at' => '2020-11-12 06:05:07',
                'id' => 170,
                'key' => 'add_post_categories',
                'table_name' => 'post_categories',
                'updated_at' => '2020-11-12 06:05:07',
            ),
            145 => 
            array (
                'created_at' => '2020-11-12 06:05:07',
                'id' => 171,
                'key' => 'delete_post_categories',
                'table_name' => 'post_categories',
                'updated_at' => '2020-11-12 06:05:07',
            ),
            146 => 
            array (
                'created_at' => '2020-11-16 01:57:16',
                'id' => 172,
                'key' => 'browse_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2020-11-16 01:57:16',
            ),
            147 => 
            array (
                'created_at' => '2020-11-16 01:57:16',
                'id' => 173,
                'key' => 'read_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2020-11-16 01:57:16',
            ),
            148 => 
            array (
                'created_at' => '2020-11-16 01:57:16',
                'id' => 174,
                'key' => 'edit_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2020-11-16 01:57:16',
            ),
            149 => 
            array (
                'created_at' => '2020-11-16 01:57:16',
                'id' => 175,
                'key' => 'add_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2020-11-16 01:57:16',
            ),
            150 => 
            array (
                'created_at' => '2020-11-16 01:57:16',
                'id' => 176,
                'key' => 'delete_expenses',
                'table_name' => 'expenses',
                'updated_at' => '2020-11-16 01:57:16',
            ),
        ));
        
        
    }
}