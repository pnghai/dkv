<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tân An',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mỹ Tho',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Vĩnh Long',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Cần Thơ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sóc Trăng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bạc Liêu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Cà Mau',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Năm Căn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Biên Hòa ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Phan Thiết',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Phan Rang - Tháp Chàm',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Nha Trang ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Tuy Hòa ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Quy Nhơn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Quảng Ngãi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Tam Kỳ ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Đà Nẵng ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Huế ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Đông Hà ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Đồng Hới',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Hà Tĩnh ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Vinh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Thanh Hóa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Ninh Bình',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Phủ Lý',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Hà Nội ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Bắc Ninh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Bắc Giang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Lạng Sơn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Đồng Đăng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Thủ Dầu Một',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Chơn Thành',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Đồng Xoài',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 4,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Gia Nghĩa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 4,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Buôn Ma Thuột',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Plei Ku',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Kon Tum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Ngọc Hồi ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Khâm Đức ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Thạnh Mỹ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'A Lưới ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Khe Sanh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Xuân Sơn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Hương Khê',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Tân Kỳ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Lam Sơn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Hà Nội',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 3,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Hòa Bình',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Sơn La ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Điện Biên Phủ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Lai Châu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Vĩnh Yên',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Việt Trì',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Tuyên Quang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Hà Giang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Tam Đảo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Sân Bay Nội Bài',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 7,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Sơn Dương',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Đoan Hùng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Bơ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Vĩnh Tuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Việt Quang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Tân Quang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Vị Xuyên',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Quản Bạ ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Yên Minh ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Phó Bảng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Đồng Văn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Lũng Cú',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 9,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Mèo Vạc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Xín Cái + CK Săm Pun',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Khâu Vai',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Cốc Pàng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Bảo Lạc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Minh Ngọc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Du Già',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Mậu Duệ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Lũng Phìn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Bắc Mê',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Bảo Lâm',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Đà Vị',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Tĩnh Túc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Nguyên Bình',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Cao Bằng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Na Hang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Chợ Rã',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Hà Hiệu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Nà Phặc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Ngân Sơn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Na Rì',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Bình Gia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Văn Quan',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Chi Lăng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'An Châu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Hạ Long',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Đôn Chương',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 10,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Pác Bó',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 11,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'CK. Sóc Giang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 12,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Trà Lĩnh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Trùng Khánh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Thác Bản Giốc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 13,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Bằng Ca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Hạ Lang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Quảng Uyên',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Na Rài',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'CK. Tà Lung',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 12,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Đông Khê',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Thất Khê',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Na Sầm ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'CK. Hữu Nghị',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 12,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Lộc Bình',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'CK. Chi Ma',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 12,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Đình Lập',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Tiên Yên',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'CK.Hoàng Mô',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 12,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Móng Cái',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Kép',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Lục Nam',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Thái Nguyên',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Lục Ngạn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Chí Linh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 4,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Nam Sách ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Uông Bí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'An Lão',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Tiền Trung',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Hải Dương',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Hải Phòng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Đồ Sơn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 13,
            ),
            128 => 
            array (
                'id' => 129,
            'name' => 'Thái Bình (mồ hôi rơi)',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Đồng Châu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 13,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Nam Định',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Thịnh Long',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 13,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Làng Đát',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Yên Bái',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Khánh Hòa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Lục Yên',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Phố Ràng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Yên Bình',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Bắc Ngầm',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 14,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Lào Cai',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Bắc Hà',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Xín Mần',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Hoàng Su Phì',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Si Ma Cai',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Pha Long',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Mường Khương',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Sa Pa ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Bản Xèo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Y Tý',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'A Mú Sung',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Bát Xát',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Bình Lư',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Tân Uyên',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Than Uyên',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Văn Bàn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Quỳnh Nhai',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Minh Thắng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Sơn La',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Tuần Giáo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Mường Lay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Thuận Châu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Mường Chà',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Sìn Hồ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Mường Tè',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Phong Thổ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'CK. Ma Lù Thàng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 12,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Pa Tần',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Pác Ma',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 6,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Chung Chải',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'A Pa Chải',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 15,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Mường Nhé',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Chà Cang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Mường Phăng',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 11,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Điện Biên Đông',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Sông Mã',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Chiềng Khương',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Ngã Ba Cò Nòi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 17,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Mộc Châu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Mai Châu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Tân Lạc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Xuân Mai',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'TP. Hồ Chí Minh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Quản Bạ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 5,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Yên Minh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Vĩnh Yên ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Du Già ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 8,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Cao Bằng ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Nam Sách',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 2,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Thái Bình',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'location_type_id' => 1,
            ),
            189 => 
            array (
                'id' => 191,
                'name' => 'test',
                'created_at' => '2017-03-26 14:32:36',
                'updated_at' => '2017-03-26 14:32:50',
                'deleted_at' => '2017-03-26 14:32:50',
                'location_type_id' => 2,
            ),
        ));
        
        
    }
}