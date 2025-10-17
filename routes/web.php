<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('about', function () {
    return view('about', ['nama' => 'Alfian', 'title' => 'About Page']);
});

Route::get('posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Alfian',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perspiciiatis nihil, eligendi delectus ut doloremque excepturi ad numquam quae odit nisi neque molestiae ipsum assumenda, explicabo sit maiores facere voluptatum?',
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Alfian',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, consectetur nisi debitis quasi rerum numquam necessitatibus! Recusandae libero enim natus? Voluptates officia officiis dolorem quasi, placeat voluptatum unde numquam rerum.',
        ]
    ]]);
});

Route::get('contact', function () {
    return view('contact', ['title' => 'Kontak']);
});


