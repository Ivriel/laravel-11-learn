<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Ivriel Gunawan',
        'title' => 'About',
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
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
        ],
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post,
    ]);
});
