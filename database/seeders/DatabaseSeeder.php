<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ContentTableSeeder::class);
        $this->call(ContentAttachmentsTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(RewardsListsSeeder::class);
    }
}
