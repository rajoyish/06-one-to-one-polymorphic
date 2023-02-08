<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create()->each(function ($user) {
            $image = Image::factory()->make();
            $user->image()->save($image);
        });

        Post::factory(10)->create()->each(function ($post) {
            $image = Image::factory()->make();
            $post->image()->save($image);
        });
    }
}
