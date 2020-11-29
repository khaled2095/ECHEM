<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'created_at' => '2020-11-12 06:16:22',
                'from_user' => 11,
                'id' => 1,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-12 06:16:22',
            ),
            1 => 
            array (
                'created_at' => '2020-11-12 06:17:36',
                'from_user' => 11,
                'id' => 2,
                'message' => 'kire',
                'to_user' => 3,
                'updated_at' => '2020-11-12 06:17:36',
            ),
            2 => 
            array (
                'created_at' => '2020-11-12 06:18:12',
                'from_user' => 11,
                'id' => 3,
                'message' => 'ok',
                'to_user' => 3,
                'updated_at' => '2020-11-12 06:18:12',
            ),
            3 => 
            array (
                'created_at' => '2020-11-12 06:57:37',
                'from_user' => 4,
                'id' => 4,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-12 06:57:37',
            ),
            4 => 
            array (
                'created_at' => '2020-11-12 06:57:50',
                'from_user' => 4,
                'id' => 5,
                'message' => 'this is khalled',
                'to_user' => 3,
                'updated_at' => '2020-11-12 06:57:50',
            ),
            5 => 
            array (
                'created_at' => '2020-11-12 06:58:34',
                'from_user' => 3,
                'id' => 6,
                'message' => 'what product are you looking for?',
                'to_user' => 4,
                'updated_at' => '2020-11-12 06:58:34',
            ),
            6 => 
            array (
                'created_at' => '2020-11-13 00:43:30',
                'from_user' => 4,
                'id' => 7,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-13 00:43:30',
            ),
            7 => 
            array (
                'created_at' => '2020-11-13 00:44:50',
                'from_user' => 4,
                'id' => 8,
                'message' => 'yo yo yo',
                'to_user' => 3,
                'updated_at' => '2020-11-13 00:44:50',
            ),
            8 => 
            array (
                'created_at' => '2020-11-14 00:24:04',
                'from_user' => 13,
                'id' => 9,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-14 00:24:04',
            ),
            9 => 
            array (
                'created_at' => '2020-11-14 00:36:40',
                'from_user' => 3,
                'id' => 10,
                'message' => 'hola',
                'to_user' => 13,
                'updated_at' => '2020-11-14 00:36:40',
            ),
            10 => 
            array (
                'created_at' => '2020-11-14 16:33:08',
                'from_user' => 11,
                'id' => 11,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-14 16:33:08',
            ),
            11 => 
            array (
                'created_at' => '2020-11-15 16:17:56',
                'from_user' => 4,
                'id' => 12,
                'message' => 'kire',
                'to_user' => 3,
                'updated_at' => '2020-11-15 16:17:56',
            ),
            12 => 
            array (
                'created_at' => '2020-11-16 16:03:53',
                'from_user' => 3,
                'id' => 13,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-16 16:03:53',
            ),
            13 => 
            array (
                'created_at' => '2020-11-24 13:11:46',
                'from_user' => 3,
                'id' => 14,
                'message' => 'hey',
                'to_user' => 11,
                'updated_at' => '2020-11-24 13:11:46',
            ),
            14 => 
            array (
                'created_at' => '2020-11-24 13:11:54',
                'from_user' => 3,
                'id' => 15,
                'message' => 'its working',
                'to_user' => 11,
                'updated_at' => '2020-11-24 13:11:54',
            ),
            15 => 
            array (
                'created_at' => '2020-11-25 20:12:23',
                'from_user' => 3,
                'id' => 16,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-25 20:12:23',
            ),
            16 => 
            array (
                'created_at' => '2020-11-25 20:12:32',
                'from_user' => 3,
                'id' => 17,
                'message' => 'hello',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:12:32',
            ),
            17 => 
            array (
                'created_at' => '2020-11-25 20:12:42',
                'from_user' => 3,
                'id' => 18,
                'message' => 'is it working?',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:12:42',
            ),
            18 => 
            array (
                'created_at' => '2020-11-25 20:17:42',
                'from_user' => 3,
                'id' => 19,
                'message' => 'lasssssssssssst',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:17:42',
            ),
            19 => 
            array (
                'created_at' => '2020-11-25 20:17:54',
                'from_user' => 3,
                'id' => 20,
                'message' => 'la',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:17:54',
            ),
            20 => 
            array (
                'created_at' => '2020-11-25 20:18:44',
                'from_user' => 3,
                'id' => 21,
                'message' => 'type',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:18:44',
            ),
            21 => 
            array (
                'created_at' => '2020-11-25 20:28:22',
                'from_user' => 3,
                'id' => 22,
                'message' => 'database',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:28:22',
            ),
            22 => 
            array (
                'created_at' => '2020-11-25 20:29:32',
                'from_user' => 3,
                'id' => 23,
                'message' => 'test',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:29:32',
            ),
            23 => 
            array (
                'created_at' => '2020-11-25 20:29:50',
                'from_user' => 3,
                'id' => 24,
                'message' => 'is it working?',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:29:50',
            ),
            24 => 
            array (
                'created_at' => '2020-11-25 20:43:45',
                'from_user' => 3,
                'id' => 25,
                'message' => 'asdf',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:43:45',
            ),
            25 => 
            array (
                'created_at' => '2020-11-25 20:50:31',
                'from_user' => 3,
                'id' => 26,
                'message' => 'ssss',
                'to_user' => 11,
                'updated_at' => '2020-11-25 20:50:31',
            ),
            26 => 
            array (
                'created_at' => '2020-11-25 20:59:26',
                'from_user' => 15,
                'id' => 27,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-25 20:59:26',
            ),
            27 => 
            array (
                'created_at' => '2020-11-25 20:59:32',
                'from_user' => 15,
                'id' => 28,
                'message' => 'ola',
                'to_user' => 3,
                'updated_at' => '2020-11-25 20:59:32',
            ),
            28 => 
            array (
                'created_at' => '2020-11-26 07:23:47',
                'from_user' => 15,
                'id' => 29,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-26 07:23:47',
            ),
            29 => 
            array (
                'created_at' => '2020-11-26 07:23:56',
                'from_user' => 15,
                'id' => 30,
                'message' => 'hey!!!!!!!!!',
                'to_user' => 3,
                'updated_at' => '2020-11-26 07:23:56',
            ),
            30 => 
            array (
                'created_at' => '2020-11-26 07:24:54',
                'from_user' => 15,
                'id' => 31,
                'message' => 'why?',
                'to_user' => 3,
                'updated_at' => '2020-11-26 07:24:54',
            ),
            31 => 
            array (
                'created_at' => '2020-11-26 07:26:19',
                'from_user' => 15,
                'id' => 32,
                'message' => 'w',
                'to_user' => 3,
                'updated_at' => '2020-11-26 07:26:19',
            ),
            32 => 
            array (
                'created_at' => '2020-11-26 08:19:38',
                'from_user' => 15,
                'id' => 33,
                'message' => 'is it',
                'to_user' => 3,
                'updated_at' => '2020-11-26 08:19:38',
            ),
            33 => 
            array (
                'created_at' => '2020-11-26 08:20:17',
                'from_user' => 15,
                'id' => 34,
                'message' => '??????',
                'to_user' => 3,
                'updated_at' => '2020-11-26 08:20:17',
            ),
            34 => 
            array (
                'created_at' => '2020-11-26 08:20:56',
                'from_user' => 15,
                'id' => 35,
                'message' => 'fff',
                'to_user' => 3,
                'updated_at' => '2020-11-26 08:20:56',
            ),
            35 => 
            array (
                'created_at' => '2020-11-26 08:21:11',
                'from_user' => 15,
                'id' => 36,
                'message' => 'iiiiiiii',
                'to_user' => 3,
                'updated_at' => '2020-11-26 08:21:11',
            ),
            36 => 
            array (
                'created_at' => '2020-11-26 08:22:18',
                'from_user' => 3,
                'id' => 37,
                'message' => 'tttttttttttttt',
                'to_user' => 15,
                'updated_at' => '2020-11-26 08:22:18',
            ),
            37 => 
            array (
                'created_at' => '2020-11-26 08:22:34',
                'from_user' => 15,
                'id' => 38,
                'message' => 'fel',
                'to_user' => 3,
                'updated_at' => '2020-11-26 08:22:34',
            ),
            38 => 
            array (
                'created_at' => '2020-11-28 10:21:37',
                'from_user' => 3,
                'id' => 39,
                'message' => 'hello',
                'to_user' => 3,
                'updated_at' => '2020-11-28 10:21:37',
            ),
            39 => 
            array (
                'created_at' => '2020-11-28 10:21:46',
                'from_user' => 3,
                'id' => 40,
                'message' => 'tetete',
                'to_user' => 15,
                'updated_at' => '2020-11-28 10:21:46',
            ),
            40 => 
            array (
                'created_at' => '2020-11-28 10:22:32',
                'from_user' => 3,
                'id' => 41,
                'message' => 'sssssssssssssssss',
                'to_user' => 15,
                'updated_at' => '2020-11-28 10:22:32',
            ),
            41 => 
            array (
                'created_at' => '2020-11-28 10:22:47',
                'from_user' => 3,
                'id' => 42,
                'message' => 'hello',
                'to_user' => 15,
                'updated_at' => '2020-11-28 10:22:47',
            ),
            42 => 
            array (
                'created_at' => '2020-11-28 10:42:17',
                'from_user' => 3,
                'id' => 43,
                'message' => 'hhhhhhhhhhhhh',
                'to_user' => 11,
                'updated_at' => '2020-11-28 10:42:17',
            ),
            43 => 
            array (
                'created_at' => '2020-11-28 10:42:52',
                'from_user' => 3,
                'id' => 44,
                'message' => 'hhhh',
                'to_user' => 11,
                'updated_at' => '2020-11-28 10:42:52',
            ),
            44 => 
            array (
                'created_at' => '2020-11-28 10:44:32',
                'from_user' => 3,
                'id' => 45,
                'message' => 'hehehehhehehe',
                'to_user' => 11,
                'updated_at' => '2020-11-28 10:44:32',
            ),
            45 => 
            array (
                'created_at' => '2020-11-28 10:44:59',
                'from_user' => 3,
                'id' => 46,
                'message' => '?',
                'to_user' => 4,
                'updated_at' => '2020-11-28 10:44:59',
            ),
        ));
        
        
    }
}