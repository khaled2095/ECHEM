<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-10-11 08:09:28',
                'email' => 'a@email.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'admin',
                'password' => '$2y$10$PXSXqFlk60LBv.OGGFSHaeIH2oBGVRyyBlROqR4uQiQIwP057/Cl.',
                'phone' => 1720345550,
                'remember_token' => 'LsfbXRNjcNbNJypoOibt8S2UbTef7MknNxsOI6qnCANpKLb4ol3sCUN0RDQV',
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2020-11-18 01:45:49',
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-10-12 04:51:15',
                'email' => 'k@gmail.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'name' => 'khaled',
                'password' => '$2y$10$XZRAXbltKpHx3hltOZsZwuocumMz/NKtw2jO6dFXlJIMh3hBappD2',
                'phone' => 0,
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => '{"locale":"en"}',
                'updated_at' => '2020-10-12 10:50:06',
            ),
            2 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-10-12 04:52:20',
                'email' => 'e@gmail.com',
                'email_verified_at' => NULL,
                'id' => 5,
                'name' => 'echem',
                'password' => '$2y$10$LzZgnMh01QKlvKIhuWRbVezEyrCJEPPw3ey.0Q.YgcMIJE3VG1k8u',
                'phone' => 0,
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2020-10-29 14:40:55',
            ),
            3 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-10-27 11:47:39',
                'email' => 'abir2jamilur30@gmail.com',
                'email_verified_at' => NULL,
                'id' => 6,
                'name' => 'Jamilur rahman',
                'password' => '$2y$10$zKSeYCneq9sUwAom/kCGoO0QXtm/S0.UZtzHZR2scYUq6eW8eQ40W',
                'phone' => 1787201430,
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-10-27 11:47:39',
            ),
            4 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-10-29 05:21:35',
                'email' => 'abc@email.com',
                'email_verified_at' => NULL,
                'id' => 7,
                'name' => 'abc',
                'password' => '$2y$10$5IZwRC/RicxWkK4QKKEiiOXV5NCCaj5XBkRG5PV0CpmYZB1U78cVi',
                'phone' => 1787201430,
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-10-29 05:21:35',
            ),
            5 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-11-02 07:52:53',
                'email' => 'coxsonline@gmail.com',
                'email_verified_at' => NULL,
                'id' => 8,
                'name' => 'Mhraihan',
                'password' => '$2y$10$GUgCVf6TzloWRRwtAfCrzuAnhB7qDUVYlpF3/65a2WpXCaGzBoAKC',
                'phone' => 1762321618,
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2020-11-02 08:56:24',
            ),
            6 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-11-02 08:45:27',
                'email' => 'khaled_a.k@outlook.com',
                'email_verified_at' => NULL,
                'id' => 9,
                'name' => 'new',
                'password' => '$2y$10$N4cuCxs.AJImaFYk4r5DZecn4HbytwSsmkvkHIBzmSlnK6NVIodW2',
                'phone' => 1720345550,
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-11-02 08:45:27',
            ),
            7 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-11-02 09:30:23',
                'email' => 'itudyokta@gmail.com',
                'email_verified_at' => NULL,
                'id' => 10,
                'name' => 'itshop',
                'password' => '$2y$10$MnYoZHf2LWfogSqWlRJqG.uQl8KV2Brn.rP49Wxay.n501ApuKiry',
                'phone' => 1762321618,
                'remember_token' => NULL,
                'role_id' => 4,
                'settings' => NULL,
                'updated_at' => '2020-11-02 16:31:01',
            ),
            8 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-11-02 17:57:54',
                'email' => 'test@gmail.com',
                'email_verified_at' => NULL,
                'id' => 11,
                'name' => 'test',
                'password' => '$2y$10$dww1w1me/cHJPtxwt8IEuOiIk9nssSZMoJHSDTtyXwfvESOX/wf8u',
                'phone' => 12345678,
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-11-02 17:57:54',
            ),
            9 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-11-07 18:25:19',
                'email' => 'mrahman0004@gmail.com',
                'email_verified_at' => NULL,
                'id' => 12,
                'name' => 'Mizanur Rahman',
                'password' => '$2y$10$lBU8zzUK0mW2HFtZ5CBWBuzvSuJ0AsHxTCdvkbJ2qPFnP1F9p6ATW',
                'phone' => 1880006362,
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-11-07 18:25:20',
            ),
            10 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-11-14 00:23:40',
                'email' => 'sheikhnayan1997@gmail.com',
                'email_verified_at' => NULL,
                'id' => 13,
                'name' => 'sheikh',
                'password' => '$2y$10$TjXeAieQErAhTyplVj999uaNu8gunbzVhNYgW3jI/Pii.6zjFMqSW',
                'phone' => 1980265838,
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-11-14 00:23:40',
            ),
            11 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-11-16 19:36:05',
                'email' => 'ali@gmail.com',
                'email_verified_at' => '2020-11-27 03:35:00',
                'id' => 14,
                'name' => 'alig',
                'password' => '$2y$10$lcRMdO5AMFQN2QaJKlixeuo3gWdtOzFNQBHgbBmyrsutMcHjyhsRG',
                'phone' => 123456,
                'remember_token' => NULL,
                'role_id' => 5,
                'settings' => NULL,
                'updated_at' => '2020-11-16 19:36:05',
            ),
            12 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-11-25 20:52:47',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'id' => 15,
                'name' => 'test',
                'password' => '$2y$10$vMiLidb0pFm6WQaHUuj3FegoI4.6tsrh6PlQAkVpB4p3LiiI4bssS',
                'phone' => 1980265838,
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2020-11-25 20:52:47',
            ),
        ));
        
        
    }
}