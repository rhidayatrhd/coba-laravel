<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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



Route::get('/blog', [PostController::class, 'index']);
// Halaman single post
Route::get('/posts/{slug}', [PostController::class, 'show']);
