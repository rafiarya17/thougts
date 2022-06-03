<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //buat method index yg isinya ambil dari route method /blog
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "active" => "posts",
            // "posts" => Post::all()
            // mendapatkan data yg paling akhir
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        //di ambil dari method Route::get('/posts/{slug}', function($slug) yg ada di web.php
        return view('post', [
            "title" => "Blog",
            "active" => "posts",
            "post" => $post
            
        ]);
    }
}
