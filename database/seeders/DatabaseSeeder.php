<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Thomas Ardiansah',
            'username' => 'Thomas Ardiansah',
            'email' => 'thomz161@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Bana Wijaya Saputra',
        //     'email' => 'bana@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero doloribus tempore eligendi. Itaque ducimus vel reprehenderit eum iste eveniet quisquam, in',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero doloribus tempore eligendi. Itaque ducimus vel reprehenderit eum iste eveniet quisquam, in sint dicta ex accusantium error perspiciatis fugit odio asperiores officiis sed incidunt soluta temporibus. Quam magni reprehenderit voluptatibus fugit corporis at repudiandae rem dolores ad enim aperiam perferendis cumque libero laborum possimus iusto ullam architecto molestias et consequuntur, perspiciatis incidunt? Dolore placeat sunt quae iure, quasi ipsam, magnam delectus blanditiis qui vitae ab deleniti voluptatibus similique! Enim earum quos dolorum tenetur fuga, voluptatum sit magni. Laudantium consequatur voluptas possimus maxime id eveniet illo repellendus iure dignissimos, totam consequuntur saepe.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero doloribus tempore eligendi. Itaque ducimus vel reprehenderit eum iste eveniet quisquam, in',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero doloribus tempore eligendi. Itaque ducimus vel reprehenderit eum iste eveniet quisquam, in sint dicta ex accusantium error perspiciatis fugit odio asperiores officiis sed incidunt soluta temporibus. Quam magni reprehenderit voluptatibus fugit corporis at repudiandae rem dolores ad enim aperiam perferendis cumque libero laborum possimus iusto ullam architecto molestias et consequuntur, perspiciatis incidunt? Dolore placeat sunt quae iure, quasi ipsam, magnam delectus blanditiis qui vitae ab deleniti voluptatibus similique! Enim earum quos dolorum tenetur fuga, voluptatum sit magni. Laudantium consequatur voluptas possimus maxime id eveniet illo repellendus iure dignissimos, totam consequuntur saepe.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero doloribus tempore eligendi. Itaque ducimus vel reprehenderit eum iste eveniet quisquam, in',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero doloribus tempore eligendi. Itaque ducimus vel reprehenderit eum iste eveniet quisquam, in sint dicta ex accusantium error perspiciatis fugit odio asperiores officiis sed incidunt soluta temporibus. Quam magni reprehenderit voluptatibus fugit corporis at repudiandae rem dolores ad enim aperiam perferendis cumque libero laborum possimus iusto ullam architecto molestias et consequuntur, perspiciatis incidunt? Dolore placeat sunt quae iure, quasi ipsam, magnam delectus blanditiis qui vitae ab deleniti voluptatibus similique! Enim earum quos dolorum tenetur fuga, voluptatum sit magni. Laudantium consequatur voluptas possimus maxime id eveniet illo repellendus iure dignissimos, totam consequuntur saepe.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

    }
}
