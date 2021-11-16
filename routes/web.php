<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\If_;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rahmad H",
        "email" => "rahmadh118@gmail.com",
        "image" => "102_0119.JPG"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);


// Halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts,
        'category' => $category->posts->load('author', 'category'),
    ]);
});


Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('author', 'category'),
    ]);
});
