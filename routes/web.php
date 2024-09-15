<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Dzaky Ahnaf', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Dzaky Ahnaf',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nisi voluptas doloribus, sequi nostrum, placeat asperiores nihil quisquam harum neque ullam sit quidem, provident nam quod numquam! Modi, architecto eaque!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dzaky Ahnaf',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, illum excepturi labore eius, possimus at quaerat consectetur amet, minus fugiat dolore? Quod nulla magni similique iure quia exercitationem reprehenderit voluptatem!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Dzaky Ahnaf',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nisi voluptas doloribus, sequi nostrum, placeat asperiores nihil quisquam harum neque ullam sit quidem, provident nam quod numquam! Modi, architecto eaque!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dzaky Ahnaf',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, illum excepturi labore eius, possimus at quaerat consectetur amet, minus fugiat dolore? Quod nulla magni similique iure quia exercitationem reprehenderit voluptatem!'
        ]
        ];

        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});