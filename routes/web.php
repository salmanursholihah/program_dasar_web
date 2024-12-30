<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/html', function () {
    return view('program_web_dasar.html_dasar');
});

Route::get('/semantic', function () {
    return view('program_web_dasar.semantic_html');
});
