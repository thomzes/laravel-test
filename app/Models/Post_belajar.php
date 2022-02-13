<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Thomas Ardiansah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum iure recusandae, dicta expedita perferendis voluptates, unde ex quo minus minima in nihil similique. Similique eveniet obcaecati, perspiciatis iure aliquid corrupti dolorem corporis ipsam, itaque qui consequuntur illum? Ad vero assumenda eos alias, dicta exercitationem perspiciatis adipisci deserunt, laborum repellat illo sit sequi consectetur distinctio facere sunt quaerat totam dolore quidem. Molestias voluptate laboriosam facere dolorum ab inventore, voluptatum aperiam, cupiditate doloribus similique tempora voluptates fuga at repudiandae recusandae. Veritatis, nostrum!"
        ],
        [
            "title" => "Judul Post Bana",
            "slug" => "judul-post-kedua",
            "author" => "Bana Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet doloribus tenetur quia, labore quae dolorum quis eos aliquid est totam, eum nisi enim recusandae consequatur earum nesciunt cupiditate! Corporis temporibus fugiat inventore! Obcaecati perferendis odio repellat, dicta accusantium tempore excepturi delectus incidunt optio illum quaerat commodi porro quidem consequatur magnam deserunt, amet sunt voluptatem nam, hic nisi autem! Neque temporibus, tempora porro soluta id quasi corporis quas non fugiat quidem perspiciatis, fuga molestiae iusto veritatis delectus. Accusamus obcaecati quaerat dolores, esse distinctio labore, quidem similique quisquam accusantium aliquid vitae, nemo suscipit aut harum voluptates exercitationem nulla alias necessitatibus consequatur. Odio!"
        ]
    ];

    public static function all()
    {
        // menggunakan self karna properti static
        return collect(self::$blog_posts); 
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);

    }

}
