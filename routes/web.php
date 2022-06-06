<?php

use App\Models\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use App\Models\Post;
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
//memanggil call back function
// Route::get('/', function () {
//     return view('welcome');
// });

// ======================= rubah routenya ============================
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/blog', function () {
//     return view('posts');
// });

// ============================= mengirimkan data ke view ====================


// Home
Route::get('/', [PostController::class, 'index']);

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home",
//         'active' => 'home',
//     ]);
// });
// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About",
//         "name" => "Admin Haltev",
//         "email" => "haltev@mail.com",
//         "image" => "admin.png",
//         'active' => 'about',
//     ]);
// });

// BLOG
Route::get('/blog', [PostController::class, 'index']);

//Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// CATEGORIES
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Halaman Posts by Category
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author'),
        // 'category' => $category->name
    ]);
});

// Halaman Posts by Author
Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
        "active" => "blog"
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('category', [
//         'title' => $category->name,
//         'posts' => $category->posts,
//         'category' => $category->name
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// ---------- untuk route dashboard tidak akan menggunakan controller lagi, langsung di route nya ---------
// sehingga controller dashboard bisa di hapus
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Halaman CRUD Starts Here
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

// CRUD Post
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// CRUD Category
Route::resource('/dashboard/categories
', DashboardPostController::class)->middleware('auth');


// Halaman CRUD Ends Here