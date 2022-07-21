<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentAttachment;

class ContentAttachmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CA1 = ContentAttachment::create([
            'ctImage' => 'godzilla.jpg',
            'ContentID' => '1',
        ]);

        $CA3 = ContentAttachment::create([
            'ctVideo' => 'sample.mp4',
            'ContentID' => '3',
        ]);

        $CA5 = ContentAttachment::create([
            'ctImage' => 'task to do.jpg',
            'ContentID' => '5',
        ]);
    }
}
