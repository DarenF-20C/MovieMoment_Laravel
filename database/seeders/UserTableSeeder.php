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
            'gender' => 'Male',
            'phone' => '012-345678910',
            'date'=>'2022-07-23 07:13:22',
            'password' => bcrypt('12345678'),
            'points'=> 100000,
            'userAvatar' => 'ghost.jpg',
        ]);

        $user2 = User::create([
            'name' => 'User2',
            'email' => '321@gmail.com',
            'is_admin' => 0,
            'gender' => 'Male',
            'phone' => '012-345678910',
            'date'=>'2022-07-23 07:13:22',
            'points'=> 100000,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
        ]);

        $user3 = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'gender' => 'Male',
            'phone' => '012-345678910',
            'is_admin' => 1,
            'points'=> 100000,
            'date'=>'2022-07-23 07:13:22',
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
        ]);
        $user4 = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'gender' => 'Male',
            'phone' => '012-345678910',
            'is_admin' => 0,
            'date'=>'2022-07-23 07:13:22',
            'points'=> 1000000,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
        ]);
    }
}
