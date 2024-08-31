<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\Sequence; // for sequence

use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // run => php artisan db:seed <= to execute Belows

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       // 10 post automatic create using factory
        // Post::factory(10)->create();
        // Post::factory(2)->create();
         
    
        // Post::factory(2)->create([
        //     'title' => 'Patel Karm', // if we have to create data with same title and other fields are differ
        // ]);

        //  Post::factory()->count(3)->state(new Sequence(
        //     ['is_active' => 1],
        //     ['is_active' => 0],
        //  ))->create();


        // disable and then truncate and then after enable foreign key constraint because it has foreign key
        //  Schema::disableForeignKeyConstraints();
        //  Post::truncate();
        //  Schema::enableForeignKeyConstraints();

        //  Post::factory()->count(3)->state(new Sequence(
        //     ['is_active' => 1],
        //     ['is_active' => 0],
        //  ))->create();

        // create one user with 5 posts
        // User::factory()
        //     ->has(Post::factory()->count(5))
        //     ->create();

        // same as above create one user with 3 posts
        // User::factory()
        //     ->hasPosts(3)
        //     ->create();

        // same as above create one user with 3 posts
        // Post::factory()
        //     ->count(3)
        //     ->for(User::factory())
        //     ->create();

        // $user = User::find(1);
        // if($user){
        //     Post::factory()
        //     ->count(5)
        //     ->for($user)
        //     ->create();
        // }

         // Post::factory()
        //     ->count(3)
        //     ->for(User::factory())
        //     ->create();

        // create user with Patel Karm name and 3 posts
        // Post::factory()
        //     ->count(3)
        //     ->for(User::factory()->state(
        //     ['name' => 'Patel Karm',]
        // ))
        //     ->create();

        // User::factory()
        //     ->has(Role::factory()->count(1))
        //     ->create();

        // create post and with 3 tags
        // Post::factory()
        //     ->hasAttached(
        //         Tag::factory()->count(3)
        //     )
        //     ->create();

        // $tag = Tag::find(1);
        // create post with 3 tag there id is 1
        // Post::factory()
        //     ->hasAttached(
        //         Tag::factory()->count(3),
        //         ['tag_id' => $tag->id]
        //     )
        //     ->create();

        // shortcut method for post create with 3 tags
        // Post::factory()
        //     ->hasTags(3)
        //     ->create();


        // Call to PostSeeder;
        // php artisan migrate --seed   <=== for migrate and seeding
        $this->call([
            PostSeeder::class,
            TagSeeder::class,
        ]);
        
    }
}
