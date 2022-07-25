<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\reward;

class RewardsListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //     DB::('rewards')->insert([
        //     'name' => 'Movie Voucher1',
        //     'image' => 'voucher1.jfif',
        //     'description' => '12345',
        //     'points' => '75000',
        //     'quantity' => '5',
        //     'code' => 'TGVCode123',
        //     'created_at' => '2022-07-23 07:13:22',
        //     'updated_at' => '2022-07-23 14:48:56',
        //     'name' => Str::random(10),
        // ]);

        $rewards1 = Reward ::create([
            'name' => 'Movie Voucher1',
            'image' => 'voucher1.jfif',
            'description' => 'Super Promotion',
            'points' => '20000',
            'quantity' => '50',
            'code' => 'TGVCode12345',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);

        $rewards2 = Reward ::create([
            'name' => 'Movie Voucher2',
            'image' => 'voucher2.jfif',
            'description' => '12345',
            'points' => '10000',
            'quantity' => '10',
            'code' => 'SST128371',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);

        $rewards3 = Reward ::create([
            'name' => 'Movie Voucher3',
            'image' => 'voucher3.jpg',
            'description' => '12345',
            'points' => '7500044',
            'quantity' => '54',
            'code' => 'TGVCode12345',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);

        $rewards4 = Reward ::create([
            'name' => 'Movie Voucher4',
            'image' => 'voucher4.jpg',
            'description' => '12345',
            'points' => '7500044',
            'quantity' => '54',
            'code' => 'TGVCode12345',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);

        $rewards5 = Reward ::create([
            'name' => 'Movie Voucher5',
            'image' => 'voucher5.jpg',
            'description' => '12345',
            'points' => '7500044',
            'quantity' => '54',
            'code' => 'TGVCode12345',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);



    }
}
