<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'title' => 'First Content',
                'body' => 'This is the first content.',
            ],
            [
                'title' => 'Second Content',
                'body' => 'This is the second content.',
            ],
            // Add more content items as needed
        ];

        foreach ($contents as $content) {
            Content::create($content);
        }
    }
}
