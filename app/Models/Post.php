<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
