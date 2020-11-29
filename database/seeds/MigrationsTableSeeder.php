<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'batch' => 1,
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
            ),
            1 => 
            array (
                'batch' => 1,
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
            ),
            2 => 
            array (
                'batch' => 1,
                'id' => 3,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
            ),
            3 => 
            array (
                'batch' => 1,
                'id' => 4,
                'migration' => '2016_01_01_000000_create_data_types_table',
            ),
            4 => 
            array (
                'batch' => 1,
                'id' => 5,
                'migration' => '2016_01_01_000000_create_pages_table',
            ),
            5 => 
            array (
                'batch' => 1,
                'id' => 6,
                'migration' => '2016_01_01_000000_create_posts_table',
            ),
            6 => 
            array (
                'batch' => 1,
                'id' => 7,
                'migration' => '2016_02_15_204651_create_categories_table',
            ),
            7 => 
            array (
                'batch' => 1,
                'id' => 8,
                'migration' => '2016_05_19_173453_create_menu_table',
            ),
            8 => 
            array (
                'batch' => 1,
                'id' => 9,
                'migration' => '2016_10_21_190000_create_roles_table',
            ),
            9 => 
            array (
                'batch' => 1,
                'id' => 10,
                'migration' => '2016_10_21_190000_create_settings_table',
            ),
            10 => 
            array (
                'batch' => 1,
                'id' => 11,
                'migration' => '2016_11_30_135954_create_permission_table',
            ),
            11 => 
            array (
                'batch' => 1,
                'id' => 12,
                'migration' => '2016_11_30_141208_create_permission_role_table',
            ),
            12 => 
            array (
                'batch' => 1,
                'id' => 13,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
            ),
            13 => 
            array (
                'batch' => 1,
                'id' => 14,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
            ),
            14 => 
            array (
                'batch' => 1,
                'id' => 15,
                'migration' => '2017_01_14_005015_create_translations_table',
            ),
            15 => 
            array (
                'batch' => 1,
                'id' => 16,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
            ),
            16 => 
            array (
                'batch' => 1,
                'id' => 17,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
            ),
            17 => 
            array (
                'batch' => 1,
                'id' => 18,
                'migration' => '2017_04_11_000000_alter_post_nullable_fields_table',
            ),
            18 => 
            array (
                'batch' => 1,
                'id' => 19,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
            ),
            19 => 
            array (
                'batch' => 1,
                'id' => 20,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
            ),
            20 => 
            array (
                'batch' => 1,
                'id' => 21,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
            ),
            21 => 
            array (
                'batch' => 1,
                'id' => 22,
                'migration' => '2017_11_26_013050_add_user_role_relationship',
            ),
            22 => 
            array (
                'batch' => 1,
                'id' => 23,
                'migration' => '2017_11_26_015000_create_user_roles_table',
            ),
            23 => 
            array (
                'batch' => 1,
                'id' => 24,
                'migration' => '2018_03_11_000000_add_user_settings',
            ),
            24 => 
            array (
                'batch' => 1,
                'id' => 25,
                'migration' => '2018_03_14_000000_add_details_to_data_types_table',
            ),
            25 => 
            array (
                'batch' => 1,
                'id' => 26,
                'migration' => '2018_03_16_000000_make_settings_value_nullable',
            ),
            26 => 
            array (
                'batch' => 1,
                'id' => 27,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
            ),
            27 => 
            array (
                'batch' => 1,
                'id' => 28,
                'migration' => '2020_10_04_035759_create_shops_table',
            ),
            28 => 
            array (
                'batch' => 1,
                'id' => 29,
                'migration' => '2020_10_05_092527_create_products_table',
            ),
            29 => 
            array (
                'batch' => 1,
                'id' => 30,
                'migration' => '2020_10_05_124342_create_orders_table',
            ),
            30 => 
            array (
                'batch' => 1,
                'id' => 31,
                'migration' => '2020_10_05_135926_create_order_items_table',
            ),
            31 => 
            array (
                'batch' => 1,
                'id' => 32,
                'migration' => '2020_10_05_162733_create_wishlists_table',
            ),
            32 => 
            array (
                'batch' => 2,
                'id' => 34,
                'migration' => '2020_10_13_092415_create_product_categories_table',
            ),
            33 => 
            array (
                'batch' => 3,
                'id' => 35,
                'migration' => '2020_10_14_162303_create_coupons_table',
            ),
            34 => 
            array (
                'batch' => 4,
                'id' => 36,
                'migration' => '2020_10_15_105035_add_delivered_at_column_to_order_items',
            ),
            35 => 
            array (
                'batch' => 5,
                'id' => 37,
                'migration' => '2020_10_15_123541_create_sub_orders_table',
            ),
            36 => 
            array (
                'batch' => 5,
                'id' => 38,
                'migration' => '2020_10_15_123811_create_sub_order_items_table',
            ),
            37 => 
            array (
                'batch' => 6,
                'id' => 39,
                'migration' => '2020_10_15_182835_create_transactions_table',
            ),
            38 => 
            array (
                'batch' => 7,
                'id' => 40,
                'migration' => '2020_10_19_075126_create_wallets_table',
            ),
            39 => 
            array (
                'batch' => 8,
                'id' => 41,
                'migration' => '2020_10_19_152728_add_wallets_table',
            ),
            40 => 
            array (
                'batch' => 9,
                'id' => 42,
                'migration' => '2020_10_19_154955_create_reward_points_table',
            ),
            41 => 
            array (
                'batch' => 10,
                'id' => 43,
                'migration' => '2020_10_20_071526_create_gift_cards_table',
            ),
            42 => 
            array (
                'batch' => 11,
                'id' => 44,
                'migration' => '2020_10_20_071620_create_gift_cards_table',
            ),
            43 => 
            array (
                'batch' => 11,
                'id' => 45,
                'migration' => '2020_10_20_071625_create_gift_card_purchases_table',
            ),
            44 => 
            array (
                'batch' => 12,
                'id' => 46,
                'migration' => '2020_10_20_084108_add_uid_to_gift_card',
            ),
            45 => 
            array (
                'batch' => 13,
                'id' => 47,
                'migration' => '2020_10_20_084557_add_purchase_done_to_gift_card_purchases',
            ),
            46 => 
            array (
                'batch' => 14,
                'id' => 48,
                'migration' => '2020_10_20_085954_add_uid_to_gift_card_purchases',
            ),
            47 => 
            array (
                'batch' => 15,
                'id' => 49,
                'migration' => '2020_10_27_104957_create_wholesales_table',
            ),
            48 => 
            array (
                'batch' => 16,
                'id' => 50,
                'migration' => '2020_10_27_112856_update_product_table_wholesale',
            ),
            49 => 
            array (
                'batch' => 17,
                'id' => 51,
                'migration' => '2020_10_27_113837_update_user_table',
            ),
            50 => 
            array (
                'batch' => 18,
                'id' => 52,
                'migration' => '2020_10_27_120407_create_reviews_table',
            ),
            51 => 
            array (
                'batch' => 19,
                'id' => 53,
                'migration' => '2020_10_27_131124_reviews',
            ),
            52 => 
            array (
                'batch' => 20,
                'id' => 54,
                'migration' => '2020_10_27_160945_create_custom_pages_table',
            ),
            53 => 
            array (
                'batch' => 21,
                'id' => 55,
                'migration' => '2020_10_29_151008_seller_type',
            ),
            54 => 
            array (
                'batch' => 22,
                'id' => 56,
                'migration' => '2020_10_29_151911_add_pdf',
            ),
            55 => 
            array (
                'batch' => 23,
                'id' => 57,
                'migration' => '2020_10_30_181100_update_prod',
            ),
            56 => 
            array (
                'batch' => 24,
                'id' => 58,
                'migration' => '2020_10_30_210700_create_contacts_table',
            ),
            57 => 
            array (
                'batch' => 25,
                'id' => 59,
                'migration' => '2020_10_30_213414_create_site_reviews_table',
            ),
            58 => 
            array (
                'batch' => 26,
                'id' => 60,
                'migration' => '2020_10_30_214414_update-site_table',
            ),
            59 => 
            array (
                'batch' => 26,
                'id' => 61,
                'migration' => '2020_10_31_111241_create_home_videos_table',
            ),
            60 => 
            array (
                'batch' => 27,
                'id' => 62,
                'migration' => '2020_10_31_124727_create_f_a_q_s_table',
            ),
            61 => 
            array (
                'batch' => 28,
                'id' => 63,
                'migration' => '2020_10_31_125924_create_faqs_table',
            ),
            62 => 
            array (
                'batch' => 29,
                'id' => 64,
                'migration' => '2020_11_01_135615_create_video_categories_table',
            ),
            63 => 
            array (
                'batch' => 29,
                'id' => 65,
                'migration' => '2020_11_01_135617_create_videos_table',
            ),
            64 => 
            array (
                'batch' => 30,
                'id' => 66,
                'migration' => '2020_11_01_152153_create_ebook_requests_table',
            ),
            65 => 
            array (
                'batch' => 31,
                'id' => 67,
                'migration' => '2020_11_01_161749_update_prodss',
            ),
            66 => 
            array (
                'batch' => 32,
                'id' => 68,
                'migration' => '2020_11_01_180800_update_sub_order',
            ),
            67 => 
            array (
                'batch' => 33,
                'id' => 70,
                'migration' => '2020_11_04_055724_create_column_in_product_table',
            ),
            68 => 
            array (
                'batch' => 34,
                'id' => 71,
                'migration' => '2020_11_04_090252_create_messages_table',
            ),
            69 => 
            array (
                'batch' => 35,
                'id' => 72,
                'migration' => '2020_11_10_125252_create_post_categories_table',
            ),
        ));
        
        
    }
}