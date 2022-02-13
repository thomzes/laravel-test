<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // $fillable untuk memilih field mana yang bisa di isi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // $gaurded untuk hanya field yang di dalam $guarded, tidak bisa di isi
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        //     if(isset($filters['search']) ? $filters['search'] : false) {
        //     return  $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                   ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // menggunakan when() menggantikan if, dengan menggunakan collection yang kita puya
        //                              ini menggunakan null coalescing operator pada php 7
        $query->when($filters['search'] ?? false, function($query, $search) {
            return  $query->where('title', 'like', '%' . $search . '%')
                          ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
                                                                // menggunakan use () untuk menggunakan yang variable yang di dalam closure
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // $query->when($filters['author'] ?? false, function($query, $author) {
        //     return $query->whereHas('author', function($query) use ($author) {
        //         $query->where('username', $author);
        //     });
        // });

        // menggunakan arrow function php
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    // cara menghubungkan model post berelasi dengan Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {   
                                            //user_id ganti jadi alias dari author   
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
