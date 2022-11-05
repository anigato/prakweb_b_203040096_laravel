<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

// routing ke halaman home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

// routing ke halaman about
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


// routing ke halaman blog, menampilkan semua post
Route::get('/posts', [PostController::class, 'index']);

//route ke ke halaman blog, menampilkan 1 post
// parameter hanya ditulis pada url, tidak harus ditulis dengan parameter pada method
Route::get('posts/{post:slug}', [PostController::class,'show']);

//routing ke halaman category
Route::get('/categories', function(){
    return view('categories',[
        'title'=>'Post Categories',
        "active" => "categories",
        'categories'=>Category::all()
    ]);
});

//routing ke halaman author
Route::get('/authors', function(){
    return view('authors',[
        'title'=>'Post Authors',
        "active" => "authors",
        'authors'=>User::all()
    ]);
});


//routing ke halaman login | middleware guest artinya halaman ini hanya bisa diakses oleh user yang belum autentikasi/login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
//login
Route::post('/login', [LoginController::class, 'authenticate']);
//logout
Route::post('/logout', [LoginController::class, 'logout']);


//routing ke halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//register
Route::post('/register', [RegisterController::class, 'store']);


//routing ke halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// //route ke category berdasarkan parameter slug
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts',[
//         'title'=>"Post by Category : $category->name",
//         "active" => "categories",
//         'posts'=>$category->posts->load('category','author'),
//     ]);
// });



// //route ke author berdasarkan parameter slug
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts',[
//         'title'=>"Post by Author : $author->name",
//         "active" => "authors",
//         'posts'=>$author->posts->load('category','author'),
//     ]);
// });