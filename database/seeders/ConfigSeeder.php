<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\config;

class ConfigSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'key'=>'LINK_FACEBOOK',
                'group'=>'INFO',
                'title' => "Link facebook",
                'value'=>'https://www.facebook.com/',
                'type'=>'link',
                'delete' => false
            ],
            [
                'key'=>'PHONE_NUMBER',
                'group'=>'INFO',
                'title' => "Link facebook",
                'value'=>'0866940634',
                'type'=>'phone',
                'delete' => false
            ],
            [
                'key'=>'EMAIL',
                'group'=>'INFO',
                'title' => "Link facebook",
                'value'=>'dangxuong2000@gmail.com',
                'type'=>'email',
                'delete' => false
            ],
            [
                'key'=>'ADDRESS',
                'group'=>'INFO',
                'title' => "Link facebook",
                'value'=>'Âu Cơ Tây Hồ Hà Nội',
                'type'=>'email',
                'delete' => false
            ]
        ];
        config::insert($data);
    }
}
