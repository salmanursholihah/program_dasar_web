<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// html file
Route::get('/html', function () {
    return view('program_web_dasar.html_dasar');
});

// semantic
Route::get('/semantic', function () {
    return view('program_web_dasar.semantic_html');
});

// media
Route::get('/media', function () {
    return view('program_web_dasar.media_html');
});

// media
Route::get('/tableform', function () {
    return view('program_web_dasar.table_dan_form');
});
