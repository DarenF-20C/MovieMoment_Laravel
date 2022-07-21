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
        ]);

        $user2 = User::create([
            'name' => 'User2',
            'email' => '321@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
        ]);

        $user3 = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'is_admin' => 1,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
        ]);
        $user4 = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'is_admin' => 0,
            'password' => bcrypt('12345678'),
            'userAvatar' => 'user.jpg',
        ]);
    }
}
