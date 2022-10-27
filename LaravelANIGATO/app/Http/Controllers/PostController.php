<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // menampilkan semua post
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all()//mengambil semua urut berdasarkan created_at
            // "posts" => Post::latest()->get()//mengambil semua urut created_at dari yg terakhir
            
            "posts" => Post::latest()->get()// mengatasi problem n+1 dengan memanggil tabel author dan category sekaligus ketika tabel post dipanggil
        ]);
    }

    // menampilkan detail post dengan parameter slug
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Singgle Post",
            "active" => "posts",
            "post"  => $post
        ]);
    }
}
