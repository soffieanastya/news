<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([  //modelnya namanya user
            'name' => 'Soffie',
            'username' => 'soffieap',
            'email' => 'soffiea@gmail.com',
            'password' => bcrypt('123')
        ]);
        
        User::create([  //modelnya namanya user
            'name' => 'Anastya',
            'username' => 'anastyaaa',
            'email' => 'anastya@gmail.com',
            'password' => bcrypt('234')
        ]);

        Category::create([
            'name' => 'Web Programmig',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit omnis officia ad, culpa fugiat reiciendis suscipit tempora quos veniam aspernatur similique, dolorum ratione iusto ab blanditiis ullam autem et? Nam.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem, kedua dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit omnis officia ad, culpa fugiat reiciendis suscipit tempora quos veniam aspernatur similique, dolorum ratione iusto ab blanditiis ullam autem et? Nam.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem, ketiga dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit omnis officia ad, culpa fugiat reiciendis suscipit tempora quos veniam aspernatur similique, dolorum ratione iusto ab blanditiis ullam autem et? Nam.',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem, ketiga dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit omnis officia ad, culpa fugiat reiciendis suscipit tempora quos veniam aspernatur similique, dolorum ratione iusto ab blanditiis ullam autem et? Nam.',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul kelima',
            'slug' => 'judul-kelima',
            'excerpt' => 'Lorem, ketiga dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit omnis officia ad, culpa fugiat reiciendis suscipit tempora quos veniam aspernatur similique, dolorum ratione iusto ab blanditiis ullam autem et? Nam.',
            'category_id' => 1,
            'user_id' => 2
        ]);

        
        Post::create([
            'title' => 'Judul keenam',
            'slug' => 'judul-keenam',
            'excerpt' => 'Lorem, keenam dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit omnis officia ad, culpa fugiat reiciendis suscipit tempora quos veniam aspernatur similique, dolorum ratione iusto ab blanditiis ullam autem et? Nam.',
            'category_id' => 1,
            'user_id' => 2
        ]);
    }
}
