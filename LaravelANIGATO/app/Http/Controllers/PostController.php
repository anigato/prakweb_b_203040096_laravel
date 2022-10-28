<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // menampilkan semua post
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by '.$author->name;
        }

        return view('posts', [
            "title" => "All Posts".$title,
            "active" => "posts",
            // "posts" => Post::all()//mengambil semua urut berdasarkan created_at
            // "posts" => Post::latest()->get()//mengambil semua urut created_at dari yg terakhir
            
            // filter dapat dari method scopeFilter dari model post
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(10)->withQueryString()// mengatasi problem n+1 dengan memanggil tabel author dan category sekaligus ketika tabel post dipanggil
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
