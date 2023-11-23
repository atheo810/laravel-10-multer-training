<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Post_tag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(PostSeeder::class);
        User::factory(10)->create();
        Post::factory(200)->create();
        Category::factory(10)->create();
        Address::factory(10)->create();
        Tag::factory(10)->create();
        Post_tag::factory(10)->create();
    }
}
