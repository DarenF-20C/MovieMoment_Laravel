<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $C1 = Content::create([
            'ctDetail' => "One of the best movies I've watched.",
            'ctDate' => '2022-07-11',
            'ctTime' => '10:03',
            'UserID' => '2',
            'created_at' => '2022-07-11 10:03:00',
            'updated_at' => '2022-07-11 10:03:00',
        ]);

        $C2 = Content::create([
            'ctDetail' => "When your 14 and 16 year old brothers are staying with you for a month of summer break, you watch what they watch...it's pretty straightforwardly a big budget, chaotic disaster movie (not usually my thing) but I really enjoyed it!",
            'ctDate' => '2022-07-08',
            'ctTime' => '09:27',
            'UserID' => '3',
            'created_at' => '2022-07-08 09:27:00',
            'updated_at' => '2022-07-08 09:27:00',
        ]);
        
        $C3 = Content::create([
            'ctDetail' => "Lame storyline but good action.",
            'ctDate' => '2022-07-05',
            'ctTime' => '06:10',
            'UserID' => '1',
            'created_at' => '2022-07-05 06:10:00',
            'updated_at' => '2022-07-11 06:10:00',
        ]);

        $C4 = Content::create([
            'ctDetail' => "I have seen every Godzilla movie ever made. I am sorry to say I turned this one off after 30 minutes. Just incredible violence with no story that makes any sense. Film is dead... So sad",
            'ctDate' => '2022-06-28',
            'ctTime' => '19:51',
            'UserID' => '2',
            'created_at' => '2022-06-28 19:51:00',
            'updated_at' => '2022-06-28 19:51:00',
        ]);

        $C5 = Content::create([
            'ctDetail' => "Great tea time after movie",
            'ctDate' => '2022-06-28',
            'ctTime' => '15:18',
            'UserID' => '3',
            'created_at' => '2022-06-28 15:18:00',
            'updated_at' => '2022-06-28 15:18:00',
        ]);
    }
}
