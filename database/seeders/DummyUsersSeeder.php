<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                 'is_admin'=>'1',
                'password'=> bcrypt('12345678'),
             ],
             [
                'name'=>'Regular User',
                'email'=>'TestUser@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('12345678'),
             ],
         ];
   
         foreach ($userData as $key => $val) {
             User::create($val);
         }
    }
}
