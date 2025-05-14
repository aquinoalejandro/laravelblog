<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return "Aqui se mostraran los posts";
});

Route::get('posts/create', function () {   
    return "Aqui se mostrara un formulario para crear un post" ;
});

Route::get('posts/{post}', function ($post) {   
    return "Aqui se mostrara el post: " . $post ;
});


