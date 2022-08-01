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
            'name' => 'MBO Movie Voucher',
            'image' => 'voucher1.jpg',
            'description' => 'RM25 MBO Gift Voucher and RM20 MBO Movie Voucher',
            'points' => '80000',
            'quantity' => '30',
            'code' => 'MBOGiftVoucher43321',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);

        $rewards2 = Reward ::create([
            'name' => 'Cinema Gift Voucher',
            'image' => 'voucher2.jpg',
            'description' => 'Free Cinema Gift Voucher at any cinema! Enjoy your wonderful weekend at cinema',
            'points' => '100000',
            'quantity' => '10',
            'code' => 'CinemaVoucher953721',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);

        $rewards3 = Reward ::create([
            'name' => '50% Discount Movie Ticket Coupon',
            'image' => 'voucher3.jpg',
            'description' => '50% movie ticket discount at TGV, GSC cinema. Fast to grab it ! Limited Quantity !
            The valid time is October 2021 to October 2022.',
            'points' => '50000',
            'quantity' => '5',
            'code' => 'DiscountVoucher46507',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);

        $rewards4 = Reward ::create([
            'name' => 'Movie Night -- Journey of Olivia',
            'image' => 'voucher4.jpg',
            'description' => 'As stated in the picture, the ticket can only be used for one movie. Free popcorn will be given.',
            'points' => '200000',
            'quantity' => '20',
            'code' => 'MovieNight883212',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);

        $rewards5 = Reward ::create([
            'name' => 'Movie Saver Pass (TGV)',
            'image' => 'voucher5.jpg',
            'description' => 'Free 1 x Movie Ticker PER month and 1 x Regular Signature Popcorn PER month. 
            Unlimited Valid Date!! Enjoy ur day in TGV cinema every month!!!',
            'points' => '350000',
            'quantity' => '10',
            'code' => 'MovieSaverTGV386420',
            'created_at' => '2022-07-23 07:13:22',
            'updated_at' => '2022-07-23 14:48:56'
        ]);



    }
}
