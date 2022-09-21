<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "post-pertama",
            "author" => "Soffie Anastya",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nulla nobis laborum soluta quibusdam nostrum, aut recusandae voluptate numquam odit! Maxime perspiciatis rerum architecto quisquam tenetur ab necessitatibus, veritatis tempore quia in aut, blanditiis vitae. Placeat perferendis in dolorum exercitationem molestias nam, quidem facilis esse! Facilis error molestias id reiciendis iusto officiis quidem, maiores consequuntur obcaecati. Esse consectetur officiis eligendi natus quod temporibus iusto voluptates alias, voluptate commodi accusantium illo, illum repellat atque laboriosam! Ut nulla pariatur eos facere aliquid?"
        ],
        [
            
            "title" => "Judul Post Kedua",
            "slug" => "post-kedua",
            "author" => "Anastya Putri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nulla nobis laborum soluta quibusdam nostrum, aut recusandae voluptate numquam odit! Maxime perspiciatis rerum architecto quisquam tenetur ab necessitatibus, veritatis tempore quia in aut, blanditiis vitae. Placeat perferendis in dolorum exercitationem molestias nam, quidem facilis esse! Facilis error molestias id reiciendis iusto officiis quidem, maiores consequuntur obcaecati. Esse consectetur officiis eligendi natus quod temporibus iusto voluptates alias, voluptate commodi accusantium illo, illum repellat atque laboriosam! Ut nulla pariatur eos facere aliquid?"
            
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        

        // $post = [];

        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p; 
        //     }
        // }

        return $posts->firstWhere('slug', $slug); //ambil data pertama, efek dr collection baris 26 bawaan dari laravel
    }
}
