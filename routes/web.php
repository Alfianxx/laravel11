<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Alfian',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perspiciiatis nihil, eligendi delectus ut doloremque excepturi ad numquam quae odit nisi neque molestiae ipsum assumenda, explicabo sit maiores facere voluptatum?',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Alfian',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, consectetur nisi debitis quasi rerum numquam necessitatibus! Recusandae libero enim natus? Voluptates officia officiis dolorem quasi, placeat voluptatum unde numquam rerum.',
            ]
        ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('about', function () {
    return view('about', ['nama' => 'Alfian', 'title' => 'About Page']);
});

Route::get('posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {

    $post = Arr::first(Post::all(), function ($posts) use ($slug) {
        return $posts['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('contact', function () {
    return view('contact', ['title' => 'Kontak']);
});
