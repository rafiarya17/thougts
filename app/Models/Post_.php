<?php

namespace App\Models;

// karena belum terhubung ke database maka script di bawah ini sementara di nonaktifkan dulu
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

// kita membuat class Post untuk menyimpan data postingan kita
class Post
{
    //cara bikin properti statis || karena saya hanya ingin bisa di akses oleh class ini saja, kasih akses modifier private 
    private static $blog_posts =  [
        [
            "title" => "First Judul",
            "slug" => "first-judul",
            "author" => "Admin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ratione recusandae magnam, assumenda, voluptates aliquid modi veniam magni vero fugiat dolorum earum perspiciatis dolor perferendis impedit. Sunt saepe vero eaque illum repellendus animi delectus, numquam aperiam architecto veniam esse perferendis cupiditate minima doloribus optio? Quaerat fugit beatae numquam similique deserunt."
        ],
    
        [
            "title" => "Second Judul",
            "slug" => 'second-judul',
            "author" => "User 1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ratione recusandae magnam, assumenda, voluptates aliquid modi veniam magni vero fugiat dolorum earum perspiciatis dolor perferendis impedit. Sunt saepe vero eaque illum repellendus animi delectus, numquam aperiam architecto veniam esse perferendis cupiditate minima doloribus optio? Quaerat fugit beatae numquam similique deserunt. 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ratione recusandae magnam, assumenda, voluptates aliquid modi veniam magni vero fugiat dolorum earum perspiciatis dolor perferendis impedit. Sunt saepe vero eaque illum repellendus animi delectus, numquam aperiam architecto veniam esse perferendis cupiditate minima doloribus optio? Quaerat fugit beatae numquam similique deserunt."
        ]
    
    ];

    //apabila $blog_posts adalah properti biasa kita cukup $this->blog_posts
    public static function all()
    {
        // return self::$blog_posts;
        //hal ini akan merubah array nya menjadi array collect / more powerfull
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // di dalam $posts sudah tertampung semua data array posts nya
        // $posts = self::$blog_posts;

        //self khusus untuk properti static || static untuk method static 
        $posts = static::all();

        // $new_post = [];
        // foreach( $posts as $p ) {
        //     if( $p["slug"] === $slug ) {
        //         $new_post = $p;
        //     }
        // }

        //return $new_post;
        //menggunakan method first untuk mencari data pertama
        // return $posts->first();

        //ambil 1 data yg pertama kali ditemukan dimana slug nya sama dengan $slug
        return $posts->firstWhere('slug', $slug);
    }
}
