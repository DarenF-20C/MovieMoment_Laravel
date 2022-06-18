<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData = [
            [
                'name'   =>'Admin',
                'email'  =>'admin@example.com',
                'is_admin' => 1,
                'password' => Hash::make('12345678')
             ],
             [
                'name'       => 'User',
                'email'      => 'user@example.com',
                'is_admin'   => 0,
                'password'   => Hash::make('12345678')
             ],
         ];
 
         foreach ($usersData as $key => $val) {
             User::create($val);
         }
     }
    }

