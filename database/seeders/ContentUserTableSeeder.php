<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentUser;
use DB;

class ContentUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content_user')->insert([
        [
            'content_id' => 1,
            'user_id' => 1,
        ],[
            'content_id' => 2,
            'user_id' => 1,
        ],[
            'content_id' => 3,
            'user_id' => 1,
        ],[
            'content_id' => 4,
            'user_id' => 1,
        ],[
            'content_id' => 5,
            'user_id' => 1,
        ],[
            'content_id' => 1,
            'user_id' => 2,
        ],[
            'content_id' => 2,
            'user_id' => 2,
        ],[
            'content_id' => 3,
            'user_id' => 2,
        ],[
            'content_id' => 4,
            'user_id' => 2,
        ],[
            'content_id' => 5,
            'user_id' => 2,
        ],[
            'content_id' => 1,
            'user_id' => 3,
        ],[
            'content_id' => 2,
            'user_id' => 3,
        ],[
            'content_id' => 3,
            'user_id' => 3,
        ],[
            'content_id' => 4,
            'user_id' => 3,
        ],[
            'content_id' => 5,
            'user_id' => 3,
        ],[
            'content_id' => 1,
            'user_id' => 4,
        ],[
            'content_id' => 2,
            'user_id' => 4,
        ],[
            'content_id' => 3,
            'user_id' => 4,
        ],[
            'content_id' => 4,
            'user_id' => 4,
        ],[
            'content_id' => 5,
            'user_id' => 4,
        ]
    ]);
    }
}
