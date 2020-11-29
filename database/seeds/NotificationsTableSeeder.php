<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'created_at' => '2020-11-25 20:59:26',
                'data' => '{"NewMessage":"test"}',
                'id' => '03bb5b21-29f3-408b-aea0-e56431317d41',
                'notifiable_id' => 15,
                'notifiable_type' => 'App\\User',
                'read_at' => NULL,
                'type' => 'App\\Notifications\\NewMessage',
                'updated_at' => '2020-11-25 20:59:26',
            ),
            1 => 
            array (
                'created_at' => '2020-11-26 07:23:48',
                'data' => '{"NewMessage":"test"}',
                'id' => 'bf721d1c-3540-4466-92bd-765bd4f90601',
                'notifiable_id' => 15,
                'notifiable_type' => 'App\\User',
                'read_at' => NULL,
                'type' => 'App\\Notifications\\NewMessage',
                'updated_at' => '2020-11-26 07:23:48',
            ),
            2 => 
            array (
                'created_at' => '2020-11-26 08:20:56',
                'data' => '{"NewMessage":"test"}',
                'id' => '785281fe-f4a8-4cac-b9e7-475c67ea236e',
                'notifiable_id' => 15,
                'notifiable_type' => 'App\\User',
                'read_at' => NULL,
                'type' => 'App\\Notifications\\NewMessage',
                'updated_at' => '2020-11-26 08:20:56',
            ),
            3 => 
            array (
                'created_at' => '2020-11-26 08:21:11',
                'data' => '{"NewMessage":"test"}',
                'id' => '16e1e091-3bd2-40c1-bcb7-dc8dfaa25b7f',
                'notifiable_id' => 15,
                'notifiable_type' => 'App\\User',
                'read_at' => NULL,
                'type' => 'App\\Notifications\\NewMessage',
                'updated_at' => '2020-11-26 08:21:11',
            ),
            4 => 
            array (
                'created_at' => '2020-11-26 08:22:18',
                'data' => '{"NewMessage":"test"}',
                'id' => 'c630e410-4290-491f-ab6a-29466d7564e0',
                'notifiable_id' => 3,
                'notifiable_type' => 'App\\User',
                'read_at' => NULL,
                'type' => 'App\\Notifications\\NewMessage',
                'updated_at' => '2020-11-26 08:22:18',
            ),
            5 => 
            array (
                'created_at' => '2020-11-26 08:22:34',
                'data' => '{"NewMessage":"test"}',
                'id' => '96aa95d2-c280-4428-a494-a969e2cfa97e',
                'notifiable_id' => 15,
                'notifiable_type' => 'App\\User',
                'read_at' => NULL,
                'type' => 'App\\Notifications\\NewMessage',
                'updated_at' => '2020-11-26 08:22:34',
            ),
            6 => 
            array (
                'created_at' => '2020-11-28 10:44:32',
                'data' => '{"NewMessage":"test"}',
                'id' => '7aa382f7-b3e7-4a07-bf3d-662d9efd49c1',
                'notifiable_id' => 3,
                'notifiable_type' => 'App\\User',
                'read_at' => NULL,
                'type' => 'App\\Notifications\\NewMessage',
                'updated_at' => '2020-11-28 10:44:32',
            ),
            7 => 
            array (
                'created_at' => '2020-11-28 10:44:59',
                'data' => '{"NewMessage":"test"}',
                'id' => 'a3a0f1cb-9721-48a4-85b1-ff2b74c122cd',
                'notifiable_id' => 3,
                'notifiable_type' => 'App\\User',
                'read_at' => NULL,
                'type' => 'App\\Notifications\\NewMessage',
                'updated_at' => '2020-11-28 10:44:59',
            ),
        ));
        
        
    }
}