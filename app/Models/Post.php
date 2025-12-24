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
                'author' => 'Ivriel Gunawan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe aperiam doloribus beatae blanditiis ducimus vero repellendus nesciunt quo',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Ivriel Gunawan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe aperiam doloribus beatae blanditiis ducimus vero repellendus nesciunt quo osasmksas  osas huvuveve',
            ],
        ];
    }

    public static function find($slug): array 
    {
        $post = Arr::first(static::all(),fn($post) => $post['slug'] == $slug);

        if(!$post) {
            abort(404);
        }

        return $post;

    }
}
