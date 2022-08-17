<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Daren',
            'email' => '123@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'ghost.jpg',
            'phone'=> 012-345678910,
            'points' => 1000000,
            'date'=>'2022-07-23 07:13:22',
        ]);

        $user2 = User::create([
            'name' => 'User2',
            'email' => '321@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
            'phone'=> 012-345678910,
            'points' => 10,
            'date'=>'2022-07-23 07:13:22',
        ]);

        $user3 = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'is_admin' => 1,
            'password' => bcrypt('12345678'),
            'phone'=> 012-345678910,
            'userAvatar' => 'user.jpg',
            'points' => 10000000,
            'date'=>'2022-07-23 07:13:22',
        ]);
        $user4 = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'is_admin' => 0,
            'phone'=> 012-345678910,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
            'points' => 5000000,
            'date'=>'2022-07-23 07:13:22',
        ]);
    }
}
