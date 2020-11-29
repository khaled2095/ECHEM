<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 5,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 2,
                'role_id' => 5,
            ),
            6 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 3,
                'role_id' => 5,
            ),
            8 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 4,
                'role_id' => 5,
            ),
            10 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 5,
                'role_id' => 5,
            ),
            12 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            13 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            14 => 
            array (
                'permission_id' => 6,
                'role_id' => 5,
            ),
            15 => 
            array (
                'permission_id' => 7,
                'role_id' => 3,
            ),
            16 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            17 => 
            array (
                'permission_id' => 7,
                'role_id' => 5,
            ),
            18 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            19 => 
            array (
                'permission_id' => 8,
                'role_id' => 5,
            ),
            20 => 
            array (
                'permission_id' => 9,
                'role_id' => 5,
            ),
            21 => 
            array (
                'permission_id' => 10,
                'role_id' => 5,
            ),
            22 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 11,
                'role_id' => 5,
            ),
            24 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 12,
                'role_id' => 5,
            ),
            26 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 13,
                'role_id' => 5,
            ),
            28 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 14,
                'role_id' => 5,
            ),
            30 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 15,
                'role_id' => 5,
            ),
            32 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            33 => 
            array (
                'permission_id' => 17,
                'role_id' => 5,
            ),
            34 => 
            array (
                'permission_id' => 18,
                'role_id' => 5,
            ),
            35 => 
            array (
                'permission_id' => 19,
                'role_id' => 5,
            ),
            36 => 
            array (
                'permission_id' => 20,
                'role_id' => 5,
            ),
            37 => 
            array (
                'permission_id' => 21,
                'role_id' => 5,
            ),
            38 => 
            array (
                'permission_id' => 22,
                'role_id' => 5,
            ),
            39 => 
            array (
                'permission_id' => 23,
                'role_id' => 5,
            ),
            40 => 
            array (
                'permission_id' => 24,
                'role_id' => 5,
            ),
            41 => 
            array (
                'permission_id' => 25,
                'role_id' => 5,
            ),
            42 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 26,
                'role_id' => 5,
            ),
            44 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 27,
                'role_id' => 5,
            ),
            46 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 28,
                'role_id' => 5,
            ),
            48 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            49 => 
            array (
                'permission_id' => 29,
                'role_id' => 5,
            ),
            50 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            51 => 
            array (
                'permission_id' => 30,
                'role_id' => 5,
            ),
            52 => 
            array (
                'permission_id' => 31,
                'role_id' => 5,
            ),
            53 => 
            array (
                'permission_id' => 32,
                'role_id' => 5,
            ),
            54 => 
            array (
                'permission_id' => 33,
                'role_id' => 5,
            ),
            55 => 
            array (
                'permission_id' => 34,
                'role_id' => 5,
            ),
            56 => 
            array (
                'permission_id' => 35,
                'role_id' => 5,
            ),
            57 => 
            array (
                'permission_id' => 36,
                'role_id' => 5,
            ),
            58 => 
            array (
                'permission_id' => 37,
                'role_id' => 5,
            ),
            59 => 
            array (
                'permission_id' => 38,
                'role_id' => 5,
            ),
            60 => 
            array (
                'permission_id' => 39,
                'role_id' => 5,
            ),
            61 => 
            array (
                'permission_id' => 40,
                'role_id' => 5,
            ),
            62 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 41,
                'role_id' => 5,
            ),
            64 => 
            array (
                'permission_id' => 42,
                'role_id' => 5,
            ),
            65 => 
            array (
                'permission_id' => 43,
                'role_id' => 5,
            ),
            66 => 
            array (
                'permission_id' => 44,
                'role_id' => 5,
            ),
            67 => 
            array (
                'permission_id' => 45,
                'role_id' => 5,
            ),
            68 => 
            array (
                'permission_id' => 46,
                'role_id' => 5,
            ),
            69 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            70 => 
            array (
                'permission_id' => 47,
                'role_id' => 5,
            ),
            71 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            72 => 
            array (
                'permission_id' => 48,
                'role_id' => 5,
            ),
            73 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            74 => 
            array (
                'permission_id' => 49,
                'role_id' => 5,
            ),
            75 => 
            array (
                'permission_id' => 50,
                'role_id' => 5,
            ),
            76 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            77 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            79 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            80 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            81 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            83 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            84 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            85 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            86 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            87 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            88 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            89 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            90 => 
            array (
                'permission_id' => 55,
                'role_id' => 3,
            ),
            91 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            92 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
            93 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 56,
                'role_id' => 3,
            ),
            95 => 
            array (
                'permission_id' => 56,
                'role_id' => 4,
            ),
            96 => 
            array (
                'permission_id' => 56,
                'role_id' => 5,
            ),
            97 => 
            array (
                'permission_id' => 57,
                'role_id' => 5,
            ),
            98 => 
            array (
                'permission_id' => 58,
                'role_id' => 5,
            ),
            99 => 
            array (
                'permission_id' => 59,
                'role_id' => 5,
            ),
            100 => 
            array (
                'permission_id' => 60,
                'role_id' => 5,
            ),
            101 => 
            array (
                'permission_id' => 61,
                'role_id' => 5,
            ),
            102 => 
            array (
                'permission_id' => 62,
                'role_id' => 5,
            ),
            103 => 
            array (
                'permission_id' => 63,
                'role_id' => 5,
            ),
            104 => 
            array (
                'permission_id' => 64,
                'role_id' => 5,
            ),
            105 => 
            array (
                'permission_id' => 65,
                'role_id' => 5,
            ),
            106 => 
            array (
                'permission_id' => 66,
                'role_id' => 5,
            ),
            107 => 
            array (
                'permission_id' => 67,
                'role_id' => 5,
            ),
            108 => 
            array (
                'permission_id' => 68,
                'role_id' => 5,
            ),
            109 => 
            array (
                'permission_id' => 69,
                'role_id' => 5,
            ),
            110 => 
            array (
                'permission_id' => 70,
                'role_id' => 5,
            ),
            111 => 
            array (
                'permission_id' => 71,
                'role_id' => 5,
            ),
            112 => 
            array (
                'permission_id' => 87,
                'role_id' => 5,
            ),
            113 => 
            array (
                'permission_id' => 88,
                'role_id' => 5,
            ),
            114 => 
            array (
                'permission_id' => 89,
                'role_id' => 5,
            ),
            115 => 
            array (
                'permission_id' => 90,
                'role_id' => 5,
            ),
            116 => 
            array (
                'permission_id' => 91,
                'role_id' => 5,
            ),
            117 => 
            array (
                'permission_id' => 92,
                'role_id' => 5,
            ),
            118 => 
            array (
                'permission_id' => 93,
                'role_id' => 5,
            ),
            119 => 
            array (
                'permission_id' => 94,
                'role_id' => 5,
            ),
            120 => 
            array (
                'permission_id' => 95,
                'role_id' => 5,
            ),
            121 => 
            array (
                'permission_id' => 96,
                'role_id' => 5,
            ),
            122 => 
            array (
                'permission_id' => 102,
                'role_id' => 5,
            ),
            123 => 
            array (
                'permission_id' => 103,
                'role_id' => 5,
            ),
            124 => 
            array (
                'permission_id' => 104,
                'role_id' => 5,
            ),
            125 => 
            array (
                'permission_id' => 105,
                'role_id' => 5,
            ),
            126 => 
            array (
                'permission_id' => 106,
                'role_id' => 5,
            ),
            127 => 
            array (
                'permission_id' => 112,
                'role_id' => 5,
            ),
            128 => 
            array (
                'permission_id' => 113,
                'role_id' => 5,
            ),
            129 => 
            array (
                'permission_id' => 114,
                'role_id' => 5,
            ),
            130 => 
            array (
                'permission_id' => 115,
                'role_id' => 5,
            ),
            131 => 
            array (
                'permission_id' => 116,
                'role_id' => 5,
            ),
            132 => 
            array (
                'permission_id' => 117,
                'role_id' => 4,
            ),
            133 => 
            array (
                'permission_id' => 117,
                'role_id' => 5,
            ),
            134 => 
            array (
                'permission_id' => 118,
                'role_id' => 4,
            ),
            135 => 
            array (
                'permission_id' => 118,
                'role_id' => 5,
            ),
            136 => 
            array (
                'permission_id' => 119,
                'role_id' => 4,
            ),
            137 => 
            array (
                'permission_id' => 119,
                'role_id' => 5,
            ),
            138 => 
            array (
                'permission_id' => 120,
                'role_id' => 5,
            ),
            139 => 
            array (
                'permission_id' => 121,
                'role_id' => 5,
            ),
            140 => 
            array (
                'permission_id' => 122,
                'role_id' => 5,
            ),
            141 => 
            array (
                'permission_id' => 123,
                'role_id' => 5,
            ),
            142 => 
            array (
                'permission_id' => 124,
                'role_id' => 5,
            ),
            143 => 
            array (
                'permission_id' => 125,
                'role_id' => 5,
            ),
            144 => 
            array (
                'permission_id' => 126,
                'role_id' => 5,
            ),
            145 => 
            array (
                'permission_id' => 127,
                'role_id' => 5,
            ),
            146 => 
            array (
                'permission_id' => 128,
                'role_id' => 5,
            ),
            147 => 
            array (
                'permission_id' => 129,
                'role_id' => 5,
            ),
            148 => 
            array (
                'permission_id' => 130,
                'role_id' => 5,
            ),
            149 => 
            array (
                'permission_id' => 131,
                'role_id' => 5,
            ),
            150 => 
            array (
                'permission_id' => 132,
                'role_id' => 5,
            ),
            151 => 
            array (
                'permission_id' => 133,
                'role_id' => 5,
            ),
            152 => 
            array (
                'permission_id' => 134,
                'role_id' => 5,
            ),
            153 => 
            array (
                'permission_id' => 135,
                'role_id' => 5,
            ),
            154 => 
            array (
                'permission_id' => 136,
                'role_id' => 5,
            ),
            155 => 
            array (
                'permission_id' => 137,
                'role_id' => 5,
            ),
            156 => 
            array (
                'permission_id' => 138,
                'role_id' => 5,
            ),
            157 => 
            array (
                'permission_id' => 139,
                'role_id' => 5,
            ),
            158 => 
            array (
                'permission_id' => 140,
                'role_id' => 5,
            ),
            159 => 
            array (
                'permission_id' => 141,
                'role_id' => 5,
            ),
            160 => 
            array (
                'permission_id' => 142,
                'role_id' => 5,
            ),
            161 => 
            array (
                'permission_id' => 143,
                'role_id' => 5,
            ),
            162 => 
            array (
                'permission_id' => 144,
                'role_id' => 5,
            ),
            163 => 
            array (
                'permission_id' => 145,
                'role_id' => 5,
            ),
            164 => 
            array (
                'permission_id' => 146,
                'role_id' => 5,
            ),
            165 => 
            array (
                'permission_id' => 147,
                'role_id' => 5,
            ),
            166 => 
            array (
                'permission_id' => 148,
                'role_id' => 5,
            ),
            167 => 
            array (
                'permission_id' => 149,
                'role_id' => 5,
            ),
            168 => 
            array (
                'permission_id' => 150,
                'role_id' => 5,
            ),
            169 => 
            array (
                'permission_id' => 151,
                'role_id' => 5,
            ),
            170 => 
            array (
                'permission_id' => 152,
                'role_id' => 5,
            ),
            171 => 
            array (
                'permission_id' => 153,
                'role_id' => 5,
            ),
            172 => 
            array (
                'permission_id' => 154,
                'role_id' => 5,
            ),
            173 => 
            array (
                'permission_id' => 155,
                'role_id' => 5,
            ),
            174 => 
            array (
                'permission_id' => 156,
                'role_id' => 5,
            ),
            175 => 
            array (
                'permission_id' => 157,
                'role_id' => 5,
            ),
            176 => 
            array (
                'permission_id' => 158,
                'role_id' => 5,
            ),
            177 => 
            array (
                'permission_id' => 159,
                'role_id' => 5,
            ),
            178 => 
            array (
                'permission_id' => 160,
                'role_id' => 5,
            ),
            179 => 
            array (
                'permission_id' => 161,
                'role_id' => 5,
            ),
            180 => 
            array (
                'permission_id' => 162,
                'role_id' => 5,
            ),
            181 => 
            array (
                'permission_id' => 163,
                'role_id' => 5,
            ),
            182 => 
            array (
                'permission_id' => 164,
                'role_id' => 5,
            ),
            183 => 
            array (
                'permission_id' => 165,
                'role_id' => 5,
            ),
            184 => 
            array (
                'permission_id' => 166,
                'role_id' => 5,
            ),
            185 => 
            array (
                'permission_id' => 167,
                'role_id' => 5,
            ),
            186 => 
            array (
                'permission_id' => 168,
                'role_id' => 5,
            ),
            187 => 
            array (
                'permission_id' => 169,
                'role_id' => 5,
            ),
            188 => 
            array (
                'permission_id' => 170,
                'role_id' => 5,
            ),
            189 => 
            array (
                'permission_id' => 171,
                'role_id' => 5,
            ),
            190 => 
            array (
                'permission_id' => 172,
                'role_id' => 5,
            ),
            191 => 
            array (
                'permission_id' => 173,
                'role_id' => 5,
            ),
            192 => 
            array (
                'permission_id' => 174,
                'role_id' => 5,
            ),
            193 => 
            array (
                'permission_id' => 175,
                'role_id' => 5,
            ),
            194 => 
            array (
                'permission_id' => 176,
                'role_id' => 5,
            ),
        ));
        
        
    }
}