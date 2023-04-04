<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user1 = User::factory()->create([
            'name' => 'San Gohan',
            'username' => 'gohan',
        ]);
        $user2 = User::factory()->create([
            'name' => 'San Goten',
            'username' => 'goten',
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        foreach ([$personal, $work, $family] as $category) {
            foreach ([$user1, $user2] as $user) {
                Post::factory(5)->create(
                    [
                        'user_id' => $user->id,
                        'category_id' => $category->id
                    ]
                );
            }
        }

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My work post',
        //     'slug' => 'my-work-post-1',
        //     'excerpt' => 'Magna aliqua duis officia exercitation nisi sunt adipisicing incididunt proident minim.',
        //     'body' => '<p>    Occaecat duis est voluptate sint. Quis exercitation velit culpa quis esse consectetur commodo. Aute ex pariatur anim ut. Culpa veniam pariatur aliquip sit labore velit ad enim duis deserunt ut ad et. Non do minim ipsum minim est nulla laboris labore cillum nostrud cillum minim qui. Irure dolor qui laboris minim ex proident dolor anim amet sint Lorem occaecat veniam tempor.</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My work post 2',
        //     'slug' => 'my-work-post-2',
        //     'excerpt' => 'Magna aliqua duis officia exercitation nisi sunt adipisicing incididunt proident minim.',
        //     'body' => '<p>Occaecat duis est voluptate sint. Quis exercitation velit culpa quis esse consectetur commodo. Aute ex pariatur anim ut. Culpa veniam pariatur aliquip sit labore velit ad enim duis deserunt ut ad et. Non do minim ipsum minim est nulla laboris labore cillum nostrud cillum minim qui. Irure dolor qui laboris minim ex proident dolor anim amet sint Lorem occaecat veniam tempor.</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My family post',
        //     'slug' => 'my-family-post-1',
        //     'excerpt' => 'Magna aliqua duis officia exercitation nisi sunt adipisicing incididunt proident minim.',
        //     'body' => '<p>Occaecat duis est voluptate sint. Quis exercitation velit culpa quis esse consectetur commodo. Aute ex pariatur anim ut. Culpa veniam pariatur aliquip sit labore velit ad enim duis deserunt ut ad et. Non do minim ipsum minim est nulla laboris labore cillum nostrud cillum minim qui. Irure dolor qui laboris minim ex proident dolor anim amet sint Lorem occaecat veniam tempor.</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My personal post',
        //     'slug' => 'my-personal-post-1',
        //     'excerpt' => 'Magna aliqua duis officia exercitation nisi sunt adipisicing incididunt proident minim.',
        //     'body' => '<p>Occaecat duis est voluptate sint. Quis exercitation velit culpa quis esse consectetur commodo. Aute ex pariatur anim ut. Culpa veniam pariatur aliquip sit labore velit ad enim duis deserunt ut ad et. Non do minim ipsum minim est nulla laboris labore cillum nostrud cillum minim qui. Irure dolor qui laboris minim ex proident dolor anim amet sint Lorem occaecat veniam tempor.</p>'
        // ]);
    }
}
