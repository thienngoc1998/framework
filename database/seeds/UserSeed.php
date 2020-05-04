<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Tuyen NH',
           'email' => 'tuyennh98@gmail.com',
           'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'phone' => '09876801728',
            'role' => true,
        ]);
        for ($i = 1 ; $i <= 10 ;$i++)
        {
            User::create([
                'name' => 'User'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'phone' => '09876801728',
                'role' => false,
            ]);
        }
    }
}
