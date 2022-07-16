<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Post::create([
            'title' => 'ggg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero suscipit blanditiis veritatis impedit? Rerum nisi ratione sint maiores perferendis dolorum!'
        ]);
        Post::create([
            'title' => 'hhh',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero suscipit blanditiis veritatis impedit? Rerum nisi ratione sint maiores perferendis dolorum!'
        ]);
        Post::create([
            'title' => 'iii',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero suscipit blanditiis veritatis impedit? Rerum nisi ratione sint maiores perferendis dolorum!'
        ]);

    }
}
