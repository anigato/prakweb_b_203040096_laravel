<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// routing ke home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

// routing ke about
Route::get('/about', function () {
    // Mengirimkan data ke view
    return view('about', [
        "title" => "About",
        "name"  => "Khoerul Anam",
        "email" => "203040096@mail.unpas.ac.id",
        "image" => "me.png",
        "active" => "about"
    ]);
});


// routing ke blog
Route::get('/posts', [PostController::class, 'index']);

//route ke posting blog 
// parameter hanya ditulis pada url, tidak harus ditulis dengan parameter pada method
Route::get('posts/{post:slug}', [PostController::class,'show']);

//routing ke category
Route::get('/categories', function(){
    return view('categories',[
        'title'=>'Post Categories',
        "active" => "categories",
        'categories'=>Category::all()
    ]);
});

//route ke category berdasarkan parameter slug
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts',[
        'title'=>"Post by Category : $category->name",
        "active" => "categories",
        'posts'=>$category->posts->load('category','author'),
    ]);
});


//route ke author berdasarkan parameter slug
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts',[
        'title'=>"Post by Author : $author->name",
        "active" => "authors",
        'posts'=>$author->posts->load('category','author'),
    ]);
});