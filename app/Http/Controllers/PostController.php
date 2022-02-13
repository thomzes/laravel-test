<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' In ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // "posts" => Post::all()
            // eager loading menggunakan with([]) di dalam PostController

            // menggunakan request([]) atau array, karna nantinya akan dipakai untuk mencari author dan category
                                                                                        // pagination di laravel
            "posts" => Post::latest()->Filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }

}
