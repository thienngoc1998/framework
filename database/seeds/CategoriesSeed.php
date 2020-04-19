<?php

use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'name' => 'Quần',
            'active' => true,
        ]);
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'name' => 'Áo￿',
            'active' => true,
        ]);
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'name' => 'Đồ lót',
            'active' => true,
        ]);
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'name' => 'Combo',
            'active' => true,
        ]);
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'name' => 'Phụ kiện',
            'active' => true,
        ]);
    }
}
