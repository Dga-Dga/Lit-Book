<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('static/home');
});

Route::get('/about', function () {
    return view('static/about');
});

Route::get('/contact', function () {
    return view('static/contact');
});

Route::get('/14', function () {
    return 'Hello, world';//view('welcome')
});


///для дальнейшей обработки уникальных цифровых значений после конкретной страницы
///типо 1 страница товара и тд
/*
Route::get('/post/{id}', function ($id) {
    return 'Result: '.$id;
});
Также можно будет указать сразу несколько параметров
Route::get('/post/{id}/{name}', function ($id, $name) {
    return 'Result 1: $id, res 2: $name';
});
*/

