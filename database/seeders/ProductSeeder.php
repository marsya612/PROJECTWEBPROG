<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            $datas1 = [
                'id' => 1,
                'Product_Name' => 'The 5th Album [Fact Check] (Chandelier Ver.)',
                'price' => 375.000,
                'Release_date' => '2023-10-06',
                'Title' => 'Fact Check (불가사의; 不可思議)',
                'Kategori' => 'NCT',
                'Image_path' => '/NCTALBUM/factcheck.png',
                'content' => 'PHOTOBOOK COVER:1 ver./ 185*254mm, BOOKLET:128p - STICKER : 4ea 1 set, FOLDED POSTER:1 ver, PHOTO:random 1 out of 9 versions, PHOTOCARD:random 1 out of 9 versions',
                'manufacturer' => 'KAKAO M',
                'country' => 'KOREA' 
            ],

            $datas2 = [
                'id' => 2,
                'Product_Name' => 'The 4th Mini Album [Drama] (Drama Ver.)',
                'price' => 375.000,
                'Release_date' => '2023-11-10',
                'Title' => 'Drama',
                'Kategori' => 'AESPA',
                'Image_path' => '/AESPAALBUM/drama.png',
                'content' => '- COVER : 213*295mm / 1종, BOOKLET : 2종 / 각 48p, 72p - CD-R : 1종, STICKER : 4종 삽입, GROUP POSTER : 1종 삽입, INDIVIDUAL POSTER : 4종 중 랜덤 1종 삽입, PHOTOCARD : 4종 중 랜덤 1종 삽입',
                'manufacturer' => 'Kakao Entertainment',
                'country' => 'KOREA' 
            ]
        ]);
    }
}
