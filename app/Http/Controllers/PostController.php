<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        
        return view('blog', [
            "title" => "Blog",
            //"posts" => Post::all() //ambil model Post. ini nama filedari model
            //"posts" => Post::with(['user', 'category'])->latest()->get()
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(5)->withQueryString()
        ]);
    }
    public function show(Post $post) //dikasihdari route
    {
        return view('post', [
            "title" => "Post",
            "post" => $post
        ]);
    }
}
