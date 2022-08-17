<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CM1 = Comment::create([
            'cmDetail' => 'One of the best movies I have watched.',
            'content_id' => '1',
            'UserID' => '1',
        ]);
        $CM2 = Comment::create([
            'cmDetail' => 'Lame storyline but good action.',
            'content_id' => '2',
            'UserID' => '2',
        ]);
        $CM3 = Comment::create([
            'cmDetail' => 'Entertaining Movie! Best to view on a good quality tv with complete home theatre system to fully enjoy the graphics and explosions',
            'content_id' => '3',
            'UserID' => '3',
        ]);
        $CM4 = Comment::create([
            'cmDetail' => 'Solid performances and big action sequences make this a safe bet for family movie night.',
            'content_id' => '4',
            'UserID' => '1',
        ]);
        $CM5 = Comment::create([
            'cmDetail' => 'Terrible movie.
            It is a japanese port-manteau.',
            'content_id' => '5',
            'UserID' => '2',
        ]);

    }
}
