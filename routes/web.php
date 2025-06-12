<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function() {
    return view('posts.create');
});

Route::post('/save', function() {
    $data = Request::only('title');
    App\Models\Post::create($data);
});