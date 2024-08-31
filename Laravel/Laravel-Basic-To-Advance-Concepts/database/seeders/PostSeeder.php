<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // php artisan db:seed --class=PostSeeder  <== Use for specific class run
    public function run(): void
    {
        Post::create([
            'title' => 'Karm',
            'description' => 'Its is good',
            'is_publish' => 0,
            'is_active' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Patel',
            'description' => 'Its is good',
            'is_publish' => 0,
            'is_active' => 1,
            'user_id' => 1,
        ]);
    }
}
