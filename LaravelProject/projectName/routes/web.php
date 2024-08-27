<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//homepage
Route::get('/homepage', function () {
    return view('homepage');
});

//content
Route::get('/content', function () {
    return view('content');
});

//about
Route::get('/about', function () {
    return view('about');
});
