<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Nauval Gunawan', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Nauval Gunawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum recusandae neque pariatur consectetur, unde error, tempore dolorum eius quasi explicabo, voluptatibus voluptates sapiente sit expedita harum iusto ducimus ad? Voluptatibus!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Nauval Gunawan',
            'body' => 'Lorem 2 ipsum dolor sit amet consectetur adipisicing elit. Eum recusandae neque pariatur consectetur, unde error, tempore dolorum eius quasi explicabo, voluptatibus voluptates sapiente sit expedita harum iusto ducimus ad? Voluptatibus!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Nauval Gunawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum recusandae neque pariatur consectetur, unde error, tempore dolorum eius quasi explicabo, voluptatibus voluptates sapiente sit expedita harum iusto ducimus ad? Voluptatibus!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Nauval Gunawan',
            'body' => 'Lorem 2 ipsum dolor sit amet consectetur adipisicing elit. Eum recusandae neque pariatur consectetur, unde error, tempore dolorum eius quasi explicabo, voluptatibus voluptates sapiente sit expedita harum iusto ducimus ad? Voluptatibus!'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
