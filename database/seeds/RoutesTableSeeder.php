<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('routes')->delete();
        
        \DB::table('routes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '1A',
                'cost' => '47',
                'source' => 182,
                'target' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '1A',
                'cost' => '75',
                'source' => 182,
                'target' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '1A',
                'cost' => '136',
                'source' => 182,
                'target' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '1A',
                'cost' => '166',
                'source' => 182,
                'target' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '1A',
                'cost' => '226',
                'source' => 182,
                'target' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '1A',
                'cost' => '276',
                'source' => 182,
                'target' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '1A',
                'cost' => '345',
                'source' => 182,
                'target' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '1A',
                'cost' => '395',
                'source' => 182,
                'target' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '1A',
                'cost' => '30',
                'source' => 182,
                'target' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '1A',
                'cost' => '196',
                'source' => 182,
                'target' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '1A',
                'cost' => '345',
                'source' => 182,
                'target' => 11,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '1A',
                'cost' => '446',
                'source' => 182,
                'target' => 12,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '1A',
                'cost' => '570',
                'source' => 182,
                'target' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '1A',
                'cost' => '670',
                'source' => 182,
                'target' => 14,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '1A',
                'cost' => '858',
                'source' => 182,
                'target' => 15,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '1A',
                'cost' => '923',
                'source' => 182,
                'target' => 16,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '1A',
                'cost' => '977',
                'source' => 182,
                'target' => 17,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '1A',
                'cost' => '1075',
                'source' => 182,
                'target' => 18,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '1A',
                'cost' => '1142',
                'source' => 182,
                'target' => 19,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '1A',
                'cost' => '1237',
                'source' => 182,
                'target' => 20,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '1A',
                'cost' => '1387',
                'source' => 182,
                'target' => 21,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '1A',
                'cost' => '1437',
                'source' => 182,
                'target' => 22,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '1A',
                'cost' => '1575',
                'source' => 182,
                'target' => 23,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '1A',
                'cost' => '1635',
                'source' => 182,
                'target' => 24,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '1A',
                'cost' => '1669',
                'source' => 182,
                'target' => 25,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '1A',
                'cost' => '1727',
                'source' => 182,
                'target' => 26,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '1A',
                'cost' => '39',
                'source' => 47,
                'target' => 27,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '1A',
                'cost' => '57',
                'source' => 47,
                'target' => 28,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => '1A',
                'cost' => '160',
                'source' => 47,
                'target' => 29,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => '1A',
                'cost' => '175',
                'source' => 47,
                'target' => 30,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'QL 13',
                'cost' => '30',
                'source' => 182,
                'target' => 31,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'QL 13',
                'cost' => '83',
                'source' => 182,
                'target' => 32,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'HCM',
                'cost' => '102',
                'source' => 182,
                'target' => 33,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'HCM',
                'cost' => '220',
                'source' => 182,
                'target' => 34,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'HCM',
                'cost' => '355',
                'source' => 182,
                'target' => 35,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'HCM',
                'cost' => '543',
                'source' => 182,
                'target' => 36,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'HCM',
                'cost' => '590',
                'source' => 182,
                'target' => 37,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'HCM',
                'cost' => '659',
                'source' => 182,
                'target' => 38,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'HCM',
                'cost' => '778',
                'source' => 182,
                'target' => 39,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'HCM',
                'cost' => '830',
                'source' => 182,
                'target' => 40,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'HCM',
                'cost' => '987',
                'source' => 182,
                'target' => 41,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'HCM',
                'cost' => '1098',
                'source' => 182,
                'target' => 42,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'HCM',
                'cost' => '1275',
                'source' => 182,
                'target' => 43,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'HCM',
                'cost' => '1410',
                'source' => 182,
                'target' => 44,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'HCM',
                'cost' => '1546',
                'source' => 182,
                'target' => 45,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'HCM',
                'cost' => '1666',
                'source' => 182,
                'target' => 46,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'HCM; QL 6',
                'cost' => '1848',
                'source' => 182,
                'target' => 47,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'QL 6',
                'cost' => '73',
                'source' => 47,
                'target' => 48,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'QL 6',
                'cost' => '305',
                'source' => 47,
                'target' => 49,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'QL 6; QL 279',
                'cost' => '468',
                'source' => 47,
                'target' => 50,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'QL 32; QL 4D',
                'cost' => '437',
                'source' => 47,
                'target' => 51,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'QL 2',
                'cost' => '53',
                'source' => 47,
                'target' => 52,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'QL 2',
                'cost' => '77',
                'source' => 47,
                'target' => 53,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'QL 2',
                'cost' => '156',
                'source' => 47,
                'target' => 54,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'QL 2',
                'cost' => '307',
                'source' => 47,
                'target' => 55,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'QL 2B',
                'cost' => '25',
                'source' => 185,
                'target' => 56,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'QL 2A',
                'cost' => '25',
                'source' => 185,
                'target' => 57,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'QL 2C',
                'cost' => '62',
                'source' => 185,
                'target' => 58,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'QL 2',
                'cost' => '40',
                'source' => 53,
                'target' => 59,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'QL 2',
                'cost' => '26',
                'source' => 59,
                'target' => 54,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'QL 2',
                'cost' => '30',
                'source' => 54,
                'target' => 60,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'QL 2',
                'cost' => '42',
                'source' => 60,
                'target' => 61,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'QL 2',
                'cost' => '27',
                'source' => 61,
                'target' => 62,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'QL 2',
                'cost' => '7',
                'source' => 62,
                'target' => 63,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'QL 2',
                'cost' => '22',
                'source' => 63,
                'target' => 64,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'QL 2',
                'cost' => '23',
                'source' => 64,
                'target' => 55,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'QL 4C',
                'cost' => '45',
                'source' => 55,
                'target' => 65,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'QL 4C',
                'cost' => '50',
                'source' => 183,
                'target' => 66,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'QL 4C',
                'cost' => '20',
                'source' => 184,
                'target' => 67,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'QL 4C',
                'cost' => '45',
                'source' => 184,
                'target' => 68,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'CC QG',
                'cost' => '26',
                'source' => 68,
                'target' => 69,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'QL 4C',
                'cost' => '25',
                'source' => 68,
                'target' => 70,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => '193A',
                'cost' => '18',
                'source' => 70,
                'target' => 71,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'ĐT 217',
                'cost' => '22',
                'source' => 70,
                'target' => 72,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'ĐT 217',
                'cost' => '16',
                'source' => 72,
                'target' => 73,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'ĐT 217',
                'cost' => '26',
                'source' => 73,
                'target' => 74,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'QL 34',
                'cost' => '32',
                'source' => 55,
                'target' => 75,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'ĐT 176',
                'cost' => '37',
                'source' => 75,
                'target' => 76,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'ĐT 176',
                'cost' => '40',
                'source' => 186,
                'target' => 77,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'ĐT 182',
                'cost' => '10',
                'source' => 77,
                'target' => 66,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'ĐT 176',
                'cost' => '22',
                'source' => 77,
                'target' => 78,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'ĐT 182',
                'cost' => '15',
                'source' => 78,
                'target' => 70,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'QL 34',
                'cost' => '25',
                'source' => 75,
                'target' => 79,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'QL 34',
                'cost' => '36',
                'source' => 79,
                'target' => 80,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'QL 34',
                'cost' => '22',
                'source' => 80,
                'target' => 74,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'ĐT 176',
                'cost' => '50',
                'source' => 79,
                'target' => 81,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'QL 4C',
                'cost' => '50',
                'source' => 80,
                'target' => 70,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'QL 34',
                'cost' => '75',
                'source' => 74,
                'target' => 82,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'QL 34',
                'cost' => '15',
                'source' => 82,
                'target' => 83,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'QL 34',
                'cost' => '45',
                'source' => 83,
                'target' => 84,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'QL 279',
                'cost' => '85',
                'source' => 62,
                'target' => 85,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'QL 279',
                'cost' => '23',
                'source' => 85,
                'target' => 81,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'QL 279',
                'cost' => '32',
                'source' => 81,
                'target' => 86,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'QL 279',
                'cost' => '22',
                'source' => 86,
                'target' => 87,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'ĐT 212',
                'cost' => '53',
                'source' => 87,
                'target' => 82,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'QL 279',
                'cost' => '10',
                'source' => 87,
                'target' => 88,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'QL 3',
                'cost' => '18',
                'source' => 88,
                'target' => 89,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'QL 3',
                'cost' => '65',
                'source' => 89,
                'target' => 84,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'QL 279',
                'cost' => '75',
                'source' => 88,
                'target' => 90,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'QL 279',
                'cost' => '70',
                'source' => 90,
                'target' => 91,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'QL 279',
                'cost' => '29',
                'source' => 91,
                'target' => 92,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'QL 279',
                'cost' => '29',
                'source' => 92,
                'target' => 93,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'QL 279',
                'cost' => '70',
                'source' => 93,
                'target' => 94,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'QL 279',
                'cost' => '68',
                'source' => 94,
                'target' => 95,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'ĐT 203',
                'cost' => '47',
                'source' => 187,
                'target' => 96,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'ĐT 203',
                'cost' => '9',
                'source' => 96,
                'target' => 97,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => '',
                'cost' => '8',
                'source' => 96,
                'target' => 98,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'ĐT 210',
                'cost' => '43',
                'source' => 96,
                'target' => 99,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'ĐT 210',
                'cost' => '27',
                'source' => 99,
                'target' => 100,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'ĐT 206',
                'cost' => '26',
                'source' => 100,
                'target' => 101,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'ĐT 206',
                'cost' => '13',
                'source' => 101,
                'target' => 102,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'ĐT 206',
                'cost' => '28',
                'source' => 102,
                'target' => 103,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'ĐT 206',
                'cost' => '33',
                'source' => 103,
                'target' => 104,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'QL 3',
                'cost' => '37',
                'source' => 104,
                'target' => 84,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'ĐT 206',
                'cost' => '27',
                'source' => 104,
                'target' => 100,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'QL 3',
                'cost' => '24',
                'source' => 104,
                'target' => 105,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'QL 3',
                'cost' => '11',
                'source' => 105,
                'target' => 106,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'ĐT 208',
                'cost' => '24',
                'source' => 105,
                'target' => 107,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'QL 4A',
                'cost' => '43',
                'source' => 107,
                'target' => 84,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'QL 4A',
                'cost' => '23',
                'source' => 107,
                'target' => 108,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'QL 4A',
                'cost' => '40',
                'source' => 108,
                'target' => 109,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'QL 3B',
                'cost' => '45',
                'source' => 108,
                'target' => 90,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'QL 1B',
                'cost' => '48',
                'source' => 108,
                'target' => 91,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'QL 4A',
                'cost' => '16',
                'source' => 109,
                'target' => 30,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'QL 1A',
                'cost' => '3',
                'source' => 30,
                'target' => 110,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'QL 1A',
                'cost' => '15',
                'source' => 30,
                'target' => 29,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'QL 1A',
                'cost' => '35',
                'source' => 29,
                'target' => 93,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'QL 4B',
                'cost' => '22',
                'source' => 29,
                'target' => 111,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'ĐT 236',
                'cost' => '15',
                'source' => 111,
                'target' => 112,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'QL 4B',
                'cost' => '33',
                'source' => 111,
                'target' => 113,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'QL 4B',
                'cost' => '45',
                'source' => 113,
                'target' => 114,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'QL 31',
                'cost' => '48',
                'source' => 113,
                'target' => 94,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'QL 18C',
                'cost' => '45',
                'source' => 114,
                'target' => 115,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'QL 18',
                'cost' => '81',
                'source' => 114,
                'target' => 95,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'QL 18',
                'cost' => '85',
                'source' => 114,
                'target' => 116,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'QL 1A',
                'cost' => '50',
                'source' => 93,
                'target' => 117,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'QL 1A',
                'cost' => '18',
                'source' => 117,
                'target' => 28,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'QL 37',
                'cost' => '20',
                'source' => 117,
                'target' => 118,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'ĐT 265',
                'cost' => '55',
                'source' => 117,
                'target' => 119,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'QL 31',
                'cost' => '22',
                'source' => 118,
                'target' => 28,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'QL 31',
                'cost' => '21',
                'source' => 118,
                'target' => 120,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'QL 37',
                'cost' => '26',
                'source' => 118,
                'target' => 121,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'QL 31',
                'cost' => '32',
                'source' => 120,
                'target' => 94,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'QL 18',
                'cost' => '38',
                'source' => 121,
                'target' => 27,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'QL 37',
                'cost' => '20',
                'source' => 121,
                'target' => 122,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'QL 18',
                'cost' => '43',
                'source' => 121,
                'target' => 123,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'QL 18',
                'cost' => '45',
                'source' => 123,
                'target' => 95,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'QL 10',
                'cost' => '35',
                'source' => 123,
                'target' => 124,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'QL 37',
                'cost' => '3',
                'source' => 188,
                'target' => 125,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'QL 5',
                'cost' => '65',
                'source' => 125,
                'target' => 126,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'QL 5',
                'cost' => '40',
                'source' => 125,
                'target' => 127,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'ĐT 353',
                'cost' => '20',
                'source' => 127,
                'target' => 128,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'ĐT 360',
                'cost' => '15',
                'source' => 127,
                'target' => 124,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'QL 10',
                'cost' => '50',
                'source' => 124,
                'target' => 129,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'QL 39B',
                'cost' => '30',
                'source' => 189,
                'target' => 130,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'QL 10',
                'cost' => '23',
                'source' => 189,
                'target' => 131,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => '???',
                'cost' => '52',
                'source' => 131,
                'target' => 132,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'QL 21',
                'cost' => '32',
                'source' => 131,
                'target' => 25,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'QL 10',
                'cost' => '30',
                'source' => 131,
                'target' => 24,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'QL 70',
                'cost' => '34',
                'source' => 59,
                'target' => 133,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'QL 37',
                'cost' => '8',
                'source' => 133,
                'target' => 134,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'QL 70',
                'cost' => '64',
                'source' => 133,
                'target' => 135,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'ĐT 152',
                'cost' => '25',
                'source' => 135,
                'target' => 136,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'ĐT 152',
                'cost' => '20',
                'source' => 136,
                'target' => 61,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'QL 70',
                'cost' => '26',
                'source' => 135,
                'target' => 137,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'QL 279',
                'cost' => '40',
                'source' => 137,
                'target' => 138,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'QL 279',
                'cost' => '31',
                'source' => 138,
                'target' => 62,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'QL 70',
                'cost' => '36',
                'source' => 137,
                'target' => 139,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'QL 70',
                'cost' => '40',
                'source' => 139,
                'target' => 140,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'ĐT 153',
                'cost' => '26',
                'source' => 139,
                'target' => 141,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'ĐT 153',
                'cost' => '10',
                'source' => 141,
                'target' => 78,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => '???',
                'cost' => '40',
                'source' => 78,
                'target' => 142,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'ĐT 177',
                'cost' => '40',
                'source' => 142,
                'target' => 143,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'ĐT 177',
                'cost' => '60',
                'source' => 143,
                'target' => 63,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'ĐT 153',
                'cost' => '18',
                'source' => 78,
                'target' => 144,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'ĐT 153',
                'cost' => '20',
                'source' => 144,
                'target' => 145,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'ĐT 153',
                'cost' => '25',
                'source' => 145,
                'target' => 146,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'QL 4D',
                'cost' => '53',
                'source' => 146,
                'target' => 140,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'QL 4D',
                'cost' => '37',
                'source' => 140,
                'target' => 147,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'ĐT 155',
                'cost' => '28',
                'source' => 147,
                'target' => 148,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'ĐT 158',
                'cost' => '32',
                'source' => 148,
                'target' => 149,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'ĐT 158',
                'cost' => '36',
                'source' => 149,
                'target' => 150,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'ĐT 156',
                'cost' => '43',
                'source' => 150,
                'target' => 151,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'ĐT 156',
                'cost' => '19',
                'source' => 151,
                'target' => 140,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'QL 4D',
                'cost' => '40',
                'source' => 147,
                'target' => 152,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'QL 32',
                'cost' => '30',
                'source' => 152,
                'target' => 153,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'QL 4D',
                'cost' => '34',
                'source' => 152,
                'target' => 51,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'QL 32',
                'cost' => '30',
                'source' => 153,
                'target' => 154,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'QL 279',
                'cost' => '58',
                'source' => 154,
                'target' => 155,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'QL 279',
                'cost' => '36',
                'source' => 155,
                'target' => 137,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'QL 279',
                'cost' => '68',
                'source' => 154,
                'target' => 156,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'QL 279',
                'cost' => '27',
                'source' => 156,
                'target' => 157,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'ĐT 107',
                'cost' => '58',
                'source' => 156,
                'target' => 158,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'QL 279',
                'cost' => '7',
                'source' => 157,
                'target' => 159,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'QL 6',
                'cost' => '97',
                'source' => 157,
                'target' => 160,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'QL 6',
                'cost' => '50',
                'source' => 159,
                'target' => 161,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'QL 6',
                'cost' => '28',
                'source' => 161,
                'target' => 158,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'QL 12',
                'cost' => '43',
                'source' => 160,
                'target' => 162,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'QL 12',
                'cost' => '65',
                'source' => 160,
                'target' => 163,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'ĐT 127',
                'cost' => '98',
                'source' => 160,
                'target' => 164,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'QL 4D',
                'cost' => '60',
                'source' => 163,
                'target' => 51,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'QL 4D',
                'cost' => '30',
                'source' => 51,
                'target' => 165,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'QL 12',
                'cost' => '20',
                'source' => 165,
                'target' => 166,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'QL 12',
                'cost' => '14',
                'source' => 165,
                'target' => 167,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => '???',
                'cost' => '21',
                'source' => 167,
                'target' => 166,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'QL 12',
                'cost' => '60',
                'source' => 167,
                'target' => 160,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'M Tè - Pa Tần',
                'cost' => '70',
                'source' => 167,
                'target' => 164,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => '???',
                'cost' => '50',
                'source' => 164,
                'target' => 168,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => '???',
                'cost' => '70',
                'source' => 168,
                'target' => 169,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => '???',
                'cost' => '30',
                'source' => 169,
                'target' => 170,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => '???',
                'cost' => '20',
                'source' => 169,
                'target' => 171,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => '???',
                'cost' => '80',
                'source' => 171,
                'target' => 172,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => '???',
                'cost' => '60',
                'source' => 172,
                'target' => 162,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'QL 12',
                'cost' => '43',
                'source' => 162,
                'target' => 160,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'QL 12',
                'cost' => '52',
                'source' => 162,
                'target' => 50,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'QL 279',
                'cost' => '80',
                'source' => 50,
                'target' => 159,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => '???',
                'cost' => '36',
                'source' => 50,
                'target' => 173,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'ĐT 130',
                'cost' => '48',
                'source' => 50,
                'target' => 174,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'ĐT 130 - ĐT 115',
                'cost' => '98',
                'source' => 174,
                'target' => 175,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'QL 4G',
                'cost' => '32',
                'source' => 175,
                'target' => 176,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'QL 4G',
                'cost' => '68',
                'source' => 176,
                'target' => 158,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'QL 6',
                'cost' => '45',
                'source' => 49,
                'target' => 177,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'QL 6',
                'cost' => '75',
                'source' => 177,
                'target' => 178,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'QL 6',
                'cost' => '60',
                'source' => 178,
                'target' => 179,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'QL 6',
                'cost' => '35',
                'source' => 179,
                'target' => 180,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'QL 6',
                'cost' => '30',
                'source' => 180,
                'target' => 48,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'QL 6',
                'cost' => '37',
                'source' => 48,
                'target' => 181,
            ),
        ));
        
        
    }
}