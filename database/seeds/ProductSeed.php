<?php

use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            'name' => 'QUẦN KAKI TÚI SAU CÓ NẮP QK186 MÀU BÒ',
            'description' => 'orm quần slim-cropped lửng trên mắt cá chân giúp phái mạnh dễ dàng tôn dáng và thay đổi phong cách. Không chỉ phổ biến nơi công sở, bạn hoàn toàn có thể biến tấu cho riêng mình bằng cách mix-match cùng sơ mi, áo thun hoặc len mỏng để trở thành chàng trai lịch thiệp trong mọi trường hợp.',
            'amount' => '10',
            'price' => '276000',
            'sale' => '10',
            'content' => ' aaaa',
            'color' => 'do',
            'size' => '30',
            'img' => 'Screen Shot 2020-03-11 at 16.59.11.png',
            'id_category' => 1,
            'star' => 5,
        ]);

        \App\Product::create([
            'name' => 'QUẦN KAKI TÚI SAU CÓ NẮP QK187 MÀU BÒ',
            'description' => 'orm quần slim-cropped lửng trên mắt cá chân giúp phái mạnh dễ dàng tôn dáng và thay đổi phong cách. Không chỉ phổ biến nơi công sở, bạn hoàn toàn có thể biến tấu cho riêng mình bằng cách mix-match cùng sơ mi, áo thun hoặc len mỏng để trở thành chàng trai lịch thiệp trong mọi trường hợp.',
            'amount' => '10',
            'price' => '276000',
            'sale' => '10',
            'content' => 'aaaa',
            'color' => 'do',
            'size' => '30',
            'img' => 'Screen Shot 2020-03-11 at 16.59.11.png',
            'star' => 3,
            'id_category' => 2,
        ]);
        \App\Product::create([
            'name' => 'QUẦN KAKI TÚI SAU CÓ NẮP QK188 MÀU BÒ',
            'description' => 'orm quần slim-cropped lửng trên mắt cá chân giúp phái mạnh dễ dàng tôn dáng và thay đổi phong cách. Không chỉ phổ biến nơi công sở, bạn hoàn toàn có thể biến tấu cho riêng mình bằng cách mix-match cùng sơ mi, áo thun hoặc len mỏng để trở thành chàng trai lịch thiệp trong mọi trường hợp.',
            'amount' => '10',
            'price' => '276000',
            'sale' => '10',
            'content' => 'aaaa',
            'color' => 'do',
            'size' => '30',
            'img' => 'Screen Shot 2020-03-11 at 16.59.11.png',
            'star' => 2,
            'id_category' => 3,
        ]);
        \App\Product::create([
            'name' => 'QUẦN KAKI TÚI SAU CÓ NẮP QK189 MÀU BÒ',
            'description' => 'orm quần slim-cropped lửng trên mắt cá chân giúp phái mạnh dễ dàng tôn dáng và thay đổi phong cách. Không chỉ phổ biến nơi công sở, bạn hoàn toàn có thể biến tấu cho riêng mình bằng cách mix-match cùng sơ mi, áo thun hoặc len mỏng để trở thành chàng trai lịch thiệp trong mọi trường hợp.',
            'amount' => '10',
            'price' => '276000',
            'sale' => '10',
            'content' => 'aaaa',
            'color' => 'do',
            'size' => '30',
            'star' => 1,
            'img' => 'Screen Shot 2020-03-11 at 16.59.11.png',
            'id_category' => 4,
        ]);
    }
}
