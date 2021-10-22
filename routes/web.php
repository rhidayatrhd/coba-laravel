<?php

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



Route::get('/blog', function () {

    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Rahmad H",
            "body"      => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus ipsa sapiente ipsam accusamus quibusdam, nisi soluta incidunt error id architecto dolores libero eos nulla iure minima illo officiis cum, enim tempora laudantium. Illum repudiandae ullam totam recusandae, facere sit. Quis eveniet fuga odio natus cumque eum ex enim, perferendis culpa quas aut hic vero soluta voluptates doloremque a distinctio voluptatibus adipisci, aperiam nihil. Molestias deserunt repudiandae enim, nisi labore fugiat ad itaque mollitia eveniet placeat ratione sequi numquam libero alias qui eaque, doloribus amet perspiciatis inventore perferendis tempore. Omnis maxime, illum rerum similique labore exercitationem veniam illo enim temporibus."
        ],

        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Franky S",
            "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit magni consequuntur quisquam eos accusantium, obcaecati unde, itaque pariatur voluptatibus odio necessitatibus magnam ex rerum excepturi commodi maxime eaque eveniet enim? Pariatur doloremque quam iste illo molestias eveniet reiciendis, accusantium amet deleniti autem excepturi assumenda voluptas quidem adipisci, optio aut, atque quos. Eos temporibus at placeat maxime ex, adipisci totam dolorum recusandae sed alias delectus voluptatum odio porro nihil assumenda sit veritatis error blanditiis ad. Rem fuga accusamus rerum quod harum!"
        ],
    ];


    return view('posts', [

        "title" => "Posts",
        "posts" => $blog_posts

    ]);
});


// Halaman single post

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Rahmad H",
            "body"      => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus ipsa sapiente ipsam accusamus quibusdam, nisi soluta incidunt error id architecto dolores libero eos nulla iure minima illo officiis cum, enim tempora laudantium. Illum repudiandae ullam totam recusandae, facere sit. Quis eveniet fuga odio natus cumque eum ex enim, perferendis culpa quas aut hic vero soluta voluptates doloremque a distinctio voluptatibus adipisci, aperiam nihil. Molestias deserunt repudiandae enim, nisi labore fugiat ad itaque mollitia eveniet placeat ratione sequi numquam libero alias qui eaque, doloribus amet perspiciatis inventore perferendis tempore. Omnis maxime, illum rerum similique labore exercitationem veniam illo enim temporibus."
        ],

        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Franky S",
            "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit magni consequuntur quisquam eos accusantium, obcaecati unde, itaque pariatur voluptatibus odio necessitatibus magnam ex rerum excepturi commodi maxime eaque eveniet enim? Pariatur doloremque quam iste illo molestias eveniet reiciendis, accusantium amet deleniti autem excepturi assumenda voluptas quidem adipisci, optio aut, atque quos. Eos temporibus at placeat maxime ex, adipisci totam dolorum recusandae sed alias delectus voluptatum odio porro nihil assumenda sit veritatis error blanditiis ad. Rem fuga accusamus rerum quod harum!"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {

        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post"  => $new_post
    ]);
});
