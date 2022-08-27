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
            'points' => 999999,
            'dailyLimit'=>10,
            'phone'=> "012-345678910",
            'date'=>'2022-07-23 07:13:22',
        ]);

        $user2 = User::create([
            'name' => 'Ved',
            'email' => '321@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
            'points' => 999999,
            'phone'=> "012-345678910",
            'date'=>'2022-07-23 07:13:22',
        ]);

        $user3 = User::create([
            'name' => 'David Lee',
            'email' => '3210@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'guest1.png',
            'points' => 999999,
            'phone'=> "012-345678910",
            'date'=>'2022-07-23 07:13:22',
        ]);

        $user4 = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'is_admin' => 1,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
            'phone'=> "012-345678910",
            'date'=>'2022-07-23 07:13:22',
        ]);

        $user5 = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'is_admin' => 0,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
            'points' => 500000,
            'phone'=> "012-345678910",
            'date'=>'2022-07-23 07:13:22',
        ]);
    }
}
