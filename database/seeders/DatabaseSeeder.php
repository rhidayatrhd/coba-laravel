<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory(3)->create();

        // User::create([
        //     'name'  => 'Rahmad H',
        //     'email' => 'rahmadh118@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'  => 'Franky S',
        //     'email' => 'frankys@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);

        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title'  => 'Judul Pertama',
        //     'slug'   => 'judul-pertama',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim quaerat repellat corrupti.',
        //     'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim quaerat repellat corrupti. Iusto distinctio id quo animi aliquid molestiae laboriosam dolor ad inventore dignissimos sapiente corrupti, quis consequatur sit temporibus quaerat facilis itaque! Ad odit itaque ratione in cum minima nostrum sit aspernatur animi molestiae illum soluta exercitationem officia, architecto veniam debitis sapiente possimus? Dicta omnis aspernatur, architecto porro obcaecati odio unde deleniti dolores voluptates accusantium, ipsam, repudiandae aperiam voluptate officia et quo est possimus laudantium. Pariatur, fuga! Repellendus, maiores nobis. Recusandae ex odit tempore ipsum sint porro aspernatur, debitis, nam minima perspiciatis aliquam ratione earum, perferendis fuga ab dolorum qui ducimus dolor nisi? Officia, molestias esse?',
        //     'category_id'   => 1,
        //     'user_id'   => 1
        // ]);


        // Post::create([
        //     'title'  => 'Judul Kedua',
        //     'slug'   => 'judul-ke-dua',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim quaerat repellat corrupti.',
        //     'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim quaerat repellat corrupti. Iusto distinctio id quo animi aliquid molestiae laboriosam dolor ad inventore dignissimos sapiente corrupti, quis consequatur sit temporibus quaerat facilis itaque! Ad odit itaque ratione in cum minima nostrum sit aspernatur animi molestiae illum soluta exercitationem officia, architecto veniam debitis sapiente possimus? Dicta omnis aspernatur, architecto porro obcaecati odio unde deleniti dolores voluptates accusantium, ipsam, repudiandae aperiam voluptate officia et quo est possimus laudantium. Pariatur, fuga! Repellendus, maiores nobis. Recusandae ex odit tempore ipsum sint porro aspernatur, debitis, nam minima perspiciatis aliquam ratione earum, perferendis fuga ab dolorum qui ducimus dolor nisi? Officia, molestias esse?',
        //     'category_id'   => 1,
        //     'user_id'   => 1
        // ]);


        // Post::create([
        //     'title'  => 'Judul Ketiga',
        //     'slug'   => 'judul-ke-tiga',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim quaerat repellat corrupti.',
        //     'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim quaerat repellat corrupti. Iusto distinctio id quo animi aliquid molestiae laboriosam dolor ad inventore dignissimos sapiente corrupti, quis consequatur sit temporibus quaerat facilis itaque! Ad odit itaque ratione in cum minima nostrum sit aspernatur animi molestiae illum soluta exercitationem officia, architecto veniam debitis sapiente possimus? Dicta omnis aspernatur, architecto porro obcaecati odio unde deleniti dolores voluptates accusantium, ipsam, repudiandae aperiam voluptate officia et quo est possimus laudantium. Pariatur, fuga! Repellendus, maiores nobis. Recusandae ex odit tempore ipsum sint porro aspernatur, debitis, nam minima perspiciatis aliquam ratione earum, perferendis fuga ab dolorum qui ducimus dolor nisi? Officia, molestias esse?',
        //     'category_id'   => 2,
        //     'user_id'   => 1
        // ]);

        // Post::create([
        //     'title'  => 'Judul Keempat',
        //     'slug'   => 'judul-ke-empat',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim quaerat repellat corrupti.',
        //     'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim quaerat repellat corrupti. Iusto distinctio id quo animi aliquid molestiae laboriosam dolor ad inventore dignissimos sapiente corrupti, quis consequatur sit temporibus quaerat facilis itaque! Ad odit itaque ratione in cum minima nostrum sit aspernatur animi molestiae illum soluta exercitationem officia, architecto veniam debitis sapiente possimus? Dicta omnis aspernatur, architecto porro obcaecati odio unde deleniti dolores voluptates accusantium, ipsam, repudiandae aperiam voluptate officia et quo est possimus laudantium. Pariatur, fuga! Repellendus, maiores nobis. Recusandae ex odit tempore ipsum sint porro aspernatur, debitis, nam minima perspiciatis aliquam ratione earum, perferendis fuga ab dolorum qui ducimus dolor nisi? Officia, molestias esse?',
        //     'category_id'   => 2,
        //     'user_id'   => 2
        // ]);
    }
}
