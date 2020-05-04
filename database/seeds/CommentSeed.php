<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2 ;$i<= 10;$i++)
        {
            Comment::create([
               'content' => 'Sản phẩm đẹp qúa ' ,
               'id_user' => $i ,
               'id_product' => rand(2,4) ,
            ]);
        }
    }
}
